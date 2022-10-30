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
  background-image: url("1.jpg");
  background-repeat: no-repeat;
  background-size: 3000px 8000px;

}
</style>

</head>


<!--Header-part-->
<div id="header">
  


<div id="content">
  <div id="content-header">
   
    <h1 class="text-center">Progress Report <i class="fas fa-tasks"></i></h1>
  </div>
  <div class="container-fluid">
    <div class="row-fluid">
      <div class="span12">
	          <div class="widget-box">
      <?php
            include '../includes/connection.php';
            $id=$_GET['id'];
            $qry= "select * from users where id='$id'";
            $result=mysqli_query($connect,$qry);
            while($row=mysqli_fetch_array($result)){
            ?> 
      
     <div class="widget-content">
      
            <div class="row-fluid"><br><br>
              <div class="span4">
                <table class="">
                  <tbody>
                  <tr>
                      <td><h4>Zacson's Gym</h4></td>
                    </tr>
                    <tr>
                      <td>Kottayam,Kanjirappally</td>
                    </tr>
                    
                    <tr>
                      <td>Phone no : 9061297397</td>
                    </tr>
                    <tr>
                      <td >Email: anamikaarun600@gmail.com</td>
                    </tr>
                  </tbody>
                </table>
              </div>
              
              <div class="span8"><br><br>
                <table class="table table-bordered table-invoice-full">
                  <thead>
                    <tr>
                      <th class="head0">Membership ID</th>
                      <th class="head1 right">Initial Weight</th>
                      <th class="head0 right">Current Weight</th>
                      <th class="head1">Services Taken</th>
                      <th class="head0 right">Plans (Upto)</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td><div class="text-center">PGC-SS-<?php echo $row['id']; ?></div></td>
                      <td><div class="text-center"><?php echo $row['ini_weight']; ?> KG</div></td>
                      <td><div class="text-center"><?php echo $row['curr_weight']; ?> KG</div></td>
                      <td><div class="text-center"><?php echo $row['service']; ?></div></td>
                      <td><div class="text-center"><?php echo $row['plans']; ?> Month/s</div></td>
                    </tr>
                  </tbody>
                </table>
                <table class="table table-bordered table-invoice-full">
                  <tbody>
                    <tr>
                      <td class="msg-invoice" width="55%"> <div class="text-center"><h5><?php echo $row['fullname']; ?>'s Body Structure stated as from <?php echo $row['ini_bodytype']; ?> to <?php echo $row['curr_bodytype']; ?>. <br /> With Total Weight Differences of <?php include 'weight-diff.php';?> KG <br /> As per records of <?php echo $row['progress_date']; ?></h5>
                        
                        </div>
                    </tr>
                  </tbody>
                </table>
              </div> <!-- end of span 12 -->
              
            </div>

            <div class="row-fluid">
                <div class="pull-left">
                <br>
                
                <h4>GYM Member: <?php echo $row['fullname']; ?> <br> Weight Variation of <em style="color:green"><?php include 'progress-percent.php';?>%</em> as per current updates! <i class="fa fa-spinner fa-spin" style="font-size:24px"></i><br/> <br/>  <br/></h4><p>Thank you for choosing our services.<br/>- on the behalf of whole team</p>
                </div>
                <div class="pull-right">
                  <h4><span>Approved By:</h4>
                 <p class="text-center">Note:Zacson's Gym, ANAMIKA K</p> </div>
                  
            </div>
          </div>
          <a href="dashboard.html">
          <span class="btn btn-success">Go Back</span>
        </a>

   
		</div>
	
      </div>
      <?php
}
      ?>
    </div>

  </div>
</div>


</body>
</html>
