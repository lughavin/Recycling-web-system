<?php
  include "./db.php";
  session_start();
  error_reporting(0);
  ini_set('display_errors', 0);
  $weight= $_POST["weight"];
  $arraySubInfo = json_decode($_POST["matID"], true);
  $currentDateTime= date('Y-m-d');

  foreach ($arraySubInfo as $key => $value)
  {
      if($key == 'userID' && $key != '0'){
        $id = $value;
      }
      if($key == 'materialID' && $key != '0'){
        $mID = $value;
      }

      if($key == 'submissionID' && $key != '0'){
         $subID = $value;
      }

      if($key == 'actualDate' && $key != '0'){
         $date = $value;
      }
     if($key == 'recyclerName' && $key != '0'){
       $recyclerName = $value;
     }
  }

   $sql="SELECT * FROM materials WHERE id='$mID'";
    $result = mysqli_query($conn, $sql) or die(mysqli_error($conn));

    while($row = mysqli_fetch_assoc($result) ) {
       $point = $row['pointsperkg'];
        $cal = $weight * $point; //totalPoints
        $sql2 = "UPDATE makeappointment SET actualDate='$currentDateTime', status ='submitted', weight = '$weight', pointAwarded='$cal' WHERE submissionID ='$subID'";
        $result2 = mysqli_query($conn, $sql2) or die(mysqli_error($conn));

         $sql3="SELECT * FROM collector WHERE id='$id'";
         $result3 = mysqli_query($conn, $sql3) or die(mysqli_error($conn));

         $sql4="SELECT * FROM recycler WHERE fullname='$recyclerName'";
         $result4 = mysqli_query($conn, $sql) or die(mysqli_error($conn));
          //collector
         	while ($row3 = $result3->fetch_assoc()){
         		$newTotal= $row3["totalPoints"]+$cal;
         		$sql5 = "UPDATE collector SET totalPoints='$newTotal' WHERE  id='$id'";
         		$result5 = mysqli_query($conn, $sql5) or die(mysqli_error($conn));
          }
          //recycler
          while ($row4 = $result4->fetch_assoc()){
            $newTotal2= $row4["totalPoint"]+$cal;
            $sql6 = "UPDATE recycler SET totalPoint='$newTotal2' WHERE  fullname='$recyclerName'";
            $result6 = mysqli_query($conn, $sql6) or die(mysqli_error($conn));

          }



        echo '<script>';
        echo 'alert("Submission done")';
        echo '</script>';
        echo '<script> window.location.assign("../bit210/recordMaterial.php"); </script>';

    }

    if( $newTotal2 >= "100" &&  $newTotal2 <"500" ){
                                $sql7 = "UPDATE recycler SET ecolevel = 'Eco-Saver' fullname='$recyclerName'";
                                $result7 = mysqli_query($conn, $sql7) or die(mysqli_error($conn));
                          }
                          else if(  $newTotal2 >= "500" &&  $newTotal2 < "1000"){
                                  $sql8 = "UPDATE recycler SET ecolevel = 'Eco-Hero' fullname='$recyclerName'";
                                   $result8 = mysqli_query($conn, $sql8) or die(mysqli_error($conn));
                          }
                          else{
                                   $sql9 = "UPDATE recycler SET ecolevel = 'Eco-Warrior' fullname='$recyclerName'";
                                    $result9 = mysqli_query($conn, $sql9) or die(mysqli_error($conn));
                          }

  $conn->close();
  ?>