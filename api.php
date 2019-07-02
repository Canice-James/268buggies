<?php 
  $preString = "api.php/";

 
  Route::set($preString . 'buggies/add', function() {

    $result = Buggy::addBuggy();
    
    http_response_code($result['code']);
    $response['status_code_header'] = 'HTTP/1.1 ' . $result['code'];
    $response['status_message'] = $result['message'];
    $response['status_code'] = $result['code'];
    echo json_encode($response);
  });

  Route::set($preString . 'buggies/getall', function() {
    $_SERVER["REQUEST_METHOD"];

    $result = Buggy::getBuggies()->fetchAll() ;

    $response = json_encode($result);
    echo $response;
  });

  Route::set($preString . 'buggies/getone', function() {
    if (isset($_GET['id'])) {
      $id = $_GET['id'];
      $result = Buggy::getBuggy($id)->fetchAll() ;

      $response = json_encode($result[0]);
      echo $response;

    } else {
        // Fallback behaviour goes here
    }
  });

  Route::set($preString . 'buggies/update', function() {

    $result = Buggy::updateBuggy();
    
    http_response_code($result['code']);
    $response['status_code_header'] = 'HTTP/1.1 ' . $result['code'];
    $response['status_message'] = $result['message'];
    $response['status_code'] = $result['code'];
    echo json_encode($response);
  });

  Route::set($preString . 'buggies/delete', function() {

    $result = Buggy::deleteBuggy();
    
    http_response_code($result['code']);
    $response['status_code_header'] = 'HTTP/1.1 ' . $result['code'];
    $response['status_message'] = $result['message'];
    $response['status_code'] = $result['code'];
    echo json_encode($response);
  });
  
?>