<?php
use PHPUnit\Framework\TestCase;
use App\MyQuizz\Question as Question;
class QuestionTest extends TestCase
{
    public function test_1()
    {
        $question = new Question();
        $this->assertSame('No text choosen', $question->getText());
    }
    public function test_2()
    {
        $question = new Question('What is a Constructor?');
        $this->assertSame('What is a Constructor?', $question->getText());
    }

}
