<?php 
session_start();
include("includes/connection.php");

$output = "";

if (isset($_POST['register'])) {
	
	$fullname = $_POST['fullname'];
	$email = $_POST['email'];
	$address = $_POST['address'];
	$gender = $_POST['gender'];
	$password = $_POST['password'];
  $password = md5($password);
	$c_pass = $_POST['c_pass'];
  $c_pass = md5($c_pass);
	$plans = $_POST['plans'];
	$service=$_POST['service'];
	$error = array();
	if (empty($fullname)) {
		$error['error'] = "Firstname is Empty";
	}else if(empty($email)){
		$error['error'] = "email is empty";
		$s=mysqli_query($connect,"SELECT count(*) as count FROM login WHERE email='$email'");
		$display=mysqli_fetch_array($s);
		if($display['count']>0)
  			{
				  echo "<script>alert('This username is already exist');window.location='index.php'</script>";	
			  }
	}else if(empty($address)){
		$error['error'] = "address is empty";
	}else if(empty($gender)){
		$error['error'] = "Select Gender";
	
	}else if(empty($password)){
		$error['error'] = "Enter Password";
	}else if(empty($c_pass)){
		$error['error'] = "Confirm Password";
	}else if($password != $c_pass){
		$error['error'] = "Both password do not match";
	}else if(empty($plans)){
		$error['error'] = "Select plans";
	}else if(empty($service)){
		$error['error'] = "Select service";
	}
	if (isset($error['error'])) {
		$output .= $error['error'];
	}else{
		$output .= "";
	}?>
	

	<?php 
	$s=mysqli_query($connect,"SELECT count(*) as count FROM login WHERE email='$email'");
	$display=mysqli_fetch_array($s);
	if($display['count']>0)
		  {
			  echo "<script>alert('This email is already exist');window.location='index.php'</script>";	
		  }

	else 
	if(count($error) < 1) {
		$queryo = "INSERT INTO login(email,password)values('$email','$password')";
		$resi= mysqli_query($connect,$queryo);

		
		
		$query = "INSERT INTO users(fullname,email,address,gender,password,plans,service) VALUES('$fullname','$email','$address','$gender','$password','$plans','$service')";
		$res = mysqli_query($connect,$query);
	

		if ($res) {
			$output .= "You have successfully registered";
			header("Location:index.php");
		}else{
			$output .= "Failed to register";
		}
	}
}
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>GYM MANAGEMENT SYSTEM</title>
</head>
<body background="banner1.png">

	<?php include("includes/header.php"); ?>


	<div class="container">
		<div class="col-md-12">
			<div class="row d-flex justify-content-center">
				<div class="col-md-6 shadow-sm" style="margin-top:100px;">
					<form method="post">
						
						<h3 class="text-center my-3">Register</h3>

						<div class="text-center"><?php echo $output; ?></div>

						<label>Fullname</label>
						<input type="text" name="fullname" id="fullname" class="form-control my-2" placeholder="Enter Fullname" autocomplete="off"  title="Name must be alphabets" onkeyup="return Validate()"></td>
            <span id="nameError" name="nameError"></span><br>
						

						<label>Email</label>
						<input type="text" name="email" class="form-control my-2" placeholder="Enter email" id="email" pattern="[^ @]*@[^ @]*gmail.com" autocomplete="off" title="please enter a valid email address" onkeyup="return ValidateEmail()">
						<span id="emailError" name="nameError"></span>

						<label>Address</label>
						<input type="text" name="address" id="address" class="form-control my-2" placeholder="Enter address" required autocomplete="off" onkeyup="return ValidateAddress()">
					  <span id="addressError" name="addressError"></span>
						

                        <label>Select Gender</label>
						<select class="form-control my-2" name="gender" required>
							<option value="">Select Gender</option>
							<option value="Male">Male</option>
							<option value="Female">Female</option>
						</select>
                         
                        
						

						<label>Password</label>
						<input type="password" name="password" id="password" class="form-control my-2" placeholder="Enter Password" onkeyup="return Validatepassword()" required>
            <span id="passwordError" name="passwordError"></span>

						<label>Confirm Password</label>
						<input type="password" name="c_pass" id="c_pass" class="form-control my-2" placeholder="Enter Confirm Password" onkeyup="return Confirmpass()"required>
            <span id="cpasswordError" name="cpasswordError"></span>

						<label>Select Plans</label>
						<select class="form-control my-2" name="plans" required>
							<option value="">Select Plans</option>
							<option value="1 month" >One Month</option>
                               	 <option value="3 month">Three Month</option>
                                	<option value="6 month">Six Month</option>
                             	   <option value="12">One Year</option>
						</select>

				<label>Select Service</label>
				<select class="form-control my-2" name="service" required>
							<option value="">Select service</option>
                            
                                <option value="Fitness">Fitness</option>
                                <option value="Sauna">Sauna</option>
                                <option value="Cardio">Cardio</option>
                            </select>

						<input type="submit" name="register" class="btn btn-success" value="Register">
						<form onsubmit="return Validate() && ValidatePhone() && ValidateEmail() && Validatepassword() && Confirmpass()"class="register-form"  autocomplete="off" method="post">
    
					</form>
				</div>
			</div>
		</div>
	</div>

	<div class="" style="margin-top: 30px;"></div>
	
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
function Validate() 
                            {
                              
                            var val = document.getElementById('fullname').value;
                            if (!val.match(/^[A-Z].*$/)) 
                            {
                              document.getElementById('nameError').innerHTML="Start with a Capital letter & Only alphabets are allowed";
                                    document.getElementById('fullname').value = val;
                                    document.getElementById('fullname').style.color = "red";
                                      return false;
                                    //  flag=1;
                            }
                            if(val.length<3||val.length>30){
                              document.getElementById('nameError').innerHTML="Between 3 to 10 characters";
                                    document.getElementById('fullname').value = val;
    
    
                                document.getElementById('fullname').style.color = "red";
                                      return false;
                                      
                            }
                            
                            else{
    
                            
                              document.getElementById('nameError').innerHTML=" ";
                              document.getElementById('fullname').style.color = "green";
                             return true;
                            }
                          }
                          function ValidatePhone(){
                            var phone=document.getElementById('phone').value;
                            if(!phone.match(/^[6789][0-9]{9}$/)){
                            document.getElementById('phoneError').innerHTML="Enter a valid phone number";
                            document.getElementById('phone').style.color="red";
                           return false;
                           }
                          else{
                          document.getElementById('phoneError').innerHTML=" ";
                          document.getElementById('phone').style.color="green";
                          return true;
}
}
                       
                            function ValidateEmail()
                            {
                         
                              var email=document.getElementById('email').value;  
                              var mailformat = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
                            
                           
                              if(email.length<3||email.length>30){
                                document.getElementById('emailError').innerHTML="Invalid Email";
                                    document.getElementById('email').value = email;
                                    document.getElementById('email').style.color = "red";
                                   // alert("err");
                                      return false;
                              }
                             if(!email.match(/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/)){  
                                document.getElementById('emailError').innerHTML="Please enter a valid Email";  
                                document.getElementById('email').value = email;
                                    document.getElementById('email').style.color = "red";
                              return false;  
                              }
                              else{
                              document.getElementById('emailError').innerHTML=" ";
                              document.getElementById('email').style.color = "green";
                             return true;
    
                              
                            }
                          }
                            
                             function Validatepassword()
                             {
                          
                              var pass=document.getElementById('password').value;
                              // var patt="/^(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{6,20}$/";
                              //  if (pass.length<8)
                               if(!password.match(/[a-z]/g)){
                                document.getElementById('password').value = pass;
                                document.getElementById('passwordError').innerHTML="Enter a strong password eg:Aa#23gh56";
                                  document.getElementById('password').style.color="red"
                                  return false;
                                }
                                if(!password.match(/[A-Z]/g)){
                                  document.getElementById('password').value = pass;
                                  document.getElementById('passwordError').innerHTML="Include minimum one capital letter";
                                 document.getElementById('password').style.color="red"

                                     return false;
                                }
                                if(!password.match(/[0-9]/g)){
                                  document.getElementById('password').value = pass;
                                  document.getElementById('passwordError').innerHTML="Include 1 digit";
                                document.getElementById('password').style.color="red"

                                return false;
                                 }
                              if(!password.match(/[^a-zA-Z\d]/g)){
                                document.getElementById('password').value = pass;
                                document.getElementById('passwordError').innerHTML="Include 1 special character";
                              document.getElementById('password').style.color="red"

                              return false;
                                 }
                            if(password.length < 8){
                              document.getElementById('password').value = pass;
                              document.getElementById('passwordError').innerHTML="Minimum 8 characters";
                              document.getElementById('password').style.color="red"

                              return false;
                            }
                              else{
                                document.getElementById('password').value = pass;

                                document.getElementById('passwordError').innerHTML="";
                                document.getElementById('password').style.color = "green";
                              }
                           
                               
                          }
                          function Confirmpass()
                             {
                          
                              var pass1=document.getElementById('password').value;
                              var pass2=document.getElementById('c_pass').value;
                               if (pass1!=pass2)
                                        {
                                document.getElementById('cpasswordError').innerHTML="Password doesn't match ";  
                                document.getElementById('c_pass').value = pass2;
                                document.getElementById('c_pass').style.color = "red";
                              return false;  
                              }
                           
                              else{
                              document.getElementById('cpasswordError').innerHTML=" ";
                              document.getElementById('c_pass').style.color = "green";
                            return true;
                              
                            }
                          }
                         

                          
function ValidateAddress(){
  var address = document.getElementById('address').value;
                            if (!address.match(/^[a-zA-Z ]*$/)) 
                            {
                              document.getElementById('addressError').innerHTML="Start with a Capital letter & Only alphabets are allowed";
                                    document.getElementById('address').value = address;
                                    document.getElementById('address').style.color = "red";
                                      return false;
                                     flag=1;
                            }
                            if(address.length<3||address.length>30){
                              document.getElementById('addressError').innerHTML="Between 3 to 10 characters";
                                    document.getElementById('address').value = address;
    
    
                                document.getElementById('address').style.color = "red";
                                      return false;
                                      
                            }
                            else{
    
                            
                              document.getElementById('addressError').innerHTML=" ";
                              document.getElementById('address').style.color = "green";
                             return true;
                            }
}
                            function Val()
                            {
                              if(Validate()===false || ValidateEmail()===false || Validatepassword()===false || Confirmpass()===flase)
                              {
                                return false;
                              }
                            }
    
                            
  </script>
  
</body>


</html>

</body>
</html>