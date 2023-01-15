<?php 
	// echo $_POST ['pc_merk'] . "<br>";
	// echo $_POST ['pc_nama_client'] . "<br>";
	// echo $_POST ['pc_spesifikasi'] . "<br>";
	// echo $_POST ['pc_kondisi']. "<br>";
	// echo $_POST ['pc_kontak']. "<br>";
	// echo $_POST ['pc_status']. "<br>";

	if(isset($_POST['save'])){
    include "connection.php";
    $query = "INSERT INTO pelanggan (nama_customer, kontak, alamat) VALUES ('$_POST[nama_customer]', '$_POST[kontak]','$_POST[alamat]')";
}
	$create = mysqli_query($db_connection, $query);

	if($create){
    //echo "<p>Data Komputer added succesful
    echo "<script> alert('Added data succesfully !'); </script>";
} else {
    //echo "<p>Data Komputer add failed</p>";
    echo "<script> alert('Add data failed !'); </script>";
}
  ?>
  <!--<p><a href="read_pelanggan.php">Back To Pets List</a></p> -->
  <script>window.location.replace('read_pelanggan.php');</script>ly</p>";