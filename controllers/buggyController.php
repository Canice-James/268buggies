<?php

class Buggy extends Controller {


  public static function getBuggies(){
    
    return BuggyModel::getAll();
  }

  public static function getBuggy($id){
    
    return BuggyModel::getOne($id);
  }

  public static function addBuggy(){

    $data = ($_POST);
    // echo "body"; var_dump($_POST);
    $id = Helper::uuid();
    $colour = $data['colour'];
    $runCount = $data['runCount'];
    $runLeft = $data['runLeft'];

    return BuggyModel::create($id, $colour, $runCount, $runLeft );
  }

  public static function updateBuggy(){

    $data = ($_POST);
    // echo "body"; var_dump($_POST);
    $id = $data['id'];
    $colour = $data['colour'];
    $runCount = $data['runCount'];
    $runLeft = $data['runLeft'];

    return BuggyModel::update($id, $colour, $runCount, $runLeft );
  }

  public static function deleteBuggy(){
    
    $data = ($_POST);
    $id = $data['id'];
    return BuggyModel::delete($id);
  }

  public static function addBuggyPart(){

    $data = ($_POST);  //buggy_id, part_id, part_run_count
    // echo "body"; var_dump($_POST);
    $buggyId = $data['buggyId'];
    $partId = $data['partId'];
    $runCount = $data['runCount'];

    return BuggyModel::addBuggyPart($buggyId, $partId, $runCount);
  }

  public static function getParts($buggyId){
    
    return BuggyModel::getAllParts($buggyId);
  }

  public static function getPart($buggyId, $partId){
    
    return BuggyModel::getOnePart($buggyId, $partId);
  }

  public static function updateBuggyPart(){

    $data = ($_POST);  //buggy_id, part_id, part_run_count
    // echo "body"; var_dump($_POST);
    $buggyId = $data['buggyId'];
    $partId = $data['partId'];
    $runCount = $data['runCount'];

    return BuggyModel::updateBuggyPart($buggyId, $partId, $runCount);
  }

  public static function deleteBuggyPart(){
    
    $data = ($_POST);
    $buggyId = $data['buggyId'];
    $partId = $data['partId'];
    return BuggyModel::deleteBuggyPart($buggyId, $partId);
  }
  
}

?>