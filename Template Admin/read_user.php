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

            <h2>Data User</h2>
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
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            <a href="add_user.php" class="btn">Tambah Data</a>
            &nbsp;&nbsp;
            &nbsp;&nbsp;
            <a href="index.php" class="btn">Kembali</a>
          </div>

    <table border="1">
		<tr>
			<th>No</th>
			<th>Username</th>
			<th>Usertype</th>
			<th>Fullname</th>
			<th>Photo</th>
			<th colspan="3">Action</th>
		</tr>
		<?php 
			include "connection.php"; // call connection
			$query = "SELECT * FROM users"; // make a sql query
			$users = mysqli_query($db_connection, $query); // run query


			$i = 1; // initial counter for numbering
			foreach ($users as $data ) : //loop to extract data from database
		?>
		<tr>
			<td><?php echo $i++;  ?></td>
			<td><?php echo $data['username'];  ?></td>
			<td><?php echo $data['usertype'];  ?></td>
			<td><?php echo $data['fullname'];  ?></td>
			<td align="center">
				<img src="uploads/users/<?=$data['user_photo'];  ?>" width="50" height="50"><br>
			</td>
			<td><a href="edit_user.php?id=<?=$data['user_id']?>" class="btn">Edit</a></td>
			<td><a href="delete_user.php?id=<?=$data['user_id']?>" class="btn" onclick="return confirm('Are you sure delete this user?')">Delete</a></td>
			<td><a href="reset_password.php?id=<?=$data['user_id'];?>&type=<?=$data['usertype'];?>" class="btn" onclick="return confirm('Are you sure reset the password?')">Reset Pasword</a></td>
		</tr>
		<?php endforeach; ?>
	</table>
	</body>
</html>