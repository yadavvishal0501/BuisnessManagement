<?php
$host ="localhost";
$user="root";
$password="";
$db="cmd";
 


$data=mysqli_connect($host,$user,$password,$db);
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }

?>