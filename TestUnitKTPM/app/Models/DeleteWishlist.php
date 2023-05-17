<?php
namespace App\Models;
class DeleteWishlist{
    protected $deleteWishlist;
    public function setUser_id($use_id){
        $this->deleteWishlist=$use_id;
    }
    public function getUser_id(){
       return $this->deleteWishlist;
    }
    public function setName($name){
        $this->deleteWishlist=$name;
    }
    public function getName(){
       return $this->deleteWishlist;
    }
    public function setDeleteWishlist($use_id,$name){
        $this->Wishlist=$use_id;
        $this->WishlistName=$name;
    }
    
    public function getDeleteWishlist(){
       return [$this->Wishlist,$this->WishlistName];
    }
}