<?php

$servername="localhost";
$uname="root";
$pass="";
$db="multilogin";

$connect=mysqli_connect($servername,$uname,$pass,$db);

if(!$connect){
    die("Connection Failed");
}

$sql = "SELECT SUM( (curr_weight - ini_weight) / ini_weight * 100) FROM users WHERE id='$id'";
        $amountsum = mysqli_query($connect, $sql) or die(mysqli_error($sql));
        $row_amountsum = mysqli_fetch_assoc($amountsum);
        $totalRows_amountsum = mysqli_num_rows($amountsum);
        echo (int)$row_amountsum['SUM( (curr_weight - ini_weight) / ini_weight * 100)'];

                
?>