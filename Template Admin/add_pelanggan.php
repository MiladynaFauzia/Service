<?php 
  session_start();
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
	<div class="sidebar">
    <div class="brand">
      <i class="fa-sharp fa-solid fa-qrcode"></i>&nbsp;&nbsp;
      <h1>Administrator</h1>
    </div>
    <ul>
      <li>
        <i class="fa-solid fa-gauge"></i>&nbsp;&nbsp;
        <span><a href="index.php">Dashboard</a></span></li>
      <li>
        <i class="fa-solid fa-computer"></i>&nbsp;&nbsp;
        <span><a href="read_komputer.php">Data Pelanggan</a></span>
      </li>
      <?php if($_SESSION['usertype']=='Manager') { ?>
      <li>
        <i class="fa-solid fa-person"></i>&nbsp;&nbsp;
        <span><a href="read_teknisi.php">Teknisi</a></span>
      </li><?php } ?>
      <li>
        <i class="fa-solid fa-cart-plus"></i>&nbsp;&nbsp;
        <span><a href="read_stock.php">Stock</a></span>
      </li>
      <?php if($_SESSION['usertype']=='Manager') { ?>
      <li>
        <i class="fa-solid fa-file"></i>&nbsp;&nbsp;
        <span><a href="report.php">Report</a></span>
      </li><?php } ?>
      <?php if($_SESSION['usertype']=='Manager') { ?>
      <li>
        <i class="fa-solid fa-user"></i>&nbsp;&nbsp;
        <span><a href="read_signup.php">Data User</a></span>
      </li><?php } ?>
      <li>
        <i class="fa-solid fa-right-from-bracket"></i>&nbsp;&nbsp;
        <span><a href="logout.php">Logout</a></span>
      </li>
    </ul>
  </div>

  	<div class="container">
    <div class="header">
      <div class="nav">
        <div class="search">
          <input type="text" placeholder="Pencarian...">
          <button type="submit"><i class="fa-solid fa-magnifying-glass"></i></button>
        </div>
        <div class="user">
          &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
					<a href="profile.php" class="btn"><i class="fa-sharp fa-solid fa-user-tie"></i></a>
        </div>
      </div>
    </div>

    <div class="content">
        <div class="cards">
            <div class="payments">
                <div class="title">
            		<h2>Tambah Data Pelanggan</h2>
            	</div>
		<form method="post" action="create_pelanggan.php">
			<table>
				<tr>
					<td>Nama Customer</td>
					<td><input type="text" name="nama_customer" required></td>
				</tr>
				<tr>
					<td>Kontak</td>
					<td><input type="text" name="kontak" required></td>
				<tr>
					<td>Alamat</td>
					<td><textarea name="alamat" required></textarea></td>
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
		<p><a href="read_pelanggan.php" class="btn">CANCEL</a></p>
</body>
</html>