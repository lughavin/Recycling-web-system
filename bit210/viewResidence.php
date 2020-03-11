<?php
session_start();
$viewResidence = $_SESSION['user_name'];
?>
<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="Pooria Atarzadeh">
  <title>Housing - View Residence</title>

  <!-- Bootstrap core CSS -->
  <link href="./css/bootstrap-grid.min.css" rel="stylesheet">
  <link href="./css/bootstrap.min.css" rel="stylesheet">

  <!-- CSS styel sheets-->
  <link href="css/custom.css" rel="stylesheet">
  <link href="css/custom1.css" rel="stylesheet">
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


    </div>
    <div >

      <div class="col-sm-9 description">

        <?php
        include "./db.php";

        $sql="SELECT * from residences";
        $result = $conn-> query($sql);

        if ($result-> num_rows > 0) {
          while ($row = $result-> fetch_assoc()) {

            echo "<br>";
            echo "<h4><b>Name: ".$row['residenceName']."</h4></b><br>";

            echo "<img src='images/resi1.jpg' class='rounded' alt='Cinque Terre' width='304' height='236'> <br>";

            echo "Residence ID: Res".$row['id']."<br>";
            echo "Address: ".$row['address']."<br>";
            echo "Amenities: ".$row['amenities']."<br>";
            echo "Monthly Rental: Rm".$row['monthlyRental']."<br>";
            echo "Size per Unit: ".$row['sizePerUnit']." sq.ft <br>";
            echo "Number of Units Available: ".$row['numUnits']."<br><br>";

            echo "<a href='submitApplication.php'> 
            <button type='button' class='btn btn-primary'>
            Apply
            </button>
            </a>";

          }
        }else{
          echo "";
        }

        ?>


      </div>

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
crossorigin="anonymous"></script>
<script src="./js/bootstrap.bundle.min.js" ></script>
</body>
</html>
