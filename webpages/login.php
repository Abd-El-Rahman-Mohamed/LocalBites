<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
    <link rel="icon" type="image/x-icon" href="../favicons/favicon.ico">
    <link rel="stylesheet" href="../css/sign.css">
    <title>Log In</title>
</head>

<body>
    <div class="container">
        <div class="form-container">
	    <form action="../php/login-handler.php" method="POST">
                <h1>Log In</h1>
                <span><a href=../index.html>LocalBites</a></span>
		<input type="text" value="<?php if(isset($_COOKIE['username'])) {echo $_COOKIE['username'];}?>" name="username" placeholder="Username" >
                <input type="password" value="<?php if(isset($_COOKIE['password'])) {echo $_COOKIE['password'];}?>" name="password" placeholder="Password" >
		<span id="checkboxlabel">Remember me <input type="checkbox" <?php if(isset($_COOKIE['rememberme'])) {echo "checked";}?> name="rememberme"> </span>
                <a href="./signup.php">Create an account</a>
                <a href="./forgotpassword.php">Forgot Your Password?</a>
                <button type="submit" name="submit">Sign In</button>

                <span class="error1"><?php if (isset($_GET['error1']) && !empty($_GET['error1'])) { echo htmlspecialchars($_GET['error1']); } ?></span>
                <span class="error2"><?php if (isset($_GET['error2']) && !empty($_GET['error2'])) { echo htmlspecialchars($_GET['error2']); } ?></span>
            </form>
        </div>
    </div>
</body>

</html>

