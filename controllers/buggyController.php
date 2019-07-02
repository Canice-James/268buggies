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

}

?>