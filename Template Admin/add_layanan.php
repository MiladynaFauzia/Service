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

            <h2>Tambah Data Layanan</h2>

            <?php 
            // call connection php mysql
            include "connection.php";

            // make query SELECT FROM WHERE
            $querypc="SELECT * FROM komputer WHERE pc_id='$_GET[pc_id]'";

            // run query
				$pc=mysqli_query($db_connection,$querypc);

				//extract data from query result
				$data1=mysqli_fetch_assoc($pc);

				$queryteknisi="SELECT * FROM teknisi";
				$teknisi=mysqli_query($db_connection,$queryteknisi);
			?>
          </div>
	<table>
        <tr>
            <td>ID Komputer</td>
            <td>: <?= $data1['pc_id']?></td>
        </tr>
        <tr>
            <td>Nama Client</td>
            <td>: <?= $data1['pc_nama_client']?></td>
        </tr>
        <tr>
            <td>Merk</td>
            <td>: <?= $data1['pc_merk']?></td>
        </tr>
        <tr>
            <td>Spesifikasi</td>
            <td>: <?= $data1['pc_spesifikasi']?></textarea></td>
        </tr>
        <<tr>
            <td>Kontak</td>
            <td>: <?= $data1['pc_kontak']?></td>
        </tr>
        <tr>
            <td>Status Kerusakan</td>
            <td>: <?= $data1['pc_status']?></td>
        </tr>
</table>

	<form method="post" action="create_layanan.php">
		<table border="1">
			<tr>
				<td>Nomor Registrasi</td>
				<td><input type="text" name="no_registrasi" required></td>
			</tr>
			<tr>
				<td>Keluhan</td>
				<td><textarea name="keluhan" required></textarea></td>
			</tr>
			<tr> 
				<td>Harga</td>
				<td><input type="number" name="harga" required></td>
			</tr>
			<tr>
				<td>Teknisi</td>
				<td>
					<select name="teknisi_id" required>
						<option value="">Choose</option>
						<?php 
							foreach($teknisi as $data2) :
						 ?>
						<option value="<?=$data2['teknisi_id']?>"><?=$data2['teknisi_nama']?></option>
						<?php endforeach; ?>
					</select>
				</td>
			</tr>
			<tr>
				<td>Status Kerusakan</td>
				<td><input type="text" name="status" required></td>
			</tr>
			
			<tr>
				<td></td>
				<td>
					<input type="submit" name="save" value="SAVE">
					<input type="reset" name="reset" value="RESET">
					<input type="hidden" name="pc_id" value="<?=$data1['pc_id']?>">
				</td>
			</tr>
		</table>
	</form>
	<p><a href="layanan.php?pc_id=<?=$data1['pc_id']?>" class="btn">Kembali</a></p>
</body>
</html>