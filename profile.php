<?php
include('database.php');
session_start();
if(!isset($_SESSION["username"])){
  header("location:login.php");
}
if(isset($_POST['Submit'])){
// $id=$_POST['id'];
$email=$_POST['email'];
$password=$_POST['password'];
$firstname=$_POST['first-name'];
$lastname=$_POST['last-name'];
$mobile=$_POST['mobile'];
$address=$_POST['address'];

if(empty($email) || empty($password) || empty($firstname)|| empty($lastname) || empty($mobile)||empty($address)){
  
  if(empty($email)) {
    echo "<span color='red'>email field is empty.</span><br>";
    }
    if(empty($password)) {
    echo "<span color='red'>Password field is empty.</span><br>";
    }
    if(empty($firstname)) {
    echo "<span color='red'>firstname  field is empty.</span><br>";
    }
               
      if(empty($lastname)) {
      echo "<span color='red'>lastname field is empty.</span><br>";
      }
      if(empty($mobile)) {
      echo "<span color='red'>mobile field is empty.</span><br>";
      }
      if(empty($address)) {
      echo "<span color='red'>address  field is empty.</span><br>";
      }
  
}else{
$result=mysqli_query($data,"INSERT INTO invoice_user(email,password,first_name,last_name,mobile,address) VALUES ('$email','$password','$firstname','$lastname','$mobile','$address')");
// header('location:order.php');
// echo "<span color='green'>Data added successfully.</span>";
}
}


?>


 







<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>profile</title>
  <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" />
<link rel="stylesheet" href="css/dashboard.css" />
<link rel="stylesheet" href="css/style.css" />

</head>
<body>
<div class="container-fluid">
	<?php include('top_menus.php'); ?>
		<div class="row row-offcanvas row-offcanvas-left">
			<?php include('left_menus.php'); ?>
			<div class="col-md-9 col-lg-10 main"> 
			<h2>Add profile</h2><?php if(isset($result)){echo "<span color='green'>Data added successfully.</span>";} ?>
			<div class="panel-heading">
			<div class="row">
				<div class="col-md-10">
					<h3 class="panel-title"></h3>
        </div>
	    </div>
    </div>
  <form action="#" method="post" name="form1">
<table width="25%" border="0" class="table table-bordered table-striped">


<!-- <tr id="row"> 
<td id="name_row">id </td>
<td><input type="text" name="id"></td>
</tr> -->
 <tr id="row"> 
<td id="name_row">email </td>
<td><input type="email"  pattern="[^ @]*@[^ @]*" title="enter an valid email"  name="email"></td>
</tr>
<tr>
<td id="name_row">password</td>
<td><input type="text" name="password"></td>
</tr>
<tr> 
<td><label id="name_row" for="first-name"  name="first-name">first-name</label></td>
<td><input type="text" pattern="[a-zA-Z]{2,}"  title="white spaces and letters are allowed" name="first-name"></td>
</tr>
<tr> 
<td><label id="name_row" for="first-name" name="last-name">last-name</label> </td>
<td><input type="text"  pattern="[a-zA-Z]{2,}"  title="white spaces and letters are allowed" name="last-name"></td>
</tr>
<tr> 
<td><label id="name_row">mobile</label> </td>
<td><input type="text"  pattern ="[789][0-9]{9}"  title="enter 10 digits format"  name="mobile"></td>
</tr>
<tr> 
<td id="name_row">address </td>
<td><input type="text" name="address"></td>
</tr>

<tr> 
<td></td>
<div class="col-md-2" align="right">
<td><input type="submit" name="Submit"  value="Add row"></td>
  </div>
</tr>

					
        </table>
    </form>
  </div>



<?php

//fetching data in descending order (latest entry first)

$resu = mysqli_query($data, "SELECT * FROM `invoice_user` ORDER BY id DESC"); // using mysqli_query instead

?>
   <form action=# method="post" >
    <table width='30%' border=0 class="table table-bordered table-striped"  name="table"  id="data_table">
      <thead>
      <tr id="row">
  
        <td id="id_row"  >id</td>
        <td id="email_row">email </td>
        <td id="name_row"> password</td>
        <td>#</td>
        <td id="user_row">first-name </td>
         <td id="user_row">last-name </td>
        <td id="user_row">mobile </td>
        <td id="user_row">address </td>
        <!-- <td><input type='delete' name="delete" value="delete"></td> -->
        <td><input type='hidden' name='id' value="delete"></td>
        
       
        
       

      
        
    </tr>
    </form>
  </thead>
   
 <?php 
    

 while($res=mysqli_fetch_array($resu)){
  ?>
  <tr>
    <td><?php echo $res['id']; ?></td>
    <td><?php echo $res['email']; ?></td>
    <td><?php echo $res['password']; ?><td>
    <td><?php echo $res['first_name']; ?></td>
    <td><?php echo $res['last_name']; ?></td>
    <td><?php echo $res['mobile']; ?></td>
    <td><?php echo $res['address']; ?></td>
    <td>
    
      <a  href="deletep.php?id=<?php echo $res['id']; ?>"   class="btn btn-success"  onclick='return confirm("Are You Sure to delete ?")' >Delete</a>
    </td>
  </tr>
  <?php
}
?>

    
 

          
 
</body>
<?php include('include/footer.php'); ?>

</html>