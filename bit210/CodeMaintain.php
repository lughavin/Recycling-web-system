<?php 
  include "./db.php";
  
$ID=$_POST["matID"];
$matName=$_POST["name"];
$matDesc=$_POST["description"];
$matPoints=$_POST["points"];
$update=$_POST["update"];
$delete=$_POST["delete"];
$add=$_POST["add"];


$sql3="DELETE FROM materials WHERE id='$ID ';";

$sql2="UPDATE materials
SET name = '$matName ', description= '$matDesc', pointsperkg=$matPoints
WHERE id = '$ID';";

$sql="insert into materials(name, description, pointsperkg) 
values('$matName','$matDesc','$matPoints');";



if ($update){
$qry2 = mysqli_query($conn, $sql2);
if ($qry2) {
	echo "successfully done";
	header("Location: /bit210/maintain.php");

}
 else {
    echo "Error: " . $sql2 . "<br>" . $conn->error;
}}


if ($add){
$qry = mysqli_query($conn, $sql);
if ($qry) {
	echo "successfully done";
	header("Location: /bit210/maintain.php");

}
 else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}}


if ($delete){
$qry3 = mysqli_query($conn, $sql3);
if ($qry3) {
	echo "successfully done";
	header("Location: /bit210/maintain.php");

}
 else {
    echo "Error: " . $sql3 . "<br>" . $conn->error;
}}

$conn->close();
?>