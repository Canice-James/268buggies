<?php

class Buggy extends Controller {

  public static function getBuggies($BuggyModel){
    //echo "buggy models" . var_dump($BuggyModel) . "\n";
    return $BuggyModel->getAll();
  }
  
}

?>