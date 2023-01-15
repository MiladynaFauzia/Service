<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="website description" />
	<meta name="keywords" content="website keywords, website keywords" />
    <link href="https://fonts.googleapis.com/css2?family=Gochi+Hand&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
	<title>Login</title>
</head>
<body class="blogin">
    <div class="container">
        <div class="login" id="login" align="center">
            <h2>Login First</h2>
            <form method="post" action="login.php">
                <div class="inputform">
                    <span class="logreg">Username</span> <br>
                    <input type="text" id="username" name="username" placeholder="Username"  required>
                </div>
                <div class="inputform">
                    <span class="logreg">Password</span> <br>
                    <input type="password" id="password" name="password" placeholder="Password" required>
                </div>
                <div>
                    <span class="logreg"><input type="checkbox" onclick="show()">Show Password</span>
                </div>
                <div class="inputform">
                    <button type="submit" name="login">Log In</a></button> <br>
                    <span class="logreg">or <a href="signup.php">Sign Up?</a></span> <br>
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