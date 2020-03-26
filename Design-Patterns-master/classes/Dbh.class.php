<?php
class Dbh{
  //connection parameters
  private $server = 'localhost';
  private $user = 'root';
  private $pass =  '';
  private $dbname = 'user';

 //connection method
  public function connect(){
  $dsn = "mysql:host=$this->server;dbname=$this->dbname";
  $pdo = new PDO($dsn,$this->user,$this->pass);
  //these are static fetch modes
  $pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE,PDO::FETCH_ASSOC);
  return $pdo;
  }
  }

 ?>
