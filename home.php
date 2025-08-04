<?php
session_start();
if (!isset($_SESSION['email'])) {
    header("Location: login.php");
    exit();
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="header.css">
    <link rel="stylesheet" href="general.css">
    <link rel="stylesheet" href="body.css">
    <script src="header.js"></script>
    <script src="body.js"></script>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kim's Bakery</title>
</head>
<body>
    
 <nav>
        <ul class="sidebar">
            <li class="close-btn" onclick="HideSidebar()"><button class="close"><img src="close_24dp_000000_FILL0_wght400_GRAD0_opsz24.svg"></button></li>
            <li><a href="#">Home</a></li>
            <li><a href="#">Menu</a></li>
            <li><a href="#">Orders</a></li>
            <li><a href="#">Cart</a></li>
            <li><a href="#">Admin</a></li>
            <li><a href="#">About</a></li>
            <li><a href="#">Contact</a></li>
            <li><a href="BakeryLogin-form.html">Logout</a></li>
        </ul>


         <ul>
            <li><a href="#">Kim's Bakery</a></li>
            <li class="Hide-mobile"><a href="#">Home</a></li>
            <li class="Hide-mobile"><a href="#">Menu</a></li>
            <li class="Hide-mobile"><a href="#">Orders</a></li>
            <li class="Hide-mobile"><a href="#">Cart</a></li>
            <li class="Hide-mobile"><a href="#">Admin</a></li>
            <li class="Hide-mobile"><a href="#">About</a></li>
            <li class="Hide-contact"><a href="#">Contact</a></li>
            <li><a class="Hide-mobile" href="BakeryLogin-form.html">Logout</a></li>
            <li class="menu-btn" onclick="showSidebar()"><button class="menu-button"><img src="menu_24dp_000000_FILL0_wght400_GRAD0_opsz24.svg"></a></li>
        </ul>
    </nav>

    
    <section class="section-1">
        <div class="section1-content">
           
            <h1>Kim's Bakery</h1>
            <h3>Our bakery fills every day with the warm, delicious scent of freshly baked goodness.</h3>     
        <div class="order-div">
        <button class="order-btn">Order Now!</button>
    </div>
    </div>
    </section>
    <section class="section-2">
        <div class="section2-content">
            <div class="Menu">
                <h2 class="our-menu">Our Menu</h2>
            
                
            <div class="menu">
                <a href="Kim'sBakery.html">Breads</a>
                  <a href="Cakes.html">Cakes</a>
                      <a href="Pies">Pies</a>
                        <a href="Coffee">Coffee</a>
            </div>
            </div>
      
<div class="grid-breads">
  <div class="breads-card">
    <div class="breads-content">
      <div class="bread-images">
        <img class="bread" src="spanishbread.jpg" alt="Spanish Bread">
      </div>
      <div class="bread-info">
        <p class="bread-name">Spanish Bread</p>
        <p class="price">₱ 5.00 </p>
      </div>
      <div class="buttons">
        <button class="buy">Buy</button>
        <button class="addcart" onclick="addCart()">Add-to-Cart</button>
      </div>
    </div>
  </div>

  <div class="breads-card">
    <div class="breads-content">
      <div class="bread-images">
        <img class="bread" src="pandecoco.webp" alt="Pan de coco">
      </div>
      <div class="bread-info">
        <p class="bread-name">Pan De Coco</p>
        <p class="price">₱ 6.00 </p>
      </div>
      <div class="buttons">
        <button class="buy">Buy</button>
        <button class="addcart" onclick="addCart()">Add-to-Cart</button>
      </div>
    </div>
  </div>

  <div class="breads-card">
    <div class="breads-content">
      <div class="bread-images">
        <img class="bread" src="ensaymada.webp" alt="Ensaymada">
      </div>
      <div class="bread-info">
        <p class="Ensaymada">Classic Ensaymada</p>
        <p class="price">₱ 10.00 </p>
      </div>
      <div class="buttons">
        <button class="buy">Buy</button>
        <button class="addcart" onclick="addCart()">Add-to-Cart</button>
      </div>
    </div>
  </div>

  <div class="breads-card">
    <div class="breads-content">
      <div class="bread-images">
        <img class="bread" src="pandesal.webp" alt="Pandesal">
      </div>
      <div class="bread-info">
        <p class="bread-name">Pandesal</p>
        <p class="price">₱ 5.00 </p>
      </div>
      <div class="buttons">
        <button class="buy">Buy</button>
        <button class="addcart" onclick="addCart()">Add-to-Cart</button>
      </div>
    </div>
  </div>

  <div class="breads-card">
    <div class="breads-content">
      <div class="bread-images">
        <img class="bread" src="kalihim.jpg" alt="Kalihim">
      </div>
      <div class="bread-info">
        <p class="bread-name">Kalihim</p>
        <p class="price">₱ 8.00 </p>
      </div>
      <div class="buttons">
        <button class="buy">Buy</button>
        <button class="addcart" onclick="addCart()">Add-to-Cart</button>
      </div>
    </div>
  </div>

  <div class="breads-card">
    <div class="breads-content">
      <div class="bread-images">
        <img class="bread" src="putok.webp" alt="Sputnik/Putok">
      </div>
      <div class="bread-info">
        <p class="bread-name">Sputnik</p>
        <p class="price">₱ 5.00 </p>
      </div>
      <div class="buttons">
        <button class="buy">Buy</button>
        <button class="addcart" onclick="addCart()">Add-to-Cart</button>
      </div>
    </div>
  </div>

  <div class="breads-card">
    <div class="breads-content">
      <div class="bread-images-adjust">
        <img class="bread-pinagong" src="pinagong_filipino_bread.jpg" alt="Pinagong">
      </div>
      <div class="bread-info">
        <p class="bread-name">Pinagong</p>
        <p class="price">₱ 5.00 </p>
      </div>
      <div class="buttons">
        <button class="buy">Buy</button>
        <button class="addcart" onclick="addCart()">Add-to-Cart</button>
      </div>
    </div>
  </div>

  <div class="breads-card">
    <div class="breads-content">
      <div class="bread-images">
        <img class="bread" src="pianono.jpg" alt="Pianono">
      </div>
      <div class="bread-info">
        <p class="bread-name">Pianono</p>
        <p class="price">₱ 5.00 </p>
      </div>
      <div class="buttons">
        <button class="buy">Buy</button>
        <button class="addcart" onclick="addCart()">Add-to-Cart</button>
      </div>
    </div>
  </div>

  <div class="breads-card">
    <div class="breads-content">
      <div class="bread-images-adjust">
        <img class="bread-tasty" src="tasty.webp" alt="Tasty Bread">
      </div>
      <div class="bread-info">
        <p class="bread-name">Tasty Bread</p>
        <p class="price">₱ 50.00 </p>
      </div>
      <div class="buttons">
        <button class="buy">Buy</button>
        <button class="addcart" onclick="addCart()">Add-to-Cart</button>
      </div>
    </div>
  </div>

  <div class="breads-card">
    <div class="breads-content">
      <div class="bread-images">
        <img class="bread" src="cheesebread.jpg" alt="Cheese Bread">
      </div>
      <div class="bread-info">
        <p class="bread-name">Cheese Bread</p>
        <p class="price">₱ 5.00 </p>
      </div>
      <div class="buttons">
        <button class="buy">Buy</button>
        <button class="addcart" onclick="addCart()">Add-to-Cart</button>
      </div>
    </div>
  </div>

  <div class="breads-card">
    <div class="breads-content">
      <div class="bread-images">
        <img class="bread" src="hopia.webp" alt="Hopiang Ube">
      </div>
      <div class="bread-info">
        <p class="bread-name">Hopiang Ube</p>
        <p class="price">₱ 5.00 </p>
      </div>
      <div class="buttons">
        <button class="buy">Buy</button>
        <button class="addcart" onclick="addCart()">Add-to-Cart</button>
      </div>
    </div>
  </div>

  <div class="breads-card">
    <div class="breads-content">
      <div class="bread-images">
        <img class="bread" src="ubebars.jpg" alt="Ube Bars">
      </div>
      <div class="bread-info">
        <p class="bread-name">Ube Bars</p>
        <p class="price">₱ 5.00 </p>
      </div>
      <div class="buttons">
        <button class="buy">Buy</button>
        <button class="addcart" onclick="addCart()">Add-to-Cart</button>
      </div>
    </div>
  </div>
</div>

 </section>


<section class="section-3">

<div class="section3-content">
    <h1 class="feedback-txt">Customer Feedbacks</h1>

<div class="grid-section3">

  
    <div class="customer-feedback-card">
        <div class="customer-feedback-card-content">
            <div class="customer-profile">
                <img src="customer1.webp" alt="Customer Profile">
            </div>
            <div class="customer-replies">
                <h3 class="customer-name">CharlesKim</h3>
                <p>Your breads are so soft, tasty and fluffy!</p>
            </div>
            <div class="their-orders-btn">
                <button>View Orders</button>
            </div>
        </div>
    </div>

  <div class="customer-feedback-card">
        <div class="customer-feedback-card-content">
            <div class="customer-profile">
                <img src="customer2.jpg" alt="Customer Profile">
            </div>
            <div class="customer-replies">
                <h3 class="customer-name">EllaMae</h3>
                <p>My kids enjoy your sweet ensaymada every weekend!</p>
            </div>
            <div class="their-orders-btn">
                <button>View Orders</button>
            </div>
        </div>
    </div>

    <div class="customer-feedback-card">
        <div class="customer-feedback-card-content">
            <div class="customer-profile">
                <img src="customer3.png" alt="Customer Profile">
            </div>
            <div class="customer-replies">
                <h3 class="customer-name">Ronnie</h3>
                <p>Highly recommend, breads are so good!</p>
            </div>
            <div class="their-orders-btn">
                <button>View Orders</button>
            </div>
        </div>
    </div>

    <div class="customer-feedback-card">
        <div class="customer-feedback-card-content">
            <div class="customer-profile">
                <img src="customer4.png" alt="Customer Profile">
            </div>
            <div class="customer-replies">
                <h3 class="customer-name">Grace</h3>
                <p>Always a great experience. Never had a bad order!</p>
            </div>
            <div class="their-orders-btn">
                <button>View Orders</button>
            </div>
        </div>
    </div>

     <div class="your-feedback-card">
    <div class="message-form">
    <label class="feedback-word" for="message">Your Message:</label><br>
    <textarea class="feedback-box" id="message" placeholder="Type your message here..."></textarea><br>
    <button class="submit-btn"   onclick="submitMessage()">Submit</button>
  </div>
   </div>
   
    </div>
    </div>

    
</div>

</section>

<section class="section-4">

  <div class="section4-content">

     <h1 class="our-bakers">Our Bakers</h1>

  <div class="grid-sect4">
    <div class="baker-cards">
      <div class="baker-cards-content">
        <div class="bakers-image">
          <img src="baker1.jpg">
        </div>
        <div class="baker-info">
          <h1 class="baker-name">Jacob Sr.</h1>
          <h3 class="years-of-experience">10 Years of Serving</h2>
          <p class="especiliaztion">Expert in Baking a Bread</p>
        </div>
        <div class="info-button">
          <button class="viewProf-btn">View Profile</button>
        </div>
      </div>
    </div>


     <div class="baker-cards">
      <div class="baker-cards-content">
        <div class="bakers-image">
          <img src="baker3.jpg">
        </div>
        <div class="baker-info">
          <h1 class="baker-name">Jessica</h1>
          <h3 class="years-of-experience">3 Years of Serving</h2>
          <p class="especiliaztion">Expert in Baking a Cake</p>
        </div>
        <div class="info-button">
          <button class="viewProf-btn">View Profile</button>
        </div>
      </div>
    </div>


     <div class="baker-cards">
      <div class="baker-cards-content">
        <div class="bakers-image">
          <img src="baker2.jpg">
        </div>
        <div class="baker-info">
          <h1 class="baker-name">Jerald</h1>
          <h3 class="years-of-experience">7 Years of Serving</h2>
          <p class="especiliaztion">Expert in Baking a Pie</p>
        </div>
        <div class="info-button">
          <button class="viewProf-btn">View Profile</button>
        </div>
      </div>
    </div>


     <div class="baker-cards">
      <div class="baker-cards-content">
        <div class="bakers-image">
          <img src="barista.jpg">
        </div>
        <div class="baker-info">
          <h1 class="baker-name">Hannah</h1>
          <h3 class="years-of-experience">2 Years of Serving</h2>
          <p class="especiliaztion">Expert Barista</p>
        </div>
        <div class="info-button">
          <button class="viewProf-btn">View Profile</button>
        </div>
      </div>
    </div>
  </div>
  </div>

</section>



<section class="section-special-offers">
 <h1 class="special-title">Special Offers</h1>

 <div class="sect5-grid">
  <div class="special-offers-content">
   
    <div class="special-offer-card">
      <img src="bread-coffee.jpg" alt="Bread and Coffee Offer" class="special-img">
      <div class="special-details">
        <h2>Buy 10 Breads, Get 1 Coffee Free!</h2>
        <p>Enjoy a complimentary cup of our freshly brewed coffee when you purchase any bread from Kim's Bakery. Perfect for breakfast or merienda!</p>
        <ul>
          <li>Valid for dine-in and take-out</li>
          <li>Promo runs until July 31, 2025</li>
        </ul>
        <button class="special-btn">Order Now</button>
      </div>
    </div>
  </div>

   <div class="special-offers-content">
     <div class="special-offer-card">
      <img src="specialOff-Cake.jpg" alt="Bread and Coffee Offer" class="special-img">
      <div class="special-details">
        <h2>Buy Two Pies, Get 1 Cake Free!</h2>
        <p>Enjoy a free cake when you buy any two pies from Kim's Bakery. It's the perfect treat for sharing with friends and family.</p>
        <ul>
          <li>Valid for dine-in and take-out</li>
          <li>Promo runs until July 31, 2025</li>
        </ul>
        <button class="special-btn">Order Now</button>
      </div>
    </div>
    </div>

       <div class="special-offer-card">
      <img src="50off.jpg" alt="Bread and Coffee Offer" class="special-img">
      <div class="special-details">
        <h2>Buy Different Products and Get 50% off Coupon!</h2>
       <p>Buy any two different products from Kim's Bakery and receive a 50% discount coupon for your next purchase. Enjoy more treats and save</p>
        <ul>
          <li>Valid for dine-in and take-out</li>
          <li>Promo runs until July 31, 2025</li>
        </ul>
        <button class="special-btn">Order Now</button>
      </div>
      </div>
    </div>
    </div>

</section>


<section class="Location-and-Contact">
  <div class="location-content">
    <div class="shop-img">
      <img src="bakery-loc-img.jpg" alt="Bakery Shop">
      </div>
    <div class="location-details">
      <h1 class="location-title">Location and Contact</h1>
      <p class="address">123 Bakery Lane, Sweet City, Philippines</p>
      <p class="phone">Phone: +63 912 345 6789</p>
      <p class="email">Email: kimsbakery@gmail.com</p>
      <p class="hours">Business Hours: Mon-Sat, 8:00 AM - 6:00 PM</p>
      <p class="social-media">Follow us on social media for updates and special offers!</p>
      <div class="social-icons">
        <a href="#"><img src="f_logo_RGB-Blue_1024 copy.png" alt="Facebook"></a>
        <a href="#"><img src="instagram-logo.png" alt="Instagram"></a>
        <a href="#"><img src="tiktok-logo.webp" alt="Twitter"></a>
      </div>
      </div>
</section>
    
</body>
</html>