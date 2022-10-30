<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<link rel="stylesheet" href="../css/bootstrap.min.css" />
<link rel="stylesheet" href="../css/bootstrap-responsive.min.css" />
<link rel="stylesheet" href="../css/uniform.css" />
<link rel="stylesheet" href="../css/select2.css" />
<link rel="stylesheet" href="../css/matrix-style.css" />
<link rel="stylesheet" href="../css/matrix-media.css" />
<link href="../font-awesome/css/fontawesome.css" rel="stylesheet" />
<link href="../font-awesome/css/all.css" rel="stylesheet" />
<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,700,800' rel='stylesheet' type='text/css'>

<style>
body {
  background-image: url("1.jpg");
  background-repeat: no-repeat;
  background-size: 3000px 8000px;

}
</style>
</head>
<body>


    <h1 class="text-center">Attendance List <i class="fas fa-calendar"></i></h1>
  </div>
  <div class="container-fluid">
    <div class="row-fluid">
      <div class="span12">

      <div class='widget-box'>
          <div class='widget-title'> <span class='icon'> <i class='fas fa-th'></i> </span>
            <h5>Attendance Table</h5>
          </div>
          <div class='widget-content nopadding'> 

        
          <table class='table table-bordered table-hover'>
              <thead>
                <tr>
                  <th>id</th>
                  <th>Fullname</th>
                  <th>Contact Number</th>
                  <th>Choosen Service</th>
                  <th>Action</th>
                </tr>
              </thead>

             <?php include "../includes/connection.php";
              date_default_timezone_set('Asia/Kathmandu');
              //$current_date = date('Y-m-d h:i:s');
                 $curr_date = date('Y-m-d h:i A');
                $exp_date_time = explode(' ', $curr_date);
                 $todays_date =  $exp_date_time['0'];
                     $qry="SELECT * FROM users WHERE status = 'Active'";
                    $result=mysqli_query($connect,$qry);
                   $i=1;
              $cnt = 1;
            while($row=mysqli_fetch_array($result)){ ?>
            
           <tbody> 
               
                <td><div class='text-center'><?php echo $cnt; ?></div></td>
                <td><div class='text-center'><?php echo $row['fullname']; ?></div></td>
                <td><div class='text-center'><?php echo $row['phoneno']; ?></div></td>
                <td><div class='text-center'><?php echo $row['service']; ?></div></td>

               
                <input type="hidden" name="user_id" value="<?php echo $row['id'];?>">

            <?php
                $qry = "SELECT * FROM attendance WHERE curr_date = '$todays_date' AND user_id = '".$row['id']."'";
                $res = $connect->query($qry);
                $num_count  = mysqli_num_rows($res);
                $row_exist = mysqli_fetch_array($res);
                $curr_date = $row_exist['curr_date'];
                if($curr_date == $todays_date){
  
              ?>
                <td>
                <div class='text-center'><span class="label label-inverse"><?php echo $row_exist['curr_date'];?>  <?php echo $row_exist['curr_time'];?></span></div>
                <div class='text-center'><a href='delete-attendance.php?id=<?php echo $row['id'];?>'><button class='btn btn-danger'>Check Out <i class='fas fa-clock'></i></button> </a></div>
                </td>

            <?php } else {
                
                ?>

                <td><div class='text-center'><a href='check-attendance.php?id=<?php echo $row['id'];?>'><button class='btn btn-info'>Check In <i class='fas fa-map-marker-alt'></i></button> </a></div></td>
             
                <?php }
              ?>      
              </tbody>
             
           <?php $cnt++; } ?>
           

            </table>
          </div>
        </div>
   
		
	
      </div>
    </div>
    <a href="dashboard.html">
          <span class="btn btn-success">Go Back</span>
        </a>
  </div>
</div>


<!--end-main-container-part-->

<!--Footer-part-->



<style>
#footer {
  color: white;
}
</style>

<!--end-Footer-part-->

<script src="../js/jquery.min.js"></script> 
<script src="../js/jquery.ui.custom.js"></script> 
<script src="../js/bootstrap.min.js"></script>  
<script src="../js/matrix.js"></script> 
<script src="../js/jquery.validate.js"></script> 
<script src="../js/jquery.uniform.js"></script> 
<script src="../js/select2.min.js"></script> 
<script src="../js/jquery.dataTables.min.js"></script> 
<script src="../js/matrix.tables.js"></script> 

</script>
</body>
</html>
