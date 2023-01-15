<?php 
    session_start();
    if(!isset($_SESSION['login'])) {
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

                    <h2>Edit Profile</h2>

                    <?php
                    //call connection php mysql
                    include "connection.php";

                    // make quey SELECT FROM WHERE
                    $query="SELECT * FROM users WHERE user_id='$_SESSION[userid]'";

                    // run query
                    $user=mysqli_query($db_connection,$query);

                    // extract data from query result
                    $data=mysqli_fetch_assoc($user);
                    ?>
                    </div>

    <form method="post" action="update_profile.php" enctype="multipart/form-data">
        <table>
            <tr>
                <td>Username</td>
                <td>
                    <input type="text" name="username" value="<?=$data['username']?>" required>
                </td>
            </tr>
            <tr>
                <td>Fullname</td>
                <td>
                    <input type="text" name="fullname" value="<?=$data['fullname']?>" required>
                </td>
            </tr>
            <tr>
                <td></td>
                <td>
                    <input type="submit" name="save" value="SAVE">
                    <input type="reset" name="reset" value="RESET">
                    <input type="hidden" name="user_id" value="<?=$data['user_id']?>">
                </td>
            </tr>
        </table>
    </form>
    <p><a href="profile.php" class="btn">CANCEL</a></p>
</body>
</html>