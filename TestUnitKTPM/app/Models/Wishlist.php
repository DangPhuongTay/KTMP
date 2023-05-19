<?php
namespace App\Models;
class Wishlist{
    protected $Wishlist;
    public function setUser_id($use_id){
        $this->Wishlist=$use_id;
    }
    public function getUser_id(){
       return $this->Wishlist;
    }
    public function setPid($pid){
        $this->Wishlist=$pid;
    }
    public function getPid(){
       return $this->Wishlist;
    }
    public function setName($name){
        $this->Wishlist=$name;
    }
    public function getName(){
       return $this->Wishlist;
    }
    public function setPrice($price){
        $this->Wishlist=$price;
    }
    public function getPrice(){
       return $this->Wishlist;
    }
    public function setImage($image){
        $this->Wishlist=$image;
    }
    public function getImage(){
       return $this->Wishlist;
    }
    public function setInfoWishlist($use_id,$pid,$name,$price,$image){
        $this->Wishlist=$use_id;
        $this->WishlistPid=$pid;
        $this->WishlistName=$name;
        $this->WishlistPrice=$price;
        $this->WishlistImage=$image;
    }
    
    public function getInfoWishlist(){
       return [$this->Wishlist, $this->WishlistPid,$this->WishlistName,$this->WishlistPrice,$this->WishlistImage];
    }
   
    public function setDeleteWishlist($use_id,$name){
        $this->Wishlist=$use_id;
        $this->WishlistName=$name;
    }
    
    public function getDeleteWishlist(){
       return [$this->Wishlist,$this->WishlistName];
    }
}