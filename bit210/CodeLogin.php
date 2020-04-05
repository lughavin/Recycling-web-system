<?php
  include "./db.php";
  session_start();
  $username = $_POST['username'];
  $password = $_POST['password'];


$sql="SELECT * FROM recycler WHERE username ='$username' && password='$password';";
$sql2="SELECT * FROM collector WHERE username ='$username' && password='$password';";
$sql3="SELECT * FROM user WHERE username ='$username' && password='$password';";


$result = mysqli_query($conn, $sql);

$num=mysqli_num_rows($result);

$row = $result->fetch_assoc();



$result2= mysqli_query($conn, $sql2);

$num2=mysqli_num_rows($result2);

$row2 = $result2->fetch_assoc();



$result3 = mysqli_query($conn, $sql3);

$num3=mysqli_num_rows($result3);

$row3 = $result3->fetch_assoc();

$_SESSION['findUser']=$username;



  if ($num==1 ) {
  header("Location: /bit210/recycler.php");
  
  } 
  else if ($num2==1 ) {
    header("Location: /bit210/collector.php");}
    
  else if ($num3==1 ) {
    header("Location: /bit210/maintain.php");
  } 
  else {
    echo "<script>
    alert('Username or Password Incorrect');
    window.location.href='/bit210/index.php';
    </script>";              
  }


  if (isset($_SESSION['findUser'])) {
    echo "session is set";
  }


$conn->close();


  ?>