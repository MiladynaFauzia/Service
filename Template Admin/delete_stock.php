<?php
if(isset($_GET['id'])) { // check variable POST from FORM
	include "connection.php"; //call connection php mysql

	// make sql query DELETE FORM WHERE
	$query = "DELETE FROM stock WHERE stock_id = '$_GET[id]'";

	//RUN QUERY
	$delete = mysqli_query ($db_connection, $query);

	if($delete) { // check if query TRUE/success
		//echo "<p>stock deleted successfully !</p>"; // susccess msg (html version)
		echo "<script> alert('stock deleted successfully !'); </script>"; // susccess msg (javascript version)
	} else {
		//echo "<p>stock delete failed !</p>"; // fail msg (html version)
		echo "<script> alert('stock delete failed !'); </script>"; // fail msg (javascript version)
	}
}
?>
<!-- <p><a href="read_stock.php">BACK TO PETS LIST</a></p> -->
<script>window.location.replace("read_stock.php");</script>