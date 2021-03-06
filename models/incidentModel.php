<?php

class IncidentModel
{

  // Connection instance
  public static $connection;

  // table name
  public static $table_name = "incident";

  public static function setConnection($connection)
  {
    self::$connection = $connection;
  }

  //C
 public static function create($incid_id, $client_id, $incid_desc, $cause_of_incid, $recom, $date, $time)
  { 
    $query = "INSERT INTO " . self::$table_name ."(incid_id, client_id, incid_desc, cause_of_incid, recom, date, time)
    VALUES('". $incid_id ."', '". $client_id ."', '". $incid_desc ."', '". $cause_of_incid ."', '". $recom ."', '". $date ."', '". $time ."')";

    $stmt = self::$connection->prepare($query);

    $message = "";
    $code = "";

    if($stmt->execute() === TRUE){
      $message = "Data Inserted Successfully";
      $code = 200;
    }else{
      $message = "Data wasn't inserted successfully!! Error: " . $query . "<br>" . self::$connection->error;
      $code = 500;
    }

    $res = array("message"=> $message, "code"=>$code);
    // var_dump( $res);
    return $res;
  }

  //R
  public static function getAll()
  {
    $query = 'SELECT * FROM ' . self::$table_name .' JOIN Client using(client_id)';
    $stmt = self::$connection->query($query);

    return $stmt;
  }

  public static function getOne($incid_id)
  {
    $query = 'SELECT * FROM ' . self::$table_name .' JOIN Client using(client_id)' . 'WHERE incid_id ="' . $incid_id . '";';
    $stmt = self::$connection->query($query);

    return $stmt;
  }

  //U
 public static function update($client_id, $incid_desc, $cause_of_incid, $recom, $date, $time)
  { 
    $query = "UPDATE ". self::$table_name ." SET client_id='".$client_id."', incid_desc='".$incid_desc."', cause_of_incid='".$cause_of_incid."', recom='".$recom."', date='".$date."', time='".$time."'";
    $stmt = self::$connection->prepare($query);

    $message = "";
    $code = "";

    if($stmt->execute() === TRUE){
      $message = "Data Updated Successfully";
      $code = 200;
    }else{
      $message = "Data wasn't updated successfully!! Error: " . $query . "<br>" . self::$connection->error;
      $code = 500;
    }

    return array("message"=> $message, "code"=>$code);
  }

  //D
 public static function delete($incid_id)
  { 
    $query = "DELETE FROM ". self::$table_name ." WHERE incid_id='".$incid_id."'";
    $stmt = self::$connection->prepare($query);

    $message = "";
    $code = "";

    if($stmt->execute() === TRUE){
      $message = "Data Updated Successfully";
      $code = 200;
    }else{
      $message = "Data wasn't updated successfully!! Error: " . $query . "<br>" . self::$connection->error;
      $code = 500;
    }

    $res = array("message"=> $message, "code"=>$code);
    return $res;
  }

  public static function getMostRecentDate(){
    $query = 'SELECT Date FROM ' . self::$table_name . ' LIMIT 1';
    $stmt = self::$connection->prepare($query);
    //self::printErrors();
    $stmt->execute();
    return $stmt->fetch()[0];
  }

  public static function printErrors(){
    var_dump(self::$connection->errorinfo(), TRUE);
  }
}
