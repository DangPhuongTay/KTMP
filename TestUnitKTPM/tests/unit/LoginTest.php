<?php

use PHPUnit\Framework\TestCase;

class LoginTest extends TestCase
{
    protected $login;
    public function setUp():void{
       $this->login = new \App\Models\User;
    }
 
    public function testGetUserEmail():void
    {
        $this->login->setEmail('TayDang1211@gmail.com');
        $this->assertEquals( $this->login->getEmail(),'TayDang1211@gmail.com');
    }  
    public function testGetUserPassword():void
    {
        $this->login->setPassword(123456789);
        $this->assertEquals( $this->login->getPassword(),123456789);
    }  
    public function testGetLogin():void
    {
        $this->login->setLogin('TayDang1211@gmail.com',123456789);
        $this->assertEquals($this->login ->getLogin(),['TayDang1211@gmail.com',123456789]);
        $this->assertArrayHasKey(1,$this->login->getLogin());
    }  
}