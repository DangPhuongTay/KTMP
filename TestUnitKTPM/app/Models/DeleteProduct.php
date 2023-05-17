<?php
namespace App\Models;
class DeleteProduct{
    protected $deleteProduct;

    public function setId($id){
        $this->deleteProduct=$id;
    }
    public function getId(){
       return $this->deleteProduct;
    }
    public function setUnlinkImg1($unlinkimg1){
        $this->deleteProduct=$unlinkimg1;
    }
    public function getUnlinkImg1(){
       return $this->deleteProduct;
    }
    public function setUnlinkImg2($unlinkimg2){
        $this->deleteProduct=$unlinkimg2;
    }
    public function getUnlinkImg2(){
       return $this->deleteProduct;
    }
    public function setUnlinkImg3($unlinkimg3){
        $this->deleteProduct=$unlinkimg3;
    }
    public function getUnlinkImg3(){
       return $this->deleteProduct;
    }
    public function setdeleteProduct($id,$unlinkimg1,$unlinkimg2,$unlinkimg3){
        $this->deleteProduct=$id;
        $this->unlinkImg1=$unlinkimg1;
        $this->unlinkImg2=$unlinkimg2;
        $this->unlinkImg3=$unlinkimg3;
    }
    public function getdeleteProduct(){
       return [$this->deleteProduct,$this->unlinkImg1,$this->unlinkImg2,$this->unlinkImg3];
    }
}