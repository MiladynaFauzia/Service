<?php 
if (isset($_POST['save'])) { // check variable POST form FROM
    include "connection.php"; //call connection php mysql

    //sql query UPDATE SET WHERE
    $query = "UPDATE users set
                username = '$_POST[username]',
                usertype = '$_POST[usertype]',
                fullname = '$_POST[fullname]'
                WHERE user_id = '$_POST[user_id]'
        ";
    
    //run query
    $update = mysqli_query($db_connection, $query);

    if($update){ // check if query TRUE/success
        //echo "<p>User Update successfully !</p>"; // success msg (html version)
        echo "<script> alert ('User Update successfully !');</script>"; //success msg (javascript version)
    } else {
        //echo "<p>User Update Failed !</p>"; // fail msg (html version)
        echo "<script> alert ('User update Failed !');</script>"; // fail msg (javascript version)
    } 
}
?>
<!-- <p><a href="read_user.php">BACK TO PETS LIST</p> -->
<script>window.location.replace("read_user.php");</script>