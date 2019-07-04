<?php
class Database
{

  private $HOST = "127.0.0.1";
  private $USER = "root";
  private $PASSWORD = "";
  private $DATABASE = "268_buggies";

  public $conn;

  // get the DATABASE connection
  public function getConnection()
  {

    $this->conn = null;

    try {
      
      /* Attempt to connect to MySQL database */
      $this->conn = new PDO("mysql:host=$this->HOST;dbname=$this->DATABASE;charset=utf8mb4", $this->USER, $this->PASSWORD);

    } catch (PDOException $exception) {
      echo "Error: " . $exception->getMessage();
      // Check connection
      if($this->conn->connect_error){
        die("ERROR: Could not connect. " . $this->conn->errno . ") " . $this->conn->error) ;
        
      }
    }

    return $this->conn;
  }

}

?>