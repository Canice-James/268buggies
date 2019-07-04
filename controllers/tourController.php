<?php

class Tour extends Controller {


  public static function getTours(){
    
    return TourModel::getAll();
  }

  public static function getTour($id){
    
    return TourModel::getOne($id);
  }

  public static function addTour(){

    $data = ($_POST);
    // echo "body"; var_dump($_POST);
    $tour_id = Helper::uuid();
    $client_id = $data['clientId'];
    $group_tour = $data['isGroupTour'];
    $route = $data['route'];
    $date = $data['date'];
    $time = $data['time'];
    $price = $data['price'];
    $no_partic = $data['participantAmount'];
    $equip_requested = $data['isEquipRequested'];
    $num_of_buggies = $data['buggyAmount'];


    return TourModel::create($tour_id, $client_id, $group_tour, $route, $date, $time, $price, $no_partic, $equip_requested, $num_of_buggies);
  }

  public static function updateTour(){

    $data = ($_POST);

    $tour_id = $data['tourId'];
    $client_id = $data['clientId'];
    $group_tour = $data['isGroupTour'];
    $route = $data['route'];
    $date = $data['date'];
    $time = $data['time'];
    $price = $data['price'];
    $no_partic = $data['participantAmount'];
    $equip_requested = $data['isEquipRequested'];
    $num_of_buggies = $data['buggyAmount'];

    return TourModel::update($tour_id, $client_id, $group_tour, $route, $date, $time, $price, $no_partic, $equip_requested, $num_of_buggies);
  }

  public static function deleteTour(){
    
    $data = ($_POST);
    $id = $data['id'];
    return TourModel::delete($id);
  }

  public static function getOneGroup($member_id){
    
    return TourModel::getOne($member_id);
  }

  public static function addGroup(){

    $data = ($_POST); 
    // echo "body"; var_dump($_POST);
    $member_id = $data['member_id'];
    $mem_fname = $data['mem_fname'];
    $mem_lname = $data['mem_lname'];
    $mem_address = $data['mem_address'];
    $mem_phone = $data['mem_phone'];
    $mem_tour_date = $data['mem_tour_date'];
    $client_id = $data['client_id'];
    $tour_id = $data['tour_id'];

    return TourModel::addGroup($member_id, $mem_fname, $mem_lname, $mem_address, $mem_phone, $mem_tour_date, $client_id, $tour_id);
  }

  public static function getAllGroups($member_id){
    
    return TourModel::getAllGroups($member_id);
  }

  public static function getGroup($member_id, $mem_fname, $mem_lname, $mem_address, $mem_phone, $mem_tour_date, $client_id, $tour_id){
    
    return TourModel::getGroup($member_id, $mem_fname, $mem_lname, $mem_address, $mem_phone, $mem_tour_date, $client_id, $tour_id);
  }

  public static function updateGroup(){

    $data = ($_POST);  
    // echo "body"; var_dump($_POST);
    $member_id = $data['member_id'];
    $mem_fname = $data['mem_fname'];
    $mem_lname = $data['mem_lname'];
    $mem_address = $data['mem_address'];
    $mem_phone = $data['mem_phone'];
    $mem_tour_date = $data['mem_tour_date'];
    $client_id = $data['client_id'];
    $tour_id = $data['tour_id'];

    return TourModel::updateGroup($member_id, $mem_fname, $mem_lname, $mem_address, $mem_phone, $mem_tour_date, $client_id, $tour_id);
  }

  public static function deleteGroup(){
    
    $member_id = $data['member_id'];
    $mem_fname = $data['mem_fname'];
    $mem_lname = $data['mem_lname'];
    $mem_address = $data['mem_address'];
    $mem_phone = $data['mem_phone'];
    $mem_tour_date = $data['mem_tour_date'];
    $client_id = $data['client_id'];
    $tour_id = $data['tour_id'];

    return TourModel::deleteGroup($member_id, $mem_fname, $mem_lname, $mem_address, $mem_phone, $mem_tour_date, $client_id, $tour_id);
  }

}

?>