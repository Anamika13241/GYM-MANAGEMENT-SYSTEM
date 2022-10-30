<?php

session_start();
	


if(isset($_GET['id'])){
$id=$_GET['id'];

include '../includes/connection.php';


$qry="delete from trainer where user_id=$id";
$result=mysqli_query($connect,$qry);

if($result){
    echo"DELETED";
    header('Location:staffs.php');
}else{
    echo"ERROR!!";
}
}
?>