<?php

session_start();


if(isset($_GET['email'])){
$email=$_GET['email'];

include '../includes/connection.php';


$qry="delete from users where email='$email'";
$result=mysqli_query($connect,$qry);

if($result){
    echo"DELETED";
    header('Location:removemember.php');
}else{
    echo"ERROR!!";
}
}
?>