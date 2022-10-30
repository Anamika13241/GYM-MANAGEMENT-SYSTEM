<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
<title>Gym System Admin</title>
<meta charset="UTF-8" />
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
        include '../includes/connection.php';
        $id=$_GET['id'];
        $qry= "select * from equipment where id='$id'";
        $result=mysqli_query($connect,$qry);
        while($row=mysqli_fetch_array($result)){
    ?> 


  <h1><center>Equipment Entry Form</h1>
</div>
<div class="container-fluid">
  <hr>
  <div class="row-fluid">
    <div class="span6">
      <div class="widget-box">
        <div class="widget-title"> <span class="icon"> <i class="fas fa-align-justify"></i> </span>
          <h5>Eqipment-info</h5>
        </div>
        <div class="widget-content nopadding">
          <form action="edit-equipment-req.php" method="POST" class="form-horizontal">
            <div class="control-group">
              <label class="control-label">Equipment Name :</label>
              <div class="controls">
                <input type="text" class="span11" name="name" value='<?php echo $row['name']; ?>' required />
              </div>
            </div>
            <div class="control-group">
              <label class="control-label">Description :</label>
              <div class="controls">
                <input type="text" class="span11" name="description" value='<?php echo $row['description']; ?>' required />
              </div>
            </div>
           
            
            <div class="control-group">
              <label class="control-label">Date of Purchase :</label>
              <div class="controls">
                <input type="date" name="date" value='<?php echo $row['date']; ?>' class="span11" />
                <span class="help-block">Please mention the date of purchase</span> </div>
            </div>

             <div class="control-group">
              <label class="control-label">Quantity :</label>
              <div class="controls">
                <input type="number" class="span4" name="quantity" value='<?php echo $row['quantity']; ?>'  required />
              </div>
            </div>
            
          
        </div>
     
        
        <div class="widget-content nopadding">
          <div class="form-horizontal">
          
        </div>
        <div class="widget-content nopadding">
          <div class="form-horizontal">
            
            
          </div>

          </div>



        </div>
      </div>
	  
	
    </div>

    
    
    <div class="span6">
      <div class="widget-box">
        <div class="widget-title"> <span class="icon"> <i class="fas fa-align-justify"></i> </span>
          <h5>Other Details</h5>
        </div>
        <div class="widget-content nopadding">
          <div class="form-horizontal">
            <div class="control-group">
              <label for="normal" class="control-label">Contact Number</label>
              <div class="controls">
                <input type="number" id="mask-phone" name="contact" minlength="10" maxlength="10" value='<?php echo $row['contact']; ?>' class="span8 mask text" minlength="10" maxlength="10" required>
                <span class="help-block blue span8">(999) 999-9999</span> 
                </div>
            </div>
            <div class="control-group">
              <label class="control-label">Vendor :</label>
              <div class="controls">
                <input type="text" class="span11" name="vendor" value='<?php echo $row['vendor']; ?>' required />
              </div>
            </div>

            <div class="control-group">
              <label class="control-label">Address :</label>
              <div class="controls">
                <input type="text" class="span11" name="address" value='<?php echo $row['address']; ?>' required />
              </div>
            </div>
          </div>

              <div class="widget-title"> <span class="icon"> <i class="fas fa-align-justify"></i> </span>
          <h5>Pricing</h5>
        </div>
        <div class="widget-content nopadding">
          <div class="form-horizontal">
            
            
    

            <div class="control-group">
              <label class="control-label">Total Cost: </label>
              <div class="controls">
                <div class="input-append">
                  <span class="add-on">$</span> 
                  <input type="number" placeholder="120000" name="amount" value='<?php echo $row['amount']; ?>' class="span11" required>
                  </div>
              </div>
            </div>
            
          
            
            <div class="form-actions text-center">
            
             <input type="hidden" name="id" value="<?php echo $row['id'];?>">
              <button type="submit" class="btn btn-success">Submit Details</button>
            </div>
            </form>

          </div>

          <?php
        }
    ?>


        </div>
        <a href="dashboard.html">
          <span class="btn btn-success">Go Back</span>
        </a>


        </div>
      </div>

	
  </div>
  
  
</div></div>









</body>
</html>
