<?php

include __DIR__ . '/../' . 'Database.php';


class flightsRepository{
    private $connection; 

   
    function __construct() {
        $db = new Database();
        $this->connection = $db; 
    }


    function insertFlight($flight) {
        $conn = $this->connection;

        if($flight instanceof Arrivals){

            $flight_id = $flight->getFlight_id();            
            $time =  $flight->getTime();      
            $origin =  $flight->getOrigin();
            $destination =  $flight->getDestination();  
            $airline =  $flight->getAirline();
            $status =  $flight->getStatus();
            $date =  $flight->getDate();
            $takeoff_time=$flight->getTakeoffTime();

            $sql = "INSERT INTO arrivals (Time,Origin,Destination,Airline,Flight_Id,Status,Date,Takeoff_Time) VALUES (:time,:origin,:destination,:airline,:flight_id,:status,:date,:takeoff_time)";

            $conn->query($sql,[
                ':time'=>$time,
                ':origin'=>$origin,
                ':destination'=>$destination,
                ':airline'=>$airline,
                ':flight_id'=>$flight_id,
                ':status'=>$status,
                ':date'=>$date,
                ':takeoff_time'=>$takeoff_time
            ]);

        }else{

            $flight_id = $flight->getFlight_id();            
            $time =  $flight->getTime();      
            $origin =  $flight->getOrigin();
            $destination =  $flight->getDestination();  
            $airline =  $flight->getAirline();
            $status =  $flight->getStatus();
            $date =  $flight->getDate();
            $landing_time =$flight-> getLandingTime();

            $sql = "INSERT INTO departures (Time,Origin,Destination,Airline,Flight_Id,Status,Date,Landing_Time) VALUES (:time,:origin,:destination,:airline,:flight_id,:status,:date,:landing_time)";
            
            $conn->query($sql,[
                ':time'=>$time,
                ':origin'=>$origin,
                ':destination'=>$destination,
                ':airline'=>$airline,
                ':flight_id'=>$flight_id,
                ':status'=>$status,
                ':date'=>$date,
                ':landing_time'=>$landing_time
            ]);
        }
    }

    function getAllFlights($flight_Type) { 
        $conn = $this->connection;

        $sql = "SELECT * FROM $flight_Type";

        
        $flights = $conn->query($sql)->fetchAll(); 

        return $flights; 
    }

    
    function getFlightById($flight_Table,$flight_id,$flight_type) {
        $conn = $this->connection;

        $sql = "SELECT * FROM $flight_Table WHERE $flight_type='$flight_id'";

        $flight = $conn->query($sql)->fetch(); 

        return $flight;
    }


    function updateFlightDepartures($id_departure,$flight_id,$time,$origin,$destination,$airline,$status,$date,$landing_time){
        $conn = $this->connection;

        $sql = "UPDATE departures SET time=:time,origin=:origin,destination=:destination,airline=:airline,flight_id=:flight_id,status=:status,date=:date,landing_time=:landing_time where ID_Departure=$id_departure";

        $conn->query($sql,[
            ':time'=>$time,
            ':origin'=>$origin,
            ':destination'=>$destination,
            ':airline'=>$airline,
            ':flight_id'=>$flight_id,
            ':status'=>$status,
            ':date'=>$date,
            ':landing_time'=>$landing_time
            ]);
    }


    function updateFlightArrivals($id_arrival,$flight_id, $time, $origin,$destination,$airline,$status,$date,$takeoff_time) {
        $conn = $this->connection;


        $sql = "UPDATE arrivals SET time=:time,origin=:origin,destination=:destination,airline=:airline,flight_id=:flight_id,status=:status,date=:date,takeoff_time=:takeoff_time where ID_Arrival=$id_arrival";

        $conn->query($sql,[
            ':time'=>$time,
            ':origin'=>$origin,
            ':destination'=>$destination,
            ':airline'=>$airline,
            ':flight_id'=>$flight_id,
            ':status'=>$status,
            ':date'=>$date,
            ':takeoff_time'=>$takeoff_time
            ]);

    }

    
    function deleteFlight($flight_table,$flight_type,$flight_id) {
        $conn = $this->connection;

        $sql = "DELETE FROM $flight_table WHERE $flight_type=:flight_id";

        $conn->query($sql,[
            ':flight_id'=>$flight_id
        ]); 
    }
}


?>
