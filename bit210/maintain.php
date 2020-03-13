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
                            <a class="nav-link" href="viewResidence.php"><b>View submission histroy </b></a>
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
                        <h4>Maintain Materials</h4>
                        <table class="table">
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

          if ($result-> num_rows > 0) {
            while ($row = $result-> fetch_assoc()) {
              echo "<tr><td>". $row["id"]."</td><td>".$row["name"]."</td><td>".$row["description"]."</td><td>".$row["pointsperkg"]."</td></tr>";
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
                        <br>

                    </blockquote>

                </div>

                <form id="maintain" action="CodeMaintain.php" method="POST" enctype="multipart/form-data">

                    <p>
                        <h5>Update Material</h5></p>

                    <select name="matID">
                        <option>
                            <?php  

        $sql="SELECT * from materials";
        $result = $conn-> query($sql);

        if ($result) {
          while ($row= mysqli_fetch_array($result)) {
            $new=$row["id"];
            echo " Material ID <br> <option>$new<br></option>";
          }
        }
          $conn ->close();
          ?>

                        </option>

                    </select>
                    <br>
                    <br> Material Name
                    <br>
                    <input type="text" name="name">
                    <br> Description
                    <br>
                    <textarea name="description"></textarea>
                    <br> Points per Kg
                    <br>
                    <input type="number" name="points">
                    <br>
                    <br>

                    <button  onclick="update1()" name="update" value="update">Update</button>
                    <button onclick="delete1()" name="delete" value="delete">Delete</button>
                    <button onclick="add1()" name="add" value="add">Add</button>

                    <script>
                        function update1() {
                          alert("Material Updated");
                        }
                         function delete1() {
                          alert("Material Deleted");
                        }
                        function add1() {
                          alert("Material Added");
                        }

                        </script>

                </form>

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