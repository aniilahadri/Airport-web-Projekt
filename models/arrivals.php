<?php
class Arrivals extends Flights{
    private $id_arrival;
    private $takeoff_time;

    function __construct($flight_id, $time, $origin,$destination,$airline,$status,$date,$id_arrival,$takeoff_time){
        Flights::__construct($flight_id, $time, $origin,$destination,$airline,$status,$date);
        $this->id_arrival = $id_arrival;
        $this->takeoff_time = $takeoff_time;
    }
    function getIdArrival() {
        return $this->id_arrival;
    }
    function getTakeoffTime(){
        return $this->takeoff_time;
    }
}



?>