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
     //reading the files
     // readfile('logo.jpeg');
     // echo "<br>";
     // echo "The number of characters are read is ", $a;
     
     // read the file using fread and open the file using fopen() function
     // $fptr = fopen("query.txt", "r") or die("Failed to open");
     // $content=fread($fptr,filesize("query.txt"));
     // echo "<br>";
     // echo $content;
     // fclose($fptr);
     
     //write and append modes in files
     // $fptr = fopen("query.txt", "w") or die("Failed to open");
     // fwrite($fptr, "- Parmesh Bhatt\n");
     // fwrite($fptr, "- Parmesh Bhatt1");
     // fclose($fptr);
     
     //cookie
     // use WPMailSMTP\Vendor\GuzzleHttp\Cookie\SetCookie;
     // use WpOrg\Requests\Cookie;
     // SetCookie("Parmesh", "Bhatt", time() + 86400, "/");
     // echo "The Cookie is set and we are going to use it";
     // $cat = $_COOKIE['Parmesh'];
     // echo "<br>".$cat;
     
     //sessions start
     // session_start();
     // $_SESSION['sessions1'] = 'Parmesh';
     // $_SESSION['Session2'] = "Bhatt";
     // echo "done";
     
     // //Access the data through the session
     // echo "The value of the session1 is ". $_SESSION['sessions1'];
     // echo "and the value of the session2 is ". $_SESSION['Session2'];
     
     // //destroy the session
     // session_unset();    
     // session_destroy();

     
     ?>