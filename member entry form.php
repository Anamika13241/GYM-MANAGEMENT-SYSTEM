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
<h1><center>Member Entry Form</center></h1>
</div>
<div class="container-fluid">
  <hr>
  <div class="row-fluid">
    <div class="span6">
      <div class="widget-box">
        <div class="widget-title"> <span class="icon"> <i class="fas fa-align-justify"></i> </span>
          <h5>Personal-info</h5>
        </div>
        <div class="widget-content nopadding">
          <form action="submit member details.php" method="POST" class="form-horizontal">
            <div class="control-group">
            <label class="control-label">Fullname :</label>
              <div class="controls">
          
						<input type="text" name="fullname" id="fullname" class="form-control my-2" placeholder="Enter Fullname" autocomplete="off"  title="Name must be alphabets" onkeyup="return Validate()"></td>
            <span id="nameError" name="nameError"></span><br>
						
              </div>
            </div>
            <div class="control-group">
              <label class="control-label">Email :</label>
              <div class="controls">
                <input type="text"  name="email" id="email" placeholder="email" pattern="[^ @]*@[^ @]*gmail.com" autocomplete="off" title="please enter a valid email address" onkeyup="return ValidateEmail()" required />
                <span id="emailError" name="nameError"></span>
              </div>
            </div>
            <div class="control-group">
              <label class="control-label">Password :</label>
              <div class="controls">
                <input type="password"  id="password" name="password" placeholder="**********" required onkeyup="return Validatepassword()" />
                <span id="passwordError" name="passwordError"></span>
                <span class="help-block">Note: The given information will create an account for this particular member</span>
              </div>
            </div>
            <div class="control-group">
              <label class="control-label">Gender :</label>
              <div class="controls">
              <select name="gender" required="required" id="select" required>
                  <option value="Male" selected="selected">Male</option>
                  <option value="Female">Female</option>
                  <option value="Other">Other</option>
                </select>
              </div>
            </div>
            <div class="control-group">
              <label class="control-label">D.O.B:</label>
              <div class="controls">
                <input type="date" name="dob" class="span11"  required/>
                <span class="help-block">Date of registration</span> </div>
            </div>
            
          
        </div>
     
        
        <div class="widget-content nopadding">
          <div class="form-horizontal">
          
        </div>
        <div class="widget-content nopadding">
          <div class="form-horizontal">
            <div class="control-group">
              <label for="normal" class="control-label">Plans: </label>
              <div class="controls">
                <select name="plans" required="required" id="select" required>
                  <option value="1" selected="selected">One Month</option>
                  <option value="3">Three Month</option>
                  <option value="6">Six Month</option>
                  <option value="12">One Year</option>

                </select>
              </div>

            </div>
            <div class="control-group">
            </div>
          </div></div></div>
      </div>
</div>
<div class="span6">
      <div class="widget-box">
        <div class="widget-title"> <span class="icon"> <i class="fas fa-align-justify"></i> </span>
          <h5>Contact Details</h5>
        </div>
        
        <div class="widget-content nopadding">
          <div class="form-horizontal">
          <div class="control-group">
              <label for="normal" class="control-label">Contact Number</label>
              <div class="controls">
                <input type="number" id="phone" name="phoneno" minlength="10" maxlength="10" class="span8 mask text" onkeyup="return ValidatePhone()" required>
                <span id="phoneError" name="phoneError"></span>
                <span class="help-block blue span8">(999) 999-9999</span> 
                </div>
            </div>
           
            <div class="control-group">
              <label class="control-label">Address :</label>
              <div class="controls">
                <input type="text" class="span11" name="address" placeholder="Address" required onkeyup="return ValidateAddress()"/>
                <span id="addressError" name="addressError"></span>
                <span class="help-block blue span8"></span>
              </div>
            </div>
          </div>

              <div class="widget-title"> <span class="icon"> <i class="fas fa-align-justify"></i> </span>
          <h5>Service Details</h5>
        </div>
        <div class="widget-content nopadding">
          <div class="form-horizontal">
            
            
            <div class="control-group">
              <label class="control-label">Services</label>
              <div class="controls">
                <label>
                  <input type="radio" value="Fitness" name="service" required />
                  Fitness <small>- $55 per month</small></label>
                <label>
                  <input type="radio" value="Sauna" name="service" required />
                  Sauna <small>- $35 per month</small></label>
                <label>
                  <input type="radio" value="Cardio" name="service" required />
                  Cardio <small>- $40 per month</small></label>
              </div>
            </div>

            <div class="control-group">
              <label class="control-label">Total Amount</label>
              <div class="controls">
                <div class="input-append">
                  <span class="add-on">$</span> 
                  <input type="number" placeholder="50" name="amount" class="span11" required>
                  </div>
              </div>
            </div>
          <div class="form-actions text-center">
              <button type="submit" class="btn btn-success">Submit Member Details</button>
              <form onsubmit="return Validate() &&  ValidateEmail() && ValidatePhone() && Validatepassword() && "class="register-form"  autocomplete="off" method="post">
            </div>
            </form>

          </div>



        </div>

        </div>
      </div>
      <a href="dashboard.html">
          <span class="btn btn-success">Go Back</span>
        </a>


	</div>
  </div>
</div></div>
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
                              if(Validate()===false || ValidateEmail()===false ||ValidatePhone()==false || Validatepassword()===false || Confirmpass()===flase)
                              {
                                return false;
                              }
                            }
    
                            
  </script>

</body>
</html>
