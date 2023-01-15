<?php 
if (isset($_POST['upload'])) {
	include "connection.php";

	$folder = 'uploads/komputer/';
	if (move_uploaded_file($_FILES['new_photo']['tmp_name'], $folder . $_FILES['new_photo']['name'])) {
		
		// success upload, get the photo name
		$photo=$_FILES['new_photo']['name'];

		// make query update photo
		$query="UPDATE komputer SET pc_photo='$photo' WHERE pc_id='$_POST[pc_id]'";

		// run the query
		$upload=mysqli_query($db_connection, $query);

		if ($upload) {	// check query result TRUE/ success
			if ($_POST['pc_photo'] !== 'default.png') unlink($folder . $_POST['pc_photo']); // delete old photo
				
				// success msg
				echo "<script>alert('Change photo successed !');window.location.replace('read_komputer.php');</script>";
			}else {
				// failed msg
				echo "<script>alert('Change photo failed !');window.location.replace('komputer_photo.php?id=$_POST[pc_id]');</script>";
			}
			// failed upload
		} else {
			echo "<script>alert('Upload photo failed !');window.location.replace('komputer_photo.php?id=$_POST[pc_id]');</script>";
		}
	}
 ?>
