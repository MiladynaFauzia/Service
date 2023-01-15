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

            <h2>Data Komputer</h2>
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
          </div>
		  <?php 
            // call connection php mysql
            include "connection.php";

            // make query SELECT FROM WHERE
            $querypc="SELECT * FROM pelanggan WHERE id_customer='$_GET[id]'";

            // run query
            $pc=mysqli_query($db_connection,$querypc);

            // extract data from query result
            $data1=mysqli_fetch_assoc($pc);

            //query one table
           // $querylayanan="SELECT * FROM layanan WHERE pc_id='$_GET[pc_id]'";
            //query two table
            $querylayanan="SELECT * FROM komputer AS k, layanan AS m WHERE l.pc_id='$_GET[pc_id]' AND m.teknisi_id= d.teknisi_id";

            $layanan=mysqli_query($db_connection,$querylayanan);
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
        <tr>
            <td>kontak</td>
            <td>: <?= $data1['kontak']?></td>
        </tr>
        <tr>
            <td>Alamat</td>
            <td>: <?= $data1['alamat']?></textarea></td>
        </tr>
        
	</table>
			<table border="1">
			<tr>
				<th>No</th>
				<th>Spesifikasi</th>
				<th>Nama Client</th>
				<th>Merk</th>
				<th>Foto</th>
				<th>Kontak</th>
				<th>Status Kerusakan</th>
				<th colspan="3">Aksi</th>
			</tr>

			<?php 
				include "connection.php";	//call connection
				$query = "SELECT * FROM komputer";	//make a sql query
				$pc = mysqli_query($db_connection, $query);	//run query

				$i=1;	//initial counter for numbering
				foreach ($pc as $data) :	//loop to extract data from database
			?>

			<tr>
				<td><?php echo $i++; ?></td>
				<td><a href="layanan.php?pc_id=<?=$data['pc_id']?>">
						<?php echo $data['pc_spesifikasi']; ?></a></td>
				<td><?php echo $data['pc_nama_client']; ?></td>
				<td><?php echo $data['pc_merk']; ?></td>
				<td align="center">
						<img src="uploads/komputer/<?=$data['pc_photo']; ?>" width="80" height="70"><br>
						<a href="komputer_photo.php?id=<?=$data['pc_id']?>">Change Photo</a>
				</td>
				<td><?php echo $data['pc_kontak']; ?></td>
				<td><?= $data['pc_status'];  ?></td>
			
				<td><a href="edit_komputer.php?id=<?=$data['pc_id']?>" class="btn">Edit</a></td>
				<td><a href="delete_komputer.php?id=<?=$data['pc_id']?>" class="btn" onclick="return confirm ('Are you sure?')">Delete</a></td>
			</tr>
		<?php endforeach; ?>
		</table>
</body>
</html>

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

            <h2>Data Komputer</h2>
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
          </div>
			<table border="1">
			<tr>
				<th>No</th>
				<th>Spesifikasi</th>
				<th>Nama Client</th>
				<th>Merk</th>
				<th>Foto</th>
				<th>Kontak</th>
				<th>Status Kerusakan</th>
				<th colspan="3">Aksi</th>
			</tr>

			<?php 
				include "connection.php";	//call connection
				$query = "SELECT * FROM komputer";	//make a sql query
				$pc = mysqli_query($db_connection, $query);	//run query

				$i=1;	//initial counter for numbering
				foreach ($pc as $data) :	//loop to extract data from database
			?>

			<tr>
				<td><?php echo $i++; ?></td>
				<td><a href="layanan.php?pc_id=<?=$data['pc_id']?>">
						<?php echo $data['pc_spesifikasi']; ?></a></td>
				<td><?php echo $data['pc_nama_client']; ?></td>
				<td><?php echo $data['pc_merk']; ?></td>
				<td align="center">
						<img src="uploads/komputer/<?=$data['pc_photo']; ?>" width="80" height="70"><br>
						<a href="komputer_photo.php?id=<?=$data['pc_id']?>">Change Photo</a>
				</td>
				<td><?php echo $data['pc_kontak']; ?></td>
				<td><?= $data['pc_status'];  ?></td>
			
				<td><a href="edit_komputer.php?id=<?=$data['pc_id']?>" class="btn">Edit</a></td>
				<td><a href="delete_komputer.php?id=<?=$data['pc_id']?>" class="btn" onclick="return confirm ('Are you sure?')">Delete</a></td>
			</tr>
		<?php endforeach; ?>
		</table>
</body>
</html>