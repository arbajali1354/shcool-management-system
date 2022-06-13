<?php
    error_reporting(0);
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "responsiveform";

   $conn = mysqli_connect("localhost","root","","responsiveform");
     if($conn)
   {
   	// echo "Connection ok";
   }
   else
   {
   	 echo "Connection Failed".mysqli_connect_error();
   }

?>