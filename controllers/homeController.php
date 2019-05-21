<?php

class Home extends Controller {
  
  public static function getTours(){
    return TourModel::getAll();
  }

  public static function getIncidents(){
    return IncidentModel::getAll();
  }

  public static function getRecentIncidentDate(){
    return IncidentModel::getMostRecentDate();
  }
}

?>