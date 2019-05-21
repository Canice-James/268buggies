<?php 
  
  
  //Set Route to handle page requests
  Route::set('index.php', function() {
    //Load View
    Index::CreateView('index', null, 'default');
  });

  Route::set('dashboard', function(){
    Dashboard::CreateView('dashboard');
  });

  //Set Route 
  Route::set('buggy', function() {
    $buggies = Buggy::getBuggies();
    
    $pageData = array("buggies"=> $buggies);
    Buggy::CreateView('buggy', $pageData, 'default');
  });
?>