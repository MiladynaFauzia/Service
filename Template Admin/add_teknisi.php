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
<?php include "header1.php";	?>

            		<h2>Tambah Data Teknisi</h2>
            	</div>

	<form method="post" action="create_teknisi.php">
		<table>
			<tr>
				<td>Display Name</td>
				<td><input type="text" name="teknisi_nama" required></td>
			</tr>
			<tr>
				<td>E-mail</td>
				<td><input type="text" name="teknisi_email" required></td>
			</tr>
			<tr>
				<td>Kontak</td>
				<td><input type="text" name="teknisi_kontak" required></td>
			</tr>
			<tr>
				<td>Alamat</td>
				<td><textarea name="teknisi_alamat" required></textarea></td>
			</tr>
			<tr>
				<td></td>
				<td>
					<input type="submit" name="save" value="SAVE">
					<input type="reset" name="reset" value="RESET">
				</td>
			</tr>
		</table>
	</form>
	<p><a href="read_teknisi.php" class="btn">CANCEL</a></p>
</body>
</html>