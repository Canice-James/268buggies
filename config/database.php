<?php
class Database
{

  private $HOST = "localhost";
  private $USER = "root";
  private $PASSWORD = "";
  private $DATABASE = "268_buggies_dummy";

  public $conn;

  // get the DATABASE connection
  public function getConnection()
  {

    $this->conn = null;

    try {

      /* Attempt to connect to MySQL database */
      $this->conn = new mysqli($this->HOST, $this->USER, $this->PASSWORD, $this->DATABASE);

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