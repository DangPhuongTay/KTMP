<?php
namespace App\Models;
class Message{
    protected $message;
    public function setUser_id($use_id){
        $this->message=$use_id;
    }
    public function getUser_id(){
       return $this->message;
    }
    public function setName($name){
        $this->Message=$name;
    }
    public function getName(){
       return $this->Message;
    }
    public function setEmail($email){
        $this->Message=$email;
    }
    public function getEmail(){
       return $this->Message;
    }
    public function setNumber($number){
        $this->Message=$number;
    }
    public function getNumber(){
       return $this->Message;
    }
    public function setMessage($message){
        $this->Message=$message;
    }
    public function getMessage(){
       return $this->Message;
    }
    public function setInfoMessage($use_id,$name,$email,$number,$message){
        $this->Message=$use_id;
        $this->MessageName=$name;
        $this->MessageEmail=$email;
        $this->MessageNumber=$number;
        $this->MessageMessage=$message;
    }
    public function getInfoMessage(){
       return [$this->Message, $this->MessageName,$this->MessageEmail,$this->MessageNumber,$this->MessageMessage];
    }
}