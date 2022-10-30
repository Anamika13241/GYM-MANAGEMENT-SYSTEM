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
  







    <h1 class="text-center">Registered Members List <i class="fas fa-group"></i></h1>
  </div>
  <div class="container-fluid">
    <hr>
    <div class="row-fluid">
      <div class="span12">

      <div class='widget-box'>
          <div class='widget-title'> <span class='icon'> <i class='fas fa-th'></i> </span>
            <h5>Member table</h5>
          </div>
          <div class='widget-content nopadding'>
	  
	  <?php

      include "../includes/connection.php";
      $qry="select * from users";
      $cnt = 1;
        $result=mysqli_query($connect,$qry);

        
          echo"<table class='table table-bordered table-hover'>
              <thead>
                <tr>
                  <th>#</th>
                  <th>Fullname</th>
                  <th>Email</th>
                  <th>Gender</th>
                  <th>Address</th>
                  <th>Choosen Service</th>
                  <th>Plan</th>
                  <th>Contact Number</th>
                  <th>D.O.B</th>
                 
                  <th>Amount</th>
                 
                  <th>Action</th>
                </tr>
              </thead>";
              // <!-- Visit codeastro.com for more projects -->
            while($row=mysqli_fetch_array($result)){
            
            echo"<tbody> 
               
                <td><div class='text-center'>".$cnt."</div></td>
                <td><div class='text-center'>".$row['fullname']."</div></td>
                <td><div class='text-center'>@".$row['email']."</div></td>
                <td><div class='text-center'>".$row['gender']."</div></td>
          
                <td><div class='text-center'>".$row['address']."</div></td>
                
                <td><div class='text-center'>".$row['service']."</div></td>
                <td><div class='text-center'>".$row['plans']." Month/s</div></td>
                <td><div class='text-center'>".$row['phoneno']."</div></td>
                <td><div class='text-center'>".$row['dob']."</div></td>
                <td><div class='text-center'>$".$row['amount']."</div></td>
                <td><div class='text-center'><a href='updatememberform.php?email=".$row['email']."'><i class='fas fa-edit'></i> Edit</a></div></td>
                
              </tbody>";
         $cnt++;   }
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

<!--end-main-container-part-->



</body>
</html>
