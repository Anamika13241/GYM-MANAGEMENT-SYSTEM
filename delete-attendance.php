<?php

session_start();

include('../includes/connection.php');

$user_id = $_GET['id'];


$sql = "DELETE FROM attendance WHERE user_id='".$_GET["id"]."'";
$res = $connect->query($sql) ;


 $attend = "select * from users where id = '$user_id'";
  $result_attend = $connect->query($attend);
  $row_attend = mysqli_fetch_array($result_attend);
  $cnt = $row_attend['attendance_count'];
 $attend_count = $cnt;
      $sql1 = "update users set attendance_count ='$attend_count' where id='$user_id'";
     $connect->query($sql1) ;
?>
<script>
// alert("Delete Successfully");
window.location = "attendance.php";
</script>


 