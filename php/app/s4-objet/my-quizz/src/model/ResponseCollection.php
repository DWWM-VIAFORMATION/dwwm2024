<?php
namespace App\MyQuizz;
class ResponseCollection implements  \ArrayAccess, \Countable, \Iterator
{
    private $_values = [];
    private int $_position = 0;
    /**
     * This constructor is there in order to be able to create a collection with
     * its values already added
     */
    public function __construct()
    {
        $this->_values = [];
    }
    public function count():int
    {
        return count($this->_values);
    }
    /**
     * Implementation of method declared in \ArrayAccess
     * Used to be able to use functions like isset()
     */
    public function offsetExists($offset):bool
    {
        return isset($this->_values[$offset]);
    }

    /**
     * Implementation of method declared in \ArrayAccess
     * Used for direct access array-like ($collection[$offset]);
     */
    public function offsetGet($offset):Response
    {
        return $this->_values[$offset];
    }

    /**
     * Implementation of method declared in \ArrayAccess
     * Used for direct setting of values
     */
    public function offsetSet($offset, $value):void
    {
        if (!($value instanceof Response)){
            throw new \InvalidArgumentException("Must be a response");
        }

        if (empty($offset)) { //this happens when you do $collection[] = 1;
            $this->_values[] = $value;
        } else {
            $this->_values[$offset] = $value;
        }
    }

    /**
     * Implementation of method declared in \ArrayAccess
     * Used for unset()
     */
    public function offsetUnset($offset):void
    {
        unset($this->_values[$offset]);
    }
    /**
     * Implementation of method declared in \Iterator
     * Resets the internal cursor to the beginning of the array
     */
    public function rewind():void
    {
        $this->_position = 0;
    }

    /**
     * Implementation of method declared in \Iterator
     * Used to get the current key (as for instance in a foreach()-structure
     */
    public function key():int
    {
        return $this->_position;
    }

    /**
     * Implementation of method declared in \Iterator
     * Used to get the value at the current cursor position
     */
    public function current():Response
    {
        return $this->_values[$this->_position];
    }

    /**
     * Implementation of method declared in \Iterator
     * Used to move the cursor to the next position
     */
    public function next():void
    {
        $this->_position++;
    }

    /**
     * Implementation of method declared in \Iterator
     * Checks if the current cursor position is valid
     */
    public function valid():bool
    {
        return isset($this->_values[$this->_position]);
    }
}