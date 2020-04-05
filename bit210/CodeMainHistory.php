


<?php
session_start();
$appealRejections = $_SESSION['findUser'];
?>
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="Pooria Atarzadeh">
    <title>EcoSave - Maintain Material</title>

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
            <a class="navbar-brand" href="./index.php"><b>Recycables</b></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
                <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
                    <li class="nav-item active">
                        <a class="nav-link" href="viewSubmissionsHistory.php"><b>View submission histroy </b></a>
                    </li>
                </ul>
                <a href="./logout.php" class="nav-link"><b>Log Out</b></a>
            </div>
        </nav>

    </header>

    <div class="container" id="main">
        <div class="row">
            <div class="col-12">
                <blockquote class="blockquote text-center">
                <?php
                  include "./db.php";

                  $ID=$_POST["matID"];
                   echo"Submission for Material ID: ".$ID;
                ?>

                <table class="table">
                  <tr class="thead-dark">
                      <th>Collector</th>
                      <th>Recycler</th>
                      <th>Status</th>
                      <th>Weight</th>
                      <th>Points Awarded</th>
                  </tr>

                  <?php

                    $sql="SELECT * FROM materials WHERE id='$ID'";
                    $result = mysqli_query($conn, $sql) or die(mysqli_error($conn));

                   while($row = mysqli_fetch_assoc($result) ) {

                     $sql3="SELECT * FROM makeappointment WHERE materialID ='{$row['id']}'";
                     $result3 = $conn-> query($sql3);

                     if ($result3-> num_rows > 0) {
                        while ($row3 = $result3-> fetch_assoc()) {
                          echo "<tr><td>". $row3["userID"]."</td><td>".$row3["recyclerName"]."</td><td>".$row3["status"]."</td><td>".$row3["weight"]."</td><td>".$row3["pointAwarded"]."</td></tr>";
                          # code...
                        }
                        echo "</table>";
                        # code...
                      }
                      else{
                        echo "No submisions found";
                      }
                    }


                  ?>
                </table>

                <?php
                   $qry="SELECT SUM(weight) As count
                         FROM makeappointment
                         WHERE materialID='$ID'";
                  $res = $conn->query($qry);

                  $total = 0;
                  $rec = $res->fetch_assoc();
                  $total = $rec['count'];

                  echo "Total weight of material : " . $total . " Kgs, \n";


                   $qry2="SELECT SUM(pointAwarded) As count
                           FROM makeappointment
                           WHERE materialID='$ID'";
                    $res2 = $conn->query($qry2);

                    $total2 = 0;
                    $rec2 = $res2->fetch_assoc();
                    $total2 = $rec2['count'];

                    echo "\nTotal Points of material : " . $total2 . " \n";
                     $conn->close();
                ?>

                </blockquote>
            </div>
        </div>
    </div>
    <footer id="main-footer">
        <div class="row">
            <div class="col-9">
                <small>Made in Help University &copy; 2020 </small>
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
    <script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
    <script src="./js/bootstrap.bundle.min.js"></script>
</body>

</html>

