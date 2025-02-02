<?php

$errors = [];
const BASE_PATH = __DIR__ . '/../';

if(isset($_GET['user'])){
    if($_SERVER["REQUEST_METHOD"]==="POST"){
        include BASE_PATH .'repository/userRepository.php';
        include BASE_PATH .'models/user.php';
    
        $ur = new UserRepository();

        if (empty($_POST['name']) || empty($_POST['email']) || empty($_POST['password'])) {
            echo "Fill all the fields!";
         

        }else {
        
        $name = $_POST['name'];
        $email = $_POST['email'];
        $password = $_POST['password'];
      
          $db = new Database();
      
          $userExist = $db->query("select * from user where email = :email", [
              "email" => $email,
          ])->fetch();
      
          if($userExist) {
            $errors = [
              'exists' => 'User already exists!'
            ];
           
            } else {
            
            $user = new User($id,$name, $email, $password);
            

            $ur->insertUser($user);

            header("location:../controllers/dashboard.php"); 
            exit();
            }
        }
    }
}
    if(isset($_GET['arrivals'])){
        include BASE_PATH .'repository/flightsRepository.php';
        
        
        $flightsRepository = new flightsRepository();

        if($_SERVER["REQUEST_METHOD"]==="POST"){
            
            if (empty($_POST['time']) || empty($_POST['origin']) || empty($_POST['airline'])||
             empty($_POST['flight_id']) || empty($_POST['status']) || empty($_POST['status']) || empty($_POST['date']) || empty($_POST['time'])|| empty($_POST['takeoff_time'])) {
                echo "Fill all the fields!";
            }else{
                include BASE_PATH .'models/flights.php';
                include BASE_PATH .'models/arrivals.php';
                $time = $_POST['time'];
                $origin = $_POST['origin'];
                $airline = $_POST['airline'];
                $flight_id = $_POST['flight_id'];
                $status = $_POST['status'];
                $date = $_POST['date'];
                $takeoff_time = $_POST['takeoff_time'];

                $arrival = new Arrivals($flight_id,$time,$origin,$airline,$status,$date,$takeoff_time);
                print_r($arrival);
                $flightsRepository->insertFlight($arrival);
                
                
                header("location:../controllers/dashboard.php");
                exit();
            }
        }
    }
    if(isset($_GET['departures'])){
        include_once BASE_PATH . 'repository/flightsRepository.php';
        
        $flightsRepository = new flightsRepository();
        if($_SERVER["REQUEST_METHOD"]==="POST"){

            if (empty($_POST['time']) || empty($_POST['destination']) || empty($_POST['airline'])||
             empty($_POST['flight_id']) || empty($_POST['status']) || empty($_POST['status']) || empty($_POST['date']) || empty($_POST['time'])|| empty($_POST['landing_time'])) {
            echo "Fill all the fields!";
            }
            else{
                include BASE_PATH .'models/flights.php';
                include BASE_PATH .'models/departures.php';
                $time = $_POST['time'];
                $destination = $_POST['destination'];
                $airline = $_POST['airline'];
                $flight_id = $_POST['flight_id'];
                $status = $_POST['status'];
                $date = $_POST['date'];
                $landing_time = $_POST['landing_time'];

                $departures = new Departures($flight_id,$time,$destination,$airline,$status,$date,$landing_time);
                print_r($departures);
                $flightsRepository->insertFlight($departures);
                
                
                header("location:../controllers/dashboard.php");
                exit();
            }
        }

}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div style="display: flex; justify-content:center;width:50%; margin:0 auto; flex-direction:column; align-items:center">
    <?php if(isset($_GET['user'])) : ?>
    <h3>Insert User</h3>
    <form action="" method="post">
        <label for="name">Name</label>
        <input type="text" name="name"> <br> <br>


        <label for="email">Email</label>
        <input type="text" name="email" > <br> <br>


        <label for="password">Password</label>
        <input type="text" name="password"> <br> <br>
        <?php if(isset($errors['exists'])):?>
            <p style="color:red;margin:0;opacity:0.8"> 
              <?= $errors['exists']?>
            </p>
        <?php endif; ?>

        <input type="submit"  value="Save Changes"> <br> <br>
    </form>
    <?php endif?>

    <?php if(isset($_GET['arrivals'])) : ?>
    <h3>Insert flight</h3>
    <form action="" method="post">
        <label for="time">Time</label>
        <input type="text" name="time"> <br> <br>

        <label for="origin">Origin</label>
        <input type="text" name="origin"> <br> <br>

        <label for="airline">Airline</label>
        <input type="text" name="airline"> <br> <br>

        <label for="flight_id">Flight ID</label>
        <input type="text" name="flight_id"> <br> <br>

        <label for="status">Status</label>
        <input type="text" name="status"> <br> <br>

        <label for="date">Date</label>
        <input type="text" name="date"> <br> <br>

        <label for="takeoff_time">Takeoff time</label>
        <input type="text" name="takeoff_time"> <br> <br>
    
        <input type="submit"  value="Save Changes"> <br> <br>
    </form>
    <?php endif?>

    <?php if(isset($_GET['departures'])) : ?>
    <h3>Insert flight</h3>
    <form action="" method="post">

        <label for="time">Time</label>
        <input type="text" name="time"> <br> <br>

        <label for="destination">Destination</label>
        <input type="text" name="destination"> <br> <br>

        <label for="airline">Airline</label>
        <input type="text" name="airline"> <br> <br>

        <label for="flight_id">Flight ID</label>
        <input type="text" name="flight_id"> <br> <br>

        <label for="status">Status</label>
        <input type="text" name="status"> <br> <br>

        <label for="date">Date</label>
        <input type="text" name="date"> <br> <br>

        <label for="landing_time">Landing time</label>
        <input type="text" name="landing_time"> <br> <br>
        

        <input type="submit"  value="Save Changes"> <br> <br>
    </form>
    <?php endif?>
    </div>
</body>
</html>