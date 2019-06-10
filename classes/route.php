<?php 
class Route {

  public static $validRoutes= array();

  public static function set($route, $function){
    self::$validRoutes[] = $route;

    //print_r(self::$validRoutes);
    //print_r($_GET['url']);
    if ($_GET['url'] == $route){
      $function->__invoke();
    }
  }
}
?>