<?php
session_start();

?>

<!DOCTYPE html>
<html lang="en">
<head>
<title>Gym System Admin</title>

<link rel="stylesheet" href="../css/bootstrap.min.css" />
<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,700,800' rel='stylesheet' type='text/css'>
<style>
body {
  background-image: url("ai.jpg");
  background-repeat: no-repeat;
  background-size: 3000px 8000px;

}
</style>

</head>
<body>




    <h1 class="text-center">Zacson's Gym's Equipment List <i class="fas fa-cogs"></i></h1>
  </div>
  
  <div class="container-fluid">
    <hr>
    <div class="row-fluid">
      <div class="span12">

      <div class='widget-box'>
          <div class='widget-title'> <span class='icon'> <i class='fas fa-cogs'></i> </span>
            <h5>Equipment table</h5>
          </div>
          <div class='widget-content nopadding'>
	  
	  <?php

      include "../includes/connection.php";
      $qry="select * from equipment";
      $cnt = 1;
        $result=mysqli_query($connect,$qry);

        
          echo"<table class='table table-bordered table-hover'>
              <thead>
                <tr>
                  <th>id</th>
                  <th>Equpment Name</th>
                  <th>Description</th>
                  <th>Quantity</th>
                  <th>Amount</th>
                  <th>Vendor</th>
                  <th>Address</th>
                  <th>Contact</th>
                  <th>Purchased Date</th>
                  <th>Action</th>
                </tr>
              </thead>";
             
            while($row=mysqli_fetch_array($result)){
            
            echo"<tbody> 
               
                <td><div class='text-center'>".$cnt."</div></td>
                <td><div class='text-center'>".$row['name']."</div></td>
                <td><div class='text-center'>".$row['description']."</div></td>
                <td><div class='text-center'>".$row['quantity']."</div></td>
                <td><div class='text-center'>$".$row['amount']."</div></td>
                <td><div class='text-center'>".$row['vendor']."</div></td>
                <td><div class='text-center'>".$row['address']."</div></td>
                <td><div class='text-center'>".$row['contact']."</div></td>
                <td><div class='text-center'>".$row['date']."</div></td>
                <td><div class='text-center'><a href='edit-equipmentform.php?id=".$row['id']."'><i class='fas fa-edit'></i> Edit</a></div></td>
                
              </tbody>";
           $cnt++; }
            ?>

            </table>
          </div>
        </div>
   
        <a href="dashboard.html">
          <span class="btn btn-success">Go Back</span>
        </a>

	
      </div>
    </div>
  </div>
</div>

</body>
</html>
