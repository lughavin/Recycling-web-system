<?php
session_start();
$appealRejections = $_SESSION['user_name'];
?>
<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="Pooria Atarzadeh">
  <title>Housing - Appeal Rejection</title>

  <!-- Bootstrap core CSS -->
  <link href="./css/bootstrap-grid.min.css" rel="stylesheet">
  <link href="./css/bootstrap.min.css" rel="stylesheet">

  <!-- CSS Style sheet -->
  <link href="css/custom.css" rel="stylesheet">
  <link href="css/custom1.css" rel="stylesheet">
  <!-- Java script -->
  <script type="text/javascript" src="js/custom1.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
</head>
<body>

  <header id="header-bg" class="mini">
    <nav class="navbar navbar-expand-lg navbar-dark">
      <a class="navbar-brand" href="./index.php">Recycables</a>
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
      <blockquote class="blockquote text-center">
        <h4>Rejected Applications</h4>
        <table>
          <tr>
            <th>Residence ID</th>
            <th>Application date</th>
            <th>Status</th>
          </tr>
          
          <?php
          
  include "./db.php";

          $sql="SELECT applicationDate, status, residence from application Where status='Rejected'";
          $result = $conn-> query($sql);

          if ($result-> num_rows > 0) {
            while ($row = $result-> fetch_assoc()) {
              echo "<tr><td>". $row["residence"]."</td><td>".$row["applicationDate"]."</td><td>".$row["status"]."</td></tr>";
              # code...
            }
            echo "</table>";
            # code...
          }
        else{
          echo "0 results";
        }

        

        ?>
      </table>
      <br>


    </blockquote>

    <h4>Appeal Application</h4>

  </div>

  
  <form id="appeal" action="CodeAppeal.php" method="POST" enctype="multipart/form-data" >

    <p><h5>Reason for Appeal</h5></p>

    <select name="appID" >
      <option>
        <?php  
        

        $sql="SELECT residence, applicationDate, status from application Where status='Rejected'";
        $result = $conn-> query($sql);

        if ($result) {
          while ($row= mysqli_fetch_array($result)) {
            $new=$row["residence"];
            echo " Residence ID <br> <option>$new<br></option>";
          }
        }
          $conn ->close();
          ?>

        </option>


      </select>
      <br><br>

      <textarea name="reason"></textarea>

      <input type="file" name="uploadfile"> <br><br>


      <input type ="checkbox" name="valid" id="value" value="upload" checked="checked" " onchange="document.getElementById('uploadfilesub').disabled = !this.checked;" /> You can only Appeal once are you sure !<br>

      

      <button name="uploadfilesub" id="uploadfilesub" value="upload" onclick="myappeal()">Appeal</button>

    </form>
    

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
