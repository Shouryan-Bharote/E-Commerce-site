<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pet shop</title>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css"/>
    <link rel="stylesheet" href="style.css">
</head>

<body>
<section id ="header">
        <a href="#"><img src="Images/logo.png" class="logo" alt=""></a>
        <div>
            <ul id="navbar">
                <li><a href="index.php">Home</a></li>
                <li><a href="shop.php">Shop</a></li>
                <li><a href="blog.php">Blog</a></li>
                <li><a href="about.php">About</a></li>
                <li><a class="active" href="contact.php">Contact</a></li>
                <li><a href="cart.php"><i class="fa-solid fa-cart-shopping-fast"></i></a></li>
                <li><a href="logout.php">Logout</a></li>
</section>

<section id="page-header" class="about-header">

    <h2>#Let's_Talk</h2>

    <p>Leave a message, we love to hear from you!</p>

</section>

<section id="contact-details" class="section-p1">
    <div class="details">
        <span>GET IN TOUCH</span>
        <h4>Visit our store or contact us today</h4>
        <h3>Head Office</h3>
        <div>
            <li>
                <i class="fal fa-map"></i>
                <p>56 GlassFord Street Glasgow G1 1UL New York</p>
            </li>
            <li>
                <i class="far fa-envelope"></i>
                <p>Contact@example.com</p>
            </li>
            <li>
                <i class="fas fa-phone-alt"></i>
                <p>Contact@example.com</p>
            </li>
            <li>
                <i class="far fa-clock"></i>
                <p>Monday to Saturday 9 am to 4 pm</p>
            </li>
        </div>
    </div>
    <div class="map">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3782.
        7979359186816!2d73.83109348226859!3d18.538031173155584!2m3!1f0!2f0!3f0!3
        m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3bc2bf7acebd4017%3A0x512ff6345a8b43f3
        !2sGOVERNMENT%20POLYTECHNIC%20COLLEGE%2C%20Ganeshkhind%20Rd%2C%20Range%2
        0Hill%20Corner%2C%20Jawahar%20Nagar%2C%20Shivajinagar%2C%20Pune%2C%20Mah
        arashtra%20411016!5e0!3m2!1sen!2sin!4v1680685737385!5m2!1sen!2sin" 
        width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"
        referrerpolicy="no-referrer-when-downgrade"></iframe>
    </div>
</section>

<section id="form-details">
    <form action="">
        <span>LEAVE A MESSAGE</span>
        <h2>We love to hear from you</h2>
        <input type="text" placeholder="Your name">
        <input type="text" placeholder="E-mail">
        <input type="text" placeholder="Subject">
        <textarea name="" id="" cols="30" rows="10" placeholder="Your Message"></textarea>
        <button class="normal">Submit</button>
    </form>
    <div class="people">
        <div>
        <img src="" alt="">
        <p><span>XYZ</span>Senior Marketing manager <br> Phone: +91 xxx-yyy-zzzz <br>
        E-mail: Contact@example.com</p>
    </div>
    <div>
        <img src="" alt="">
        <p><span>XYZ</span>Senior Marketing manager <br> Phone: +91 xxx-yyy-zzzz <br>
        E-mail: Contact@example.com</p>
    </div>
    <div>
        <img src="" alt="">
        <p><span>XYZ</span>Senior Marketing manager <br> Phone: +91 xxx-yyy-zzzz <br>
        E-mail: Contact@example.com</p>
    </div>
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