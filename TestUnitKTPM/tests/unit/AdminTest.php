<?php

use PHPUnit\Framework\TestCase;

class AdminTest extends TestCase
{
    protected $admin;
    public function setUp():void{
       $this->admin = new \App\Models\Admin;
    }
    public function testGetAdminName():void
    {
        $this->admin->setName('TayDang');
        $this->assertEquals( $this->admin->getName(),'TayDang');
    }
    public function testGetAdminPassword():void
    {
        $this->admin->setPassword('123456789');
        $this->assertEquals( $this->admin->getPassword(),'123456789');
    }  
    public function testGetInfoAdmin():void
    {
        $this->admin->setInfoAdmin('TayDang','123456789');
        $this->assertEquals($this->admin ->getInfoAdmin(),['TayDang','123456789']);
        $this->assertArrayHasKey(1,$this->admin->getInfoAdmin());
        
    }  
}