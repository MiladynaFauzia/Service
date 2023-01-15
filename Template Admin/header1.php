
	<div class="sidebar">
    <div class="brand">
      <i class="fa-sharp fa-solid fa-qrcode"></i>&nbsp;&nbsp;
      <h1>Administrator</h1>
    </div>
    <ul>
      <li>
        <i class="fa-solid fa-gauge"></i>&nbsp;&nbsp;
        <span><a href="index.php">Dashboard</span></li>
      <li>
        <i class="fa-solid fa-computer"></i>&nbsp;&nbsp;
        <span><a href="read_pelanggan.php">Data Pelanggan</a></span>
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