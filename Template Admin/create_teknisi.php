<?php
if(isset($_POST['save'])) { // check variable POST from FORM
	include "connection.php"; //call connection php mysql

	// SQL QUERY insert into values
	$query = "INSERT INTO teknisi (teknisi_nama, teknisi_email, teknisi_kontak,
	 teknisi_alamat) VALUES ('$_POST[teknisi_nama]', '$_POST[teknisi_email]',
	  '$_POST[teknisi_kontak]', '$_POST[teknisi_alamat]')";

	//RUN QUERY
	$create = mysqli_query ($db_connection, $query);

	if($create) { // check if query TRUE/success
		//echo "<p>teknisi added successfully !</p>"; // susccess msg (html version)
		echo "<script> alert('teknisi added successfully !'); </script>"; // susccess msg (javascript version)
	} else {
		//echo "<p>teknisi add failed !</p>"; // fail msg (html version)
		echo "<script> alert('teknisi add failed !'); </script>"; // fail msg (javascript version)
	}
}
?>
<!-- <p><a href="read_teknisi.php">BACK TO TEKNISI</a></p> -->
<script>window.location.replace("read_teknisi.php");</script>