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
                <li><a class="active" href="shop.php">Shop</a></li>
                <li><a href="blog.php">Blog</a></li>
                <li><a href="about.php">About</a></li>
                <li><a href="contact.php">Contact</a></li>
                <li><a href="cart.php"><i class="fa-solid fa-cart-shopping-fast"></i></a></li>
</section>

<section id="prodetails" class="section-p1">
    <div class="single-pro-image">
        <img src="C:\xampp\htdocs\PHP\E-Commerce\Images\Products\P1.jpeg" width="100%" id="MainImg">

        <div class="small-img-group">
            <div class="small-img-col">
                <img src="Images\Products\P1.jpeg" width="100%" class="small-img">
            </div>
            <div class="small-img-col">
                <img src="Images\Products\P2.jpeg" width="100%" class="small-img">
            </div>
            <div class="small-img-col">
                <img src="Images\Products\P3.jpeg" width="100%" class="small-img">
            </div>
            <div class="small-img-col">
                <img src="Images\Products\P4.jpeg" width="100%" class="small-img">
            </div>
        </div>
    </div>
    <div class="single-pro-details">
        <h6>Home/Food</h6>
        <h4>Pet's liking</h2>
        <h2>Rs500</h2>
        <!-- <select>
            <option></option>
            <option></option>
            <option></option>
            <option></option>
            <option></option>
        </select> -->
        <input type="number" value="1"L>
        <button class="normal">Add to Cart</button>
        <h4>Product details</h4>
        <p> <pre>
    Give your puppy a healthy start to life with the Pedigree Puppy Dry Dog Food, Chicken & Milk.
    This special food has been made keeping in mind the nutrition requirements of your little bundle of joy.
    With the goodness of milk and chicken, this food is wholesome in every way! The Pedigree Puppy Dry Dog Food,
    Chicken & Milk has a crunchy kibble that makes your puppy ask for more. The delicious taste of the Pedigree 
    Puppy Dry Dog Food, Chicken & Milk will make even the fussiest eaters want to eat more.
    The richness of nutrients in the Pedigree Puppy Dry Dog Food, Chicken & Milk helps build
    better immunity in your puppy and promotes growth in the right way. It is made from the highest quality ingredients.
    
Get the Pedigree Puppy Dry Dog Food, Chicken & Milk today and make your puppy super happy!
    </pre>    
    </p>
        <!-- <span> -->
        <!-- </span> -->
        <!-- Add the  Product details in the span tag -->
    </div>
</section>

<section id="product1" class='section-p1'>
    <h2>Features Products</h2>
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
        <img src="C:\xampp\htdocs\PHP\E-Commerce/Images/App store icons/Google Play Store.png" alt="">
        <img src="C:\xampp\htdocs\PHP\E-Commerce/Images/App store icons/Apple Store.png" alt="">

        <!-- This is for the app -->
    </div> 
    <p>Secured Payment Gateways</p>
    <img src="#" alt="">
    </div>

    <div class="copyright">
    <p>© 2023, Pet Shop - etc HTML CSS Ecommerce Template</p>

    </div>
</footer>
<script>
    var MainImg= document.getElementById("MainImg");
    var smallimg = document.getElementsByClassName("small-img");

    smallimg[0].onclick =function(){
        MainImg.src = smallimg[0].src;
    }
    smallimg[1].onclick =function(){
        MainImg.src = smallimg[1].src;
    }
    smallimg[2].onclick =function(){
        MainImg.src = smallimg[2].src;
    }
    smallimg[3].onclick =function(){
        MainImg.src = smallimg[3].src;
    }

</script>
<script src="script.js"></script>
</body>
</html>
