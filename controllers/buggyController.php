<?php

class Buggy extends Controller {


  public static function getBuggies(){
    
    return BuggyModel::getAll();
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


  

}

?>