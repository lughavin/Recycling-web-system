<?php
  include "./db.php";
  session_start();
  $username = $_POST['username'];
  $password = $_POST['password'];
  $fullname = $_POST['fullname'];


$sql="SELECT * FROM user WHERE username ='$username' && password='$password';";

$result = mysqli_query($conn, $sql);

$num=mysqli_num_rows($result);

$row = $result->fetch_assoc();

$_SESSION['fullname']=$fullname;



  if ($num==1 && $row['usergroup'] === 'recycler') {
  header("Location: /bit210/recycler.php");
  
  } else if ($row['usergroup'] === 'collector') {
    header("Location: /bit210/collector.php");}
    else if ($row['usergroup'] === 'admin') {
    header("Location: /bit210/admin.php");
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