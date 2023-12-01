<?php
	$id=$_GET['id'];
	include('database.php');
   mysqli_query($data,"delete from `order` where order_id='$id'");
   header('location:u-order.php');
  
	
	
?>