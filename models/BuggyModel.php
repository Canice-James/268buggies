<?php

class BuggyModel
{

  // Connection instance
  public static $connection;

  // table name
  public static $table_name = "buggy";

  public static function setConnection($connection)
  {
    self::$connection = $connection;
  }

  //C
  public static function create($id, $colour, $runCount, $runLeft){
    $query = "INSERT INTO " . self::$table_name ."(buggy_id, colour, run_count, run_left)
    VALUES('". $id ."', '". $colour ."', '". $runCount ."', '". $runLeft ."')";

    $stmt = self::$connection->prepare($query);
    // self::printErrors();

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
    $query = 'SELECT * FROM ' . self::$table_name;
    $stmt = self::$connection->query($query);

    return $stmt;
  }

  public static function getOne($id)
  {
    $query = 'SELECT * FROM ' . self::$table_name .' WHERE ' .self::$table_name . "_id='$id'";
    $stmt = self::$connection->query($query);

    return $stmt;
  }

  //U
  public static function update($id, $colour, $runCount, $runLeft){
    $query = "UPDATE ". self::$table_name ." SET colour='".$colour."', run_count='".$runCount."', run_left='".$runLeft."' WHERE buggy_id='".$id."'";
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
  public static function delete($id){
    $query = "DELETE FROM ". self::$table_name ." WHERE buggy_id='".$id."';";
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

  public static function printErrors(){
    var_dump(self::$connection->errorinfo(), TRUE);
  }
}
