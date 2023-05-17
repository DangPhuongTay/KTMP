<?php
namespace App\Models;
class Product{
    protected $product;
    public function setName($name){
        $this->product=$name;
    }
    public function getName(){
       return $this->product;
    }
    public function setDetails($details){
        $this->product=$details;
    }
    public function getDetails(){
       return $this->product;
    }
    public function setPrice($price){
        $this->product=$price;
    }
    public function getPrice(){
       return $this->product;
    }
    public function setImage_01($image_01){
        $this->product=$image_01;
    }
    public function getImage_01(){
       return $this->product;
    }
    public function setImage_02($image_02){
        $this->product=$image_02;
    }
    public function getImage_02(){
       return $this->product;
    }
    public function setImage_03($image_03){
        $this->product=$image_03;
    }
    public function getImage_03(){
       return $this->product;
    }
    public function setInfoProduct($name,$details,$price,$image_01,$image_02,$image_03){
        $this->product=$name;
        $this->productDetail=$details;
        $this->productPrice=$price;
        $this->productImage_01=$image_01;
        $this->productImage_02=$image_02;
        $this->productImage_03=$image_03;
    }
    public function getInfoProduct(){
       return [$this->product, $this->productDetail,$this->productPrice,$this->productImage_01,$this->productImage_02,$this->productImage_03];
    }
}