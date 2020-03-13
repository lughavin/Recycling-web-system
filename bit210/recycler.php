<!doctype html>
<html lang="en">
<?php
session_start();
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
                        <a class="nav-link" href="recycler.php"><b>Make Appointment </b></a>
                    </li>
                    <li class="nav-item active">
                        <a class="nav-link" href="recycler.php"><b>View History</b> </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="recycler.php"><b>Update Profile</b></a>
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

                        $sql="SELECT * FROM recycler WHERE username = '{$_SESSION["findUser"]}' ";

                        $result = mysqli_query($conn, $sql);
                        // Echo session variables that were set on previous page
                        while ($row = $result->fetch_assoc()) {
                            echo "<b> This is your Eco level is ".$row['ecolevel']."</b>"."<br>";}

                            $conn->close();
                    ?>

                </blockquote>

            </div>

        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
    <script src="./js/bootstrap.bundle.min.js"></script>
</body>

</html>