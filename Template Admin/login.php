<?php
session_start(); // start the session
if(isset($_POST['login'])) { // check variable POST from FORM
	include "connection.php"; //call connection php mysql

	// SQL QUERY insert into values
	$query = "SELECT * FROM users WHERE username='$_POST[username]'";

    //RUN THE QUERY
	$login = mysqli_query ($db_connection, $query);

    if(mysqli_num_rows($login) > 0) { // check if the username found or not
        $user=mysqli_fetch_assoc($login); // if user found  extract the data
       if(password_verify($_POST['password'], $user['password'])) {// verify the password

            // if password match, the make session variable
            $_SESSION['login']=TRUE;
            $_SESSION['userid']=$user['user_id'];
            $_SESSION['username']=$user['username'];
            $_SESSION['password']=$user['password'];
            $_SESSION['usertype']=$user['usertype'];
            $_SESSION['fullname']=$user['fullname'];
            $_SESSION['photo']=$user['user_photo'];

            
            echo "<script>alert('login success !');window.location.replace('index.php');</script>";
        }else {
            echo "<script>alert('login failed, wrong password !');window.location.replace('form_login.php');</script>";
    }
    }else {
            echo "<script>alert('login failed, user not found !');window.location.replace('form_login.php');</script>";
    }
}
 ?>