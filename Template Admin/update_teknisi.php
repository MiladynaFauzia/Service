<?php
    if(isset($_POST['save'])){
        //Call Connection php mysql
        include "connection.php";

        $folder = 'uploads/teknisi/';
        if (move_uploaded_file($_FILES['new_photo']['tmp_name'], $folder . $_FILES['new_photo']['name'])) {
        
        // success upload, get the photo name
        $photo=$_FILES['new_photo']['name'];
    
        // sql query INSERT INTO VALUES
        $query = "UPDATE teknisi SET 
                    teknisi_nama = '$_POST[teknisi_nama]',
                    teknisi_email = '$_POST[teknisi_email]',
                    teknisi_kontak = '$_POST[teknisi_kontak]',
                    teknisi_alamat = '$_POST[teknisi_alamat]',
                    teknisi_photo = '$photo'
                    WHERE teknisi_id = '$_POST[teknisi_id]'
                ";
    
        //run query
        $update = mysqli_query($db_connection, $query);
    
        if($update){
            if($_POST['teknisi_photo'] !== 'default.png') unlink($folder . $_POST['teknisi_photo']); // delete old photo
            //echo"<p>Doctor update successfully !</p>";
            echo"<script> alert('Teknisi update succesfully !'); </script>";
        }else{
            //echo"<p>Doctor update failed !</p>";
            echo"<script> alert('Teknisi update failed !'); </script>";
        }
    
    }
}
    ?>
    <!-- <p><a href="read_teknisi.php">Back To Pets List</a></p> -->
    <script>window.location.replace("read_teknisi.php");</script>