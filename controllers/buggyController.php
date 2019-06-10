<?php

class Buggy extends Controller {


  public static function getBuggies(){
    
    return BuggyModel::getAll();
  }

  public static function addBuggy(){
    
    $data = json_decode(file_get_contents("php://input"));

    $id = "testId";
    $colour = $data->colour;
    $duration = $data->duration;
    $runCount = $data->runCount;
    $runLeft = $data->runLeft;

    return BuggyModel::create($id, $colour, $duration, $runCount, $runLeft );
  }


  

}

?>