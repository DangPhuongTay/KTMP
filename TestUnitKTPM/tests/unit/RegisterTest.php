<?php

use PHPUnit\Framework\TestCase;

class RegisterTest extends TestCase
{
    protected $register;
    public function setUp():void{
       $this->register = new \App\Models\Register;
    }
    public function testGetUserName():void
    {
        $this->register->setName('TayDang');
        $this->assertEquals( $this->register->getName(),'TayDang');
    }  
    public function testGetUserEmail():void
    {
        $this->register->setEmail('TayDang1211@gmail.com');
        $this->assertEquals( $this->register->getEmail(),'TayDang1211@gmail.com');
    }  
    public function testGetUserPassword():void
    {
        $this->register->setPassword('123456789');
        $this->assertEquals( $this->register->getPassword(),'123456789');
    }
    public function testGetConfirmPassword():void
    {
        $this->register->setPassword('123456789');
        $this->assertEquals( $this->register->getPassword(),'123456789');
    }  
    public function testGetUserInfoUser():void
    {
        $this->register->setRegister('TayDang','TayDang1211@gmail.com','123456789','123456789');
        $this->assertEquals($this->register ->getRegister(),['TayDang','TayDang1211@gmail.com','123456789','123456789']);
        $this->assertArrayHasKey(3,$this->register->getRegister());
    }  
}