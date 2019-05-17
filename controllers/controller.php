<?php 

class Controller {
  public static function CreateView($viewName, $data=null){
    require_once("./views/$viewName.php");
  }
}

?>