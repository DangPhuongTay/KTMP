<?php
namespace App\Models;
class Cart{
    protected $Cart;
    public function setUser_id($use_id){
        $this->Cart=$use_id;
    }
    public function getUser_id(){
       return $this->Cart;
    }
    public function setPid($pid){
        $this->Cart=$pid;
    }
    public function getPid(){
       return $this->Cart;
    }
    public function setName($name){
        $this->Cart=$name;
    }
    public function getName(){
       return $this->Cart;
    }
    public function setPrice($price){
        $this->Cart=$price;
    }
    public function getPrice(){
       return $this->Cart;
    }
    public function setQuantity($quantity){
        $this->Cart=$quantity;
    }
    public function getQuantity(){
       return $this->Cart;
    }
    public function setImage($image){
        $this->Cart=$image;
    }
    public function getImage(){
       return $this->Cart;
    }
    public function setInfoCart($use_id,$pid,$name,$price,$quantity,$image){
        $this->Cart=$use_id;
        $this->CartPid=$pid;
        $this->CartName=$name;
        $this->CartPrice=$price;
        $this->CartQuantity=$quantity;
        $this->CartImage=$image;
    }
    
    public function getInfoCart(){
       return [$this->Cart, $this->CartPid,$this->CartName,$this->CartPrice,$this->CartQuantity,$this->CartImage];
    }
}