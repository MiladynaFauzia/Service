<?php
if(isset($_GET['id'])) { // check variable POST from FORM
	include "connection.php"; //call connection php mysql

	// make sql query DELETE FORM WHERE
	$query = "DELETE FROM komputer WHERE pc_id = '$_GET[id]'";

	//RUN QUERY
	$delete = mysqli_query ($db_connection, $query);

	if($delete) { // check if query TRUE/success
		//echo "<p>Komputer deleted successfully !</p>"; // susccess msg (html version)
		echo "<script> alert('Komputer deleted successfully !'); </script>"; // susccess msg (javascript version)
	} else {
		//echo "<p>Komputer delete failed !</p>"; // fail msg (html version)
		echo "<script> alert('Komputer delete failed !'); </script>"; // fail msg (javascript version)
	}
}
?>
<!-- <p><a href="read_komputer.php">BACK TO PETS LIST</a></p> -->
<script>window.location.replace("read_komputer.php");</script>