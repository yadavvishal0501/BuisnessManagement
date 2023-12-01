<?php
	$id=$_GET['id'];
	include('database.php');
   mysqli_query($data,"delete from `distributor` where id='$id'");
   // mysqli_query($data,"delete from `user` where dist_id='$id'");
   header('location:distributor.php');
  ?>