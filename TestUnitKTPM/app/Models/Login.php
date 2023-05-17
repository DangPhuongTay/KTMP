<?php
namespace App\Models;
class Login{
    protected $login;

    public function setEmail($email){
        $this->login=$email;
    }
    public function getEmail(){
       return $this->login;
    }
    public function setPassword($password){
        $this->login=$password;
    }
    public function getPassword(){
       return $this->login;
    }
    public function setLogin($email,$password){
        $this->login=$email;
        $this->userPassword=$password;
    }
    public function getLogin(){
       return [$this->login,$this->userPassword];
    }
}