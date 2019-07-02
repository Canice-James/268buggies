<?php

class Part extends Controller {


  public static function getParts(){
    
    return PartModel::getAll();
  }

  public static function getPart($id){
    
    return PartModel::getOne($id);
  }

  public static function addPart(){

    $data = ($_POST);
    // echo "body"; var_dump($_POST);
    $id = Helper::uuid();
    $partName = $data['name'];
    $supplierId = $data['supplierId'];
    $unitPrice = $data['unitPrice'];
    $runRate = $data['runLeft'];
    $orderDate = Helper::getDate();
    $quantity = $data['quantity'];

    return PartModel::create($id, $partName, $supplierId, $unitPrice, $runRate, $orderDate, $quantity);
  }

  public static function updatePart(){

    $data = ($_POST);
    // echo "body"; var_dump($_POST);
    $id = $data['id'];
    $partName = $data['name'];
    $supplierId = $data['supplierId'];
    $unitPrice = $data['unitPrice'];
    $runRate = $data['runLeft'];
    $orderDate = $data['orderDate'];
    if ($orderDate == ''){
      $orderDate = 'NULL';
    }
    $quantity = $data['quantity'];

    return PartModel::update($id, $partName, $supplierID, $unitPrice, $runRate, $orderDate, $quantity);
  }

  public static function deletePart(){
    
    $data = ($_POST);
    $id = $data['id'];
    return PartModel::delete($id);
  }

}

?>