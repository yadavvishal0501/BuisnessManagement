<?php
session_start();

if(!isset($_SESSION["username"])){
  header("location:login.php");
}


?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" />
<link rel="stylesheet" href="css/dashboard.css" />
<link rel="stylesheet" href="css/style.css" />

</head>
<body>
  
  <div class="container-fluid" id="main">
  <?php include('top_menus.php'); ?>
  	
    <div class="row row-offcanvas row-offcanvas-left">
    <?php include('left_menus.php'); ?>
     
      <div class="col-md-9 col-lg-10 main"> 
		<h2>Dashboard</h2>
        <div class="row mb-3">		
          <div class="col-xl-3 col-lg-6">
            <div class="card card-inverse card-success">
              <div class="card-block bg-success">
                <div class="rotate">
                  <i class="fa fa-user fa-5x"></i>
                </div>
                <h6 class="text-uppercase">profile</h6>
                <h1 class="display-1"><a href="profile.php"><?php
include('database.php');
$sql = "SELECT * from invoice_user ";
  
    if ($result = mysqli_query($data, $sql)) {
  
    // Return the number of rows in result set
    $rowcount = mysqli_num_rows( $result );
      
    // Display result
    printf( $rowcount);
}
?></a></h1>
              </div>
            </div> 
          </div>        
          <div class="col-xl-3 col-lg-6">
            <div class="card card-inverse card-info">
              <div class="card-block bg-info">
                <div class="rotate">
                  <i class="fa fa-twitter fa-5x"></i>
                </div>
                <h6 class="text-uppercase">distributor</h6>
                <h1 class="display-1"><a href="distributor.php"><?php
include('database.php');
$sql = "SELECT * from distributor";
  
    if ($result = mysqli_query($data, $sql)) {
  
    // Return the number of rows in result set
    $rowcount = mysqli_num_rows( $result );
      
    // Display result
    printf( $rowcount);
}
?></a></h1>
              </div>
            </div>
          </div>
          <div class="col-xl-3 col-lg-6">
            <div class="card card-inverse card-warning">
              <div class="card-block bg-warning">
                <div class="rotate">
                  <i class="fa fa-share fa-5x"></i>
                </div>
                <h6 class="text-uppercase">order</h6>
                <h1 class="display-1"><a href="order.php"><?php
include('database.php');
$sql = "SELECT * from `order` ";
  
    if ($result = mysqli_query($data, $sql)) {
  
    // Return the number of rows in result set
    $rowcount = mysqli_num_rows( $result );
      
    // Display result
    printf( $rowcount);
}
?></a></h1>
              </div>
            </div>
          </div>		  
        </div>
        <hr>         
       </div>       
      </div>     
    </div>
  </body>
</html>