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

  //
  public static function create($tour_id, $client_id, $group_tour, $route, $date, $time, $price, $no_partic, $equip_requested, $num_of_buggies){
    $query = "INSERT INTO " . self::$table_name ."(tour_id, client_id, group_tour, route, date, time, price, no_partic, equip_requested, num_of_buggies)
    VALUES('". $tour_id ."', '". $client_id ."', '". $group_tour ."', '". $route ."', '". $date ."', '". $time ."', ". $price .", '". $no_partic ."', '". $equip_requested ."', '". $num_of_buggies ."')";

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

  public static function createGroup($member_id, $mem_fname, $mem_lname, $mem_address, $mem_phone, $mem_tour_date, $client_id, $tour_id){
    $query = "INSERT INTO " . $group_member ."(member_id, mem_fname, mem_lname, mem_address, mem_phone, mem_tour_date, client_id, tour_id)
    VALUES('". $member_id ."', '". $mem_fname ."', '". $mem_lname ."', '". $mem_address ."', '". $mem_phone ."', '". $mem_tour_date ."', ". $client_id .", '". $tour_id ."')";

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

  public static function getAll()
  {
    $query = 'SELECT * FROM ' . self::$table_name;
    $stmt = self::$connection->query($query);

    return $stmt;
  }

  
  public static function getAllGroup()
  {
    $query = 'SELECT * FROM ' . $group_member;
    $stmt = self::$connection->query($query);

    return $stmt;
  }

  public static function getOne($id)
  {
    $query = 'SELECT * FROM ' . self::$table_name . ' WHERE tour_id ="' . $id . '"';
    $stmt = self::$connection->query($query);

    return $stmt;
  }

  public static function getOneGroup($id)
  {
    $query = 'SELECT * FROM ' . $group_member . ' WHERE member_id ="' . $id . '"';
    $stmt = self::$connection->query($query);

    return $stmt;
  }

  public static function update($group_tour, $route, $date, $time, $price, $no_partic, $equip_requested, $num_of_buggies){
    $query = "UPDATE " . self::$table_name . " SET group_tour = '".$group_tour."',' route = '".$route."', 'date' = '".$date."', 'time' = '".$time."', price = '.$price.', no_partic = '".$no_partic."', equip_requested = '".$equip_requested."', num_of_buggies = '".$num_of_buggies."' WHERE tour_id = '".$tour_id."';";
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

   public static function updateGroup($mem_fname, $mem_lname, $mem_address, $mem_phone, $mem_tour_date, $client_id, $tour_id){
    $query = "UPDATE " . $group_member . " SET mem_fname = '".$mem_fname."',' mem_lname = '".$mem_lname."', 'mem_address' = '".$mem_address."', 'mem_phone' = '".$mem_phone."', mem_tour_date = '.$mem_tour_date.', client_id = '".$client_id."', tour_id = '".$tour_id."';";
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
  public static function delete($tour_id){
    $query = "DELETE FROM " . self::$table_name ." WHERE tour_id = '".$tour_id."';";
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

  public static function deleteGroup($member_id){
    $query = "DELETE FROM " . $group_member ." WHERE member_id = '".$member_id."';";
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

  public static function printErrors(){
    var_dump(self::$connection->errorinfo(), TRUE);
  }

}
