<?php

use PHPUnit\Framework\TestCase;

class MessageTest extends TestCase
{
    protected $message;
    public function setUp():void{
       $this->message = new \App\Models\Message;
    }
    public function testGetUser_id():void
    {
        $this->message->setUser_id("2");
        $this->assertEquals( $this->message->getUser_id(),"2");
    } 
    public function testGetName():void
    {
        $this->message->setName('TayDang');
        $this->assertEquals( $this->message->getName(),'TayDang');
    }  
    public function testGetEmail():void
    {
        $this->message->setEmail('TayDang1211@gmail.com');
        $this->assertEquals( $this->message->getEmail(),'TayDang1211@gmail.com');
    }  
    public function testGetNumber():void
    {
        $this->message->setNumber("123456789");
        $this->assertEquals( $this->message->getNumber(),"123456789");
    }
    public function testGetMessage():void
    {
        $this->message->setMessage('Hello World');
        $this->assertEquals( $this->message->getMessage(),'Hello World');
    }  
    public function testGetInfoMessage():void
    {
        $this->message->setInfoMessage('2','TayDang','TayDang1211@gmail.com','123456789','Hello World');
        $this->assertEquals($this->message ->getInfoMessage(),['2','TayDang','TayDang1211@gmail.com','123456789','Hello World']);
        $this->assertArrayHasKey(4,$this->message->getInfoMessage());
    }  
}