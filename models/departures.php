<?php
class Departures extends Flights{
    private $id_departures;
    private $landing_time;

    function __construct($flight_id, $time, $origin,$destination,$airline,$status,$date,$id_departures,$landing_time){
        Flights::__construct($flight_id, $time, $origin,$destination,$airline,$status,$date);
        $this->id_departures = $id_departures;
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