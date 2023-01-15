<?php
if(isset($_GET['id'])) { // check variable POST from FORM
	include "connection.php"; //call connection php mysql

	// make sql query DELETE FORM WHERE
	$query = "DELETE FROM pelanggan WHERE id_customer = '$_GET[id]'";

	//RUN QUERY
	$delete = mysqli_query ($db_connection, $query);

	if($delete) { // check if query TRUE/success
		//echo "<p>Komputer deleted successfully !</p>"; // susccess msg (html version)
		echo "<script> alert('Pelanggan deleted successfully !'); </script>"; // susccess msg (javascript version)
	} else {
		//echo "<p>Komputer delete failed !</p>"; // fail msg (html version)
		echo "<script> alert('Pelanggan delete failed !'); </script>"; // fail msg (javascript version)
	}
}
?>
<!-- <p><a href="read_pelanggan.php">BACK TO PETS LIST</a></p> -->
<script>window.location.replace("read_pelanggan.php");</script>