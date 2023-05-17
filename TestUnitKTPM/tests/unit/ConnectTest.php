<?php

use PHPUnit\Framework\TestCase;

class ConnectTest extends TestCase
{
    protected $connect;
    public function setUp():void{
       $this->connect = new \App\Models\Connect;
    }
    public function testGetDbName():void
    {
        $this->connect->setdbName('mysql:host=localhost;dbname=shop_db');
        $this->assertEquals( $this->connect->getdbName(),'mysql:host=localhost;dbname=shop_db');
    }  
    public function testGetUserName():void
    {
        $this->connect->setUserName('root');
        $this->assertEquals( $this->connect->getUserName(),'root');
    }  
    public function testGetUserPassword():void
    {
        $this->connect->setPassword('');
        $this->assertEquals( $this->connect->getPassword(),'');
    }  
    public function testGetConnect():void
    {
        $this->connect->setConnect('mysql:host=localhost;dbname=shop_db','root','');
        $this->assertEquals($this->connect ->getConnect(),['mysql:host=localhost;dbname=shop_db','root','']);
        $this->assertArrayHasKey(2,$this->connect->getConnect());
    }  
}