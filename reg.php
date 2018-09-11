
<?php
//Sample Registration Form In PHP With Prevention of Sql Injection Attack
$con=mysqli_connect('ip','Username','password','database name')or die('Please Check username and Password of Database');
if(isset($_POST['submit']))
 {
	 $name=filter_var($_POST['name'], FILTER_SANITIZE_STRING); 
	 $name =  mysqli_real_escape_string($con,$_POST['name']);
	 $gender = mysqli_real_escape_string($con,$_POST['gen']);
	 $dob = mysqli_real_escape_string($con,$_POST['dob']);
	 $email = mysqli_real_escape_string($con,$_POST['email']);
	 $mob = mysqli_real_escape_string($con,$_POST['mobile']);
	 $clg = mysqli_real_escape_string($con,$_POST['college']);
	 $regid = mysqli_real_escape_string($con,$_POST['regid']);
	 $loc = mysqli_real_escape_string($con,$_POST['loc']);

	if(mysqli_query($con,"INSERT INTO table_name (table attributes use Comma ( , ) to Seprate Attributes in the table ) VALUES('$name','$gender','$dob','$email','$mob','$clg','$regid','$loc')"))
	 {
		echo "<div class='container'><div class='alert alert-success center-block'>
		<strong>Thanks For Your Interest</strong> Your Application has been Registered  .</div> </div>";
		
	else
			echo "<div class='container'><div class='alert alert-danger center-block'>
				<strong>Error</strong> Please Check Once All Fields are Mandatory .</div> </div>";
 }
 
	?>
	
  
  
  
  <!--HTML starts here-->
  <!DOCTYPE html>
<html lang="en">
<head>
	<style>
		input[type="text"]
		{
			
			border-radius: 10px;
			border-color: blue;
		}
		input[type="email"]
		{
			border-radius: 10px;
			border-color: blue;
		}
		input[type="date"]
		{
			border-radius: 10px;
			border-color: blue;
			
		}
		input[type="submit"]
		{
			border-radius: 15px;
			border-color: black;
			width: 50%;
			background-color: grey;
		}
		
	</style>

  <title>Register </title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
   <html lang="en-US">
        
		
		<body>
	      <div class="container">
		   <center><br> <h2>Register</h2> 
				<h5 style="color:red"> All Fields are Mandatory* </h5></center><br>
                 <form class="form-inline" name="form1" method="post"  action="">
				 <table border=0 align="center">
                <tr>				 
				  <td>	<br>			  
				    <div class="form-group">
						<label for="rid">Full Name:</label>&nbsp;
						 <input type="text" class="form-control" id="reg" placeholder="Full Name" name="name" required="required">
					</div> 
					</td>
					</tr> 
	           
			   <tr>				 
				  <td><br>
					<div class="form-group">
						&emsp;&emsp;&emsp;&emsp;&emsp;<label for="male">Male</label>
						 <input type="radio" class="form-control" id="gender"  name="gen" value="Male"required="required" >
						&emsp;&emsp;&emsp;&emsp;&nbsp; <label for="female">Female</label>
						 <input type="radio" class="form-control" id="gender"  name="gen" value="Female"required="required" >
					</div> 
					</td>
					</tr>
	
             	<tr>				 
				  <td><br>
					<div class="form-group">
						<label for="name">DOB:</label>&emsp;&emsp;&emsp;
						 <input type="date" class="form-control" id="name" placeholder="DD-MM-YYYY" name="dob" min="1990-01-01" max="2004-01-01" max="10"required="required" >
					</div> 
					</td>
					</tr>

		      	<tr>				 
				  <td><br>
					<div class="form-group">
						<label for="mobile">Email:</label>&emsp;&emsp;&nbsp;&nbsp;
						 <input type="email" class="form-control" id="email" placeholder="Email " name="email" required="required">
					</div>
					</td>
					</tr>

					<tr>				 
				  <td><br>
					<div class="form-group">
						<label for="mobile">Mobile:</label>&emsp;&emsp;
						 <input type="text" class="form-control" id="mobile" placeholder="Mobile" name="mobile" maxlength="10" required="required">
					</div>
					</td>
					</tr>

						<tr>				 
				       <td><br>
	                 	<div class="form-group">
						<label for="class">College:</label>&emsp;&nbsp;&nbsp;
						 <input type="text" class="form-control" id="clg" placeholder="College Name " name="college"required="required">
					</div> 
					</td>
					</tr>
					
						<tr>				 
				       <td><br>
	                 	<div class="form-group">
						<label for="class">Register Id:</label>
						 <input type="text" class="form-control" id="clg" placeholder="College Register ID " name="regid" maxlength="15" "required="required">
					</div> 
					</td>
					</tr>
					
                        <tr>				 
				       <td><br>
	                 	<div class="form-group">
						<label for="class">City/Town:</label>&nbsp;
						 <input type="text" class="form-control" id="loc" placeholder="City/Town" name="loc"required="required">
					</div> 
					</td>
					</tr>
	
	
				<tr>				 
				  <td><br>
					</div> 
						<center><class="submit"><input type ="submit"  class="btn btn-success" name="submit" value="Submit"/></center>
                  </td>
					</tr>
						
						</form>
	            </div>
				</div>
		<!--End -->
</body>
</html>
