<?php

use PHPUnit\Framework\TestCase;

class DeleteWishlistTest extends TestCase
{
  protected $Wishlist;
    public function setUp():void{
       $this->Wishlist = new \App\Models\DeleteWishlist;
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
    public function testGetDeleteWishlist():void
    {
        $this->Wishlist->setDeleteWishlist('2','Iphone 14 Pro Max');
        $this->assertEquals($this->Wishlist ->getDeleteWishlist(),['2','Iphone 14 Pro Max']);
        $this->assertArrayHasKey(1,$this->Wishlist->getDeleteWishlist());
    }  
}