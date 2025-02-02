<?php
class Departures extends Flights{
    private $id_departures;
    private $landing_time;

    function __construct($flight_id, $time,$destination,$airline,$status,$date,$landing_time){
        Flights::__construct($flight_id, $time, "Kosove",$destination,$airline,$status,$date);
        $this->landing_time = $landing_time;
    }
    function getIdDeparture() {
        return $this->id_departures;
    }
    function getLandingTime(){
        return $this->landing_time;
    }
}



?>