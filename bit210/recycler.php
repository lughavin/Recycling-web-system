<!doctype html>
<html lang="en">
<?php
session_start();
error_reporting(0);
ini_set('display_errors', 0);
?>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="Pooria Atarzadeh">
    <title>EcoSave - Recycler</title>

    <!-- Bootstrap core CSS -->
    <link href="./css/bootstrap-grid.min.css" rel="stylesheet">
    <link href="./css/bootstrap.min.css" rel="stylesheet">

    <!-- CSS Style sheet -->
    <link href="css/custom.css" rel="stylesheet">
    <link href="css/custom1.css" rel="stylesheet"
    <!-- Java script -->
    <script type="text/javascript" src="js/custom1.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
</head>

<body>

    <header id="header-bg" class="mini">
        <nav class="navbar navbar-expand-lg navbar-dark">
            <a class="navbar-brand" href="./recycler.php"><b>Recycables</b></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
                <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
                    <li class="nav-item active">
                        <a class="nav-link" href="viewHistory2.php"><b>View History</b> </a>
                    </li>
                    <li>
                        <button class="btn" data-toggle="modal" data-target="#loginModal"><b> Update Profile</b> </button>
                    </li>

                  </ul><a href="./logout.php" class="nav-link"><b>Log Out</b></a>
            </div>
        </nav>
    </header>
    <div class="modal fade" id="loginModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
          <div class="modal-content">
              <div class="modal-header">
                  <h5 class="modal-title" id="exampleModalLabel"><b>Update Profile</b></h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                  </button>
              </div>
              <form method="post" action="updateProfile.php">
                  <div class="modal-body">
                      <div class="form-group">
                          <div>
                              &nbsp;
                          </div>

                          <label for="recipient-name" class="col-form-label">Full Name:</label>
                          <input type="text" class="form-control" name="fullName" />
                      </div>
                      <div class="form-group">
                          <label for="message-text" class="col-form-label">Password:</label>
                          <input type="password" class="form-control" name="password" />
                      </div>

                  </div>
                  <div class="modal-footer">
                      <button type="submit" name="login" class="btn btn-lg btn-dark"><b>Update</b></button>
                  </div>
              </form>
          </div>
      </div>
    </div>


    <div class="container" id="main">
        <div class="row">
            <div class="col-12">
                <blockquote class="blockquote text-center">
                    <?php
                        include "./db.php";

                        $sql="SELECT * FROM recycler WHERE username = '{$_SESSION["findUser"]}' ";

                        $result = mysqli_query($conn, $sql);
                        // Echo session variables that were set on previous page
                        while ($row = $result->fetch_assoc()) {
                            echo "<b> Welcome ".$row['fullname'].  " ,your Eco level is ".$row['ecolevel']."</b>"."<br>";}
                    ?>

                    <br><h4>Materials</h4>
                        <table class="table table-hover">
                            <tr class="thead-dark">
                                <th>Material ID</th>
                                <th>Material Name</th>
                                <th>Description</th>
                                <th>Points Per Kg</th>
                            </tr>

                            <?php

                              include "./db.php";

                                      $sql="SELECT * FROM materials";
                                      $result = $conn-> query($sql);
                                      $dateP = '31/03/2020';

                                      if ($result-> num_rows > 0) {
                                        while ($row = $result-> fetch_assoc()) {
                                          echo "<tr><td>". $row["id"]."</td><td>".$row["name"]."</td><td>".$row["description"]."</td><td>".$row["pointsperkg"]."</td></tr> ";
                                          # code...
                                        }
                                        echo "</table>";
                                        # code...
                                      }
                                    else{
                                      echo "No materials found";
                                    }

                            ?>
                                                    </table>

                    <form id="materials" action="" method="POST" enctype="multipart/form-data">
                        <select name="matID">
                            <option>MaterialId</option>
                           <?php

                            $sql="SELECT * from materials";
                            $result = $conn-> query($sql);

                            if ($result) {
                              while ($row= mysqli_fetch_array($result)) {
                                $new=$row["id"];
                                echo " Material ID <br> <option value=$new>$new<br></option>";
                              }
                            }

                              ?>

                        </select>

                         <input type="date" class="form-control" name="date" id="date" /><br>
                        <button  name="check" value="check">Check</button><br>



                       <br><h4>List of collectors</h4>
                          <table class="table table-hover">
                              <tr class="thead-dark">
                                   <th>Collector Name</th>
                                  <th>Material Name</th>

                              </tr>

                              <?php
                                     include "./db.php";
                                     $ID=$_POST["matID"]??'';

                                    $sql="SELECT * FROM collectmaterial WHERE id=$ID";
                                    $result = $conn-> query($sql);

                                    if ($result-> num_rows > 0) {
                                      while ($row = $result-> fetch_assoc()) {
                                        echo "<tr><td>". $row["collectorName"]."</td><td>".$row["materialName"]."</td></tr> ";
                                        # code...
                                      }
                                      echo "</table>";
                                      # code...
                                    }
                                  else{
                                    echo "No collectors found";
                                  }

                               ?>
                      </table>

                      <p><h5>Selected Collector</h5></p>

                          <select name="collectorId">
                            <?php
                                  $sql="SELECT * from collectmaterial WHERE id=$ID";
                                  $result = $conn-> query($sql);

                                  if ($result) {
                                    while ($row= mysqli_fetch_array($result)) {
                                      $ccid = $row["id"];
                                      $new=$row["collectorName"];
                                      echo " Collector Name <br> <option value=$id>$new<br></option>";
                                    }
                                  }
                             ?>
                           </select>
                        <?php

                           $dateP=$_POST["date"]??'';
                           $matId = $_POST["matID"]??'';

                           $time = strtotime($_POST['date']??'');
                            if ($time) {
                              $new_date = date('Y-m-d', $time);
                              //echo $new_date;
                            } else {
                               echo 'Invalid Date';
                              // fix it.
                            }

                              $sql3="SELECT * FROM recycler WHERE username = '{$_SESSION["findUser"]}' ";

                                $result3 = mysqli_query($conn, $sql3);
                                // Echo session variables that were set on previous page
                                while ($row3 = $result3->fetch_assoc()) {
                                    $sql4="SELECT * FROM materials WHERE  id=$matId";
                                    $result4 = mysqli_query($conn, $sql4);
                                       while ($row4 = $result4->fetch_assoc()) {
                                       // echo $row4['name']."<br>";


                                    $sql2="SELECT * FROM collectmaterial where id= $ccid";
                                    $result = mysqli_query($conn, $sql2);
                                       while ($row = $result->fetch_assoc() ) {
                                              $sql="INSERT INTO makeappointment (proposedDate, materialID, userID,materialName, recyclerName) VALUES ('$dateP','$matId','{$row["collectorID"]}',' {$row4["name"]}','{$row3["username"]}' )";
                                    }}}
                                $qry = mysqli_query($conn, $sql);


                                $conn->close();
                        ?>
                    </form>
                </blockquote>

              </div>

            </div>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
    <script src="./js/bootstrap.bundle.min.js"></script>
</body>

</html>