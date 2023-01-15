<?php
if(isset($_POST['save'])) { // check variable POST from FORM
	include "connection.php"; //call connection php mysql

	// make sql query UPDATE SET WHERE
	$query = "UPDATE pelanggan SET
			  nama_customer 		= '$_POST[nama_customer]',
              kontak 				= '$_POST[kontak]',
              alamat 				= '$_POST[alamat]'
			  WHERE id_customer 	= '$_POST[id_customer]'
			  "; 

	//RUN QUERY
	$update = mysqli_query($db_connection, $query);

	if($update) { // check if query TRUE/success
		//echo "<p>Komputer updated successfully !</p>"; // susccess msg (html version)
		echo "<script> alert('Pelanggan updated successfully !'); </script>"; // susccess msg (javascript version)
	} else {
		//echo "<p>Komputer update failed !</p>"; // fail msg (html version)
		echo "<script> alert('Pelanggan update failed !'); </script>"; // fail msg (javascript version)
	}
}
?>
<!-- <p><a href="read_pelanggan.php">BACK TO DATA PC</a></p> -->
<script>window.location.replace('read_pelanggan.php');</script>ly</p>";