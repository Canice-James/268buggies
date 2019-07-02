<?php 
  $preString = "api.php/";

  // START BUGGY API

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
  // END BUGGY API


//-----------------------------------------------------------------------
//-----------------------------------------------------------------------
//-----------------------------------------------------------------------


  // START PART API

  Route::set($preString . 'parts/add', function() {

    $result = Part::addPart();
    
    http_response_code($result['code']);
    $response['status_code_header'] = 'HTTP/1.1 ' . $result['code'];
    $response['status_message'] = $result['message'];
    $response['status_code'] = $result['code'];
    echo json_encode($response);
  });

  Route::set($preString . 'parts/getall', function() {
    $_SERVER["REQUEST_METHOD"];

    $result = Part::getParts()->fetchAll() ;

    $response = json_encode($result);
    echo $response;
  });

  Route::set($preString . 'parts/getone', function() {
    if (isset($_GET['id'])) {
      $id = $_GET['id'];
      $result = Part::getPart($id)->fetchAll() ;

      $response = json_encode($result[0]);
      echo $response;

    } else {
        // Fallback behaviour goes here
    }
  });

  Route::set($preString . 'parts/update', function() {

    $result = Part::updatePart();
    
    http_response_code($result['code']);
    $response['status_code_header'] = 'HTTP/1.1 ' . $result['code'];
    $response['status_message'] = $result['message'];
    $response['status_code'] = $result['code'];
    echo json_encode($response);
  });

  Route::set($preString . 'parts/delete', function() {

    $result = Part::deletePart();
    
    http_response_code($result['code']);
    $response['status_code_header'] = 'HTTP/1.1 ' . $result['code'];
    $response['status_message'] = $result['message'];
    $response['status_code'] = $result['code'];
    echo json_encode($response);
  });
  // END PART API


  //-----------------------------------------------------------------------
  //-----------------------------------------------------------------------
  //-----------------------------------------------------------------------


  // START TOUR API

  Route::set($preString . 'tours/add', function() {

    $result = Tour::addTour();

    http_response_code($result['code']);
    $response['status_code_header'] = 'HTTP/1.1 ' . $result['code'];
    $response['status_message'] = $result['message'];
    $response['status_code'] = $result['code'];
    echo json_encode($response);
  });

  Route::set($preString . 'tours/getall', function() {
    $_SERVER["REQUEST_METHOD"];

    $result = Tour::getTours()->fetchAll() ;

    $response = json_encode($result);
    echo $response;
  });

  Route::set($preString . 'tours/getone', function() {
    if (isset($_GET['id'])) {
      $id = $_GET['id'];
      $result = Tour::getTour($id)->fetchAll() ;

      $response = json_encode($result[0]);
      echo $response;

    } else {
        // Fallback behaviour goes here
    }
  });

  Route::set($preString . 'tours/update', function() {

    $result = Tour::updateTour();
    
    http_response_code($result['code']);
    $response['status_code_header'] = 'HTTP/1.1 ' . $result['code'];
    $response['status_message'] = $result['message'];
    $response['status_code'] = $result['code'];
    echo json_encode($response);
  });

  Route::set($preString . 'tours/delete', function() {

    $result = Tour::deleteTour();
    
    http_response_code($result['code']);
    $response['status_code_header'] = 'HTTP/1.1 ' . $result['code'];
    $response['status_message'] = $result['message'];
    $response['status_code'] = $result['code'];
    echo json_encode($response);
  });
  // END PART API
?>