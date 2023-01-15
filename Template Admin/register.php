<?php 
  session_start();
  if (!isset($_SESSION['login'])) {
    echo "<script>alert('Please Login First !');window.location.replace('form_login.php');</script>";
  }
 ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="website description" />
	<meta name="keywords" content="website keywords, website keywords" />
    <link rel="stylesheet" type="text/css" href="style.css" />
	<title>ABADI SERVICE KOMPUTER</title>
</head>
 <body class="blogin">
    <div class="container">
        <div class="login" id="register" align="center">
            <h2>Register</h2>
            <form method="post" action="create_signup.php">
                <div class="inputform">
                    <span class="logreg">Name</span> <br>
                    <input type="text" name="fullname" placeholder="Name" required>
                </div>
                <div class="inputform">
                    <span class="logreg">Username</span> <br>
                    <input type="text" name="username" placeholder="Username" required>
                </div>
                <div class="inputform">
                    <span class="logreg">Password</span> <br>
                    <input type="password" id="password" name="password" placeholder="Password" required>
                </div>
                <div>
                    <span class="logreg"><input type="checkbox" onclick="show()">Show Password</span>
                </div>
                <div>
                    <span class="logreg">
                    <input type="hidden" name="usertype" value="Pelanggan">
                </div>
                <div class="inputform">
                    <button type="submit" name="save">Sign Up</button> <br>
                    <span class="logreg">have an account? <a href="form_login.php">Login</a></span> <br>
                </div>
            </form>
            <script>
	            function show() {
		            var x = document.getElementById("password");
		            if (x.type === "password") {
			            x.type = "text";
		            } else {
			            x.type = "password";
		            }  
	            }
	        </script>
        </div>
    </div>
    </body>
</html>