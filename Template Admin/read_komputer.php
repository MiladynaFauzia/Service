<?php 
  session_start();
  if (!isset($_SESSION['login'])) {
    echo "<script>alert('Please Login First !');window.location.replace('form_login.php');</script>";
  }
 ?>
<!DOCTYPE html>
<html lang="en">
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

            <h2>Riwayat Komputer</h2>
			&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            &nbsp;&nbsp;
            <a href="add_komputer.php" class="btn">Tambah Data</a>
            &nbsp;&nbsp;
            &nbsp;&nbsp;
            <a href="index.php" class="btn">Kembali</a>
            <?php 
            // call connection php mysql
            include "connection.php";

            // make query SELECT FROM WHERE
            $querypel="SELECT * FROM pelanggan WHERE id_customer='$_GET[id_customer]'";

            // run query
            $pel=mysqli_query($db_connection,$querypel);

            // extract data from query result
            $data1=mysqli_fetch_assoc($pel);

            //query one table
           // $querylayanan="SELECT * FROM layanan WHERE pc_id='$_GET[pc_id]'";
            //query two table
            $querylayanan="SELECT * FROM layanan AS m, teknisi AS d WHERE m.pc_id='$_GET[pc_id]' AND m.teknisi_id= d.teknisi_id";

            $komputer=mysqli_query($db_connection,$querykom);
            ?>
          </div>
		  <table>
        <tr>
            <td>ID Customer</td>
            <td>: <?= $data1['id_customer']?></td>
        </tr>
        <tr>
            <td>Nama Customer</td>
            <td>: <?= $data1['nama_customer']?></td>
        </tr>
	</table>
	<table border="1">
		<tr>
			<th>No</th>
			<th>Spesifikasi</th>
			<th>Merk</th>
			<th>Foto</th>
			<th>Status Kerusakan</th>
			<th>Status Pesanan</th>
			<th colspan="2">Aksi</th>
		</tr>
	<!-- loop if the data not empty --->
	<?php
	if(mysqli_num_rows($komputer) > 0) {
		$i=1;
		foreach($komputer as $data2) :
	
	?>
	<tr>
	<td><?php echo $i++; ?></td>
		<td><a href="layanan.php?pc_id=<?=$data['pc_id']?>">
		<?php echo $data2['pc_spesifikasi']; ?></a></td>
		<td><?php echo $data2['pc_merk']; ?></td>
		<td align="center">
			<img src="uploads/komputer/<?=$data2['pc_photo']; ?>" width="80" height="70"><br>
			<a href="komputer_photo.php?id=<?=$data2['pc_id']?>">Change Photo</a>
		</td>
		<td><?= $data2['pc_status'] ?></td>
		<td><?= $data2['status_pemesanan'] ?></td>
				
		<td><a href="edit_komputer.php?id=<?=$data2['pc_id']?>" class="btn">Edit</a></td>
		<td><a href="delete_komputer.php?id=<?=$data2['pc_id']?>" class="btn" onclick="return confirm ('Are you sure?')">Delete</a></td>
		
	</tr>
		<?php
			endforeach;
		} else {
		?>

	<!-- will show if the data empty--->
	<tr><td colspan="7" align='center'>No Record !</td></tr>
	<?php } ?>
	</table>
<p><a href="add_komputer.php?pc_id=<?=$data1['pc_id']?>" class="btn">Tambah Record</a>
&nbsp;&nbsp;
&nbsp;&nbsp;
<a href="read_pelanggan.php" class="btn">Kembali</a>
</body>
</html>