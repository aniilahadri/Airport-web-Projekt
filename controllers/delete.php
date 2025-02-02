<?php
CONST BASE_PATH = __DIR__ . "/../";


if(isset($_GET['id'])){
    $userId = $_GET['id']; 


include BASE_PATH .'repository/userRepository.php';

$userRepository = new UserRepository();


$userRepository->deleteUser($userId);


header("location:../controllers/dashboard.php");
exit();
}
if(isset($_GET['ID_Arrival'])){
    $ID_Arrival = $_GET['ID_Arrival']; 


    include BASE_PATH .'repository/flightsRepository.php';
    
    $flightsRepository = new flightsRepository();
    
    
    $flightsRepository->deleteFlight("arrivals","ID_Arrival",$ID_Arrival);
    
    
    header("location:../controllers/dashboard.php");
    exit();
}
else if(isset($_GET['ID_Departure'])){
    $ID_Departure = $_GET['ID_Departure']; 


    include_once BASE_PATH . 'repository/flightsRepository.php';
    
    $flightsRepository = new flightsRepository();
    
    
    $flightsRepository->deleteFlight("departures","ID_Departure",$ID_Departure);
    
    
    header("location:../controllers/dashboard.php");
    exit();
}
else if(isset($_GET['ContactID'])){
    $ContactID = $_GET['ContactID']; 

    include BASE_PATH . "Database.php";

    $db= new Database();

    $sql = "DELETE FROM contactus WHERE ContactID=:ContactID";

        $db->query($sql,[
            ':ContactID'=>$ContactID
        ]); 
    
    
    header("location:../controllers/dashboard.php");
    exit();
}
else if(isset($_GET['Parking_ID'])){
    $Parking_ID = $_GET['Parking_ID']; 


    include BASE_PATH . 'Database.php';

    $db= new Database();
    
    $sql = "DELETE FROM parking WHERE Parking_ID=:Parking_ID";

        $db->query($sql,[
            ':Parking_ID'=>$Parking_ID
        ]); 

        

    header("location:../controllers/dashboard.php");
    exit();
}else{
header("location:../controllers/dashboard.php");
exit();
}


?>