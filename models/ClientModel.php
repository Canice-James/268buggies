<?php

class ClientModel
{

  // Connection instance
  public static $connection;

  // table name
  public static $table_name = "client";

  public static function setConnection($connection)
  {
    self::$connection = $connection;
  }

  //C
  public static function create($client_id, $client_fname, $client_lname, $client_addr, $client_dob, $client_phone, $client_emerg_contact, $client_emerg_contact_num, $type){
    $query = "INSERT INTO " . self::$table_name ."(client_id, client_fname, client_lname, client_addr, client_dob, client_phone, client_emerg_contact, client_emerg_contact_num, type)
    VALUES('". $client_id ."', '". $client_fname ."', '". $client_lname ."', '". $client_addr ."', '". $client_dob ."', '". $client_phone ."', '". $client_emerg_contact ."', '". $client_emerg_contact_num ."', '". $type ."')";

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


    self::printErrors();

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

  public static function getOne($client_id)
  {
    $query = 'SELECT * FROM ' . self::$table_name .' WHERE ' .self::$table_name . "_id='$client_id'";
    $stmt = self::$connection->query($query);

    return $stmt;
  }

  //U
  public static function update($client_id, $client_fname, $client_lname, $client_addr, $client_dob, $client_phone, $client_emerg_contact, $client_emerg_contact_num, $type){
    $query = "UPDATE ". self::$table_name ." SET client_fname='".$client_fname."', client_lname='".$client_lname."', client_addr='".$client_addr."', client_dob='".$client_dob."', client_phone='".$client_phone."', client_emerg_contact='".$client_emerg_contact."', client_emerg_contact_num='".$client_emerg_contact_num."', type='".$type."' WHERE client_id='".$client_id."'";
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
  public static function delete($client_id){
    $query = "DELETE FROM ". self::$table_name ." WHERE client_id='".$client_id."';";
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
