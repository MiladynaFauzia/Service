<?php
    if(isset($_POST['save'])){ 
        include "connection.php"; 

        $folder = 'uploads/users/';
        if(move_uploaded_file($_FILES['new_photo']['tmp_name'], $folder . $_FILES['new_photo']['name'])){
            
        // success upload, get the photo name
            $photo = $_FILES['new_photo']['name'];

            // make query for update photo
            $query = "UPDATE users SET 
                fullname         = '$_POST[fullname]',
                username         = '$_POST[username]',
                usertype         = '$_POST[usertype]',
                user_photo       = '$photo'
                WHERE user_id     = '$_POST[user_id]'";
                        
            // run query
            $upload = mysqli_query($db_connection, $query);

            if($upload){ // check query result TRUE/success
                // success msg
                if($_POST['user_photo'] !== 'default.png') unlink($folder . $_POST['user_photo']);
                echo "<script> alert ('Successfully Edited !'); window.location.replace('read_signup.php'); </script>";
            } else {
                // failed msg
                echo "<script> alert ('Edit Failed !'); window.location.replace('edit_signup.php'); </script>";
            }
        // failed upload
        }
}
?>
<script>window.location.replace("index.php");</script>
