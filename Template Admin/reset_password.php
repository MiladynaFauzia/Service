<?php 
  session_start();
  if (!isset($_SESSION['login'])) {
    echo "<script>alert('Please Login First !');window.location.replace('form_login.php');</script>";
  }
 ?>
<?php 
	if (isset($_GET['user_id'])) {
		include "connection.php";
		$password = password_hash($_GET['type'], PASSWORD_DEFAULT);
		$query="UPDATE users SET password='$password' WHERE user_id='$_GET[user_id]'";
		$update=mysqli_query($db_connection, $query);
	if ($update) {
		echo "<script> alert ('Reset Password Successed !')</script> ";
	} else {
		echo "<script>alert('Reset Password Failed !')</script>";
	}
}
 ?>
 <script>window.location.replace("read_signup.php");</script>