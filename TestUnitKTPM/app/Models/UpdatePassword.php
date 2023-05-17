<?php
namespace App\Models;
class UpdatePassword{
    protected $updatePassword;
    public function setName($name){
        $this->updatePassword=$name;
    }
    public function getName(){
       return $this->updatePassword;
    }
    public function setOldPassword($opassword){
        $this->updatePassword=$opassword;
    }
    public function getOldPassword(){
       return $this->updatePassword;
    }
    public function setNewPassword($npassword){
        $this->updatePassword=$npassword;
    }
    public function getNewPassword(){
       return $this->updatePassword;
    }
    public function setConfirmNewPassword($cfnpassword){
        $this->updatePassword=$cfnpassword;
    }
    public function getConfirmNewPassword(){
       return $this->updatePassword;
    }
    public function setUpdatePassword($name,$opassword,$npassword,$cfnpassword){
        $this->updatePassword=$name;
        $this->oldPassword=$opassword;
        $this->newPassword=$npassword;
        $this->confirmNewPassword=$cfnpassword;
    }
    public function getUpdatePassword(){
       return [$this->updatePassword, $this->oldPassword,$this->newPassword,$this->confirmNewPassword];
    }
}