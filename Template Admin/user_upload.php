<?php
session_start();
if (isset($_POST['upload'])) { // check variable POST from FORM
    include "connection.php"; // call connection

$folder = 'uploads/users/'; // target folder for upload
if(move_uploaded_file($_FILES['new_photo']['tmp_name'], $folder . $_FILES['new_photo']['name'])){

    // succes upload, get the photo name
    $photo=$_FILES['new_photo']['name'];

    // make query for update photo
    $query="UPDATE users SET user_photo ='$photo' WHERE user_id='$_POST[user_id]'";

    // run the query
    $upload=mysqli_query($db_connection,$query);

    if($upload){ // check query result TRUE/succes
        if($_POST['user_photo'] !== 'default.png') unlink($folder . $_POST['user_photo']); // delete old photo
        // succes msg
        echo "<script>alert('Change photo successed !');window.location.replace('profile.php');</script>";
    } else {
        // failed msg
        echo "<script>alert('Change photo failed !');window.location.replace('change_photo.php?id=$_POST[user_id]');</script>";
    }
// failed upload
} else {
    echo "<script>alert('Upload photo failed !');window.location.replace('change_photo.php?id=$_POST[user_id]');</script>";
}
}
?> 