<?php 
  session_start();
  if (!isset($_SESSION['login'])) {
    echo "<script>alert('Please Login First !');window.location.replace('form_login.php');</script>";
  }
 ?>
<!DOCTYPE html>
<html lang="en">
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

            <h2>Riwayat Service</h2>

            <?php 
            // call connection php mysql
            include "connection.php";

            // make query SELECT FROM WHERE
            $querypc="SELECT * FROM komputer WHERE pc_id='$_GET[pc_id]'";

            // run query
            $pc=mysqli_query($db_connection,$querypc);

            // extract data from query result
            $data1=mysqli_fetch_assoc($pc);

            //query one table
           // $querylayanan="SELECT * FROM layanan WHERE pc_id='$_GET[pc_id]'";
            //query two table
            $querylayanan="SELECT * FROM layanan AS m, teknisi AS d WHERE m.pc_id='$_GET[pc_id]' AND m.teknisi_id= d.teknisi_id";

            $layanan=mysqli_query($db_connection,$querylayanan);
            ?>
          </div>
    <table>
        <tr>
            <td>ID Komputer</td>
            <td>: <?= $data1['pc_id']?></td>
        </tr>
        <tr>
            <td>Nama Client</td>
            <td>: <?= $data1['pc_nama_client']?></td>
        </tr>
        <tr>
            <td>Merk</td>
            <td>: <?= $data1['pc_merk']?></td>
        </tr>
        <tr>
            <td>Spesifikasi</td>
            <td>: <?= $data1['pc_spesifikasi']?></textarea></td>
        </tr>
        <tr>
            <td>Kontak</td>
            <td>: <?= $data1['pc_kontak']?></td>
        </tr>
        <tr>
            <td>Status Kerusakan</td>
            <td>: <?= $data1['pc_status']?></td>
        </tr>
</table>
<table border="1">
<tr>
            <th>No</th>
            <th>Date</th>
            <th>Nomor Registrasi</th>
            <th>Keluhan</th>
            <th>Harga</th>
            <th>Teknisi</th>
            <th>Status Kerusakan</th>
</tr>
<!-- loop if the data not empty --->
<?php
   if(mysqli_num_rows($layanan) > 0) {
    $i=1;
    foreach($layanan as $data2) :
   
?>
<tr>
    <td><?=$i++?></td>
    <td><?=date('D-F-Y H:i:s', strtotime($data2['service_date']))?></td>
    <td><?=$data2['no_registrasi']?></td>
    <td><?=$data2['keluhan']?></td>
    <td><?=$data2['harga']?></td>
    <td><?=$data2['teknisi_nama']?></td>
    <td><?=$data2['status']?></td>
</tr>
    <?php
        endforeach;
    } else {
    ?>

<!-- will show if the data empty--->
<tr><td colspan="7" align='center'>No Record !</td></tr>
<?php } ?>
</table>
<p><a href="add_layanan.php?pc_id=<?=$data1['pc_id']?>" class="btn">Tambah Record</a>
&nbsp;&nbsp;
&nbsp;&nbsp;
<a href="read_komputer.php" class="btn">Kembali</a>
</body>
</html>