<?php
class TourModel
{

  // Connection instance
  public static $connection;

  // table name
  public static $table_name = "tours";

  // function to handle errors saved as a variable

  public static function setConnection($connection)
  {
    self::$connection = $connection;
  }

  public static function create()
  { }

  public static function getAll()
  {
    $query = 'SELECT * FROM ' . self::$table_name;
    $stmt = self::$connection->query($query);
    
    return $stmt;
  }

  public static function getOne($id)
  {
    $query = 'SELECT * FROM ' . self::$table_name . 'WHERE tour_id =' . $id;
    $stmt = self::$connection->query($query);
    
    return $stmt;
  }

  public static function update()
  { }
  //D
  public static function delete()
  { }

  public static function printErrors(){
    var_dump(self::$connection->errorinfo(), TRUE);
  }
  
}
