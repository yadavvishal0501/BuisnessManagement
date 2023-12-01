<?php
include('database.php');
$sql = "SELECT * from invoice_user";
  
    if ($result = mysqli_query($data, $sql)) {
  
    // Return the number of rows in result set
    $rowcount = mysqli_num_rows( $result );
      
    // Display result
    printf("Total rows in this table : %d\n", $rowcount);
}
?>