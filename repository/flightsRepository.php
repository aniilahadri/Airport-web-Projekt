<?php

//const BASE_PATH = __DIR__ . '/../';
include __DIR__ . '/../' . 'Database.php';


class userRepository{
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

            $sql = "INSERT INTO arrivals (time,origin,destination,airline,flight_id,status,date,takeoff_time) VALUES (:time,:origin,:destination,:airline,:flight_id,:status,:date,:landing_time)";

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

            echo "<script> alert('User has been inserted successfully!'); </script>";//fix

        }else{

            $flight_id = $flight->getFlight_id();            
            $time =  $flight->getTime();      
            $origin =  $flight->getOrigin();
            $destination =  $flight->getDestination();  
            $airline =  $flight->getAirline();
            $status =  $flight->getStatus();
            $date =  $flight->getDate();
            $landing_time =$flight-> getLandingTime();

            $sql = "INSERT INTO departures (time,origin,destination,airline,flight_id,status,date,landing_time) VALUES (:time,:origin,:destination,:airline,:flight_id,:status,:date,:landing_time)";
            
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

            echo "<script> alert('User has been inserted successfully!'); </script>";//fix
        }

   
    }

    function getAllFlights($flight_Type) { //returns flights by the type we send
        $conn = $this->connection;

        $sql = "SELECT * FROM $flight_Type";

        
        $flights = $conn->query($sql)->fetchAll(); 

        return $flights; 
    }

    
    function getFlightById($flight_Type,$flight_id) {
        $conn = $this->connection;

     
        $sql = "SELECT * FROM $flight_Type WHERE flight_id='$flight_id'";

        
        $flight = $conn->query($sql)->fetch(); 

        return $flight;
    }


    function updateFlightDepartures($flight_id,$time,$origin,$destination,$airline,$status,$date,$landing_time){
        $conn = $this->connection;

        $sql = "INSERT INTO departures (time,origin,destination,airline,flight_id,status,date,landing_time) VALUES (:time,:origin,:destination,:airline,:flight_id,:status,:date,:landing_time)";
        
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

        echo "<script>alert('Update was successful');</script>";
    }


    function updateFlightArrivals($flight_id, $time, $origin,$destination,$airline,$status,$date,$takeoff_time) {
        $conn = $this->connection;


        $sql = "INSERT INTO arrivals (time,origin,destination,airline,flight_id,status,date,takeoff_time) VALUES (:time,:origin,:destination,:airline,:flight_id,:status,:date,:landing_time)";

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


        echo "<script>alert('Update was successful');</script>";
    }

    
    function deleteUser($flight_Type,$flight_id) {
        $conn = $this->connection;

      
        $sql = "DELETE FROM $flight_Type WHERE flight_id=:flight_id";

        $conn->query($sql,[
            ':flight_id'=>$flight_id
        ]); 

        echo "<script>alert('Delete was successful');</script>";
    }

}


?>
