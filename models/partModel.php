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
  public static function create($partId, $partName, $supplierId, $unitPrice, $runRate, $orderDate, $quantity){
    $query = "INSERT INTO " . self::$table_name . "(part_id, part_name, supplier_id, unit_price, run_rate, order_date, quantity)
    VALUES('". $partId ."', '". $partName ."', '". $supplierId ."', ". $unitPrice .", ". $runRate .", '". $orderDate ."', ". $quantity .")";

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

    return array("message"=> $message, "code"=>$code);
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
    $query = 'SELECT * FROM ' . self::$table_name . ' WHERE ' . self::$table_name  . '_id="'. $id .'";';
    $stmt = self::$connection->query($query);

    return $stmt;
  }

  //U
  public static function update($partId, $partName, $supplierId, $unitPrice, $runRate, $orderDate, $quantity){
    $query = "UPDATE " . self::$table_name . " SET part_name = '".$partName."', unit_price = '".$unitPrice."', run_rate = '".$runRate."', order_date = ".$orderDate.", quantity = '".$quantity."' WHERE part_id = '".$partId."';";
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

    return array("message"=> $message, "code"=>$code);
  }

  //D
  public static function delete($partId){
    $query = "DELETE FROM " . self::$table_name . " WHERE part_id = '".$partId."';";
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

    return array("message"=> $message, "code"=>$code);
  }

  public static function printErrors(){
    var_dump(self::$connection->errorinfo(), TRUE);
  }
}
