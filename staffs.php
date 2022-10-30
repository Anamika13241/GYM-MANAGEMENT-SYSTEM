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



    <h1 class="text-center">GYM's Staff List <i class="fas fa-briefcase"></i></h1>
  </div>
  <div class="container-fluid">
    <hr>
    <div class="row-fluid">
      <div class="span12">
        <a href="staffs-entry.php"><button class="btn btn-primary">Add Staff Members</button></a>
      <div class='widget-box'>
          <div class='widget-title'> <span class='icon'> <i class='fas fa-th'></i> </span>
            <h5>Staff table</h5>
          </div>
          <div class='widget-content nopadding'>
	  
	  <?php

      include "../includes/connection.php";
      $qry="select * from trainer";
      $cnt=1;
        $result=mysqli_query($connect,$qry);

        
          echo"<table class='table table-bordered table-hover'>
              <thead>
                <tr>
                  <th>id</th>
                  <th>Fullname</th>
                  <th>Username</th>
                  <th>Gender</th>
                  <th>Designation</th>
                  <th>Email</th>
                  <th>Address</th>
                  <th>Contact</th>
                  <th>Actions</th>
                </tr>
              </thead>";
              
            while($row=mysqli_fetch_array($result)){
            
            echo"<tbody> 
                <tr class=''>
                <td><div class='text-center'>".$cnt."</div></td>
                <td><div class='text-center'>".$row['fullname']."</div></td>
                <td><div class='text-center'>@".$row['username']."</div></td>
                <td><div class='text-center'>".$row['gender']."</div></td>
                <td><div class='text-center'>".$row['designation']."</div></td>
                <td><div class='text-center'>".$row['email']."</div></td>
                <td><div class='text-center'>".$row['address']."</div></td>
                <td><div class='text-center'>".$row['contact']."</div></td>
                <td><div class='text-center'><a href='edit-staff-form.php?id=".$row['user_id']."'><i class='fas fa-edit' style='color:#28b779'></i> Edit |</a> <a href='remove-staff.php?id=".$row['user_id']."' style='color:#F66;'><i class='fas fa-trash'></i> Remove</a></div></td>
                </tr>
                
              </tbody>";
              $cnt++;
          }
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

<!--Footer-part-->

<div class="row-fluid">
  <div id="footer" class="span12"> <?php echo date("Y");?> &copy; Developed By Naseeb Bajracharya</a> </div>
</div>

<style>
#footer {
  color: white;
}
</style>

<!--end-Footer-part-->
<script src="../js/jquery.min.js"></script> 
<script src="../js/jquery.ui.custom.js"></script> 
<script src="../js/bootstrap.min.js"></script> 
<script src="../js/jquery.uniform.js"></script> 
<script src="../js/select2.min.js"></script> 
<script src="../js/jquery.dataTables.min.js"></script> 
<script src="../js/matrix.js"></script> 
<script src="../js/matrix.tables.js"></script>
</body>
</html>
