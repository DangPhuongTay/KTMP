<?php

use PHPUnit\Framework\TestCase;

class CartTest extends TestCase
{
  protected $Cart;
    public function setUp():void{
       $this->Cart = new \App\Models\Cart;
    }
    public function testGetCartName():void
    {
        $this->Cart->setName('Iphone 14 Pro Max');
        $this->assertEquals( $this->Cart->getName(),'Iphone 14 Pro Max');
    }  
    public function testGetCartUser_id():void
    {
        $this->Cart->setUser_id("2");
        $this->assertEquals( $this->Cart->getUser_id(),"2");
    }  
    public function testGetCartPrice():void
    {
        $this->Cart->setPrice("290000");
        $this->assertEquals( $this->Cart->getPrice(),"290000");
    }
    public function testGetCartPid():void
    {
        $this->Cart->setPid("2");
        $this->assertEquals( $this->Cart->getPid(),"2");
    }
    public function testGetCartQuantity():void
    {
        $this->Cart->setQuantity("2");
        $this->assertEquals( $this->Cart->getQuantity(),"2");
    }  
   
    public function testGetCartImage():void
    {
        $this->Cart->setImage("iphone-14-pro-max-1.webp");
        $this->assertEquals( $this->Cart->getImage(),"iphone-14-pro-max-1.webp");
    }  
    public function testGetCartInfoCart():void
    {
        $this->Cart->setInfoCart('2','2','Iphone 14 Pro Max','290000','2',"iphone-14-pro-max-1.webp");
        $this->assertEquals($this->Cart ->getInfoCart(),['2','2','Iphone 14 Pro Max','290000','2',"iphone-14-pro-max-1.webp"]);
        $this->assertArrayHasKey(5,$this->Cart->getInfoCart());
    }  
}