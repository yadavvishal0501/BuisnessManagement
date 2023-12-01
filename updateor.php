<?php
	include('database.php');
	$id=$_GET['id'];
	
    $type=$_POST['type'];
    $date=$_POST['date'];
	$status=$_POST['status'];
	
	mysqli_query($data,"update `order` set order_type='$type', order_date='$date' , order_status='$status' where order_id='$id'");
	header('location:order.php');
?>