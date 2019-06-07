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
  public static function create($id, $colour, $duration, $runCount, $runLeft){
    $query = "INSERT INTO self::$table_name(Buggy_ID, Colour, Run_Duration, Run_Count, Run_Left)
    VALUES('". $id ."', '". $colour ."', '". $duration ."', '". $runCount ."', '". $runLeft ."')";

    $stmt = self::$connection->query($query);

    $dataReport = "";

    if($stmt === TRUE){
      $dataReport = "Data Inserted Successfully";
    }else{
      $dataReport = "Data wasn't inserted successfully!! Error: " . $query . "<br>" . self::$connection->error;
    }

    return $dataReport;
  }

  //R
  public static function getAll()
  {
    $query = 'SELECT * FROM ' . self::$table_name;
    $stmt = self::$connection->query($query);

    return $stmt;
  }

  //U
  public static function update($id, $colour, $duration, $runCount, $runLeft){
    $query = "UPDATE self::$table_name SET Colour = '".$colour."', Run_Duration = '".$duration."', Run_Count = '".$runCount."', Run_Left = '".$runLeft."' WHERE Buggy_ID = '".$id."';";
    $stmt = self::$connection->query($query);

    $dataReport = "";

    if($stmt === TRUE){
      $dataReport = "Data Updated Successfully";
    }else{
      $dataReport = "Data wasn't updated successfully!! Error: " . $query . "<br>" . self::$connection->error;
    }

    return $dataReport;
  }

  //D
  public static function delete($id){
    $query = "DELETE FROM self::$table_name WHERE Buggy_ID = '".$id."';";
    $stmt = self::$connection->query($query);

    $dataReport = "";

    if($stmt === TRUE){
      $dataReport = "Data Deleted Successfully";
    }else{
      $dataReport = "Data wasn't deleted successfully!! Error: " . $query . "<br>" . self::$connection->error;
    }

    return $dataReport;
  }
}
