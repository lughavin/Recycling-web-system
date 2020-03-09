<?php
include "./db.php";
  session_start();

  $fullName = $_POST['fullName'];
  $password = $_POST['password'];


$sql="UPDATE collector SET fullName ='$fullName', password ='$password' WHERE username= '{$_SESSION["findUser"]}';";

$qry = mysqli_query($conn, $sql);

if ($qry) {
	echo '<script>';
  echo 'alert("Profile Updated")';
  echo '</script>';
  echo '<script> window.location.assign("../bit210/collector.php"); </script>';
}
 else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}


?>