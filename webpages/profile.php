<?php include('../php/profile-handler.php') ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
    <link rel="icon" type="image/x-icon" href="../favicons/favicon.ico">
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="../css/sign.css">
    <title>Sign In</title>
</head>

<body>
     <header>
        <a href="../index.html" class="logo"><span class="material-symbols-outlined">
            local_dining
            </span>
            <h4><strong>L</strong>ocal Bites</h4>
        </a>
        <nav class="navbar">
		<ul>
	           <li><a href="../index.html#home">Home</a></li>
		   <li><a href="../index.html#dishes">Dishes</a></li>
		   <li><a href="./aboutus.php#about">About</a></li>
		   <li><a href="../index.html#menu">Menu</a></li>
		   <li><a href="./contactus.php#contact">Contact</a></li>
		   <li><a href="./order#order">Order</a></li>
		   <li><a href="#" class="active">Profile</a></li>
		</ul>
        </nav>
	<div class="icons">
    	   <i class="fa fa-bars " aria-hidden="true" id="menu-bars"></i>
	   <i class="fa fa-search" aria-hidden="true" id="search"></i>
	   <a href="#" class="fa fa-heart" aria-hidden="true"></a>
 	   <a href="#" class="fa fa-shopping-cart" aria-hidden="true"></a>
	   <button class="dark-mode-toggle">
      	   <i class="fa fa-moon" aria-hidden="true"></i> </button>
	</div>
    </header>

    <form action="" id="search-form">
        <input type="search" placeholder="Looks for What?...." name="" id="search-box">
        <label for="search-box" class="fa fa-search"></label>
        <i class="fa fa-times" aria-hidden="true" id="close"></i>
    </form>

    <div class="container">
        <div class="form-container">
	    <form action="" method="POST">
                <h1>Profile Page</h1>
                <span><a href=../index.html>LocalBites</a></span>
		<input type="text" value="<?php echo $array['username']; ?>" readonly>
		<input type="email" value="<?php echo $array['email'] ?>" readonly>
	        <a href="./login.php"><button type="submit" class="loginbutton">Logout</button></a>
            </form>
        </div>
    </div>
</body>

</html>

