<?php
if(isset($_POST['save'])) { // check variable POST from FORM
	include "connection.php"; //call connection php mysql

	// make sql query UPDATE SET WHERE
	$query = "UPDATE komputer SET
			  pc_merk 			= '$_POST[pc_merk]',
              pc_nama_client 	= '$_POST[pc_nama_client]',
              pc_spesifikasi 	= '$_POST[pc_spesifikasi]',
              pc_kontak 		= '$_POST[pc_kontak]',
              pc_status 		= '$_POST[pc_status]'
			  WHERE pc_id 		= '$_POST[pc_id]'
			  "; 

	//RUN QUERY
	$update = mysqli_query($db_connection, $query);

	if($update) { // check if query TRUE/success
		//echo "<p>Komputer updated successfully !</p>"; // susccess msg (html version)
		echo "<script> alert('Komputer updated successfully !'); </script>"; // susccess msg (javascript version)
	} else {
		//echo "<p>Komputer update failed !</p>"; // fail msg (html version)
		echo "<script> alert('Komputer update failed !'); </script>"; // fail msg (javascript version)
	}
}
?>
<!-- <p><a href="read_komputer.php">BACK TO DATA PC</a></p> -->
<script>window.location.replace('read_komputer.php');</script>ly</p>";