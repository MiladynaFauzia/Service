<?php 
    session_start();
    if(!isset($_SESSION['login'])) {
	    echo "<script>alert('Please Login First !');window.location.replace('form_login.php');</script>";
}
?>
 <!DOCTYPE html>
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
        <span>Dashboard</span></li>
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
      <div class="payments">
          <div class="title">
            <div class="user-profile-cntr">
            <h2>PROFILE</h2>
                <div class="user-list-txt">
                <?php
                  include "connection.php";
                  $query="SELECT * FROM users WHERE user_id = '$_SESSION[userid]'";
                  $user=mysqli_query($db_connection, $query);
                  $data=mysqli_fetch_array($user);
                ?>
                <img src="uploads/users/<?php echo $data['user_photo']; ?>" width="200px"> <br>
                <span class="view-product-txt-span">Name :</span> <br>
                <h4><?php echo $data['fullname'];?></h4><br>

                <span class="view-product-txt-span">Username :</span> <br>
                <h4><?php echo $data['username'];?></h4><br>


                <h4><i>you're login as <?=$_SESSION['usertype'];?></i></h4><br>

                <button><a href="change_password.php">Change Password</a><br></button>
                <button><a href="edit_profile.php">Edit Profile</a></button>
                <button><a href="change_photo.php">Change Photo</a></button>
                <button><a href="index.php">Back</a></button>
          </div>
        </div>
      </div>
</body>
</html>