<?php

include "./db.php";
  
$username =$_POST["username"];
$password =$_POST["password"];
$fullname =$_POST["fullname"];
$address = $_POST["address"];
$schedule = $_POST["schedule"];
$recycler =$_POST["recycler"];
$collector =$_POST["collector"];

if ($recycler){
	$sql="insert into recycler (username, password, fullname, address) 

values('$username', '$password','$fullname','$address');";
$qry = mysqli_query($conn, $sql);
if ($qry) {
	echo "user registered successfully";
  header("Location: /bit210/index.php");

}
 else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}}

if ($collector){
	$sql2="insert into collector (username, password, fullname, address, schedule) 

values('$username', '$password','$fullname','$address','$schedule');";
$qry2 = mysqli_query($conn, $sql2);
if ($qry2) {
	echo "user registered successfully";
  header("Location: /bit210/index.php");

}
 else {
    echo "Error: " . $sql2 . "<br>" . $conn->error;
}}

?>