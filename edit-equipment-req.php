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



<form role="form" action="index.php" method="POST">
    <?php 

            if(isset($_POST['name'])){
            $name = $_POST["name"];    
            $amount = $_POST["amount"];
            $vendor = $_POST["vendor"];
            $description = $_POST["description"];
            $address = $_POST["address"];
            $contact = $_POST["contact"];
            $date = $_POST["date"];
            $quantity = $_POST["quantity"];
            $id=$_POST['id'];

            $totalamount = $amount * $quantity;
            
            include '../includes/connection.php';
            $qry = "update equipment set name='$name', amount='$totalamount',vendor='$vendor', description='$description', address='$address', address='$address', contact='$contact', date='$date', quantity='$quantity' where id='$id'";
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
                            echo"<a class='btn btn-warning btn-big'  href='edit-equipment.php'>Go Back</a> </div>";
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
                    echo"<div class='widget-title'> <span class='icon'> <i class='fas fa-info'></i> </span>";
                        echo"<h5>Message</h5>";
                        echo"</div>";
                        echo"<div class='widget-content'>";
                            echo"<div class='error_ex'>";
                            echo"<h1>Success</h1>";
                            echo"<h3>Equipment details has been updated!</h3>";
                            echo"<p>The requested details are updated. Please click the button to go back.</p>";
                            echo"<a class='btn btn-inverse btn-big'  href='equipments.php'>Go Back</a> </div>";
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
<a href="dashboard.html">
          <span class="btn btn-success">Go Back</span>
        </a>

</div>






</script>
</body>
</html>
