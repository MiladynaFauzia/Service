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

            <h2>Data Pelanggan</h2>
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
            <a href="add_pelanggan.php" class="btn">Tambah Data</a>
            &nbsp;&nbsp;
            &nbsp;&nbsp;
            <a href="index.php" class="btn">Kembali</a>
          </div>
			<table border="1">
			<tr>
				<th>No</th>
				<th>Nama Customer</th>
				<th>Kontak</th>
				<th>Alamat</th>
				<th colspan="2">Aksi</th>
			</tr>

			<?php 
				include "connection.php";	//call connection
				$query = "SELECT * FROM pelanggan";	//make a sql query
				$pc = mysqli_query($db_connection, $query);	//run query

				$i=1;	//initial counter for numbering
				foreach ($pc as $data) :	//loop to extract data from database
			?>

			<tr>
				<td><?php echo $i++; ?></td>
				<td><a href="read_komputer.php?id_customer=<?=$data['id_customer']?>">
						<?php echo $data['nama_customer']; ?></a></td>
				<td><?php echo $data['kontak']; ?></td>
				<td><?php echo $data['alamat']; ?></td>
			
				<td><a href="edit_pelanggan.php?id=<?=$data['id_customer']?>" class="btn">Edit</a></td>
				<td><a href="delete_pelanggan.php?id=<?=$data['id_customer']?>" class="btn" onclick="return confirm ('Are you sure?')">Delete</a></td>
			</tr>
		<?php endforeach; ?>
		</table>
</body>
</html>