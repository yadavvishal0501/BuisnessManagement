<?php

session_start();
if(!isset($_SESSION["username"])){
    header("location:login2.php");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" />
<link rel="stylesheet" href="css/dashboard.css" />
<link rel="stylesheet" href="css/style.css" />
</head>
<body>
<div class="container-fluid" id="main">
  <?php include('top_menus.php'); ?>
  	
    <div class="row row-offcanvas row-offcanvas-left">
    <?php include('leftd.php'); ?>
     
      </div>     
    </div>
</body>
</html>