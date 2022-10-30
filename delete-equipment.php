<?php

session_start();


if(isset($_GET['id'])){
$id=$_GET['id'];

include '../includes/connection.php';


$qry="delete from equipment where id=$id";
$result=mysqli_query($connect,$qry);

if($result){
    echo"DELETED";
    header('Location:remove-equipment.php');
}else{
    echo"ERROR!!";
}
}
?>