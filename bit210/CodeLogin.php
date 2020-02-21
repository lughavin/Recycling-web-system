<?php
  include "./db.php";
  session_start();
  $username = $_POST['username'];
  $password = $_POST['password'];


$sql="SELECT * FROM user WHERE username ='$username' && password='$password';";

$result = mysqli_query($conn, $sql);

$num=mysqli_num_rows($result);

$row = $result->fetch_assoc();

$_SESSION['user_name']=$username;



  if ($num==1 && $row['usergroup'] === 'applicant') {
  header("Location: /bit210/viewResidence.php");
  
  } else if ($row['usergroup'] === 'officer') {
    header("Location: /bit210/housing_officer/index.php");
  } else {
    echo "<script>
    alert('Username or Password Incorect');
    window.location.href='/bit210/index.php';
    </script>";              
  }
  if (isset($_SESSION['user_name'])) {
  }


$conn->close();


  ?>