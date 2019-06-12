<?php 
  $preString = "api/";

 
  Route::set($preString . 'BuggyController-addBuggy', function() {
    $_SERVER["REQUEST_METHOD"];
    //Add variables into an array and pass that array of data into the page
    // $pageData = array("variableName"=> "variable to pass into page");
    $result = Buggy::addBuggy()->execute();

    http_response_code($result->code);
    $response['status_code_header'] = 'HTTP/1.1 ' . $result->code;
    $response['status_message'] = $result->message;
    $response['body'] = json_encode($result);
    echo json_encode($response);
  });

  Route::set($preString . 'BuggyController-getBuggies', function() {
    $_SERVER["REQUEST_METHOD"];

    $result = Buggy::getBuggies()->fetchAll() ;

    $response['body'] = json_encode($result);
    echo json_encode($response);
  });

  
?>