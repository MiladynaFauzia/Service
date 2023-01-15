<?php 
	if (isset($_POST['save'])) {	//
		include "connection.php";

		//sql query INSERT INTO SET
		$query = "INSERT INTO layanan SET
				 no_registrasi		= '$_POST[no_registrasi]',
				 pc_id				= '$_POST[pc_id]',
				 teknisi_id			= '$_POST[teknisi_id]',
				 merk				= '$_POST[merk]',
				 keluhan			= '$_POST[keluhan]',
				 harga				= '$_POST[harga]',
				 status 			= '$_POST[status]'";

		// run query
		$create = mysqli_query($db_connection, $query);

		if ($create) {
			// echo "<p>Service added successfully !</p>";
			echo "<script> alert('Service added successfully !'); </script>";
		} else {
			// echo "<p>Service added failed !</p>";
			echo "<script> alert('service added Failed !'); </script>";
		}
	}
 ?>
 <!-- <p><a href="read_teknisi.php">BACK TO DATA TEKNISI</a></p> -->
 <script>window.location.replace("layanan.php?pc_id=<?= $_POST['pc_id'];?>");</script>