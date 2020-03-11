<?php
include "./db.php";

$application = $_POST['application'];

$query2 = "UPDATE application SET status = 'Rejected' WHERE id={$application}";
$result2 = $conn->query($query2);
?>