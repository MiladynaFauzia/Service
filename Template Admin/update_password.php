<?php 
	session_start();
	if (isset($_POST['change'])) {
		include "connection.php";

	// encrypt the new password
	$password = password_hash($_POST['new_password'], PASSWORD_DEFAULT);

	// make query for update password, session id yang sedang login
	$query="UPDATE users SET password='$password' WHERE user_id='$_SESSION[userid]'";

	// run the query
	$update=mysqli_query($db_connection, $query);

	if ($update) {
		$_SESSION['password']=$password;
		// success msg
		echo "<script>alert('Change password successed !');window.location.replace('profile.php');</script>";
	} else {
		// failed msg
		echo "<script>alert('Change password failed !');window.location.replace('change_password.php');</script>";
	}
	}
 ?>s