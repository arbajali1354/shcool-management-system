<?php include("connection.php");
 $picup=$_GET['id'];

$query = "SELECT * FROM  form where id='$picup'";
$data = mysqli_query($conn,$query);
$total = mysqli_num_rows($data);
$result = mysqli_fetch_assoc($data)
?>

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
		<div class="title">Update Student Details</div>
		<div class="form">
		
			<div class="input_field">
				<label>First Name</label>
				<input type="text" value="<?php echo $result[fname]; ?>" class="input" name="fname">
			</div>

			<div class="input_field">
				<label>Last Name</label>
				<input type="text" value="<?php echo $result[lname]; ?>"class="input" name="lname">
			</div>

			<div class="input_field">
				<label>Password</label>
				<input type="password" value="<?php echo $result[password]; ?>" class="input" name="password">
			</div>

			<div class="input_field">
				<label>Confirm Password</label>
				<input type="password" value="<?php echo $result[conpassword]; ?>" class="input" name="conpassword">
			</div>

			<div class="input_field">
				<label>Gender</label>
				<div class="custom_select">
					
					<select name="gender"> 
					  <option value="Not Selected">Select</option>
					  <option value="Male"
					  <?php 
					    if($result['gender'] == 'Male')
					    {
					    	echo "Selected";
					    }
					  ?>
					  >Male</option>
					  <option value="Female"
					  <?php 
					    if($result['gender'] == 'Female')
					    {
					    	echo "Selected";
					    }
					    ?>
					  >Female</option>
				    </select>

				</div>
			</div>

			<div class="input_field">
				<label>Email Address</label>
				<input type="text"  value="<?php echo $result[email]; ?>" class="input" name="email">
			</div>

			<div class="input_field">
				<label>Phone Number</label>
				<input type="text"  value="<?php echo $result[phone_no]; ?>"class="input" name="phone_no">
			</div>

			<div class="input_field">
				<label>Address</label>
				<textarea class="textarea"  value="<?php echo $result[address]; ?>" name="address"> <?php echo $result['address']; ?> </textarea>
			</div>

			<div class="input_field terms">
				<label class="check">
					<input type="checkbox">
					<span class="checkmark"></span>
				</label>
				<p>Agree to terms and conditions</p>
			</div>

			<div class="input_field">
				<input type="submit" value="Update Details" class="btn" name="update">
			</div>

		</div>
	   </form>
	</div>
</body>
</html>

<?php
  
  if($_POST['update'])
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

       
        $query = "UPDATE form set fname='$fname',lname='$lname',gender='$gender',password='$pwd',conpassword='$cpwd',email='$email',phone_no='$phone_no',address='$address' WHERE id='$picup'";

          $data = mysqli_query($conn,$query);
         if($data)
          {
           	echo "<script>alert('Record Updated')</script>";
           	?>
           	<meta http-equiv = "refresh" content = "0; 
           	url = http://localhost/CRUD/display.php" />

           	<?php
          }
           else
          {
    	    echo "Failed to Update";
    	  }
    } 
    else
    {
    	echo "Fieled are empty";
    } 
}
  ?> 