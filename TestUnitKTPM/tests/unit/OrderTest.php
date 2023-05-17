<?php

use PHPUnit\Framework\TestCase;

class OrderTest extends TestCase
{
  protected $Order;
    public function setUp():void{
       $this->Order = new \App\Models\Order;
    }
    public function testGetOrderUser_id():void
    {
        $this->Order->setUser_id("2");
        $this->assertEquals( $this->Order->getUser_id(),"2");
    } 
    public function testGetOrderName():void
    {
        $this->Order->setName('Đặng Phương Tây');
        $this->assertEquals( $this->Order->getName(),'Đặng Phương Tây');
    }  
    
    public function testGetOrderNumber():void
    {
        $this->Order->setNumber("022");
        $this->assertEquals( $this->Order->getNumber(),"022");
    }  
    public function testGetOrderEmail():void
    {
        $this->Order->setEmail("taydang88@gmail.com");
        $this->assertEquals( $this->Order->getEmail(),"taydang88@gmail.com");
    }  
    public function testGetOrderMethod():void
    {
        $this->Order->setMethod("cash on delivery");
        $this->assertEquals( $this->Order->getMethod(),"cash on delivery");
    }  
   
    public function testGetOrderAddress():void
    {
        $this->Order->setAddress("1 Đường Phù Đổng Thiên Vương, Phường 8, TP Đà Lạt");
        $this->assertEquals( $this->Order->getAddress(),"1 Đường Phù Đổng Thiên Vương, Phường 8, TP Đà Lạt");
    }  
    public function testGetOrderTotal_products():void
    {
        $this->Order->setTotal_products("2");
        $this->assertEquals( $this->Order->getTotal_products(),"2");
    }  
    public function testGetOrderTotal_price():void
    {
        $this->Order->setTotal_price("50000000");
        $this->assertEquals( $this->Order->getTotal_price(),"50000000");
    }  
    public function testGetOrderPlaced_on():void
    {
        $this->Order->setPlaced_on("2023-04-15");
        $this->assertEquals( $this->Order->getPlaced_on(),"2023-04-15");
    }  
    public function testGetOrderPayment_status():void
    {
        $this->Order->setPayment_status("completed");
        $this->assertEquals( $this->Order->getPayment_status(),"completed");
    }  
    public function testGetOrderInfoOrder():void
    {
        $this->Order->setInfoOrder('2','Đặng Phương Tây','022','taydang88@gmail.com','cash on delivery','1 Đường Phù Đổng Thiên Vương, Phường 8, TP Đà Lạt','2','50000000','2023-04-15','completed');
        $this->assertEquals($this->Order ->getInfoOrder(),['2','Đặng Phương Tây','022','taydang88@gmail.com','cash on delivery','1 Đường Phù Đổng Thiên Vương, Phường 8, TP Đà Lạt','2','50000000','2023-04-15','completed']);
        $this->assertArrayHasKey(9,$this->Order->getInfoOrder());
    }  
}