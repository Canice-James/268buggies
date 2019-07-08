<?php

class Incident extends Controller {


  public static function getAll(){
    
    return IncidentModel::getAll();
  }

  public static function getIncident($incid_id){
    
    return IncidentModel::getOne($incid_id);
  }

  public static function addIncident(){

    $data = ($_POST);
    // echo "body"; var_dump($_POST);
    $incid_id = Helper::uuid();
    $client_id = $data['clientId'];
    $incid_desc = $data['description'];
    $cause_of_incid = $data['cause'];
    $recom = $data['recom'];
    $date = $data['date'];
    $time = $data['time'];

    return IncidentModel::create($incid_id, $client_id, $incid_desc, $cause_of_incid, $recom, $date, $time);
  }

  public static function updateIncident(){

    $data = ($_POST);
    // echo "body"; var_dump($_POST);
    $incid_id = $data['id'];
    $client_id = $data['client_id'];
    $incid_desc = $data['incid_desc'];
    $cause_of_incid = $data['cause_of_incid'];
    $recom = $data['recom'];
    $date = $data['date'];
    $time = $data['time'];;

    return IncidentModel::update($incid_id, $client_id, $incid_desc, $cause_of_incid, $recom, $date, $time);
  }

  public static function deleteIncident(){
    
    $data = ($_POST);
    $incid_id = $data['id'];
    return IncidentModel::delete($incid_id);
  }

}

?>