<?php

include "./db.php";
  
$username =$_POST["username"];
$password =$_POST["password"];
$fullname =$_POST["fullname"];
$email = $_POST["email"];
$monthlyincome = $_POST["monthlyincome"];
$user=$_POST["userRadio"];
$staffId = $_POST['staffId'];


$sql="insert into user (username, password, fullname, monthly_income, email, usergroup, staff_id) 

values('$username', '$password','$fullname','$monthlyincome','$email','$user', '$staffId');";


//execute query
if($conn->query($sql)){
  echo "user registered successfully";
  header("Location: http://localhost:8080/bit210/index.php");
}
 else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
?>