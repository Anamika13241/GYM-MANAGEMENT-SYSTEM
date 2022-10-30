 <!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8"/>
  <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"/>
  <meta name="description" content=""/>
  <meta name="author" content=""/>
  <title>Dashtreme Admin</title>
  <!-- loader-->
  <link rel="stylesheet" href="../css/bootstrap.min.css" />
<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,700,800' rel='stylesheet' type='text/css'>

  <style>
body {
  background-image: url("ai.jpg");
  background-repeat: no-repeat;
  background-size: 1500px 3500px;

}
</style>

  
</head>
<body>
<?php

      include "../includes/connection.php";
      $qry="select * from users";
      $cnt = 1;
        $result=mysqli_query($connect,$qry);

        
          echo"<table class='table table-bordered table-hover'>
              <thead>
                <tr>
                  <th>id</th>
                  <th>Fullname</th>
                  <th>Email</th>
                  <th>Gender</th>
                 
                  <th>Address</th>
                  
                  <th>Choosen Service</th>
                  <th>Plan</th>
                </tr>
              </thead>";
              
            while($row=mysqli_fetch_array($result)){
            
            echo"<tbody> 
               
                <td><div class='text-center'>".$cnt."</div></td>
                <td><div class='text-center'>".$row['fullname']."</div></td>
                <td><div class='text-center'>@".$row['email']."</div></td>
                <td><div class='text-center'>".$row['gender']."</div></td>
                
                <td><div class='text-center'>".$row['address']."</div></td>
                
                <td><div class='text-center'>".$row['service']."</div></td>
                <td><div class='text-center'>".$row['plans']." Month/s</div></td>
             
                
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






</body>
</html>
