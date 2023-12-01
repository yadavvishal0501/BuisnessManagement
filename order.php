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
?>




<!DOCTYPE html>
<html>
<head>
<title>ORDER</title>
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
			<h2>Manage order</h2> 
			<div class="panel-heading">
			<div class="row">
				
				
			</div>
		</div>
	<div>
		<form method="POST" action="addor.php"  >
         <table  class="table table-bordered table-striped">
            <tr>
            <td>
			<label>type:</label></td>
            <td><input type="text" name="type"></td>
          </tr>
          <tr>
         <td><label>date:</label></td>
         <td><input type="date" name="date"></td>
    </tr>
    <tr>
     <td><label>status:</label></td>
    <td> <select name="status" id="status"><option >pending</option>
     <option>completed</option></select></td>
    </tr>

            
    <tr>
		<td></td>	
			<td><input type="submit" name="add"  onclick='alert("data added")'  class="btn btn-success" ></td>
    </tr>
    </table>
		</form>
	</div>
	<br>
	<div>
		<table border="1"  class="table table-bordered table-striped" >
			<thead>
               <th>type</th>
				<th>date</th>
				<th></th>
				<th>status</th>
				<th></th>
				
			</thead>
			<tbody>
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


					$query=mysqli_query($data,"select * from `order`");
					while($row=mysqli_fetch_array($query)){
						?>
						<tr>
							<td><?php echo $row['order_type']; ?></td>
                            <td><?php echo $row['order_date']; ?><td>
							<td><?php echo $row['order_status']; ?></td>
                            
							<td>
								<a href="editor.php?id=<?php echo $row['order_id']; ?>"  class="btn btn-success">Edit</a>
								<a  href="deleteor.php?id=<?php echo $row['order_id']; ?>        "   class="btn btn-success"  onclick='return confirm("Are You Sure ?")' >Delete</a>
							</td>
						</tr>
						<?php
					}
				?>
			</tbody>
		</table>
	</div>
	<?php include('include/footer.php')  ?>
</body>

</html>