<html>

  <head>
  	<title>Display</title>
  	<style>
  	body
  	{
  		background: #D071f9;
  	}
  	table
  	{
  		background-color: white;
  	}
    .update,
    .delete
    {
      background-color: green;
      color: white;
      border: 0;
      outline: none;
      border-radius: 5px;
      height: 22px;
      width: 80px;
      font-weight: bold;
      cursor: pointer;
    }
    .delete
    {
      background-color: red;
    }
   

  	</style>
  </head>
</html>

<?php
include("connection.php");
 error_reporting(0);
$query = "SELECT * FROM  FORM";
$data = mysqli_query($conn,$query);
$total = mysqli_num_rows($data);




 if($total!=0)
 {
 	?>
 	<h2 align="center"><mark>Display All records</mark></h2>
 	<center>
 	 <table border="3" cellspacing="7" width="100%">
 	 	<tr>
        <th width="6%">ID</th>
 	 	    <th width="9%">First Name</th>
 	 	    <th width="9%">Last Name</th>
 	 	    <th width="6%">Gender</th>
 	 	    <th width="20%">Email Address</th>
 	 	    <th width="10%">Phone Number</th>
 	 	    <th width="20%">Address</th>
 	 	    <th width="20%">Operation</th>
 	 	</tr>
 	 

 	<?php
 	
 	while ($result = mysqli_fetch_assoc($data))
 	{
       		echo "<tr>
       		         <td>".$result[id]."</td>
       		         <td>".$result[fname]."</td>
       		         <td>".$result[lname]."</td>
       		         <td>".$result[gender]."</td>
       		         <td>".$result[email]."</td>
       		         <td>".$result[phone_no]."</td>
       		         <td>".$result[address]."</td>

       		         <td><a href='update_design.php?id=$result[id]'>
                   <input type ='submit' value='UPDATE' class='update'></a>
                   <a href='delete.php?id=$result[id]'>
                   <input type ='submit' value='DELETE' class='delete' onclick = 'return checkdelete()'></a>
                   </td>
       		      </tr>
 	 	         ";
 	}
 }
 else
 {
 	echo "No records found";
 }


 ?>
 </table>
</center>


<script>
function checkdelete()
{
  return confirm('Are you sure you want Delete?');
}
</script>