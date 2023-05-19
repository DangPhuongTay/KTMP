<?php

use PHPUnit\Framework\TestCase;

class UpdateWishlistTest extends TestCase
{
  protected $Wishlist;
    public function setUp():void{
       $this->Wishlist = new \App\Models\Wishlist;
    }
    public function testGetWishlistName():void
    {
        $this->Wishlist->setName('Iphone 14 Pro Max');
        $this->assertEquals( $this->Wishlist->getName(),'Iphone 14 Pro Max');
    }  
    public function testGetWishlistUser_id():void
    {
        $this->Wishlist->setUser_id("2");
        $this->assertEquals( $this->Wishlist->getUser_id(),"2");
    }  
    public function testGetWishlistPrice():void
    {
        $this->Wishlist->setPrice("290000");
        $this->assertEquals( $this->Wishlist->getPrice(),"290000");
    }
    public function testGetWishlistPid():void
    {
        $this->Wishlist->setPid("2");
        $this->assertEquals( $this->Wishlist->getPid(),"2");
    }

    public function testGetWishlistImage():void
    {
        $this->Wishlist->setImage("iphone-14-pro-max-1.webp");
        $this->assertEquals( $this->Wishlist->getImage(),"iphone-14-pro-max-1.webp");
    }  
    public function testGetWishlistInfoWishlist():void
    {
        $this->Wishlist->setInfoWishlist('2','2','Iphone 14 Pro Max','290000',"iphone-14-pro-max-1.webp");
        $this->assertEquals($this->Wishlist ->getInfoWishlist(),['2','2','Iphone 14 Pro Max','290000',"iphone-14-pro-max-1.webp"]);
        $this->assertArrayHasKey(4,$this->Wishlist->getInfoWishlist());
    }  
}