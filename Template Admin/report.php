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
<?php include "header1.php";	?>

                    <h2>Laporan Bulanan</h2>
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
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    <a href="index.php" class="btn">Kembali</a>
                    <?php
                    $months = array('January','February','March','April','May','June','July','August','September','October','November','December');
                    $year = date('Y');
                    ?>
                </div>

    <form>
        <p>Select
            <select name="month" required>
                <option value="">Month</option>
                <?php for($m=1;$m<=12;$m++) { ?>
                <option value="<?=$m?>"><?=$months[$m-1]?></option>
                <?php } ?>
            </select>
            <select name="year" required>
                <option value="">Year</option>
                <?php for($y=0;$y<=2;$y++) { ?>
                <option value="<?=$year-$y?>"><?=$year-$y?></option>
                <?php } ?>
            </select>
            <input type="submit" value="View Report">
        </p>
    </form>
    <?php 
    if(isset($_GET['year'])) { 
        include 'connection.php';
       // $query="SELECT * FROM layanan";
        $query="SELECT l.service_date, t.teknisi_nama, k.pc_merk, k.pc_nama_client, l.harga 
        FROM layanan As l, teknisi As t, komputer As k 
        WHERE l.teknisi_id=t.teknisi_id AND l.pc_id=k.pc_id 
        AND MONTH(l.service_date)='$_GET[month]' AND YEAR(l.service_date)='$_GET[year]'";
        $report=mysqli_query($db_connection,$query);
    ?>
    <h4>Report Periode <?=$months[$_GET['month']-1]?> - <?=$_GET['year']?></h4>
    <table border="1">
        <tr>
            <th>No</th>
            <th>Date</th>
            <th>Teknisi</th>
            <th>Komputer</th>
            <th>Owner</th>
            <th>Harga (Rp)</th>
        </tr>
        <?php
        if(mysqli_num_rows($report) > 0) {
            $i=1; $total=0;
            foreach($report as $data) :
        ?>
        <tr>
            <td><?=$i++?></td>
            <td><?=date('l jS \of F Y (h:i:s A)',strtotime($data['service_date']))?></td>
            <td><?=$data['teknisi_nama'] ?></td>
            <td><?=$data['pc_merk'] ?></td>
            <td><?=$data['pc_nama_client'] ?></td>
            <td align="right"><?=$harga=$data['harga'] ?></td>
        </tr>
        <?php $total = $total+$harga;endforeach; ?>
        <tr><th colspan="7" align="right">Total : Rp. <?=$total?> </th></tr>
        <?php } else { ?>
        <tr><th colspan="7" align="center">No Record !</th></tr>
        <?php } ?>
    </table>
    <?php } ?>
</body>
</html>