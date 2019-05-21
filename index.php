<?php

include_once './config/database.php';

$db = new Database();
$connection = $db->getConnection();

spl_autoload_register(function ($class_name) use ($connection){
  if (file_exists('./classes/'.$class_name.'.php')) {
    require_once './classes/'.$class_name.'.php';
  }
  else if (file_exists('./controllers/'.$class_name.'Controller.php')) {
    require_once './controllers/'.$class_name.'Controller.php';
  }
  else if (file_exists('./controllers/'.$class_name.'.php')) {
    require_once './controllers/'.$class_name.'.php';
  }

  else if (file_exists('./models/'.$class_name.'.php')) {
    require_once './models/'.$class_name.'.php';
    call_user_func($class_name.'::setConnection', $connection);
  }
});

/*
 * By including routes/Routes.php we get access to the $Routes
 * array containing all of the valid routes for our app.
*/
require_once('routes.php' );


?>