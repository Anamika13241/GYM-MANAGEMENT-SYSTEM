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




<div id="content">
  <div id="content-header">
   
    <h1 class="text-center">Member's Report <i class="fas fa-file"></i></h1>
  </div>
  <div class="container-fluid print-container">
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
      <br>
            <div class="row-fluid"><br><br>
              <div class="span4">
                <table class="">
                  <tbody>
                    <tr>
                      <td><h4>Zacson's Gym</h4></td>
                    </tr>
                    <tr>
                      <td>Kottayam, Kanjirappally</td>
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
             
              <div class="span8">
                <br><br>
                <table class="table table-bordered table-invoice-full">
                  <thead>
                    <tr>
                      <th class="head0">Membership ID</th>
                      <th class="head1">Services Taken</th>
                      <th class="head0 right">My Plans (Upto)</th>
                      <th class="head1 right">Address</th>
                      <th class="head0 right">Charge</th>
                      <th class="head0 right">Attendance Count</th>
                      
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td><div class="text-center">PGC-SS-<?php echo $row['id']; ?></div></td>
                      <td><div class="text-center"><?php echo $row['service']; ?></div></td>
                      <td><div class="text-center"><?php if($row['plans'] == 0) { echo 'NONE';} else {echo $row['plans'].' Month/s';} ?></div></td>
                      <td><div class="text-center"><?php echo $row['address']; ?></div></td>
                      <td><div class="text-center"><?php echo '$'.$row['amount']; ?></div></td>
                      <td><div class="text-center"><?php echo $row['attendance_count']; ?> Day/s</div></td>
                      
                    </tr>
                  </tbody>
                </table>
                <table class="table table-bordered table-invoice-full">
                  <tbody>
                    <tr>
                      <td class="msg-invoice" width="55%"> <div class="text-center"><h4>Last Payment Done:  $<?php echo $row['amount']; ?>/-</h4>
                        <em><a href="#" class="tip-bottom" title="Registration Date" style="font-size:15px;">Member Since: <?php echo $row['dob']; ?> </a></em> </td>
                        </div>
                    </tr>
                  </tbody>
                </table>
              </div> <!-- end of span 12 -->
              
            </div>

            <div class="row-fluid">
                <div class="pull-left">
                <h4>Member <?php echo $row['fullname']; ?>,<br/> <br/> Membership is currently <?php echo $row['status']; ?>! <br/></h4><p>Thank you for choosing our services.<br/>- on the behalf of whole team</p>
                </div>
                <div class="pull-right">
                  <h4><span>Approved By:</h4>
                  <p class="text-center">Note:ZACSON'S GYM,ANAMIKA K</p> </div>
                  
            </div>
          </div>
   
		</div>
	
      </div>
      <?php
}
      ?>
    </div>

  </div>

  <div class="text-center">
    <button class="btn btn-danger" onclick="window.print()"><i class="fas fa-print"></i> Print</button>
  </div>

</div>
<a href="dashboard.html">
          <span class="btn btn-success">Go Back</span>
        </a>



</script>
</body>
</html>
