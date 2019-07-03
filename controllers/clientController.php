<?php

class Client extends Controller {


  public static function get(){
    
    return ClientModel::getAll();
  }

  public static function getClient($client_id){
    
    return ClientModel::getOne($client_id);
  }

  public static function addClient(){

    $data = ($_POST);
    // echo "body"; var_dump($_POST);
    $client_id = Helper::uuid();
    $client_fname = $data['client_fname'];
    $client_lname = $data['client_lname'];
    $client_addr = $data['client_addr'];
    $client_dob = $data['client_dob'];
    $client_phone = $data['client_phone'];
    $client_emerg_contact = $data['client_emerg_contact'];
    $client_emerg_contact_num = $data['client_emerg_contact_num'];
    $type = $data['type'];

    return ClientModel::create($client_id, $client_fname, $client_lname, $client_addr, $client_dob, $client_phone, $client_emerg_contact, $client_emerg_contact_num, $type);
  }

  public static function updateClient(){

    $data = ($_POST);
    // echo "body"; var_dump($_POST);
    $client_id = $data['client_id'];
    $client_fname = $data['client_fname'];
    $client_lname = $data['client_lname'];
    $client_addr = $data['client_addr'];
    $client_dob = $data['client_dob'];
    $client_phone = $data['client_phone'];
    $client_emerg_contact = $data['client_emerg_contact'];
    $client_emerg_contact_num = $data['client_emerg_contact_num'];
    $type = $data['type'];

    return ClientModel::update($client_id, $client_fname, $client_lname, $client_addr, $client_dob, $client_phone, $client_emerg_contact, $client_emerg_contact_num, $type);
  }

  public static function deleteCLient(){
    
    $data = ($_POST);
    $client_id = $data['client_id'];
    return ClientModel::delete($client_id);
  }

}

?>