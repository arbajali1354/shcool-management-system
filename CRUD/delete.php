<?php
include ("connection.php");
$del = $_GET['id'];
$query = "DELETE FROM form WHERE id = '$del' ";
$data = mysqli_query($conn,$query);
if($data)
{
		echo "<script>alert('Record Deleted ID = $del')</script>";
	?>
	<meta http-equiv = "refresh" content = "0; 
    url = http://localhost/CRUD/display.php" />
    <?php

}
else
{
	echo "Failed Deletion";
}
?>