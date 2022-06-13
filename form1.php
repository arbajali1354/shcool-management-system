<?php include("connection.php"); ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-witdh, initial-scale=1">
	<title>PHP CRUD Operations</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<div class="container">
		<form action="#" method="POST">
		<div class="title">Registration Form</div>
		<div class="form">
		
			<div class="input_field">
				<label>First Name</label>
				<input type="text" class="input" name="fname">
			</div>

			<div class="input_field">
				<label>Last Name</label>
				<input type="text" class="input" name="lname">
			</div>

			<div class="input_field">
				<label>Password</label>
				<input type="password" class="input" name="password">
			</div>

			<div class="input_field">
				<label>Confirm Password</label>
				<input type="password" class="input" name="conpassword">
			</div>

			<div class="input_field">
				<label>Gender</label>
				<div class="custom_select">
					<select name="gender"> 
					  <option value="Not Selected">Select</option>
					  <option value="Male">Male</option>
					  <option value="Female">Female</option>
				    </select>
				</div>
			</div>

			<div class="input_field">
				<label>Email Address</label>
				<input type="text" class="input" name="email">
			</div>

			<div class="input_field">
				<label>Phone Number</label>
				<input type="text" class="input" name="phone_no">
			</div>

			<div class="input_field">
				<label>Address</label>
				<textarea class="textarea" name="address"></textarea>
			</div>

			<div class="input_field terms">
				<label class="check">
					<input type="checkbox">
					<span class="checkmark"></span>
				</label>
				<p>Agree to terms and conditions</p>
			</div>

			<div class="input_field">
				<input type="submit" value="Register" class="btn" name="register">
			</div>

		</div>
	   </form>
	</div>
</body>
</html>

<?php
  
  if($_POST['register'])
  {
  	$fname    = $_POST['fname'];
  	$lname    = $_POST['lname'];
  	$pwd      = $_POST['password'];
  	$cpwd     = $_POST['conpassword'];
  	$gender   = $_POST['gender'];
  	$email    = $_POST['email'];
  	$phone_no = $_POST['phone_no'];
  	$address  = $_POST['address'];

  	if($fname !="" && $lname !="" && $cpwd !="" && $cpwd != "" && $gender != "" && $email != "" && $phone_no !="" && $address != "" ) 
  	{

        $query = "INSERT INTO FORM (fname,lname,password,conpassword,gender,email,phone_no,address) VALUES('$fname','$lname','$pwd','$cpwd','$gender','$email','$phone_no','$address')";
          $data = mysqli_query($conn,$query);
         if($data)
          {
           	echo "data inserted into database";
          }
           else
          {
    	    echo "data is not inserted database";
    	  }
    } 
    else
    {
    	echo "Fieled are empty";
    } 
}
  ?> 