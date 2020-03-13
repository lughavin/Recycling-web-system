<?php 
session_start();

include "./db.php";
  
$ID=$_POST["matID"];
$collect=$_POST["collect"];


$sql1="SELECT * FROM collector WHERE username ='{$_SESSION["findUser"]}'";
$result = mysqli_query($conn, $sql1);

$sql2="SELECT name FROM materials WHERE id ='$ID'";
$result2 = mysqli_query($conn, $sql2);

while ($row = $result->fetch_assoc() ) {
	while ($row2 = $result2->fetch_assoc()) {
		$sql="INSERT INTO collectmaterial (id,materialName,collectorName,collectorID) VALUES ('$ID','{$row2["name"]}','{$row["fullName"]}','{$row["id"]}')";
	}
}


if ($collect){
$qry = mysqli_query($conn, $sql);
if ($qry) {
	echo '<script>';
  echo 'alert("Materials added to collector ")';
  echo '</script>';
	echo '<script> window.location.assign("../bit210/collector.php"); </script>';

}
 else {
 	echo '<script>';
  echo 'alert("Material already collected please pick another one ")';
  echo '</script>';
  echo '<script> window.location.assign("../bit210/collector.php"); </script>';
    
}}

$conn->close();
?>