<?php
namespace App\Models;
class User{
    protected $user;
    public function setName($name){
        $this->user=$name;
    }
    public function getName(){
       return $this->user;
    }
    public function setEmail($email){
        $this->user=$email;
    }
    public function getEmail(){
       return $this->user;
    }
    public function setPassword($password){
        $this->user=$password;
    }
    public function getPassword(){
       return $this->user;
    }
    public function setInfoUser($name,$email,$password){
        $this->user=$name;
        $this->userEmail=$email;
        $this->userPassword=$password;
    }
    public function getInfoUser(){
       return [$this->user, $this->userEmail,$this->userPassword];
    }
}