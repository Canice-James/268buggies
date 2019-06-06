<?php

class Part extends Controller {


  public static function getParts(){
    
    return PartModel::getAll();
  }

  

}

?>