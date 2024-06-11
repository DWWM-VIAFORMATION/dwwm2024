<?php
use PHPUnit\Framework\TestCase;
use App\MyQuizz\Response as Response;
use App\MyQuizz\Question as Question;
class ResponseTest extends TestCase
{
    public function test_1()
    {
        $response = new Response();
        $this->assertSame('No text choosen', $response->getText());
        $this->assertSame(true, $response->isValid());
    }
    public function test_2()
    {
        $response = new Response('its a methode',true);
        $this->assertSame('its a methode', $response->getText());
        $this->assertSame(true, $response->isValid());
    }
    public function test_3()
    {
        $response = new Response('its an attribute',false);
        $this->assertSame('its an attribute', $response->getText());
        $this->assertSame(false, $response->isValid());
    }
    public function test_4()
    {
        $question = new Question('What is a Constructor?');
        $question->addResponse(new Response('its an attribute',false));
        $question->addResponse(new Response('its a method',true));
        $this->assertSame(2, $question->getResponses()->count());
    }

}
