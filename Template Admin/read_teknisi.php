<?php 
  session_start();
 if (!isset($_SESSION['login'])) {
    echo "<script>alert('Please Login First !');window.location.replace('form_login.php');</script>";
  }
    if ($_SESSION['usertype'] != 'Manager') {
      echo "<script>alert('Access forbidden !');window.location.replace('index.php');</script>";
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

            <h2>Data Teknisi</h2>
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
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            <a href="add_teknisi.php" class="btn">Tambah Data</a>
            &nbsp;&nbsp;
            &nbsp;&nbsp;
            <a href="index.php" class="btn">Kembali</a>
          </div>

	<table border="1">
		<tr>
			<th>No</th>
			<th>Display Nama</th>
			<th>E-mail</th>
			<th>Kontak</th>
			<th>Alamat</th>
			<th>Photo</th>
			<th colspan="2" >Aksi</th>
		</tr>
		<?php
			include "connection.php"; // call connection
			$query = "SELECT * FROM teknisi"; // make a sql query
			$teknisi = mysqli_query ($db_connection, $query); // run query

			$i=1; // initial counter for numbering
			foreach ($teknisi as $data)  : // loo to extract data from database
		?>
		<tr>
			<td><?php echo $i++; ?></td>
			<td><?php echo $data['teknisi_nama']; ?></td>
			<td><?php echo $data['teknisi_email']; ?></td>
			<td><?= $data['teknisi_kontak']; ?></td>
			<td><?= $data['teknisi_alamat']; ?></td>
			<td align="center">
				<img src="uploads/teknisi/<?php echo $data['teknisi_photo']; ?>" width="70" height="80" ><br>
			</td>
			<td><a href="edit_teknisi.php?id=<?=$data['teknisi_id']?>" class="btn">Edit</a></td>
			<td><a href="delete_teknisi.php?id=<?=$data['teknisi_id']?>" class="btn" onclick="return confirm ('Are you sure?')">Delete</a></td>
		</tr>
		<?php endforeach; ?>
	</table>
</body>
</html>