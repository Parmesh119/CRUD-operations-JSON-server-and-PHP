<?php

?>
<!DOCTYPE html>
<html lang="en">
<head>
     <meta charset="UTF-8">
     <meta http-equiv="X-UA-Compatible" content="IE=edge">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>PHP - Project</title>
     <link rel="stylesheet" href="./style.css">
</head>
<body>
     <form action="./01_index.php" method="post">
          <img class="bgi" src="./image/Background.jpg" alt="IIT Image">
     <div class="container">
          <p>Trip Registration Form</p>
          <br>
          <input type="text" name="name" id="name" placeholder="name">
          <br>
          <input type="tel" name="phone" id="phone" placeholder="phone">
          <br>
          <input type="email" name="email" id="email" placeholder="email">
          <br>
          <input type="text" name="b_date" id="b_date" placeholder="birth_date">
          <br>
          <input type="number" name="age" id="age" placeholder="age">
          <br>
          <select name="gender" id="gender">
               <option value="Select">Gender</option>
               <option value="Male">Male</option>
               <option value="Female">Female</option>
               <option value="Other">Other</option>
          </select>
          <br>
          <button class="submit">Submit</button>
          <button class="reset">Reset</button>
          <?php 
          $insert = false;
if($_SERVER['REQUEST_METHOD'] == 'POST'){
if(isset($_POST['name'])){
     $server = "localhost";
     $password = "";
     $username = "root";
     $con = mysqli_connect($server,$username,$password);
     if(!$con){
          echo "Error" . mysqli_connect_error();
     }
     $name = $_POST['name'];
     $phone  =$_POST['phone'];
     $email = $_POST['email'];
     $b_date = $_POST['b_date'];
     $age = $_POST['age'];
     $gender = $_POST['gender'];
     $sql = "INSERT INTO `trip_web`.`trip` (`Name`, `phone`, `email`, `birtth_date`, `age`, `gender`, `dt`) VALUES ('$name','$phone', '$email', '$b_date', '$age', '$gender', current_timestamp());";
     // echo $sql;

     if($con->query($sql) == true){
          echo '<div class="alert alert-warning alert-dismissible fade show" role="alert"><p class="text-primary"><strong>Success!</strong> The form has been submitted</p>
  
</div>';
          $insert=true;
     }else{
          echo "Error : $sql <br> $con->error";
          $insert=false;
     }
     $con->close();
     }
     }
               if($insert == true){
                    echo "Success"; 
               } 
          ?>
          
     </div>
     </form>
     <!-- <script src="./demo.js"></script> -->
</body>
</html>