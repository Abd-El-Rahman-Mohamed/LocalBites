<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
    <!-- for fonts -->
    <link
        href="https://fonts.googleapis.com/css2?family=Nunito&family=Work+Sans:ital,wght@0,100..900;1,100..900&display=swap"
        rel="stylesheet">
    <!-- for icoons -->
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,400,0,0&icon_names=local_dining" />
    <!-- swipper -->
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css">
    <!-- connect with css -->
    <link rel="stylesheet" href="../css/style.css">
    <link rel="icon" type="image/x-icon" href="../favicons/favicon.ico">
    <title>LocalBites Restaurant</title>
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
	            <li><a href="../index.html#home" >Home</a></li>
		    <li><a href="../index.html#dishes">Dishes</a></li>
		    <li><a href="#about" class="active">About</a></li>
		    <li><a href="../index.html#menu">Menu</a></li>
		    <li><a href="./contactus.php#contact">Contact</a></li>
		    <li><a href="./order.php#order">Order</a></li>
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

    <section class="about" id="about">
        <h3 class="sub-heading">about us</h3>
        <h1 class="heading">why choose us?</h1>
        <div class="row">
            <div class="image">
                <video controls autoplay muted loop>
                    <source src="../assets/why-to-choose-us.mp4" type="video/mp4">
                    Your browser does not support the video tag.
                </video>
            </div>
            <div class="content">
                <h3>Best food In the country</h3>
                <p>Welcome to LocalBites, where we're passionate about serving delicious, locally-sourced food in a warm and inviting atmosphere. We believe in using fresh, high-quality ingredients to create memorable dining experiences. Join us and taste the difference!</p>
                
                <div class="icon-container">
                    <div class="icon">
                        <i class="fa fa-shipping-fast " aria-hidden="true" id="menu-bars"></i>
                        <span>free delivery</span>
                    </div>
                    <div class="icon">
                        <i class="fa fa-dollar-sign " aria-hidden="true" id="menu-bars"></i>
                        <span>easy payment</span>
                    </div>
                    <div class="icon">
                        <i class="fa fa-headset " aria-hidden="true" id="menu-bars"></i>
                        <span>24/7 services</span>
                    </div>
                </div>
                <a href="#" class="btn-about">learn more</a>
            </div>
        </div>
    </section>

    <footer class="footer">
        <p>Copyrights &copy; <span>LocalBitesRestaurantTeam</span></p>
        <div class="social-icon">
            <a href="https://www.facebook.com/profile.php?id=61570569577879"><i class="fa-brands fa-facebook"></i></a>
            <a href="https://x.com/localbitesfb"><i class="fa-brands fa-twitter"></i></a>
            <a href="https://www.instagram.com/localbitesrestaurant/"><i class="fa-brands fa-instagram"></i></a>
        </div>
    </footer>


    <!-- Swiper.js js -->
    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
    <script src="../js/main.js"></script>
    <script src="../js/dark-mode.js"></script> 
    
</body>
</html>
