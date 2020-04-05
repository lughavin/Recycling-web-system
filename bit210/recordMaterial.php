<!doctype html>
<html lang="en">

<?php
session_start();
?>

<head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="description" content="">
        <meta name="author" content="Lughano Ghambi">
        <title>EcoSave - Collector</title>

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
                <a class="navbar-brand" href="./recordMaterial.php"><b>Recycables</b></a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
                    <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
                        <li class="nav-item active">
                            <a class="nav-link" href="recordMaterial.php"><b>Record Material</b></a>
                        </li>
                        <li class="nav-item active">
                            <a class="nav-link" href="viewHistory.php"><b>View History</b></a>
                        </li>
                        <li>
                            <button class="btn" data-toggle="modal" data-target="#loginModal"><b>
                              Update Profile</b>
                            </button>
                        </li>
                    </ul>
                    <a href="./logout.php" class="nav-link"><b>Log Out</b></a>
                </div>
            </nav>

        </header>

        <form method="post" action="updateProfile.php">
            <div class="modal fade" id="loginModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel"><b>Update Profile</b></h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <form method="post" action="CodeLogin.php">
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
        </form>


        <div class="container" id="main">
            <div class="row">
                <div class="col-12">
                    <blockquote class="blockquote text-center">
                        <?php
                            include "./db.php";

                            $sql="SELECT * FROM collector WHERE username = '{$_SESSION["findUser"]}' ";

                            $result = mysqli_query($conn, $sql);
                            // Echo session variables that were set on previous page
                            while ($row = $result->fetch_assoc()) {
                                echo "<b> Welcome ".$row['fullName']."</b>"."<br>";}

                             $conn->close();
                        ?>
                        <form action="" method="post">
                          <label for="fname">Enter Recyclers username:</label><br>
                          <input type="text"  name="name"><br>
                            <input type="submit" value="Submit">

                            <br>
                                     <h4>Submissions</h4>
                                     <table class="table">
                                       <tr class="thead-dark">
                                          <th>Proposed Date</th>
                                          <th>Material Name</th>
                                          <th>Status</th>
                                       </tr>

                                       <?php

                                         include "./db.php";

                                           $name=$_POST["name"]??'';

                                           $sql="SELECT * FROM makeappointment WHERE recyclerName='$name' && status='Proposed'; ";
                                           $result = $conn-> query($sql);


                                             while ($row = $result-> fetch_assoc()) {
                                               echo "<tr><td>". $row["proposedDate"]."</td><td>".$row["materialName"]."</td><td>".$row["status"]."</td></tr>";
                                               # code...
                                             }
                                             echo "</table>";
                                             # code...



                                        ?>
                                     </table>
                                                       <br>

                        </form>



                          <form method="post" action="updateProfile.php">
                             <div class="modal fade" id="loginModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                             <div class="modal-dialog" role="document">
                                 <div class="modal-content">
                                     <div class="modal-header">
                                         <h5 class="modal-title" id="exampleModalLabel"><b>Update Profile</b></h5>
                                         <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                             <span aria-hidden="true">&times;</span>
                                         </button>
                                     </div>
                                     <form method="post" action="CodeLogin.php">
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
                          </form>

                          <div>
                           <form method="post" action="CodeRecordMaterial.php">
                              <div class="modal-body">
                                 <label for="weight">Enter weight of Material:</label><br>
                                 <input type="number" id="weight" name="weight"><br>
                                 <select name="matID">
                                   <option>
                                     <?php
                                        $sql="SELECT * FROM makeappointment WHERE recyclerName='$name'&& status='Proposed'; ";
                                         $result = $conn-> query($sql);
                                         if ($result) {
                                           while ($row= mysqli_fetch_array($result)) {
                                             $mateId = $row["materialID"];
                                             $userId = $row["userID"];
                                             $new = $row["submissionID"];
                                             echo 'Submission ID <option value="'.htmlspecialchars(json_encode($row)).'">'.$new.'</option>';

                                           }
                                         }
                                           $conn ->close();
                                     ?>
                                   </option>
                                 </select>
                              </div>
                              <div class="modal-footer">
                                <button type="submit" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal">Accept Recycler</button>
                              </div>
                          </form>
                    </blockquote >
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