<?php

use PHPUnit\Framework\TestCase;

class DeleteProductTest extends TestCase
{
    protected $deleteProduct;
    public function setUp():void{
       $this->deleteProduct = new \App\Models\DeleteProduct;
    }
    public function testGetId():void
    {
        $this->deleteProduct->setId(1);
        $this->assertEquals( $this->deleteProduct->getId(),1);
    }  
    public function testGetUnlinkImg1():void
    {
        $this->deleteProduct->setUnlinkImg1("iphone-14-pro-max-1.webp");
        $this->assertEquals( $this->deleteProduct->getUnlinkImg1(),"iphone-14-pro-max-1.webp");
    }
    public function testGetUnlinkImg2():void
    {
        $this->deleteProduct->setUnlinkImg2("iphone-14-pro-max-2.webp");
        $this->assertEquals( $this->deleteProduct->getUnlinkImg2(),"iphone-14-pro-max-2.webp");
    }  
    public function testGetUnlinkImg3():void
    {
        $this->deleteProduct->setUnlinkImg3("iphone-14-pro-max-3.webp");
        $this->assertEquals( $this->deleteProduct->getUnlinkImg3(),"iphone-14-pro-max-3.webp");
    }    
    public function testGetDeleteProduct():void
    {
        $this->deleteProduct->setdeleteProduct(1,"iphone-14-pro-max-1.webp","iphone-14-pro-max-2.webp","iphone-14-pro-max-3.webp");
        $this->assertEquals($this->deleteProduct ->getdeleteProduct(),[1,"iphone-14-pro-max-1.webp","iphone-14-pro-max-2.webp","iphone-14-pro-max-3.webp"]);
        $this->assertArrayHasKey(3,$this->deleteProduct->getdeleteProduct());
    }  
}