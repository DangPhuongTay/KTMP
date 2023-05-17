<?php
namespace App\Models;
class Admin{
    protected $admin;
    public function setName($name){
        $this->admin=$name;
    }
    public function getName(){
       return $this->admin;
    }
    public function setPassword($password){
        $this->admin=$password;
    }
    public function getPassword(){
       return $this->admin;
    }
    public function setInfoAdmin($name,$password){
        $this->admin=$name;
        $this->adminPassword=$password;
    }
    public function getInfoAdmin(){
       return [$this->admin,$this->adminPassword];
    }
}