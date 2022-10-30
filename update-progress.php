<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
<title>Gym System Admin</title>
<meta charset="UTF-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<link rel="stylesheet" href="../css/bootstrap.min.css" />
<link rel="stylesheet" href="../css/bootstrap-responsive.min.css" />
<link rel="stylesheet" href="../css/fullcalendar.css" />
<link rel="stylesheet" href="../css/matrix-style.css" />

<link href="../font-awesome/css/fontawesome.css" rel="stylesheet" />
<link href="../font-awesome/css/all.css" rel="stylesheet" />
<link rel="stylesheet" href="../css/jquery.gritter.css" />
<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,700,800' rel='stylesheet' type='text/css'>
</head>
<body>
<?php
include '../includes/connection.php';
$email=$_GET['email'];
$qry= "select * from users where email='$email'";
$result=mysqli_query($connect,$qry);
while($row=mysqli_fetch_array($result)){
?> 


  <h1><center>Update Progress</center></h1>
  <div class="container-fluid" style="margin-top:-38px;">
    <div class="row-fluid">
      <div class="span12">
        <div class="widget-box">
          <div class="widget-title"> <span class="icon"> <i class="fas fa-signal"></i> </span>
            <h5>Progress </h5>
          </div>
          <div class="widget-content">
            <div class="row-fluid">
              
			  <div class="span2"></div>
			  
              <div class="span8">
                <table class="table table-bordered table-invoice">
				
                  <tbody>
				  <form action="userprogress-req.php" method="POST">
                    <tr>
                    <tr>
                      <td class="width30">Member's Fullname:</td>
                      <td class="width70"><strong><?php echo $row['fullname']; ?></strong></td>
                    </tr>
                    <tr>
                      <td>Service Taken:</td>
                      <td><strong><?php echo $row['service']; ?></strong></td>
                    </tr>
                    <tr>
                      <td>Initial Weight: (KG)</td>
                      <td><input id="weight" type="number" name="ini_weight" value='<?php echo $row['ini_weight']; ?>' required/></td>
                    </tr>

                    <tr>
                      <td>Current Weight: (KG)</td>
                      <td><input id="weight" type="number" name="curr_weight" value='<?php echo $row['curr_weight']; ?>' required/></td>
                    </tr>
					
                    <tr>
                      <td>Initial Body Type:</td>
                      <td><input id="ini_bodytype" type="text" name="ini_bodytype" value='<?php echo $row['ini_bodytype']; ?>' required/></td>
                    </tr>
                  
              </div>
			  
                      </td>
					  
					  <tr>
                     
                    </tr>

                    <tr>
                      <td>Current Body Type:</td>
                      <td><input id="curr_bodytype" type="text" name="curr_bodytype" value='<?php echo $row['curr_bodytype']; ?>' required/></td>
                    </tr>
                  
              </div>
			  

                      </td>
                  </tr>
                    </tbody>
                  
                </table>
              </div>
			  
			  
            </div> 
			
			
            <div class="row-fluid">
              <div class="span12">
                
				
			
                <div class="text-center">
                  <!-- user's ID is hidden here -->
             <input type="hidden" name="email" value="<?php echo $row['email'];?>">
                  <button class="btn btn-primary btn-large" type="SUBMIT" href="">Save Changes</button> 
				</div>
                <a href="dashboard.html">
          <span class="btn btn-success">Go Back</span>
        </a>
				  
				  </form>
              </div>
            </div>
			
      <?php
}
      ?>
          </div>
		  
		  
        </div>
      </div>
    </div> 
  </div> 
</div> 
<style>
#footer {
  color: white;
}
</style>

</body>
</html>