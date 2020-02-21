<?php
session_start();
$submitApplication = $_SESSION['user_name'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8" />
  <meta
  name="viewport"
  content="width=device-width, initial-scale=1, shrink-to-fit=no"
  />
  <meta name="description" content="" />
  <meta name="author" content="Pooria Atarzadeh" />
  <title>Housing - Submit Application</title>

  <!-- Bootstrap core CSS -->
  <link href="./css/bootstrap-grid.min.css" rel="stylesheet" />
  <link href="./css/bootstrap.min.css" rel="stylesheet" />

  <!-- CSS Style sheets -->
  <link href="css/custom.css" rel="stylesheet" />
  <link href="css/custom1.css" rel="stylesheet" />
  <!-- java script -->
  <script type="text/javascript" src="js/custom1.js"></script>
</head>
<body>
  <header id="header-bg" class="mini">
    <nav class="navbar navbar-expand-lg navbar-dark">
      <a class="navbar-brand" href="./index.php">MHS</a>
      <button
      class="navbar-toggler"
      type="button"
      data-toggle="collapse"
      data-target="#navbarTogglerDemo02"
      aria-controls="navbarTogglerDemo02"
      aria-expanded="false"
      aria-label="Toggle navigation"
      >
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
      <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
        <li class="nav-item active">
          <a class="nav-link" href="viewResidence.php">View Residence </a>
        </li>
        <li class="nav-item active">
          <a class="nav-link" href="viewApplicant.php">View Applications </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="submitApplication.php"
          >Submit Application</a
          >
        </li>
        <li class="nav-item">
          <a class="nav-link" href="appealRejections.php"
          >Appeal Rejection</a
          >
        </li>
      </ul>

      <a href="./logout.php" class="nav-link">Log Out</a>
    </div>
  </nav>
</header>

<div class="container" id="main">
  <div class="row">
    <div class="col-12">
      <?php 
             echo "loged in as ".$submitApplication;
              ?>
      <blockquote class="blockquote text-center">
        <div class="card">
          <div class="card-body">
            <h3 class="card-title">Application Form</h3>
            
            <p class="card-text">
              Apply for the accomodation of your choice here
            </p>
            <!-- form for applying for a residence -->
            <form method="post" action="./CodeSubmitApplication.php" >
             <select name="id" >
                <?php  
               include "./db.php";


                

                $sql="SELECT residenceName,id from residences";

                //$q="insert into application (userName) values('$submitApplication');";
                

                $result = $conn-> query($sql);
                //$result2 = $conn-> query($q);


                if ($result ||$result2) {
                  while ($row= mysqli_fetch_array($result)) {
                    $res=$row["residenceName"];
                   $resID=$row["id"];
                   echo " <br> <option value='". $resID ."'>Residence: $res<br></option>";
                   

                  
                 }
               }
               $conn ->close();
               ?>


           </select>
           <div class="form-group">
            <label for="Date">Required Date:</label>
            <input type="date" class="form-control" name="Date" />
          </div>

          <!-- calls funtions to display alert -->
          <button
          type="submit"
          class="btn btn-primary"
          onclick="mysub()"
          >
          Submit
        </button>
      </form>
    </div>
  </div>
</blockquote>
</div>
</div>
</div>
<footer id="main-footer">
  <div class="row">
    <div class="col-9">
      <small>Made in Help University &copy; 2019</small>
    </div>

    <div class="col-1">
      <a href="./index.php">Home</a>
    </div>
    <div class="col-1">
      <a href="#">About</a>
    </div>
    <div class="col-1">
      <a href="#">Contact</a>
    </div>
  </div>
</footer>
<script
src="https://code.jquery.com/jquery-3.4.1.min.js"
integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo="
crossorigin="anonymous"
></script>
<script src="./js/bootstrap.bundle.min.js"></script>
</body>
</html>
