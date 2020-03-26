<?php
class UserController extends User{
  public function insertion($name,$age,$gender){
    $this->insertUser($name,$age,$gender);
  }
  public function updation($name,$age,$gender,$condition){
    $this->updateUser($name,$age,$gender,$condition);
  }
}

 ?>
