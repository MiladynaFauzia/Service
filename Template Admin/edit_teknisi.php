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

                    <h2>Edit Data Teknisi</h2>

                    <?php 
                    // call connection php mysql
                    include "connection.php";

                    // make query SELECT FROM WHERE
                    $query="SELECT * FROM teknisi WHERE teknisi_id='$_GET[id]'";

                    // run query
                    $teknisi=mysqli_query($db_connection,$query);

                    // extract data from query result
                    $data=mysqli_fetch_assoc($teknisi);
                    ?>
                </div>

    <form method="post" action="update_teknisi.php" enctype="multipart/form-data">
        <table>
            <tr>
                <td>Display Name</td>
                <td><input type="text" name="teknisi_nama" value="<?=$data ['teknisi_nama']?>" required></td>
            </tr>
            <tr>
                <td>E-mail</td>
                <td><input type="text" name="teknisi_email" value="<?=$data ['teknisi_email']?>" required></td>
            </tr>
            <tr>
                <td>Kontak</td>
                <td><input type="text" name="teknisi_kontak" value="<?=$data ['teknisi_kontak']?>" required></td>
            </tr>
            <tr>
                <td>Alamat</td>
                <td><textarea name="teknisi_alamat" required><?=$data ['teknisi_alamat']?></textarea></td>
            </tr>
            <tr>
                <td></td>
                <td><img src="uploads/teknisi/<?=$data['teknisi_photo'];?>" width="100" height="100"></td>
            </tr>
            <tr>
            <td>Photo</td>
            <td>: <input type="file" name="new_photo" required></td>
            </tr>
            <tr>
                <td></td>
                <td>
                    <input type="submit" name="save" value="SAVE">
                    <input type="reset" name="reset" value="RESET">
                    <input type="hidden" name="teknisi_id" value="<?=$data ['teknisi_id']?>">
                </td>
            </tr>
        </table>
    </form>
    <p><a href="read_teknisi.php" class="btn">CANCEL</a></p>    
</body>
</html>