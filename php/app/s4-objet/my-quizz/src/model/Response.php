<?php
namespace App\MyQuizz;
class Response
{
    private string $_text;
    private bool $_isValid;
    public function __construct(string $text = 'No text choosen',bool $isValid = true) {
        $this->_text = $text;
        $this->_isValid = $isValid;
    }
    public function getText():string
    {
        return $this->_text;
    }
    public function isValid():bool
    {
        return $this->_isValid;
    }
}