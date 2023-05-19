<?php

use PHPUnit\Framework\TestCase;

class UpdatePasswordTest extends TestCase
{
    protected $UpdatePassword;
    public function setUp():void{
       $this->UpdatePassword = new \App\Models\User;
    }
    public function testGetUserName():void
    {
        $this->UpdatePassword->setName('TayDang');
        $this->assertEquals( $this->UpdatePassword->getName(),'TayDang');
    }  
    public function testGetOldPassword():void
    {
        $this->UpdatePassword->setOldPassword('matkhaucu');
        $this->assertEquals( $this->UpdatePassword->getOldPassword(),'matkhaucu');
    }
    public function testGetNewPassword():void
    {
        $this->UpdatePassword->setNewPassword('matkhaumoi');
        $this->assertEquals( $this->UpdatePassword->getNewPassword(),'matkhaumoi');
    }
    public function testGetConfirmNewPassword():void
    {
        $this->UpdatePassword->setConfirmNewPassword('matkhaumoi');
        $this->assertEquals( $this->UpdatePassword->getConfirmNewPassword(),'matkhaumoi');
    }  
    public function testGetUpdatePassword():void
    {
        $this->UpdatePassword->setUpdatePassword('TayDang','matkhaucu','matkhaumoi','matkhaumoi');
        $this->assertEquals($this->UpdatePassword ->getUpdatePassword(),['TayDang','matkhaucu','matkhaumoi','matkhaumoi']);
        $this->assertArrayHasKey(3,$this->UpdatePassword->getUpdatePassword());
    }  
}