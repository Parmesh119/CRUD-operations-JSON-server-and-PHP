<?php
     /*$server = "localhost";
     $username="root";
     $password="";
     $db = "helloo";

     connecting to the server
     $conn=mysqli_connect($server,$username,$password, $db);
     if($conn){
          echo "Seccessfully connected to server";
     }else{
          echo "Failed to connect to server". mysqli_connect_error();
     }

     creating the database
     $sql="CREATE DATABASE helloo";     
     $result1=mysqli_query($conn, $sql);
     if($result1){
          echo "<br>Database Successfully created";
     }else{
          echo "<br>Error " . mysqli_error($conn);
     }
     
     creating table in the database
     $sql1 = "CREATE TABLE `Second_table` (`sno` INT(3) NOT NULL AUTO_INCREMENT , `age` INT(3) NOT NULL, `name` VARCHAR(10) NOT NULL , `phone` INT(10) NOT NULL , PRIMARY KEY (`sno`))";
     $result2 = mysqli_query($conn, $sql1);
     if ($result2) {
          echo "<br>Table Successfully created";
     } else {
          echo "<br>Error " . mysqli_error($conn);
     }
     
     Inserting into the database
     $sql2= "INSERT INTO `first_table` (`age`, `name`, `phone`) VALUES ('32', 'Parmesh1', '9879564022')";
     $result3 = mysqli_query($conn, $sql2);
     if ($result3) {
          echo "<br>Inserted Successfully";
     } else {
          echo "<br>Error " . mysqli_error($conn);
     }

     selecting and displaying the records in the database
$sql3 = "SELECT * FROM `table - 1`";
$result4 = mysqli_query($conn, $sql3);
$row = mysqli_fetch_array($result4);
echo "<br>";
if ($result4) {
     echo $row['Name'];
} else {
     echo "error" . mysqli_error($conn);
}
     while($row = mysqli_num_rows($result4)){
          echo $row['Sr_no']." hello" . $row['name']." welcome to " . $row['description'];
          echo "<br>";
     }
*/
     ?>