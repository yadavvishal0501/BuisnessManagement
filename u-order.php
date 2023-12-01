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
			<?php include('leftd.php'); ?>
			<div class="col-md-9 col-lg-10 main"> 
			<h2>Manage order</h2> 
			<div class="panel-heading">
			<div class="row">
				
				
			</div>
		</div>
	<div>
		
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
								<a href="edituor.php?id=<?php echo $row['order_id']; ?>"  class="btn btn-success">Edit</a>
								<a  href="deleteuor.php?id=<?php echo $row['order_id']; ?>        "   class="btn btn-success"  onclick='return confirm("Are You Sure ?")'>Delete</a>
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