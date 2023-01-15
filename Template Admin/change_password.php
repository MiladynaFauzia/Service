<?php 
  session_start();
  if (!isset($_SESSION['login'])) {
    echo "<script>alert('Please Login First !');window.location.replace('form_login.php');</script>";
  }
 ?>
 <!DOCTYPE html>
<html>
<head>
		<meta name="description" content="website description" />
    <meta name="keywords" content="website keywords, website keywords" />
    <meta http-equiv="content-type" content="text/html; charset=windows-1252" />
    <link rel="stylesheet" type="text/css" href="style.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>ABADI SERVICE KOMPUTER</title>

</head>
<body>

<body>
<?php include "header1.php";	?>

                    <h3>Change Password</h3>
                </div>

	<form method="post" action="update_password.php">
		<table>
			<tr>
				<td>New Password</td>
				<td>: <input type="password" name="new_password" id="new" required></td>
			</tr>
			<tr>
				<td>&nbsp;</td>
				<td>&nbsp;<input type="checkbox" onclick="show()">Show Password</td>
			</tr>
			<tr>
				<td>&nbsp;</td>
				<td>&nbsp;<input type="submit" name="change" value="CHANGE" />
				<td>&nbsp;<input type="reset" name="reset" value="RESET" />
				</td>
			</tr>
		</table>
	</form>
	<p><a href="profile.php" class="btn">CANCEL</a></p>
	<script>
			function show() {
				var x = document.getElementById("new");
				if (x.type === "password") {
					x.type = "text";
				} else {
					x.type = "password";
				}
			}
	</script>
</body>
</html>