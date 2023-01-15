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

            		<h2>Edit Data Komputer</h2>

		            <?php
				        // call connection
				        include "connection.php";

				        // make sql query SELECT FROM WHERE
				        $query = "SELECT * FROM komputer WHERE pc_id='$_GET[id]'";

				        // run query 
				        $pc = mysqli_query($db_connection, $query);

				        //extract data from query result
				        $data=mysqli_fetch_assoc($pc);
				    		?>
								</div>

   <form method="post" action="update_komputer.php">
			<table>
				<tr>
					<td>Merk</td>
					<td><input type="text" name="pc_merk" value="<?=$data['pc_merk']?>" required></td>
				</tr>
				<tr>
					<td>Nama Client</td>
					<td><input type="text" name="pc_nama_client" value="<?=$data['pc_nama_client']?>" required></td>
				</tr>
				<tr>
					<td>Spesifikasi</td>
					<td><textarea name="pc_spesifikasi" required><?=$data['pc_spesifikasi']?></textarea></textarea></td>
				</tr>
				<tr>
					<td>Kontak</td>
					<td><input type="text" name="pc_kontak" value="<?=$data['pc_kontak']?>" required></td>
				</tr>
				<tr>
					<td>Status Kerusakan</td>
					<td>
						<select name="pc_status" required>
							<option value="">Pilihan</option>
							<option value="Level 1" <?=($data['pc_status']=='Level 1')?'selected':'';?>>Level 1</option>
							<option value="Level 2" <?=($data['pc_status']=='Level 2')?'selected':'';?>>Level 2</option>
							<option value="Level 3" <?=($data['pc_status']=='Level 3')?'selected':'';?>>Level 3</option>
							<option value="Level 4" <?=($data['pc_status']=='Level 4')?'selected':'';?>>Level 4</option>
							<option value="Level 5" <?=($data['pc_status']=='Level 5')?'selected':'';?>>Level 5</option>
						</select>
				</tr>
				<tr>
					<td></td>
					<td>
						<input type="submit" name="save" value="Simpan">
						<input type="reset" name="reset" value="Reset">
						<input type="hidden" name="pc_id" value="<?=$data ['pc_id']?>">
					</td>
				</tr>
			</table>
		</form>
		<p><a href="read_komputer.php" class="btn">CANCEL</a></p>
</body>
</html>