<?php

class DB{
    private $dbhost = "localhost";
    private $dbname = "my_app";
    private $dbusername = "root";
    private $dbpassword = "";
    public $connect;

   public function __construct(){
    try{
        $this->connect = new PDO("mysql:host=".$this->dbhost.";dbname=".$this->dbname,$this->dbusername,$this->dbpassword);
       $this->connect->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
       $this->connect->exec('SET CHARACTER SET utf8');
        // echo '<br> Connection Establishe...';
  
    }catch(PDOException $e){
        echo '<br> Connection Problem with '.$e->getMessage();
    }
   }
}


?>