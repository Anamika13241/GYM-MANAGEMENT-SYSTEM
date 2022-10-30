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
      $qry="select * from equipment";
      $cnt = 1;
        $result=mysqli_query($connect,$qry);

        
          echo"<table class='table table-bordered table-hover'>
              <thead>
                <tr>
                <th>id</th>
                  <th>Equipment name</th>
                  <th>amount</th>
                  <th>quantity</th>
                  <th>vendor</th>
                  <th>description</th>
                  <th>Address</th>
                  <th>contact</th>
                  <th>date</th>
                </tr>
              </thead>";
              
            while($row=mysqli_fetch_array($result)){
            
            echo"<tbody> 
               
                <td><div class='text-center'>".$cnt."</div></td>
                <td><div class='text-center'>".$row['name']."</div></td>
                <td><div class='text-center'>".$row['amount']."</div></td>
                <td><div class='text-center'>".$row['quantity']."</div></td>
                <td><div class='text-center'>".$row['vendor']."</div></td>
                <td><div class='text-center'>".$row['description']."</div></td>
                <td><div class='text-center'>".$row['address']."</div></td>
                <td><div class='text-center'>".$row['contact']."</div></td>
                <td><div class='text-center'>".$row['date']."</div></td>

             
                
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
#footer {
  color: white;
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

<script type="text/javascript">
  // This function is called from the pop-up menus to transfer to
  // a different page. Ignore if the value returned is a null string:
  function goPage (newURL) {

      // if url is empty, skip the menu dividers and reset the menu selection to default
      if (newURL != "") {
      
          // if url is "-", it is this page -- reset the menu:
          if (newURL == "-" ) {
              resetMenu();            
          } 
          // else, send page to designated URL            
          else {  
            document.location.href = newURL;
          }
      }
  }

// resets the menu selection upon entry to this page:
function resetMenu() {
   document.gomenu.selector.selectedIndex = 2;
}
</script>
</body>
</html>
