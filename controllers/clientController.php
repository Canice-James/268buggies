<?php

class Client extends Controller {


  public static function getAll(){
    
    return ClientModel::getAll();
  }

  public static function getClient($client_id){
    
    return ClientModel::getOne($client_id);
  }

  public static function addClient(){

    $data = ($_POST);
    // echo "body"; var_dump($_POST);
    $client_id = Helper::uuid();
    $client_fname = $data['firstName'];
    $client_lname = $data['lastName'];
    $client_addr = $data['address'];
    $client_dob = $data['dob'];
    $client_phone = $data['phone'];
    $client_emerg_contact = $data['emergContact'];
    $client_emerg_contact_num = $data['emergContactNum'];
    $type = $data['type'];

    return ClientModel::create($client_id, $client_fname, $client_lname, $client_addr, $client_dob, $client_phone, $client_emerg_contact, $client_emerg_contact_num, $type);
  }

  public static function updateClient(){

    $data = ($_POST);
    // echo "body"; var_dump($_POST);
    $client_id = $data['id'];
    $client_fname = $data['firstName'];
    $client_lname = $data['lastName'];
    $client_addr = $data['address'];
    $client_dob = $data['dob'];
    $client_phone = $data['phone'];
    $client_emerg_contact = $data['emergContact'];
    $client_emerg_contact_num = $data['emergContactNum'];
    $type = $data['type'];

    var_dump($client_id);
    return ClientModel::update($client_id, $client_fname, $client_lname, $client_addr, $client_dob, $client_phone, $client_emerg_contact, $client_emerg_contact_num, $type);
  }

  public static function deleteCLient(){
    
    $data = ($_POST);
    $client_id = $data['client_id'];
    return ClientModel::delete($client_id);
  }

}

?>