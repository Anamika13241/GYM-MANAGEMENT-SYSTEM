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
<link rel="stylesheet" href="../css/matrix-media.css" />
<link href="../font-awesome/css/fontawesome.css" rel="stylesheet" />
<link href="../font-awesome/css/all.css" rel="stylesheet" />
<link rel="stylesheet" href="../css/jquery.gritter.css" />
<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,700,800' rel='stylesheet' type='text/css'>
</head>
<body>
  <h1 class="text-center"><b>Update Customer's Progress</b> <i class="fas fa-signal"></i></h1>
</div>
<form role="form" action="index.php" method="POST">
    <?php 
    

            if(isset($_POST['ini_weight'])){ 
            $ini_weight = $_POST["ini_weight"];
            $curr_weight = $_POST["curr_weight"];
            $ini_bodytype = $_POST["ini_bodytype"];
            $curr_bodytype = $_POST["curr_bodytype"];
            $email=$_POST['email'];
            
            include '../includes/connection.php';
            date_default_timezone_set('Asia/Kathmandu');
            //$current_date = date('Y-m-d h:i:s');
                $current_date = date('Y-m-d h:i A');
              $exp_date_time = explode(' ', $current_date);
                $curr_date =  $exp_date_time['0'];
                $curr_time =  $exp_date_time['1']. ' ' .$exp_date_time['2'];
            
           
            $qry = "update users set ini_weight='$ini_weight', curr_weight='$curr_weight', ini_bodytype='$ini_bodytype', curr_bodytype='$curr_bodytype' progress_date='$curr_date' where email='$email'";
            $result = mysqli_query($connect,$qry); 

            if(!$result){
                echo"<div class='container-fluid'>";
                    echo"<div class='row-fluid'>";
                    echo"<div class='span12'>";
                    echo"<div class='widget-box'>";
                    echo"<div class='widget-title'> <span class='icon'> <i class='fas fa-info'></i> </span>";
                        echo"<h5>Error Message</h5>";
                        echo"</div>";
                        echo"<div class='widget-content'>";
                            echo"<div class='error_ex'>";
                            echo"<h1 style='color:maroon;'>Error 404</h1>";
                            echo"<h3>Error occured while updating your details</h3>";
                            echo"<p>Please Try Again</p>";
                            echo"<a class='btn btn-warning btn-big'  href='customer-progress.php'>Go Back</a> </div>";
                        echo"</div>";
                        echo"</div>";
                    echo"</div>";
                    echo"</div>";
                echo"</div>";
            }else {

                echo"<div class='container-fluid'>";
                    echo"<div class='row-fluid'>";
                    echo"<div class='span12'>";
                    echo"<div class='widget-box'>";
                    echo"<div class='widget-title'> <span class='icon'> <i class='fas fa-briefcase'></i> </span>";
                        echo"<h5>Administrator</h5>";
                        echo"</div>";
                        echo"<div class='widget-content'>";
                            echo"<div class='error_ex'>";
                            echo"<h1>Successfull</h1>";
                            echo"<h3>Changes Done Succefully!</h3>";
                            echo"<p>The requested user's progress has been updated. Please click the button to go back.</p>";
                            echo"<a class='btn btn-inverse btn-big'  href='dashboard.html'>Return Home</a> </div>";
                        echo"</div>";
                        echo"</div>";
                    echo"</div>";
                    echo"</div>";
                echo"</div>";

            }

            }else{
                echo"<h3>YOU ARE NOT AUTHORIZED TO REDIRECT THIS PAGE. GO BACK to <a href='index.php'> DASHBOARD </a></h3>";
            }
?>
                                                               
                
             </form>
         </div>
</div></div>
</div>




<style>
#footer {
  color: black;
}
</style>



<script src="../js/excanvas.min.js"></script> 
<script src="../js/jquery.min.js"></script> 
<script src="../js/jquery.ui.custom.js"></script> 
<script src="../js/bootstrap.min.js"></script> 
<script src="../js/jquery.flot.min.js"></script> 
<script src="../js/jquery.flot.resize.min.js"></script> 
<script src="../js/jquery.peity.min.js"></script> 
<script src="../js/fullcalendar.min.js"></script> 
<script src="../js/matrix.js"></script> 
<script src="../js/matrix.dashboard.js"></script> 
<script src="../js/jquery.gritter.min.js"></script> 
<script src="../js/matrix.interface.js"></script> 
<script src="../js/matrix.chat.js"></script> 
<script src="../js/jquery.validate.js"></script> 
<script src="../js/matrix.form_validation.js"></script> 
<script src="../js/jquery.wizard.js"></script> 
<script src="../js/jquery.uniform.js"></script> 
<script src="../js/select2.min.js"></script> 
<script src="../js/matrix.popover.js"></script> 
<script src="../js/jquery.dataTables.min.js"></script> 
<script src="../js/matrix.tables.js"></script> 


</body>
</html>
