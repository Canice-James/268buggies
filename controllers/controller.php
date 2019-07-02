<?php 

class Controller {
  public static function CreateView($viewName, $data=array(), $layout=null){
    
    $data['view'] = "$viewName";
    if ($layout != null){ //If using layout run output buffering
      ob_start(); 
    } 
    
    require_once("./views/$viewName.php"); //Load view

    if ($layout != null){ //If using layout run output buffering
      $content = ob_get_clean(); //Save view content into variable
      self::UseLayout('default', $content, $data); //pass content into layout
    }
  }

  public static function UseLayout($layoutName, $content, $data=null){
    require_once("./layouts/$layoutName.php");
  }
}

?>