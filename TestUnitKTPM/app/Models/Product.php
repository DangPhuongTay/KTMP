<?php
namespace App\Models;
class Product{
    protected $product;
    public function setId($id){
        $this->product=$id;
    }
    public function getId(){
       return $this->product;
    }
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
       return [$this->product,
               $this->productDetail,
               $this->productPrice,
               $this->productImage_01,$this->productImage_02,$this->productImage_03];
    }
    public function setUnlinkImg1($unlinkimg1){
        $this->product=$unlinkimg1;
    }
    public function getUnlinkImg1(){
       return $this->product;
    }
    public function setUnlinkImg2($unlinkimg2){
        $this->product=$unlinkimg2;
    }
    public function getUnlinkImg2(){
       return $this->product;
    }
    public function setUnlinkImg3($unlinkimg3){
        $this->product=$unlinkimg3;
    }
    public function getUnlinkImg3(){
       return $this->product;
    }
    public function setdeleteProduct($id,$unlinkimg1,$unlinkimg2,$unlinkimg3){
        $this->product=$id;
        $this->unlinkImg1=$unlinkimg1;
        $this->unlinkImg2=$unlinkimg2;
        $this->unlinkImg3=$unlinkimg3;
    }
    public function getdeleteProduct(){
       return [$this->product,$this->unlinkImg1,$this->unlinkImg2,$this->unlinkImg3];
    }
 
    public function setUpdateProduct($id,$name,$details,$price,$image_01,$image_02,$image_03){
        $this->product=$id;
        $this->productName=$name;
        $this->productDetail=$details;
        $this->productPrice=$price;
        $this->productImage_01=$image_01;
        $this->productImage_02=$image_02;
        $this->productImage_03=$image_03;
    }
    public function getUpdateProduct(){
       return [$this->product, $this->productName, $this->productDetail,$this->productPrice,$this->productImage_01,$this->productImage_02,$this->productImage_03];
    }
}