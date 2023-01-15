<?php 
	// echo $_POST ['pc_merk'] . "<br>";
	// echo $_POST ['pc_nama_client'] . "<br>";
	// echo $_POST ['pc_spesifikasi'] . "<br>";
	// echo $_POST ['pc_kondisi']. "<br>";
	// echo $_POST ['pc_kontak']. "<br>";
	// echo $_POST ['pc_status']. "<br>";

	if(isset($_POST['save'])){
    include "connection.php";
    $query = "INSERT INTO komputer (pc_merk, pc_nama_client, pc_spesifikasi, pc_kontak, pc_status) VALUES ('$_POST[pc_merk]', '$_POST[pc_nama_client]','$_POST[pc_spesifikasi]', '$_POST[pc_kontak]', '$_POST[pc_status]')";
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
  <!--<p><a href="read_komputer.php">Back To Pets List</a></p> -->
  <script>window.location.replace('read_komputer.php');</script>ly</p>";