<?php

class PartModel
{

  // Connection instance
  public static $connection;

  // table name
  public static $table_name = "part";

  public static function setConnection($connection)
  {
    self::$connection = $connection;
  }

  //C
  public static function create(){
    
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
