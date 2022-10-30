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




  <h1><center>Equipment Entry Form</center></h1>
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
          <form action="add equipment req.php" method="POST" class="form-horizontal">
            <div class="control-group">
              <label class="control-label">Equipment :</label>
              <div class="controls">
                <input type="text" class="span11" name="ename" placeholder="Equipment Name" required />
              </div>
            </div>
            <div class="control-group">
              <label class="control-label">Description :</label>
              <div class="controls">
                <input type="text" class="span11" name="description" placeholder="Short Description" required />
              </div>
            </div>
           
            
            <div class="control-group">
              <label class="control-label">Date of Purchase :</label>
              <div class="controls">
                <input type="date" name="date" class="span11" required/>
                <span class="help-block">Please mention the date of purchase</span> </div>
            </div>

            <div class="control-group">
              <label class="control-label">Quantity :</label>
              <div class="controls">
                <input type="number" class="span5" name="quantity" placeholder="Equipment Qty" required />
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
              <label class="control-label">Vendor :</label>
              <div class="controls">
                <input type="text" class="span11" name="vendor" placeholder="Vendor"required />
              </div>
            </div>

            <div class="control-group">
              <label class="control-label">Address :</label>
              <div class="controls">
                <input type="text" class="span11" name="address" placeholder="Vendor Address" required />
              </div>
            </div>

            <div class="control-group">
              <label for="normal" class="control-label">Contact Number</label>
              <div class="controls">
                <input type="number" id="mask-phone" name="contact" minlength="10" maxlength="10" class="span8 mask text" required>
                <span class="help-block blue span8">(999) 999-9999</span> 
                </div>
            </div>

          </div>

              <div class="widget-title"> <span class="icon"> <i class="fas fa-align-justify"></i> </span>
          <h5>Pricing</h5>
        </div>
        <div class="widget-content nopadding">
          <div class="form-horizontal">
            
            
    

            <div class="control-group">
              <label class="control-label">Cost Per Item: </label>
              <div class="controls">
                <div class="input-append">
                  <span class="add-on">$</span> 
                  <input type="number" placeholder="269" name="amount" class="span11" required>
                  </div>
              </div>
            </div>
            
          
            
            <div class="form-actions text-center">
              <button type="submit" class="btn btn-success">Submit Details</button>
            </div>
            </form>

          </div>
          <a href="dashboard.html">
          <span class="btn btn-success">Go Back</span>
        </a>




        </div>

        </div>
      </div>

	</div>
  </div>
  
 
</div></div>



  


</script>
</body>
</html>
