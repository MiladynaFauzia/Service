<?php 
    if (isset($_POST['save'])) {
        include "connection.php";

        //create defaule password
        $password = password_hash($_POST['usertype'], PASSWORD_DEFAULT);

        $query = "INSERT INTO users 
                 (fullname, username, password, usertype) 
                 VALUES ('$_POST[fullname]', '$_POST[username]', '$password', '$_POST[usertype]')";

        // run query
        $createsignup = mysqli_query($db_connection, $query);

        if ($createsignup) {
            echo "<script> alert ('Registered successfully !');</script>";
        }else{
            echo "<script> alert ('Registered Failed !');</script>";
        }
    }
 ?>

 <!-- <p><a href="login.php"></a>Back To Pemesanan Tiket</p> -->
 <script> window.location.replace("form_login.php")</script>