<?php
namespace App\Models;
class Register{
    protected $register;
    public function setName($name){
        $this->register=$name;
    }
    public function getName(){
       return $this->register;
    }
    public function setEmail($email){
        $this->register=$email;
    }
    public function getEmail(){
       return $this->register;
    }
    public function setPassword($password){
        $this->register=$password;
    }
    public function getPassword(){
       return $this->register;
    }
    public function setConfirmPassword($cfpassword){
        $this->register=$cfpassword;
    }
    public function getConfirmPassword(){
       return $this->register;
    }
    public function setRegister($name,$email,$password,$cfpassword){
        $this->register=$name;
        $this->userEmail=$email;
        $this->userPassword=$password;
        $this->confirmPassword=$cfpassword;
    }
    public function getRegister(){
       return [$this->register, $this->userEmail,$this->userPassword,$this->confirmPassword];
    }
}