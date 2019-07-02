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
    $group_tour = $data['groupTour'];
    $route = $data['route'];
    $date = $data['date'];
    $time = $data['time'];
    $price = $data['price'];
    $no_partic = $data['participantAomount'];
    $equip_requested = $data['equipRequested'];
    $num_of_buggies = $data['buggyAmount'];
    $route = $data['runLeft'];
    $route = $data['runLeft'];

    return TourModel::update($tour_id, $client_id, $group_tour, $route, $date, $time, $price, $no_partic, $equip_requested, $num_of_buggies);
  }

  public static function deleteTour(){
    
    $data = ($_POST);
    $id = $data['id'];
    return TourModel::delete($id);
  }

}

?>