<?php 
  session_start();
  if (!isset($_SESSION['login'])) {
    echo "<script>alert('Please Login First !');window.location.replace('form_login.php');</script>";
  }
 ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Template Admin Dashboard</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />

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
        <span><a href="read_komputer.php">Data Komputer</a></span>
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
        <span><a href="read_user.php">Data User</a></span>
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
        <div class="card">
          <div class="box">
            <h3><a href="read_komputer.php">Data Komputer</a></h3>
          </div>
          <div class="icon">
            <i class="fa-solid fa-computer"></i>
          </div>
        </div>
        <div class="card">
          <div class="box">
            <h3><a href="read_teknisi.php">Teknisi</a></h3>
          </div>
          <div class="icon">
            <i class="fa-solid fa-person"></i>
          </div>
        </div>
        <div class="card">
          <div class="box">
            <h3><a href="read_stock.php">Stock</a></h3>
          </div>
          <div class="icon">
            <i class="fa-solid fa-cart-plus"></i>
          </div>
        </div>
        <div class="card">
          <div class="box">
            <h3><a href="report.php">Report</a></h3>
          </div>
          <div class="icon">
            <i class="fa-solid fa-file"></i>
          </div>
        </div>
      </div>

      <div class="content-2">
        <div class="payments">
          <div class="title">
            <h2>INFORMASI KERUSAKAN</h2>
          </div>
          <table>
            <tr>
              <th>Status Kerusakan</th>
              <th>Jenis Kerusakan</th>
            </tr>
            <tr>
              <td>Level 1</td>
              <td>Adaptor Power AC</td>
            </tr>
            <tr>
              <td></td>
              <td>Backlight Lamp</td>
            </tr>
            <tr>
              <td></td>
              <td>Engsel layar Display hinges</td>
            </tr>
            <hr>
            <tr>
              <td>Level 2</td>
              <td>Error Harddisk</td>
            </tr>
            <tr>
              <td></td>
              <td>Error Keybord</td>
            </tr>
            <tr>
              <td></td>
              <td>Suara Bedesing</td>
            </tr>

            <tr>
              <td>Level 3</td>
              <td>LCD Screen</td>
            </tr>
            <tr>
              <td></td>
              <td>Main Battery</td>
            </tr>
            <tr>
              <td></td>
              <td>Memori / RAM</td>
            </tr>

            <tr>
              <td>Level 4</td>
              <td>Prosesor</td>
            </tr>
            <tr>
              <td></td>
              <td>Screen Inverter</td>
            </tr>
            <tr>
              <td></td>
              <td>Speaker</td>
            </tr>

            <tr>
              <td>Level 5</td>
              <td>Startup Problem</td>
            </tr>
            <tr>
              <td></td>
              <td>USB port</td>
            </tr>
            <tr>
              <td></td>
              <td>Video Board</td>
            </tr>

          </table>
        </div>


    </div>
  </div>
</body>
</html>