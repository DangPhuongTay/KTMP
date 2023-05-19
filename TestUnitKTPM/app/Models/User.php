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
    public function setOldPassword($opassword){
        $this->user=$opassword;
    }
    public function getOldPassword(){
       return $this->user;
    }
    public function setNewPassword($npassword){
        $this->user=$npassword;
    }
    public function getNewPassword(){
       return $this->user;
    }
    public function setConfirmNewPassword($cfnpassword){
        $this->user=$cfnpassword;
    }
    public function getConfirmNewPassword(){
       return $this->user;
    }
    public function setUpdatePassword($name,$opassword,$npassword,$cfnpassword){
        $this->user=$name;
        $this->oldPassword=$opassword;
        $this->newPassword=$npassword;
        $this->confirmNewPassword=$cfnpassword;
    }
    public function getUpdatePassword(){
       return [$this->user, $this->oldPassword,$this->newPassword,$this->confirmNewPassword];
    }
    public function setLogin($email,$password){
        $this->user=$email;
        $this->userPassword=$password;
    }
    public function getLogin(){
       return [$this->user,$this->userPassword];
    }
    public function setConfirmPassword($cfpassword){
        $this->user=$cfpassword;
    }
    public function getConfirmPassword(){
       return $this->user;
    }
    public function setRegister($name,$email,$password,$cfpassword){
        $this->user=$name;
        $this->userEmail=$email;
        $this->userPassword=$password;
        $this->confirmPassword=$cfpassword;
    }
    public function getRegister(){
       return [$this->user, $this->userEmail,$this->userPassword,$this->confirmPassword];
    }
}