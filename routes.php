<?php 
  //Load Data Model for Buggies
  $BuggyModel = new BuggyModel($connection);
  
  //Set Route to handle page requests
  Route::set('index.php', function() {
    //Load View
    Index::CreateView('index');
  });

  Route::set('dashboard', function(){
    Dashboard::CreateView('dashboard');
  });

  //Set Route 
  Route::set('buggy', function() use ($BuggyModel){
    $buggies = Buggy::getBuggies($BuggyModel);

    $pageData = array("buggies"=> $buggies, );
    Buggy::CreateView('buggy', $pageData);
  });
?>