<?php
	include('database.php');
	$id=$_GET['id'];
	$query=mysqli_query($data,"select * from `order` where order_id='$id'");
	$row=mysqli_fetch_array($query);
?>
<!DOCTYPE html>
<html>
<head>
<title>order</title>
</head>
<body>
	<h2>Edit</h2>
	<form method="POST" action="updateor.php?id=<?php echo $id; ?>">
		<label>type:</label><input type="text" value="<?php echo $row['order_type']; ?>" name="type">
		<label>date:</label><input type="date" name="date" value="<?php echo $row['order_date']; ?>" >
        <label>status:</label><select name="status" id="status" value=" <?php echo $row['order_status']; ?>"><option >pending</option>
        <option>completed</option></select>
		
		<input type="submit" name="submit"  onclick='alert("data added")' >
		<a href="order.php">Back</a>
	</form>
</body>
</html>