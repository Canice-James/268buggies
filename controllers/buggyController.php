<?php

class Buggy extends Controller {


  public static function getBuggies(){
    
    return BuggyModel::getAll();
  }

  

}

?>