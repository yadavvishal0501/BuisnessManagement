<?php
	$id=$_GET['id'];
	include('database.php');
   mysqli_query($data,"delete from `invoice_user` where id='$id' ");
   header('location:profile.php');
  ?>