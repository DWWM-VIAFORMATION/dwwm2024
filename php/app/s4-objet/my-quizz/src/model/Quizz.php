<?php
namespace App\MyQuizz;
class Quizz
{
    private string $_title;
    private QuestionCollection $_questions;
    public function __construct(string $title = 'No title choosen') {
        $this->_title = $title;
        $this->_questions = new QuestionCollection();
    }
    public function getTitle():string
    {
        return $this->_title;
    }
    public function getQuestions():QuestionCollection
    {
        return $this->_questions;
    }
    public function addQuestion(Question $question)
    {
        $this->_questions[]=$question;
    }
    public static function create($pJsonObject):Quizz
    {
        var_dump($pJsonObject);
        $quizz = new Quizz($pJsonObject['title']);
        foreach ($pJsonObject['questions'] as $key=>$value)
        {
            $question = new Question($value['text']);
            foreach($value['responses'] as $key=>$valueResponse)
            {
                $response = new Response($valueResponse['text'],$valueResponse['isValid']);
                $question->addResponse($response);
            }
            $quizz->addQuestion($question);
        }
        return $quizz;
    }
}