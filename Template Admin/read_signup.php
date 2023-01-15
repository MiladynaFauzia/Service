<?php 
    session_start();
    if(!isset($_SESSION['login'])) {
	    echo "<script>alert('Please Login First !');window.location.replace('login.php');</script>";
    }
    if($_SESSION['usertype'] != 'Manager') {
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

    
        <?php 
            include "connection.php"; // call connection
            $query = "SELECT * FROM users"; // make a sql query
            $users = mysqli_query($db_connection, $query); // run query
            foreach ($users as $data ) : //loop to extract data from database
        ?>

        <div class="user-list-cntr">
            <div class="user-list">
                <img src="uploads/users/<?= $data['user_photo'];?>" width="100px" align="center">
                    <div class="user-list-txt">
                        <p>
                            <h5><?php echo $data['usertype']; ?></h5> <br>
                            <b><?php echo $data['username']; ?></b><br>
                            <?php echo $data['fullname']; ?><br>
                            <button><a href="edit_signup.php?user_id=<?=$data['user_id']?>">Edit</a><br></button>
                            <button><a href="delete_user.php?user_id=<?=$data['user_id']?>" onclick="return confirm('Are you sure?')">Delete</a></button>
                            <button><a href="reset_password.php?user_id=<?=$data['user_id'];?>&type=<?=$data['usertype'];?>" onclick="return confirm('are you sure reset the password?')">Reset Password</a></button>
                        </p>
                    </div>
            </div>
            
        </div>
        <?php endforeach; ?>
        
        </div>
</body>
</html>