<?php
class Question implements IEchoable
{
    use Jsonable;
    public string $_text;
    public function __construct(string $text = 'No text choosen') {
        $this->_text = $text;
    }
    public function getText():string
    {
        return $this->_text;
    }
    public function echo()
    {
        echo "echo:".$this->_text;
    }

}