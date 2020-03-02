<?php

include "./db.php";
  
$username =$_POST["username"];
$password =$_POST["password"];
$fullname =$_POST["fullname"];
$address = $_POST["address"];
$user=$_POST["userRadio"];



$sql="insert into user (username, password, fullname, address, usergroup) 

values('$username', '$password','$fullname','$address','$user');";


//execute query
if($conn->query($sql)){
  echo "user registered successfully";
  header("Location: /bit210/index.php");
}
 else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
?>