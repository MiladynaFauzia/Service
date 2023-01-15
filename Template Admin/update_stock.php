<?php
if(isset($_POST['save'])) { // check variable POST from FORM
	include "connection.php"; //call connection php mysql

	// make sql query UPDATE SET WHERE
	$query = "UPDATE stock SET
			  stock_nama = '$_POST[stock_nama]',
              stock_merk = '$_POST[stock_merk]',
              stock_spesifikasi = '$_POST[stock_spesifikasi]',
              stock_total = '$_POST[stock_total]'
			  WHERE stock_id = '$_POST[stock_id]'
			  "; 

	//RUN QUERY
	$update = mysqli_query ($db_connection, $query);

	if($update) { // check if query TRUE/success
		//echo "<p>Stock updated successfully !</p>"; // susccess msg (html version)
		echo "<script> alert('Stock updated successfully !'); </script>"; // susccess msg (javascript version)
	} else {
		//echo "<p>Stock update failed !</p>"; // fail msg (html version)
		echo "<script> alert('Stock update failed !'); </script>"; // fail msg (javascript version)
	}
}
?>
<!-- <p><a href="read_stock.php">BACK TO PETS LIST</a></p> -->
<script>window.location.replace("read_stock.php");</script>