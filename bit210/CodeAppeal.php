<?php 
  include "./db.php";
  
$reason =$_POST["reason"];
$images =$_POST["images"];
$application=$_POST["appID"];


if (isset($_POST['uploadfilesub'])) {
	$fileName =$_FILES['uploadfile']['name'];
	$filetmpName =$_FILES['uploadfile']['tmp_name'];
	$folder= 'uploadf/';

	move_uploaded_file($filetmpName, $folder.$fileName);
}

$sql="insert into appeals(id, reason, images) values('$application','$reason','$fileName');";



$qry = mysqli_query($conn, $sql);
if ($qry) {
	header("Location: http://localhost:8080/bit210/appealRejections.php");

}
 else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}


	
	



$conn->close();
?>