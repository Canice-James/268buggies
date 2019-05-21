<?php 
  
  //Set Route to handle page request
  Route::set('index.php', function() {
    //Load View, paramaters: view name(string), pageData(array), layout(string)
    Home::CreateView('home', null, 'default');
  });

  Route::set('dashboard', function(){
    Dashboard::CreateView('dashboard');
  });

  //Set Route 
  Route::set('buggy', function() {
    //Add variables into an array and pass that array of data into the page
    $pageData = array("variableName"=> "variable to pass into page");
    Buggy::CreateView('buggy', $pageData, 'default');
  });
?>