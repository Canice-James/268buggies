<?php

include_once './config/database.php';
include_once './models/buggy.php';

$db = new Database();
$connection = $db->getConnection();

// $buggy = new Buggy($connection);

// $stmt = $buggy->getAll();
// $count = $stmt->rowCount();


/*
 * By including routes/Routes.php we get access to the $Routes
 * array containing all of the valid routes for our app.
*/
require_once('routes.php' );

function __autoload($class_name) {

  if (file_exists('./classes/'.$class_name.'.php')) {
    require_once './classes/'.$class_name.'.php';
  }
  else if (file_exists('./controllers/'.$class_name.'.php')) {
    require_once './controllers/'.$class_name.'.php';
  }
}

?>