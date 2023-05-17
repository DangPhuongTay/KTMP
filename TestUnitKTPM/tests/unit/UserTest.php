<?php

use PHPUnit\Framework\TestCase;

class UserTest extends TestCase
{
    protected $user;
    public function setUp():void{
       $this->user = new \App\Models\User;
    }
    public function testGetUserName():void
    {
        $this->user->setName('TayDang');
        $this->assertEquals( $this->user->getName(),'TayDang');
    }  
    public function testGetUserEmail():void
    {
        $this->user->setEmail('TayDang1211@gmail.com');
        $this->assertEquals( $this->user->getEmail(),'TayDang1211@gmail.com');
    }  
    public function testGetUserPassword():void
    {
        $this->user->setPassword(123456789);
        $this->assertEquals( $this->user->getPassword(),123456789);
    }  
    public function testGetUserInfoUser():void
    {
        $this->user->setInfoUser('TayDang','TayDang1211@gmail.com',123456789);
        $this->assertEquals($this->user ->getInfoUser(),['TayDang','TayDang1211@gmail.com',123456789]);
        $this->assertArrayHasKey(2,$this->user->getInfoUser());
    }  
}