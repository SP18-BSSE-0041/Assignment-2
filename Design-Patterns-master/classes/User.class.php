<?php
// Model its an only way to interact with the database in MVC PATTERN
include 'Dbh.class.php';
 class User extends Dbh{
 protected function insertUser($name,$age,$gender){
  $sql = "INSERT INTO student(name,age,gender)
  VALUES(?,?,?);";
  $stmt = $this->connect()->prepare($sql);
  $stmt->execute([$name,$age,$gender]);
 }

protected function updateUser($name,$age,$gender,$condition){
  $sql = "UPDATE student SET name = ? , age = ? , gender = ? WHERE name = ?;";
  $stmt = $this->connect()->prepare($sql);
  $stmt->execute([$name,$age,$gender,$condition]);
}

protected function delete($param){
  $sql = "DELETE FROM student where name = ?;";
  $stmt = $this->connect()->prepare($sql);
  $stmt->execute([$param]);
}

protected function showUser(){
  $sql = "SELECT * from student;";
  $stmt = $this->connect()->prepare($sql);
  $stmt->execute();
  $name = $stmt->fetchAll();
  foreach ($name as $key => $value) {
    echo $value['name'] . "<br>";
  }

}
}
 ?>
