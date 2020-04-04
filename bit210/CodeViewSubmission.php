<?php 
  include "./db.php";
  
$ID=$_POST["matID"];



$sql="SELECT * FROM collectmaterial WHERE id='$ID ';";

$sql2="SELECT * FROM makeappointment WHERE materialID='$ID ';";


if ($update){
$qry2 = mysqli_query($conn, $sql2);
if ($qry2) {
	echo "successfully done";
	header("Location: /bit210/maintain.php");

}
 else {
    echo "Error: " . $sql2 . "<br>" . $conn->error;
}}


$conn->close();
?>