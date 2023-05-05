<?php
// connecting to the database
// connecting to the server
$server = "localhost";
$username = "root";
$password = "";
$db = "crud - json";
$conn = mysqli_connect($server, $username, $password, $db);
if (!$conn) {
     die("❎Failed to connect to server" . mysqli_connect_error());
}

// inserting to the database
echo $_SERVER['REQUEST_METHOD'];
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
     $name = $_POST["Name"];
     $email = $_POST["Email"];
     $note_title = $_POST["Note_Title"];
     $description = $_POST["Description"];
     $sql1 = "INSERT INTO `table - 1` (`Name`, `Email`, `Note_Title`, `Description`, `Dt`) VALUES ( '$name', '$email', '$note_title', '$description', current_timestamp());";
     $result1 = mysqli_query($conn, $sql1);
     if ($result1) {
          echo "<br>Inserted Successfully";
     } else {
          echo "<br>Error " . mysqli_error($conn);
     }
}
?>
<!doctype html>
<html lang="en">

<head>
     <meta charset="utf-8">
     <meta name="viewport" content="width=device-width, initial-scale=1">
     <meta name="author" content="Parmesh Bhatt">
     <title>PHP - CRUD operations</title>
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
</head>

<body>
     <div class="container1">
          <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
               <div class="container-fluid">
                    <img src="./logo.jpeg" alt="Logo" width="60px" height="50px">
                    &nbsp;&nbsp;
                    <a class="navbar-brand" href="https://g.co/kgs/1sFAfp"><u>CRUD Operations</u></a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                         data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                         aria-expanded="false" aria-label="Toggle navigation">
                         <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                         <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                              <li class="nav-item">
                                   <a class="nav-link active" aria-current="page" href="#">iNotes</a>
                              </li>
                              <li class="nav-item">
                                   <a class="nav-link active" aria-current="page" href="#">Home</a>
                              </li>
                              <li class="nav-item">
                                   <a class="nav-link active" href="https://linktr.ee/parmesh119"
                                        title="All my links">Links</a>
                              </li>
                              <li class="nav-item">
                                   <a class="nav-link active"
                                        href="https://source-folio-frontend.vercel.app/portfolio/6443cfd5a33391c8972c914f"
                                        title="Portfolio">My Website</a>
                              </li>
                              <li class="nav-item">
                                   <a class="nav-link active" href="https://linktr.ee/parmeshblogs"
                                        title="All my blogs">Blog</a>
                              </li>
                         </ul>
                         <form class="d-flex" role="search">
                              <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                              <button class="nav-link active btn btn-outline-success" type="submit">Search</button>
                         </form>
                    </div>
               </div>
          </nav>
     </div>
     <form action="./index.php" method="POST">
          <div class="container2  my-3 px-3">
               <h3><u>Add a Note</u></h3>
               <div class="form-text-large" id="basic-addon4">Write your name!</div>
               <div class="input-group mb-3">
                    <span class="input-group-text" id="basic-addon1">@</span>
                    <input type="text" class="form-control" id="name" placeholder="Name" aria-label="Username"
                         aria-describedby="basic-addon1">
               </div>
               <div class="form-text-large" id="basic-addon4">Write your Email!</div>
               <div class="input-group mb-3 my-3">
                    <span class="input-group-text" id="basic-addon2">@</span>
                    <input type="text" class="form-control" id="email" placeholder="Email" aria-label="Username"
                         aria-describedby="basic-addon1">
               </div>
               <!--
          <div class="form-text-large" id="basic-addon4">Write your Age!</div>
          <div class="input-group mb-3 my-3">
               <span class="input-group-text" id="basic-addon2">@</span>
               <input type="number" class="form-control" placeholder="Age" aria-label="Username" aria-describedby="basic-addon1">
          </div>
          -->

               <div class="form-text-large" id="basic-addon4">Note Title</div>
               <div class="input-group mb-3 my-3">
                    <!-- <span class="input-group-text" id="basic-addon2">@</span> -->
                    <input type="text" class="form-control" id="note" placeholder="Note Title" aria-label="Username"
                         aria-describedby="basic-addon1">
               </div>
               <div class="form-text-large" id="basic-addon4">Note Description!</div>
               <div class="input-group mb-3 my-3">
                    <!-- <span class="input-group-text" id="basic-addon2">@</span> -->
                    <textarea id="notes" cols="30" rows="5" id="description" class="form-control"
                         placeholder="Description of the Notes" aria-label="Username"
                         aria-describedby="basic-addon1"></textarea>
                    <!-- <input type="number" class="form-control" placeholder="Age" aria-label="Username" aria-describedby="basic-addon1"> -->
               </div>
          </div>
     </form>
     <button type="button" class="btn btn-dark my-3 mx-3">
          <a href="#detail">Submit</button></a>
     &nbsp;
     <button type="button" class="btn btn-light">Reset</button>

     <div class="container4">
          <h3 class="my-3 mx-3">
               <u id="detail">All details</u>
          </h3>
          <table class="my-3 mx-3 table table-success table-striped">
               <thead>
                    <tr>
                         <th class="table-light" scope="col">Sr_No.</th>
                         <th class="table-light" scope="col">Name</th>
                         <th class="table-light" scope="col">Eamil</th>
                         <th class="table-light" scope="col">Actions</th>
                    </tr>
               </thead>
               <tbody>
                    <tr>
                         <?php
                         echo $_SERVER['REQUEST_METHOD'];
                         $sql3 = "SELECT * FROM `table - 1`";
                         $result3 = mysqli_query($conn, $sql3);
                         while ($row = mysqli_fetch_assoc($result3)) {
                              echo "<tr>
                                        <th scope='row'>" . $row['Sr_No.'] . "</th>
                                             <td>" . $row['Name'] . "</td>
                                             <td>" . $row['Email'] . "</td>
                                             <td>
                                             <select name='select' id='select'>
                                                  <option value='Show'>Show</option>
                                                  <option value='Edit'>Edit</option>
                                                  <option value='Delete'>Delete</option>
                                             </select>
                                             <button type='button' class='btn btn-dark my-1 mx-1'>Go</button>
                                             </td>
                                        </tr>";
                         }

                         ?>
                    </tr>
               </tbody>
          </table>
     </div>
     <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
          integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous">
     </script>
</body>

</html>