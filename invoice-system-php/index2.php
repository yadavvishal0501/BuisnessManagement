<?php 
session_start();
include('inc/head.php');
$loginError = '';
if (!empty($_POST['email']) && !empty($_POST['pwd'])) {
	include 'Invoice.php';
	$invoice = new Invoice();
	$user = $invoice->loginUsers($_POST['email'], $_POST['pwd']); 
	if(!empty($user)) {
		$_SESSION['user'] = $user[0]['first_name']."".$user[0]['last_name'];
		$_SESSION['userid'] = $user[0]['id'];
		$_SESSION['email'] = $user[0]['email'];		
		$_SESSION['address'] = $user[0]['address'];
		$_SESSION['mobile'] = $user[0]['mobile'];
		header("Location:invoice_list.php");
	} else {
		$loginError = "Invalid email or password!";
	}
}
?>
<title> Invoice System </title>
<script src="js/invoice.js"></script>
<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" />
<link href="css/dashboard.css" rel="stylesheet">

<?php include('inc/top.php'); ?>	
  <div class="container-fluid" id="main">
    <div class="row row-offcanvas row-offcanvas-left">
      <?php include('inc/leftd.php'); ?>
	  <div class="col-md-9 col-lg-10 main"> 
		<div class="row mb-3">		 

	
				
		<center><form id="loginform" class="form-horizontal"  method="post" action="">
			 <div style="margin-bottom: 25px" class="input-group">
					
			<?php if ($loginError ) { ?>
				<div class="alert alert-warning"><?php echo $loginError; ?></div>
			<?php } ?>
			</div>
			<div  style="margin-bottom: 25px" class="input-group">
			<div style="margin-bottom: 25px" class="input-group">
					
				<input name="email" id="email"  pattern="[^ @]*@[^ @]*" type="email"style="background:white;" class="form-control" placeholder="Email address" autofocus="" required>
			</div>
			<div style="margin-bottom: 25px" class="input-group">
					
			<div  style="margin-bottom: 25px" class="input-group">
				<input type="password" class="form-control" name="pwd" placeholder="Password" required>
			</div>  
			<div style="margin-top:10px" class="form-group">
				<button type="submit" name="login" class="btn btn-info">Login</button>
			</div>
		</form><center>
		<br>
			
	</div>		
</div>		
</div>
<?php include('inc/foot.php');?>