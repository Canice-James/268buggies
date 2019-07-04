<?php 
  
  //Set Route to handle page request
  Route::set('index.php', function() {
    //Load View, paramaters: view name(string), pageData(array), layout(string)
    Home::CreateView('home', null, 'default');
  });

  Route::set('parts', function(){
    Part::CreateView('parts', null, 'default');
  });

  //Set Route 
  Route::set('buggies', function() {
    //Add variables into an array and pass that array of data into the page
    $pageData = array("variableName"=> "variable to pass into page");
    Buggy::CreateView('buggies', null, 'default');
  });

  //Set Route 
  Route::set('tours', function() {
    //Add variables into an array and pass that array of data into the page
    Buggy::CreateView('tours', null, 'default');
  });

  //Set Route 
  Route::set('clients', function() {
    //Add variables into an array and pass that array of data into the page
    Client::CreateView('clients', null, 'default');
  });

    //Set Route 
    Route::set('incidents', function() {
      //Add variables into an array and pass that array of data into the page
      Client::CreateView('incidents', null, 'default');
    });

  require_once("./api.php"); //Load view
?>