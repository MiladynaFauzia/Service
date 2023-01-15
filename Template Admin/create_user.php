<?php 
  //echo $_POST['pet_name_210005'] . "<br>";
  //echo $_POST['pet_gender_210005'] . "<br>";
  //echo $_POST['pet_address_210005'] . "<br>";
  //echo $_POST['pet_phone_210005'] . "<br>";

  if (isset($_POST['save'])) { // check variable POST form FROM
  include "connection.php"; //call connection php mysql

  // create default password
  $password = password_hash($_POST['usertype'], PASSWORD_DEFAULT);
  //sql query INSERT INTO VALUES
  $query = "INSERT INTO users (username, password, usertype, fullname) 
  VALUES ('$_POST[username]', '$password', '$_POST[usertype]', '$_POST[fullname]')";

  //run query
  $create = mysqli_query($db_connection, $query);

  if($create){ // check if query TRUE/success
    //echo "<p>User Added successfully !</p>"; // success msg (html version)
    echo "<script> alert ('User Added successfully !');</script>"; //success msg (javascript version)
  } else {
    //echo "<p>User Add Failed !</p>"; // fail msg (html version)
    echo "<script> alert ('User Added Failed !');</script>"; // fail msg (javascript version)
  } 
}
?>
<!-- <p><a href="read_user.php">BACK TO PETS LIST</p> -->
<script>window.location.replace("read_user.php");</script>