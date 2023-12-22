<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pet shop</title>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css"/>
    <link rel="stylesheet" href="style.css">
    
    <?php 
        session_start();
        if(isset($_SESSION['login_msg'])){ ?>
            <script>
                alert('Login Successful');
            </script>
    <?php   
        unset($_SESSION['login_msg']);    
    }
    ?>
</head>
<body>
<section id ="header">
        <a href="#"><img src="Images/logo.png" class="logo" alt=""></a>
        <div>
            <ul id="navbar">
                <li><a class="active" href="index.php">Home</a></li>
                <li><a href="shop.php">Shop</a></li>
                <li><a href="blog.php">Blog</a></li>
                <li><a href="about.php">About</a></li>
                <li><a href="contact.php">Contact</a></li>
                <li><a href="cart.php"><i class="fa-solid fa-cart-shopping-fast"></i></a>
                <li><a href="logout.php">Logout</a></li>
            </li>
</section>

<section id="hero">
    <h4>Trade-in-offer</h4>
    <h2>Super value deals</h2>
    <h1>On all our products</h1>
    <p>Save more with coupons & up to 70% off!</p>
    <a href="shop.php"><button>Shop now </button></a>
</section>

<section id='feature' class='section-p1'>
    <div class='fe-box'>
        <img src="Images\Features\Free Shipping.png" alt="">
        <h6> Free Shipping</h6>
    </div>
    <div class='fe-box'>
        <img src="Images\Features\f2.png" alt="">
        <h6> Online order</h6>
    
</div>
    <div class='fe-box'>
        <img src="Images\Features\f3.png" alt="">
        <h6> Save Money</h6>
    </div>
    <div class='fe-box'>
        <img src="Images\Features\f4.png" alt="">
        <h6> Promotions</h6>
    </div>
    <div class='fe-box'>
        <img src="Images\Features\f5.png" alt="">
        <h6> Happy sell</h6>
    </div>
    <div class='fe-box'>
        <img src="Images\Features\f6.png" alt="">
        <h6> F24/7 Support</h6>
    </div>
</section>

<section id="product1" class='section-p1'>
    <h2>Featured Products</h2>
    <p>Filled with Nutrients</p>
    <div class="pro-container" onclick="window.location.href='p1.php'">
        <div class="pro">
            <img src="Images/Products/P1.jpeg" alt="">
            <div class="des">
                <span>Pedigree</span>
                <h5>20 Kg Pack</h5>
                <div class="star">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                </div>
                <h4>Rs 500</h4>
            </div>
            <a href="#"><i class="fal fa-shopping-cart"></i></a>
        </div>
        <div class="pro">
            <img src="Images/Products/P2.jpeg" alt="">
            <div class="des">
                <span>Pedigree</span>
                <h5>20 Kg Pack</h5>
                <div class="star">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                </div>
                <h4>Rs 500</h4>
            </div>
            <a href="#"><i class="fal fa-shopping-cart"></i></a>
        </div>
        <div class="pro">
            <img src="Images/Products/P3.jpeg" alt="">
            <div class="des">
                <span>Pedigree</span>
                <h5>20 Kg Pack</h5>
                <div class="star">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                </div>
                <h4>Rs 500</h4>
            </div>
            <a href="#"><i class="fal fa-shopping-cart"></i></a>
        </div>
        <div class="pro">
            <img src="Images/Products/P4.jpeg" alt="">
            <div class="des">
                <span>Pedigree</span>
                <h5>20 Kg Pack</h5>
                <div class="star">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                </div>
                <h4>Rs 500</h4>
            </div>
            <a href="#"><i class="fal fa-shopping-cart"></i></a>
        </div>
        <div class="pro">
            <img src="Images/Products/P5.jpeg" alt="">
            <div class="des">
                <span>Pedigree</span>
                <h5>20 Kg Pack</h5>
                <div class="star">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                </div>
                <h4>Rs 500</h4>
            </div>
            <a href="#"><i class="fal fa-shopping-cart"></i></a>
        </div>
        <div class="pro">
            <img src="Images/Products/P6.jpeg" alt="">
            <div class="des">
                <span>Pedigree</span>
                <h5>20 Kg Pack</h5>
                <div class="star">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                </div>
                <h4>Rs 500</h4>
            </div>
            <a href="#"><i class="fal fa-shopping-cart"></i></a>
        </div>
        <div class="pro">
            <img src="Images/Products/P7.jpeg" alt="">
            <div class="des">
                <span>Pedigree</span>
                <h5>20 Kg Pack</h5>
                <div class="star">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                </div>
                <h4>Rs 500</h4>
            </div>
            <a href="#"><i class="fal fa-shopping-cart"></i></a>
        </div>
        <div class="pro">
            <img src="Images/Products/P8.jpeg" alt="">
            <div class="des">
                <span>Pedigree</span>
                <h5>20 Kg Pack</h5>
                <div class="star">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                </div>
                <h4>Rs 500</h4>
            </div>
            <a href="#"><i class="fal fa-shopping-cart"></i></a>
        </div>
    </div>
</section>

<section id="banner" class="section-m1">
    <h4>Fast Services</h4>
    <h2>Up to <span>50% OFF</span> - All Products</h2>
    <button class="normal">Explore more</button>
</section>

<section id="product1" class='section-p1'>
    <h2>New Arivals</h2>
    <p>Filled with Nutrients</p>
    <div class="pro-container">
        <div class="pro">
            <img src="Images/Products/P1.jpeg" alt="">
            <div class="des">
                <span>Pedigree</span>
                <h5>20 Kg Pack</h5>
                <div class="star">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                </div>
                <h4>Rs 500</h4>
            </div>
            <a href="#"><i class="fal fa-shopping-cart"></i></a>
        </div>
        <div class="pro">
            <img src="Images/Products/P2.jpeg" alt="">
            <div class="des">
                <span>Pedigree</span>
                <h5>20 Kg Pack</h5>
                <div class="star">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                </div>
                <h4>Rs 500</h4>
            </div>
            <a href="#"><i class="fal fa-shopping-cart"></i></a>
        </div>
        <div class="pro">
            <img src="Images/Products/P3.jpeg" alt="">
            <div class="des">
                <span>Pedigree</span>
                <h5>20 Kg Pack</h5>
                <div class="star">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                </div>
                <h4>Rs 500</h4>
            </div>
            <a href="#"><i class="fal fa-shopping-cart"></i></a>
        </div>
        <div class="pro">
            <img src="Images/Products/P4.jpeg" alt="">
            <div class="des">
                <span>Pedigree</span>
                <h5>20 Kg Pack</h5>
                <div class="star">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                </div>
                <h4>Rs 500</h4>
            </div>
            <a href="#"><i class="fal fa-shopping-cart"></i></a>
        </div>
        <div class="pro">
            <img src="Images/Products/P5.jpeg" alt="">
            <div class="des">
                <span>Pedigree</span>
                <h5>20 Kg Pack</h5>
                <div class="star">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                </div>
                <h4>Rs 500</h4>
            </div>
            <a href="#"><i class="fal fa-shopping-cart"></i></a>
        </div>
        <div class="pro">
            <img src="Images/Products/P6.jpeg" alt="">
            <div class="des">
                <span>Pedigree</span>
                <h5>20 Kg Pack</h5>
                <div class="star">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                </div>
                <h4>Rs 500</h4>
            </div>
            <a href="#"><i class="fal fa-shopping-cart"></i></a>
        </div>
        <div class="pro">
            <img src="Images/Products/P7.jpeg" alt="">
            <div class="des">
                <span>Pedigree</span>
                <h5>20 Kg Pack</h5>
                <div class="star">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                </div>
                <h4>Rs 500</h4>
            </div>
            <a href="#"><i class="fal fa-shopping-cart"></i></a>
        </div>
        <div class="pro">
            <img src="Images/Products/P8.jpeg" alt="">
            <div class="des">
                <span>Pedigree</span>
                <h5>20 Kg Pack</h5>
                <div class="star">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                </div>
                <h4>Rs 500</h4>
            </div>
            <a href="#"><i class="fal fa-shopping-cart"></i></a>
        </div>
    </div>
</section>

<section id="sm-banner" class="section-p1">
    <div class="banner-box">
        <h4>Crazy deals</h4>
        <h2>buy 1 get 1 free</h2>
        <span>The Best Pet shop in our city</span>
        <button class="white">Learn more</button>
    </div>
    <div class="banner-box banner-box2">
        <h4>Crazy deals</h4>
        <h2>Upcomming sales</h2>
        <span>The Best Pet shop in our city</span>
        <button class="white">Collections</button>
    </div>
</section>

<section id="banner3">
    <div class="banner-box">
        <h2>Seasonal sale</h2>
        <h3>Diwali Sale -50% OFF</h3>
    </div>
    <div class="banner-box banner-box2">
        <h2>Seasonal sale</h2>
        <h3>Christmas Sale -50% OFF</h3>
    </div>
    <div class="banner-box banner-box3">
        <h2>Seasonal sale</h2>
        <h3>Monsoon Sale -50% OFF</h3>
    </div>
</section>

<section id="newsletter" class="section-p1 section-m1">
    <div class="newtext">
        <h4>Sign up For Newsletter</h4>
        <p>Get E-mail updates about our latest shop and <span>offers</span></p>
    </div>
    <div class="form">
        <input type="text" placeholder="Your E-mail address">
        <button class="normal">Sign up</button>
    </div>
</section>

<footer class="section-p1">

    <div class="col">
        <img class="logo" src="" alt="">
        <!-- Image -->
        <h4>Contact</h4>
        <p><strong>Address</strong>enter your address here </p>
        <!-- home address -->
        <p><strong>Phone:</strong>enter your no.here</p>
        <!-- PHONE NO. -->
        <p><strong>Hours</strong>00:00 to 00:00 Mon - Sat</p>
        <div class="follow">
            <h4>follow us</h4>
            <div class="icon">
                <i class="fab fa-facebook-f"></i>
                <i class="fab fa-twitter"></i>
                <i class="fab fa=instagram"></i>
                <i class="fab fa-pintrest-p"></i>
                <i class="fab fa-youtube"></i>
            </div>
        </div>
    </div>


    <div class="col">
    <h4>About</h4>
    <a href="#">About Us</a>
    <a href="#">Delivery  Information</a>
    <a href="#">Privacy Policy</a>
    <a href="#">Terms & Conditions</a>
    <a href="#">Contact Us</a>
    </div>

    <div class="col">
    <h4>My account</h4>
    <a href="#">Sign in</a>
    <a href="#">View Cart</a>
    <a href="#">My Wishlist</a>
    <a href="#">Track my order</a>
    <a href="#">Help</a>
    </div>

<div class="col install">
    <h4>Install App</h4>
    <p>From App Store or Google Play
    <div class="row">
        <img src="Images/App store icons/Google Play Store.png" alt="">
        <img src="Images/App store icons/Apple Store.png" alt="">

        <!-- This is for the app -->
    </div> 
    <p>Secured Payment Gateways</p>
    <img src="#" alt="">
    </div>

    <div class="copyright">
    <p>© 2023, Pet Shop - etc HTML CSS Ecommerce Template</p>

    </div>
</footer>


<script src="script.js"></script>
</body>
</html>