<?php 
class Database {
private $servername = "localhost";
private $username = "root";
private $password = "";
private $db_name = "news_db";
private $connection;

public function connect(){
    $this->connection = null;


    try {
        $this->connection = new PDO("mysql:host=".$this->servername.";dbname=".$this->db_name, $this->username, $this->password);
        // set the PDO error mode to exception
        $this->connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        // echo "Connected successfully";
      } catch(PDOException $e) {
        echo "Connection failed: " . $e->getMessage();
      }

      return $this->connection;
}
}
?>