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
                  <th>Choosen Service</th>
                  <th>Action</th>
                </tr>
              </thead>";
              
            while($row=mysqli_fetch_array($result)){?>
            
           <tbody> 
               
                <td><div class='text-center'><?php echo $cnt;?></div></td>
                <td><div class='text-center'><?php echo $row['fullname'];?></div></td>
                <td><div class='text-center'><?php echo $row['service'];?></div></td>
                <td><div class='text-center'><a href="view-member-report.php?id= <?php echo $row['id'] ?>"><i class="fas fa-file"></i> View Report</a></div></td>
                
              </tbody>
          <?php
        $cnt++;  }
            ?>

            </table>
          </div>
        </div>
        
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
            <th>Choosen Service</th>
            <th>Action</th>
          </tr>
        </thead>";
        
      while($row=mysqli_fetch_array($result)){?>
      
     <tbody> 
         
          <td><div class='text-center'><?php echo $cnt;?></div></td>
          <td><div class='text-center'><?php echo $row['fullname'];?></div></td>
          <td><div class='text-center'><?php echo $row['service'];?></div></td>
          <td><div class='text-center'><a href="view-progress-report.php?id= <?php echo $row['id'] ?>"><i class="fas fa-file"></i> View Progress Report</a></div></td>
          
        </tbody>
    <?php
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
             

            </table>
          </div>
        </div>
   
		
	
      </div>
    </div>
  </div>
</div>

   
		
	
      </div>
    </div>
  </div>
</div>

<!--end-main-container-part-->

<!--Footer-part-->




</body>
</html>
