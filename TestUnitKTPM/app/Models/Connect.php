<?php
namespace App\Models;
class Connect{
    protected $connect;
    public function setdbName($dbname){
        $this->connect=$dbname;
    }
    public function getdbName(){
       return $this->connect;
    }
    public function setUserName($username){
        $this->connect=$username;
    }
    public function getUserName(){
       return $this->connect;
    }
    public function setPassword($password){
        $this->connect=$password;
    }
    public function getPassword(){
       return $this->connect;
    }
    public function setConnect($dbname,$username,$password){
        $this->connect=$dbname;
        $this->userName=$username;
        $this->userPassword=$password;
    }
    public function getConnect(){
       return [$this->connect, $this->userName,$this->userPassword];
    }
}