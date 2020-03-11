<?php

include "./db.php";
  
$username =$_POST["username123"];
$password =$_POST["password1"];
$fullname =$_POST["fullnameds"];
$address = $_POST["addressad"];
$schedule = $_POST["scheduledad"];
$recycler =$_POST["recyclersd"];
$collector =$_POST["collectorgf"];

if ($recycler){
	$sql="insert into recycler (username, password, fullname, address) 

values('$username', '$password','$fullname','$asdddress');";
$qry = mysqli_query($conn, $sql);
	if ($qry) {
		echo "user registered";
  	header("Location: /bit210/index.php");

	}
 	else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}}

else if ($collector){
	$sql2="insert into collector (username, password, fullname, address, schedule) 

values('$username', '$password','$fullname','$address','$schedule');";
$qry2 = mysqli_query($conn, $sql2);
	if ($qry2) {
		echo "user registered";
  		header("Location: /bit210/index.php");

}
 else {
    echo "Error: " . $sql2 . "<br>" . $conn->error;
}}

?>