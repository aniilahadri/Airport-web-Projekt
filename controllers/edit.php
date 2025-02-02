<?php



CONST BASE_PATH = __DIR__ . "/../";

    
    if(isset($_GET['id'])){
        $userId = $_GET['id'];

        include BASE_PATH .'repository/userRepository.php';
        
        $ur = new UserRepository();

        $user = $ur->getUserById($userId);
        
        if($_SERVER["REQUEST_METHOD"]==="POST"){
            
            $role = $_POST['role'];
            $name = $_POST['name'];
            $email = $_POST['email'];
            $password = $_POST['password'];

            $ur->updateUser($userId,$role,$name,$email,$password);

            header("location:../controllers/dashboard.php"); 
            exit();
    }
}
    if(isset($_GET['ID_Arrival'])){
        $ID_Arrival = $_GET['ID_Arrival'];
        include BASE_PATH .'repository/flightsRepository.php';
        
        $flightsRepository = new flightsRepository();

        $flight = $flightsRepository->getFlightById("arrivals",$ID_Arrival,"ID_Arrival");
        print_r($flight);

        if($_SERVER["REQUEST_METHOD"]==="POST"){
            
            $time = $_POST['time'];
            $origin = $_POST['origin'];
            $destination = $_POST['destination'];
            $airline = $_POST['airline'];
            $flight_id = $_POST['flight_id'];
            $status = $_POST['status'];
            $date = $_POST['date'];
            $takeoff_time = $_POST['takeoff_time'];

            $flightsRepository->updateFlightArrivals($ID_Arrival,$flight_id, $time, $origin,$destination,$airline,$status,$date,$takeoff_time);
            
            
            header("location:../controllers/dashboard.php");
            exit();
        }
    }
    if(isset($_GET['ID_Departure'])){
        $ID_Departure = $_GET['ID_Departure']; 
        include_once BASE_PATH . 'repository/flightsRepository.php';
        
        $flightsRepository = new flightsRepository();
        $flight = $flightsRepository->getFlightById("departures",$ID_Departure,"ID_Departure");
        if($_SERVER["REQUEST_METHOD"]==="POST"){

            $time = $_POST['time'];
            $origin = $_POST['origin'];
            $destination = $_POST['destination'];
            $airline = $_POST['airline'];
            $flight_id = $_POST['flight_id'];
            $status = $_POST['status'];
            $date = $_POST['date'];
            $landing_time = $_POST['landing_time'];

            $flightsRepository->updateFlightDepartures($ID_Departure,$flight_id, $time, $origin,$destination,$airline,$status,$date,$landing_time);
            
            
            header("location:../controllers/dashboard.php");
            exit();
        }
    
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit</title>
</head>
<body>
    <?php if(isset($_GET['id'])) : ?>
    <h3>Edit User</h3>
    <form action="" method="post">
        <input type="text" name="id" value="<?=$user['ID']?>" readonly> <br> <br>

        <input type="text" name="role" value="<?=$user['Role']?>"> <br> <br>
        
        <input type="text" name="name" value="<?=$user['Name']?>"> <br> <br>
        
        <input type="text" name="email" value="<?=$user['Email']?>"> <br> <br>
        
        <input type="text" name="password" value="<?=$user['Password']?>"> <br> <br>

        <input type="submit"  value="Save Changes"> <br> <br>
    </form>
    <?php endif?>

    <?php if(isset($_GET['ID_Arrival'])) : ?>
    <h3>Edit flight</h3>
    <form action="" method="post">
        <input type="text" name="ID_Arrival" value="<?=$flight['ID_Arrival']?>" readonly> <br> <br>

        <input type="text" name="time" value="<?=$flight['Time']?>"> <br> <br>

        <input type="text" name="origin" value="<?=$flight['Origin']?>"> <br> <br>

        <input type="text" name="destination" value="<?=$flight['Destination']?>"> <br> <br>

        <input type="text" name="airline" value="<?=$flight['Airline']?>"> <br> <br>

        <input type="text" name="flight_id" value="<?=$flight['Flight_Id']?>"> <br> <br>

        <input type="text" name="status" value="<?=$flight['Status']?>"> <br> <br>

        <input type="text" name="date" value="<?=$flight['Date']?>"> <br> <br>

        <input type="text" name="takeoff_time" value="<?=$flight['Takeoff_Time']?>"> <br> <br>

        <input type="submit"  value="Save Changes"> <br> <br>
    </form>
    <?php endif?>

    <?php if(isset($_GET['ID_Departure'])) : ?>
    <h3>Edit flight</h3>
    <form action="" method="post">
        <input type="text" name="ID_Departure" value="<?=$flight['ID_Departure']?>" readonly> <br> <br>

        <input type="text" name="time" value="<?=$flight['Time']?>"> <br> <br>

        <input type="text" name="origin" value="<?=$flight['Origin']?>"> <br> <br>

        <input type="text" name="destination" value="<?=$flight['Destination']?>"> <br> <br>

        <input type="text" name="airline" value="<?=$flight['Airline']?>"> <br> <br>

        <input type="text" name="flight_id" value="<?=$flight['Flight_Id']?>"> <br> <br>

        <input type="text" name="status" value="<?=$flight['Status']?>"> <br> <br>

        <input type="text" name="date" value="<?=$flight['Date']?>"> <br> <br>

        <input type="text" name="landing_time" value="<?=$flight['Landing_Time']?>"> <br> <br>

        <input type="submit"  value="Save Changes"> <br> <br>
    </form>
    <?php endif?>
</body>
</html>