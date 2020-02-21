<?php
session_start();



  include "./db.php";
$id =$_POST["id"];
$date =$_POST["Date"];
//$applicant = $_POST['applicant'];
$viewApplication = $_SESSION['user_name'];



$sql="insert into application ( requiredDate, residence, status,userName ) 

values('$date','$id', 'new', '$viewApplication');";


//execute query
if($conn->query($sql) ==TRUE){
	header("Location: http://localhost:8080/bit210/submitApplication.php");
}
 else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>