<?php

include "./db.php";
  
$username =$_POST["username"];
$password =$_POST["password"];
$fullname =$_POST["fullname"];
$address = $_POST["address"];
$recycler =$_POST["recycler"];
$collector =$_POST["collector"];

if ($recycler){
	$sql="insert into recycler (username, password, fullname, address) 

values('$username', '$password','$fullname','$address');";
$qry = mysqli_query($conn, $sql);
	if ($qry) {
		
  header("Location: /bit210/index.php");

	}
 	else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}}

else if ($collector){


        $schedule = implode(', ', $_POST['schedule']);

        $sql2 = "INSERT INTO collector (username, password, fullname, address, schedule) 
        VALUES ('$username', '$password','$fullname','$address','$schedule');";
   
   
$qry2 = mysqli_query($conn, $sql2);
	if ($qry2) {
	
 header("Location: /bit210/index.php");
}
 else {
    echo "Error: " . $sql2 . "<br>" . $conn->error;
}}

?>