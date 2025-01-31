<?php

class Flights {

    private $flight_id;
    private $time;        
    private $origin;         
    private $destination;       
    private $airline;  
    private $status;  
    private $date;  
    

    
    function __construct($flight_id, $time, $origin,$destination,$airline,$status,$date)  {          
        $this->flight_id = $flight_id;             
        $this->time = $time;        
        $this->origin = $origin;   
        $this->destination = $destination;   
        $this->airline = $airline;   
        $this->status = $status;   
        $this->date = $date;   
    }

    function getFlight_id() {
        return $this->flight_id;
    }
    function getTime(){
        return $this->time;
    }

    function getOrigin() {
        return $this->origin;
    }
  
    function getDestination() {
        return $this->destination;
    }

    function getAirline() {
        return $this->airline;
    }
    function getStatus() {
        return $this->status;
    }
    function getDate() {
        return $this->date;
    }
}
?>
