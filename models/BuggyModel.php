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

    self::$connection->query($query);
  }

  //R
  public static function getAll()
  {
    $query = 'SELECT * FROM ' . self::$table_name;
    $stmt = self::$connection->query($query);

    return $stmt;
  }
  //U
  public static function update()
  { }
  //D
  public static function delete()
  { }
}
