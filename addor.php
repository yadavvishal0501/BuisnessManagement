<?php
include('database.php');

	$type=$_POST['type'];
    $date=$_POST['date'];
	$status=$_POST['status'];
	

		
	mysqli_query($data,"insert into `order` (order_type,order_date,order_status) values ('$type','$date','$status')");
  header('location:order.php');





	
  

   
	
?>