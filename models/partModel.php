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
  public static function create($partId, $partName, $supplierID, $unitPrice, $runRate, $orderDate, $quantity){
    $query = "INSERT INTO self::$table_name(Part_ID, Part_Name, Supplier_ID, Unit_Price, Run_Rate, Order_Date, Quantity)
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
  public static function update()
  { }
  
  //D
  public static function delete($partId){
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
