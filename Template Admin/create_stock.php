<?php 
	// echo $_POST ['stock_nama'] . "<br>";
	// echo $_POST ['stock_merk'] . "<br>";
	// echo $_POST ['stock_spesifikasi'] . "<br>";
	// echo $_POST ['stock_total']. "<br>";

	if(isset($_POST['save'])){
    include "connection.php";
    $query = "INSERT INTO stock (stock_nama, stock_merk, stock_spesifikasi, stock_total) 
    VALUES ('$_POST[stock_nama]', '$_POST[stock_merk]', '$_POST[stock_spesifikasi]', '$_POST[stock_total]')";
}

	$create = mysqli_query($db_connection, $query);

	if($create){
    //echo "<p>Data Stock added succesful
    echo "<script> alert('Stock Added succesfully !'); </script>";
} else {
    //echo "<p>Data Stock add failed</p>";
    echo "<script> alert('Stock Add failed !'); </script>";
}
  ?>
  <!--<p><a href="read_stock.php">Back To Pets List</a></p> -->
  <script>window.location.replace('read_stock.php');</script>ly</p>";