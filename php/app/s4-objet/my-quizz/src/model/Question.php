<?php
namespace App\MyQuizz;
class Question
{
    private string $_text;
    private ResponseCollection $_reponses;
    public function __construct(string $text = 'No text choosen') {
        $this->_text = $text;
        $this->_reponses = new ResponseCollection();
    }
    public function getText():string
    {
        return $this->_text;
    }
    public function getResponses():ResponseCollection
    {
        return $this->_reponses;
    }
    public function addResponse(Response $response)
    {
        $this->_reponses[]=$response;
    }
}