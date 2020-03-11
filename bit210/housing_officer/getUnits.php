<?php
  header('Content-type: application/json');
  include "./db.php";
  $residence = $_POST['residence'];

  $result = $conn->query("select id from unit
      where residence = {$residence}
      and availability = 'available'
      order by id asc
      ");
  $response = array();
  $row = $result->fetch_assoc();
 
  echo json_encode($row['id'])
?>