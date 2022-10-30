<?php
session_start();
include("includes/connection.php");
if(isset($_POST["login"]))
{
	$email=$_POST['email'];
	$pass=$_POST['password'];
  $pass = md5($pass);
	$role=$_POST['role'];

        
	
	
		
		$result=mysqli_query($connect,"SELECT * from login where email='$email' and password='$pass'");
  		$row=mysqli_fetch_array($result);
		$add="update login set role='$role' where email='$email'";
		$addrole= mysqli_query($connect,$add);
		 
  		if($row>0)
		{
			
			if($role=='admin')
			{
				if($row['email']=="admin@gmail.com"){

				
		    $_SESSION["admin"]=$row["admin"];
			
			header("location:dashtreme-master/dashboard.html");
			
				}
				
			}
			else if($role=='trainer')
			{
				$_SESSION["trainer"]=$row["trainer"];
			header("location:trainer.php");
			}
			else if($role=='member')
			{
				$_SESSION["member"]=$row["member"];
				
				header("location:member/member_dashboard.html");
			}
			 else
            {
               echo "<script>alert('Invalid Email/Password!!');window.location='index.php'</script>";	
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
<body background="ban.png">
<?php include("includes/header.php"); ?>



	<div class="container">
		<div class="col-md-12">
			<div class="row d-flex justify-content-center">
				<div class="col-md-6 shadow-sm" style="margin-top:100px;">
					<form method="post">
						<h3 class="text-center my-3">Login</h3>
						<div class="text-center"></div>

						<label>Email</label>
						<input type="text" name="email" class="form-control my-2" placeholder="Enter email" id="email" pattern="[^ @]*@[^ @]*gmail.com" autocomplete="off" title="please enter a valid email address" onkeyup="return ValidateEmail()">
						<span id="emailError" name="nameError"></span>

                         <label>Select Role</label>
						<select name="role" class="form-control my-2" placeholder="enter your role" required title="please enter your role">
							<option value="">Select Role</option>
							<option value="admin">Admin</option>
							<option value="trainer">Trainer</option>
							<option value="member">Member</option>
						</select>

            <label>Password</label>
						<input type="password" name="password" id="password" class="form-control my-2" placeholder="Enter Password" onkeyup="return Validatepassword()" required>
            <span id="passwordError" name="passwordError"></span>

						<h6 align="right">
						<!--<tr><td><a href="forgot.php">Forgot password?</a></td></tr>-->
						<h1 align="center">
						<input type="submit" name="login" class="btn btn-success" value="login">
            <form onsubmit="ValidateEmail() && Validatepassword() "class="register-form"  autocomplete="off" method="post">
					</form>
				</div>
			</div>
		</div>
	</div>
  <script type="text/javascript">

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
                         
                            function Val()
                            {
                              if(ValidateEmail()===false || Validatepassword()===false)
                              {
                                return false;
                              }
                            }
    
                            
  </script>

</body>
</html>



