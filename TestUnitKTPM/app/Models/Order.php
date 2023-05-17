<?php
namespace App\Models;
class Order{
    protected $Order;
    public function setUser_id($use_id){
        $this->Order=$use_id;
    }
    public function getUser_id(){
       return $this->Order;
    }
    public function setName($name){
        $this->Order=$name;
    }
    public function getName(){
       return $this->Order;
    }
    public function setNumber($number){
        $this->Order=$number;
    }
    public function getNumber(){
       return $this->Order;
    }
    public function setEmail($email){
        $this->Order=$email;
    }
    public function getEmail(){
       return $this->Order;
    }
    public function setMethod($method){
        $this->Order=$method;
    }
    public function getMethod(){
       return $this->Order;
    }
    public function setAddress($address){
        $this->Order=$address;
    }
    public function getAddress(){
       return $this->Order;
    }
    public function setTotal_products($total_products){
        $this->Order=$total_products;
    }
    public function getTotal_products(){
       return $this->Order;
    }
    public function setTotal_price($total_price){
        $this->Order=$total_price;
    }
    public function getTotal_price(){
       return $this->Order;
    }
    public function setPlaced_on($placed_on){
        $this->Order=$placed_on;
    }
    public function getPlaced_on(){
       return $this->Order;
    }
    public function setPayment_status($payment_status){
        $this->Order=$payment_status;
    }
    public function getPayment_status(){
       return $this->Order;
    }
    public function setInfoOrder($use_id,$name,$number,$email,$method,$address,$total_products,$total_price,$placed_on,$payment_status){
        $this->Order=$use_id;
        $this->OrderName=$name;
        $this->OrderNumber=$number;
        $this->OrderEmail=$email;
        $this->OrderMethod=$method;
        $this->OrderAddress=$address;
        $this->OrderTotal_products=$total_products;
        $this->OrderTotal_price=$total_price;
        $this->OrderPlaced_on=$placed_on;
        $this->OrderPayment_status=$payment_status;
    }
    
    public function getInfoOrder(){
       return [$this->Order, $this->OrderName,$this->OrderNumber,$this->OrderEmail,$this->OrderMethod,$this->OrderAddress,$this->OrderTotal_products,$this->OrderTotal_price,$this->OrderPlaced_on,$this->OrderPayment_status];
    }
}