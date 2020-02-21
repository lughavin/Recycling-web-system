<?php
  session_start();
  echo '<script>';
  echo 'alert("Thank you! ")';
  echo '</script>';
  echo '<script> window.location.assign("../bit210/index.php"); </script>';
  session_destroy();
?>

 