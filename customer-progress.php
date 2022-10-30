
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




    <h1 class="text-center"><b><text-color="red">Update Customer's Progress <b><i class="fas fa-signal"></i></h1>
  </div>
  <div class="container-fluid">
    <hr>
    <div class="row-fluid">
      <div class="span12">

      <div class='widget-box'>
          <div class='widget-title'> <span class='icon'> <i class='fas fa-th'></i> </span>
            <h5>Member's Table</h5>
            
                   
                </div>
            </form>
          </div>
          
          <div class='widget-content nopadding'>
	  
	  <?php

      include "../includes/connection.php";
      $qry="select * from users";
      $cnt=1;
        $result=mysqli_query($connect,$qry);

        
          echo"<table class='table table-bordered table-hover'>
              <thead>
                <tr>
                  <th>id</th>
                  <th>Fullname</th>
                  <th>Choosen Service</th>
                  <th>Plan</th>
                  <th>Action</th>
                </tr>
              </thead>";
              
            while($row=mysqli_fetch_array($result)){
            
            echo"<tbody> 
               
                <td><div class='text-center'>".$cnt."</div></td>
                <td><div class='text-center'>".$row['fullname']."</div></td>
                <td><div class='text-center'>".$row['service']."</div></td>
                <td><div class='text-center'>".$row['plans']." Month/s</div></td>
                <td><div class='text-center'><a href='update-progress.php?email=".$row['email']."'><button class='btn btn-warning btn'> Update Progress</button></a></div></td>
                
              </tbody>";
          $cnt++;  }
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
<style>


</body>
</html>
