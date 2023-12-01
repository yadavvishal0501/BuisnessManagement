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

session_start();
if(!isset($_SESSION["username"])){
  header("location:login.php");
}
if(isset($_POST['Submit'])){
$id=$_POST['id'];
$name=$_POST['name'];
$password=$_POST['password'];
$type=$_POST['age'];
$username=$_POST['username'];
$address=$_POST['address'];
$usertype=$_POST['usertype'];

if(empty($name) || empty($address)|| empty($type) || empty($username)||empty($password)){
  
  if(empty($name)) {
    echo "<span color='red'>email field is empty.</span><br>";
    }
    if(empty($password)) {
    echo "<span color='red'>Password field is empty.</span><br>";
    }
    
	if(empty($type)) {
	echo "<span color='red'>mobile field is empty.</font><br>";
	}
      if(empty($username)) {
      echo "<span color='red'>lastname field is empty.</font><br>";
      }
      if(empty($address)) {
      echo "<span color='red'>address  field is empty.</span><br>";
      }
  
}else{
$result=mysqli_query($data,"INSERT INTO distributor(id,name,password,type,username,address,usertype) VALUES ('$id','$name','$password','$type','$username','$address','$usertype')");

// header('location:order.php');
 echo "<span color='green'>Data added successfully.</span>";
}
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
  
    <div class="container-fluid">
	<?php include('top_menus.php'); ?>
		<div class="row row-offcanvas row-offcanvas-left">
			<?php include('left_menus.php'); ?>
			<div class="col-md-9 col-lg-10 main"> 
			<h2>Manage distributors</h2> 
			<div class="panel-heading">
			<div class="row">
				<div class="col-md-10">
					<h3 class="panel-title"></h3>
				</div>
				
			</div>
		</div>
		
<form action=# method="post">
<table width="25%" border="0" class="table table-bordered table-striped">
<tr>
<td>id</td>	
<td><input type="text" name="id" id="new_id"></td>
</tr>
<tr>
<td>name</td>	
<td><input type="text"  pattern="[a-zA-Z]{2,}"  title="white spaces and letters are allowed"   name="name"  id="new_name"></td>
</tr>
<tr>
<td>address</td>	
<td><input type="text"  name="address"  id="new_country"></td>
</tr>
<tr>
<td>type</td>	
<td><input type="text" name="age"  id="new_age"></td>
</tr>
<tr>
<td>username</td>	
<td><input type="text" name="username"  id="new_username"></td>
</tr>
<tr>
<td>password</td>
<td><input type="text"  name="password" id="new_pass"></td>
</tr>
<td>usertype</td>
<td><select name="usertype" type='text' ><option>user</option></select></td>
</tr>
<tr>
<td></td>	
<td><input type="submit" class="add"  name="Submit"  value="Add row"></td>
</tr>
</form>

</table>
            
<?php   

//fetching data in descending order (latest entry first)

$resu = mysqli_query($data, "SELECT * FROM `distributor` ORDER BY id DESC"); // using mysqli_query instead

?>
          
        <form action="#" method="post">
    <table id="data_table" class="table table-bordered table-striped">
			<thead>
				<tr>
					<th name="id">id</th>
					<th  name="name" >Name</th>					
					<th  name="password" >password</th>	
					<th></th>				
					<th name="username">username</th>
					<th  name="age">Type</th>
					<th  name="address">Address</th>
					<th></th>
										
				</tr>
			</thead>
</form>
            


<?php 
    
	
	 while($res=mysqli_fetch_array($resu)){
	  ?>
	  <tr>
		<td><?php echo $res['id']; ?></td>
		<td><?php echo $res['name']; ?></td>
		<td><?php echo $res['password']; ?><td>
		<td><?php echo $res['username']; ?></td>
		<td><?php echo $res['type']; ?></td>
		<td><?php echo $res['address']; ?></td>
					  
		<td>
		
		  <a  href="deleted.php?id=<?php echo $res['id']; ?>"   class="btn btn-success"  onclick='return confirm("Are You Sure ?")' >Delete</a>
		</td>
	  </tr>
	  <?php
	  
	}
	?>
</table>

	

</body>
<!-- <script src="javascript/dist.js"></script> 

 <script type="text/javascript"> 
    function edit_row(no)
{
 document.getElementById("edit_button"+no).style.display="none";
 document.getElementById("save_button"+no).style.display="block";

 var id=document.getElementById("id_row"+no);
 var name=document.getElementById("name_row"+no);
 var country=document.getElementById("country_row"+no);
 var age=document.getElementById("age_row"+no);
 var username=document.getElementById("username_row"+no);
 var pass=document.getElementById("pass_row"+no);

 var id_data=id.innerHTML;
 var name_data=name.innerHTML;
 var country_data=country.innerHTML;
 var age_data=age.innerHTML;
 var username_data=username.innerHTML;
 var pass_data=pass.innerHTML;
	
 id.innerHTML="<input type='text' id='id_text"+no+"' value='"+id_data+"'>";
 name.innerHTML="<input type='text' id='name_text"+no+"' value='"+name_data+"'>";
 country.innerHTML="<input type='text' id='country_text"+no+"' value='"+country_data+"'>";
 age.innerHTML="<input type='text' id='age_text"+no+"' value='"+age_data+"'>";
 username.innerHTML="<input type='text' id='username_text"+no+"' value='"+username_data+"'>"; 
  pass.innerHTML="<input type='text' id='pass_text"+no+"' value='"+pass_data+"'>";
}

function save_row(no)
{

 var id_val=document.getElementById("id_text"+no).value;   
 var name_val=document.getElementById("name_text"+no).value;
 var country_val=document.getElementById("country_text"+no).value;
 var age_val=document.getElementById("age_text"+no).value;
 var username_val=document.getElementById("username_text"+no).value;
 var pass_val=document.getElementById("pass_text"+no).value;

 document.getElementById("id_row"+no).innerHTML=id_val;
 document.getElementById("name_row"+no).innerHTML=name_val;
 document.getElementById("country_row"+no).innerHTML=country_val;
 document.getElementById("age_row"+no).innerHTML=age_val;
 document.getElementById("username_row"+no).innerHTML=username_val;
 document.getElementById("pass_row"+no).innerHTML=pass_val;

 document.getElementById("edit_button"+no).style.display="block";
 document.getElementById("save_button"+no).style.display="none";
}

function delete_row(no)
{
 document.getElementById("row"+no+"").outerHTML="";
}

function add_row()
{
 var new_id=document.getElementById("new_id").value;
 var new_name=document.getElementById("new_name").value;
 var new_country=document.getElementById("new_country").value;
 var new_age=document.getElementById("new_age").value;
 var new_username=document.getElementById("new_username").value;
 var new_pass=document.getElementById("new_pass").value;

	
 var table=document.getElementById("data_table");
 var table_len=(table.rows.length)-1;
 var row = table.insertRow(table_len).outerHTML="<tr id='row"+table_len+"'><td id='id_row"+table_len+"'>"+new_id+"</td><td id='name_row"+table_len+"'>"+new_name+"</td><td id='country_row"+table_len+"'>"+new_country+"</td><td id='age_row"+table_len+"'>"+new_age+"</td><td id='username_row"+table_len+"'>"+new_username+"</td><td id='pass_row"+table_len+"'>"+new_pass+"</td><td><input type='button' id='edit_button"+table_len+"' value='Edit' class='edit' onclick='edit_row("+table_len+")'> <input type='button' id='save_button"+table_len+"' value='Save' class='save' onclick='save_row("+table_len+")'> <input type='button' value='Delete' class='delete' onclick='delete_row("+table_len+")'></td></tr>";
 
 document.getElementById("new_id").value="";
 document.getElementById("new_name").value="";
 document.getElementById("new_country").value="";
 document.getElementById("new_age").value="";
 document.getElementById("new_username").value="";
 document.getElementById("new_pass").value="";
}
</script> -->

</html>