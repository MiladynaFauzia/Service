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

    <h2>Tambah Data Barang</h2>
    </div>

		<form method="post" action="create_stock.php">
			<table>
				<tr>
					<td>Nama Barang</td>
					<td><input type="text" name="stock_nama" required></td>
				</tr>
				<tr>
					<td>Merk / Serie</td>
					<td><input type="text" name="stock_merk" required></td>
				</tr>
				<tr>
					<td>Spesifikasi</td>
					<td><input type="text" name="stock_spesifikasi" required></td>
				</tr>
				<tr>
					<td>Total Stok</td>
					<td><input type="text" name="stock_total" required></td>
				</tr>
				<tr>
					<td></td>
					<td>
						<input type="submit" name="save" value="Simpan">
						<input type="reset" name="reset" value="Reset">
					</td>
				</tr>
			</table>
		</form>
		<p><a href="read_stock.php" class="btn">CANCEL</a></p>
</body>
</html>