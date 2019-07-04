<?php
$preString = "api.php/";

// START BUGGY API

Route::set($preString . 'buggies/add', function () {

  $result = Buggy::addBuggy();

  http_response_code($result['code']);
  $response['status_code_header'] = 'HTTP/1.1 ' . $result['code'];
  $response['status_message'] = $result['message'];
  $response['status_code'] = $result['code'];
  echo json_encode($response);
});

Route::set($preString . 'buggies/getall', function () {
  $_SERVER["REQUEST_METHOD"];

  $result = Buggy::getBuggies()->fetchAll();

  $response = json_encode($result);
  echo $response;
});

Route::set($preString . 'buggies/getone', function () {
  if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $result = Buggy::getBuggy($id)->fetchAll();

    $response = json_encode($result[0]);
    echo $response;
  } else {
    // Fallback behaviour goes here
  }
});


Route::set($preString . 'buggies/update', function () {

  $result = Buggy::updateBuggy();

  http_response_code($result['code']);
  $response['status_code_header'] = 'HTTP/1.1 ' . $result['code'];
  $response['status_message'] = $result['message'];
  $response['status_code'] = $result['code'];
  echo json_encode($response);
});

Route::set($preString . 'buggies/delete', function () {

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

Route::set($preString . 'parts/add', function () {

  $result = Part::addPart();

  http_response_code($result['code']);
  $response['status_code_header'] = 'HTTP/1.1 ' . $result['code'];
  $response['status_message'] = $result['message'];
  $response['status_code'] = $result['code'];
  echo json_encode($response);
});

Route::set($preString . 'parts/getall', function () {
  $_SERVER["REQUEST_METHOD"];

  $result = Part::getParts()->fetchAll();

  $response = json_encode($result);
  echo $response;
});

Route::set($preString . 'parts/getone', function () {
  if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $result = Part::getPart($id)->fetchAll();

    $response = json_encode($result[0]);
    echo $response;
  } else {
    // Fallback behaviour goes here
  }
});

Route::set($preString . 'parts/update', function () {

  $result = Part::updatePart();

  http_response_code($result['code']);
  $response['status_code_header'] = 'HTTP/1.1 ' . $result['code'];
  $response['status_message'] = $result['message'];
  $response['status_code'] = $result['code'];
  echo json_encode($response);
});

Route::set($preString . 'parts/delete', function () {

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



// START BUGGY PART API

Route::set($preString . 'buggies/parts/add', function () {

  $result = Buggy::addBuggyPart();

  http_response_code($result['code']);
  $response['status_code_header'] = 'HTTP/1.1 ' . $result['code'];
  $response['status_message'] = $result['message'];
  $response['status_code'] = $result['code'];
  echo json_encode($response);
});

Route::set($preString . 'buggies/parts/getall', function () {
  if (isset($_GET['buggyId'])) {
    $id = $_GET['buggyId'];
    $result = Buggy::getParts($id)->fetchAll();

    $response = json_encode($result);
    echo $response;
  } else {
    // Fallback behaviour goes here
  }
});

Route::set($preString . 'buggies/parts/getone', function () {

  if (isset($_GET['partId']) && isset($_GET['buggyId'])) {
    $buggyId = $_GET['buggyId'];
    $partId = $_GET['partId'];
    $result = Buggy::getPart($buggyId, $partId)->fetchAll();

    $response = json_encode($result[0]);
    echo $response;
  } else {
    // Fallback behaviour goes here
  }
});


Route::set($preString . 'buggies/parts/update', function () {

  $result = Buggy::updateBuggyPart();

  http_response_code($result['code']);
  $response['status_code_header'] = 'HTTP/1.1 ' . $result['code'];
  $response['status_message'] = $result['message'];
  $response['status_code'] = $result['code'];
  echo json_encode($response);
});

Route::set($preString . 'buggies/parts/delete', function () {

  $result = Buggy::deleteBuggyPart();

  http_response_code($result['code']);
  $response['status_code_header'] = 'HTTP/1.1 ' . $result['code'];
  $response['status_message'] = $result['message'];
  $response['status_code'] = $result['code'];
  echo json_encode($response);
});
// END BUGGY PART API


//-----------------------------------------------------------------------
//-----------------------------------------------------------------------
//-----------------------------------------------------------------------


// START TOUR API

Route::set($preString . 'tours/add', function () {

  $result = Tour::addTour();

  http_response_code($result['code']);
  $response['status_code_header'] = 'HTTP/1.1 ' . $result['code'];
  $response['status_message'] = $result['message'];
  $response['status_code'] = $result['code'];
  echo json_encode($response);
});

Route::set($preString . 'tours/getall', function () {
  $_SERVER["REQUEST_METHOD"];

  $result = Tour::getTours()->fetchAll();

  $response = json_encode($result);
  echo $response;
});

Route::set($preString . 'tours/getone', function () {
  if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $result = Tour::getTour($id)->fetchAll();

    $response = json_encode($result[0]);
    echo $response;
  } else {
    // Fallback behaviour goes here
  }
});

Route::set($preString . 'tours/update', function () {

  $result = Tour::updateTour();

  http_response_code($result['code']);
  $response['status_code_header'] = 'HTTP/1.1 ' . $result['code'];
  $response['status_message'] = $result['message'];
  $response['status_code'] = $result['code'];
  echo json_encode($response);
});

Route::set($preString . 'tours/delete', function () {

  $result = Tour::deleteTour();

  http_response_code($result['code']);
  $response['status_code_header'] = 'HTTP/1.1 ' . $result['code'];
  $response['status_message'] = $result['message'];
  $response['status_code'] = $result['code'];
  echo json_encode($response);
});

Route::set($preString . 'tours/group/add', function () {

  $result = Tour::addGroup();

  http_response_code($result['code']);
  $response['status_code_header'] = 'HTTP/1.1 ' . $result['code'];
  $response['status_message'] = $result['message'];
  $response['status_code'] = $result['code'];
  echo json_encode($response);
});

Route::set($preString . 'tours/group/getall', function () {
  if (isset($_GET['member_id'])) {
    $id = $_GET['member_id'];
    $result = Tour::getGroup($member_id)->fetchAll();

    $response = json_encode($result);
    echo $response;
  } else {
    // Fallback behaviour goes here
   echo "boom";
  }
});

Route::set($preString . 'tours/group/getone', function () {

  if (isset($_GET['tour_id']) && isset($_GET['member_id'])) {
    $tour_id = $_GET['tourId'];
    $member_id = $_GET['member_id'];
    $result = Tour::getOne($tour_id, $member_id)->fetchAll();

    $response = json_encode($result[0]);
    echo $response;
  } else {
    // Fallback behaviour goes here
  }
});

Route::set($preString . 'tours/group/update', function () {

  $result = Tour::updateGroup();

  http_response_code($result['code']);
  $response['status_code_header'] = 'HTTP/1.1 ' . $result['code'];
  $response['status_message'] = $result['message'];
  $response['status_code'] = $result['code'];
  echo json_encode($response);
});

Route::set($preString . 'tours/group/delete', function () {

  $result = Tour::deleteGroup();

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


// START CLIENT API

Route::set($preString . 'clients/add', function () {

  $result = Client::addClient();

  http_response_code($result['code']);
  $response['status_code_header'] = 'HTTP/1.1 ' . $result['code'];
  $response['status_message'] = $result['message'];
  $response['status_code'] = $result['code'];
  echo json_encode($response);
});

Route::set($preString . 'clients/getall', function () {
  $_SERVER["REQUEST_METHOD"];

  $result = Client::getAll()->fetchAll();

  $response = json_encode($result);
  echo $response;
});

Route::set($preString . 'clients/getone', function () {
  if (isset($_GET['id'])) {
    $client_id = $_GET['id'];
    $result = Client::getClient($client_id)->fetchAll();

    $response = json_encode($result[0]);
    echo $response;
  } else {
    // Fallback behaviour goes here
  }
});

Route::set($preString . 'clients/update', function () {

  $result = Client::updateClient();

  http_response_code($result['code']);
  $response['status_code_header'] = 'HTTP/1.1 ' . $result['code'];
  $response['status_message'] = $result['message'];
  $response['status_code'] = $result['code'];
  echo json_encode($response);
});

Route::set($preString . 'clients/delete', function () {

  $result = Client::deleteClient();

  http_response_code($result['code']);
  $response['status_code_header'] = 'HTTP/1.1 ' . $result['code'];
  $response['status_message'] = $result['message'];
  $response['status_code'] = $result['code'];
  echo json_encode($response);
});
  // END PART API

  // START INCIDENTS API

Route::set($preString . 'incidents/add', function () {

  $result = Incidents::addIncidents();

  http_response_code($result['code']);
  $response['status_code_header'] = 'HTTP/1.1 ' . $result['code'];
  $response['status_message'] = $result['message'];
  $response['status_code'] = $result['code'];
  echo json_encode($response);
});

Route::set($preString . 'incidents/getall', function () {
  $_SERVER["REQUEST_METHOD"];

  $result = Incidents::getAll()->fetchAll();

  $response = json_encode($result);
  echo $response;
});

Route::set($preString . 'incidents/getone', function () {
  if (isset($_GET['id'])) {
    $Incidents_id = $_GET['id'];
    $result = Incidents::getIncidents($Incidents_id)->fetchAll();

    $response = json_encode($result[0]);
    echo $response;
  } else {
    // Fallback behaviour goes here
  }
});

Route::set($preString . 'incidents/update', function () {

  $result = Incidents::updateIncidents();

  http_response_code($result['code']);
  $response['status_code_header'] = 'HTTP/1.1 ' . $result['code'];
  $response['status_message'] = $result['message'];
  $response['status_code'] = $result['code'];
  echo json_encode($response);
});

Route::set($preString . 'incidents/delete', function () {

  $result = Incidents::deleteIncidents();

  http_response_code($result['code']);
  $response['status_code_header'] = 'HTTP/1.1 ' . $result['code'];
  $response['status_message'] = $result['message'];
  $response['status_code'] = $result['code'];
  echo json_encode($response);
});
  // END iNCIDENTS API