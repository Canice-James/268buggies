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
  public static function create($partId, $partName, $supplierID, $unitPrice, $runRate, $orderDate, $quantity){
    $query = "INSERT INTO self::$table_name(part_id, part_name, supplier_id, unit_price, run_rate, order_date, quantity)
    VALUES('". $partId ."', '". $partName ."', '". $supplierID ."', '". $unitPrice ."', '". $runRate ."', '". $orderDate ."', '". $quantity ."')";

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
  public static function update($partId, $partName, $supplierID, $unitPrice, $runRate, $orderDate, $quantity){
    $query = "UPDATE self::$table_name SET part_name = '".$partName."', unit_price = '".$unitPrice."', run_rate = '".$runRate."', order_date = '".$orderDate."', quantity = '".$quantity."' WHERE part_id = '".$partId."';";
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
  public static function delete($partId){
    $query = "DELETE FROM self::$table_name WHERE part_id = '".$partId."';";
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
