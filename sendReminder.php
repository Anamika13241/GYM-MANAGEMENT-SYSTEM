<?php

session_start();


if(isset($_GET['id'])){
$id=$_GET['id'];

include '../includes/connection.php';


$qry="UPDATE users SET reminder = '1' where id=$id";
$result=mysqli_query($connect,$qry);

if($result){
    echo '<script>alert("Notification sent to selected customer!")</script>';
    echo '<script>window.location.href = "payments.php";</script>';
    
}else{
    echo"ERROR!!";
}
}
?>