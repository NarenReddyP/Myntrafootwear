<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">

   <title>RedStore | Ecommerce Website Design</title>
   <link rel="stylesheet" href="CSS/storestyle.css">
   <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300,400,500,600,700,800,900&display=swap" rel="stylesheet">
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" integrity="sha512-Fo3rlrZj/k7ujTnHg4CGR2D7kSs0v4LLanw2qksYuRlEzO+tcaEPQogQ0KaoGN26/zrn20ImR1DfuLWnOo7aBA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
   <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">


</head>
<body>
<div class="header">

<div class="container">
<div class="navbar">
 <div class="logo">
  <a href="Reddystore.php"><img src="Storeimg/reddy-store_logo1.jpg" width="125px"></a>
 </div>

 <nav>
   <ul id="MenuItems" class="navigation">
       <li><a href="Reddystore.php">Home</a></li>
       <li><a href="products.php">Products</a></li>
       <li><a href="#">About</a></li>
       <li><a href="#">Contact</a></li>
       <li><a href="storeaccount.php">Account</a></li>
   </ul>
</nav>
<a href="Storecart.php"><img src="Storeimg/caryshop2.PNG" width="30px" height="30px"></a>
<img src="Storeimg/menu.PNG" class="menu-icon" onclick="menuToggle();">
</div>
<div class="row">
  <div class="col-2">
    <h1>Give Your Workout<br>A New Style</h1>
    <p>Reddystore’s low commission rates and lowest shipping charges have helped me<br> increase my earnings and also provide better prices to my customers. </p>
    <a href="" class="btn">Explore Now &#8594;</a>
  </div>
   <div class="col-2">
     <img src="Storeimg/strimgae4.png">
   </div>

 </div>
</div>
</div>
<!---Featured Categories  ----->
  <div class="categories">
     <div class="small-container">

    <div class="row">
      <div class="col-3">
        <img src="Storeimg/shoeimg.jpg">
      </div>
      <div class="col-3">
        <img src="Storeimg/shoeimg4.jpg">
      </div>
      <div class="col-3">
        <img src="Storeimg/shoeimg2.jpg">
      </div>
    </div>

  </div>
</div>
<!---Featured Products  ----->
<div class="small-container">
  <h2 class="title">Featured Products</h2>
  <div class="row">
    <div class="col-4">
      <a href="product-details.php"><img src="Storeimg/red-tshirt1.jpg"></a>
      <a href="product-details.php"><h4>Red Printed T-Shirt</h4></a>
      <div class="rating">
       <i class="fa fa-star"></i>
       <i class="fa fa-star"></i>
       <i class="fa fa-star"></i>
       <i class="fa fa-star"></i>
       <i class="fa fa-star-half"></i>
      </div>
      <p>$50.00</p>
    </div>
    <div class="col-4">
      <img src="Storeimg/menshirt1.jpg">
      <h4>Gray Printed Shirt</h4>
      <div class="rating">
       <i class="fa fa-star"></i>
       <i class="fa fa-star"></i>
       <i class="fa fa-star"></i>
       <i class="fa fa-star-half"></i>
       <i class="fa fa-star-o"></i>
      </div>
      <p>$60.00</p>
    </div>
    <div class="col-4">
      <img src="Storeimg/girlgeen1.jpg">
      <h4>Blue Printed Girl Geens</h4>
      <div class="rating">
       <i class="fa fa-star"></i>
       <i class="fa fa-star"></i>
       <i class="fa fa-star"></i>
       <i class="fa fa-star"></i>
       <i class="fa fa-star-half"></i>
      </div>
      <p>$75.00</p>
    </div>
    <div class="col-4">
      <img src="Storeimg/mentshirt1.jpg">
      <h4>Yellow Printed T-Shirt</h4>
      <div class="rating">
       <i class="fa fa-star"></i>
       <i class="fa fa-star"></i>
       <i class="fa fa-star"></i>
       <i class="fa fa-star-o"></i>
       <i class="fa fa-star-o"></i>
      </div>
      <p>$55.00</p>
    </div>
  </div>

<h2 class="title">Latest Products</h2>

<div class="row">
  <div class="col-4">
    <img src="Storeimg/latestimg8.jpg">
    <h4>Red Printed T-Shirt</h4>
    <div class="rating">
     <i class="fa fa-star"></i>
     <i class="fa fa-star"></i>
     <i class="fa fa-star"></i>
     <i class="fa fa-star"></i>
     <i class="fa fa-star-half"></i>
    </div>
    <p>$50.00</p>
  </div>
  <div class="col-4">
    <img src="Storeimg/latestimg1.jpg">
    <h4>Gray Printed Shirt</h4>
    <div class="rating">
     <i class="fa fa-star"></i>
     <i class="fa fa-star"></i>
     <i class="fa fa-star"></i>
     <i class="fa fa-star-half"></i>
     <i class="fa fa-star-o"></i>
    </div>
    <p>$60.00</p>
  </div>
  <div class="col-4">
    <img src="Storeimg/latestimg2.jpg">
    <h4>Blue Printed Girl Geens</h4>
    <div class="rating">
     <i class="fa fa-star"></i>
     <i class="fa fa-star"></i>
     <i class="fa fa-star"></i>
     <i class="fa fa-star"></i>
     <i class="fa fa-star-half"></i>
    </div>
    <p>$75.00</p>
  </div>
  <div class="col-4">
    <img src="Storeimg/latestimg3.jpg">
    <h4>Yellow Printed T-Shirt</h4>
    <div class="rating">
     <i class="fa fa-star"></i>
     <i class="fa fa-star"></i>
     <i class="fa fa-star"></i>
     <i class="fa fa-star-o"></i>
     <i class="fa fa-star-o"></i>
    </div>
    <p>$55.00</p>
  </div>
  <div class="col-4">
    <img src="Storeimg/latestimg4.jpg">
    <h4>Yellow Printed T-Shirt</h4>
    <div class="rating">
     <i class="fa fa-star"></i>
     <i class="fa fa-star"></i>
     <i class="fa fa-star"></i>
     <i class="fa fa-star-o"></i>
     <i class="fa fa-star-o"></i>
    </div>
    <p>$55.00</p>
  </div>
  <div class="col-4">
    <img src="Storeimg/latestimg5.jpg">
    <h4>Yellow Printed T-Shirt</h4>
    <div class="rating">
     <i class="fa fa-star"></i>
     <i class="fa fa-star"></i>
     <i class="fa fa-star"></i>
     <i class="fa fa-star"></i>
     <i class="fa fa-star-o"></i>
    </div>
    <p>$55.00</p>
  </div>
  <div class="col-4">
    <img src="Storeimg/latestimg6.jpg">
    <h4>Yellow Printed T-Shirt</h4>
    <div class="rating">
     <i class="fa fa-star"></i>
     <i class="fa fa-star"></i>
     <i class="fa fa-star"></i>
     <i class="fa fa-star-half"></i>
     <i class="fa fa-star-o"></i>
    </div>
    <p>$55.00</p>
  </div>
  <div class="col-4">
    <img src="Storeimg/latestimg7.jpg">
    <h4>Yellow Printed T-Shirt</h4>
    <div class="rating">
     <i class="fa fa-star"></i>
     <i class="fa fa-star"></i>
     <i class="fa fa-star"></i>
     <i class="fa fa-star-o"></i>
     <i class="fa fa-star-o"></i>
    </div>
    <p>$55.00</p>
  </div>
</div>

</div>
<!---Offer  ----->
     <div class="offer">
       <div class="small-container">
         <div class="row">
           <div class="col-2">
             <img src="Storeimg/smartband2.png" class="offer-img">
      </div>
      <div class="col-2">
        <p>Exclusively Available on ReddyStore.com</p>
        <h1>Smart Band 4</h1>
        <small><strong>1]</strong> Monitors a wide number of values for overall better health.<br>
               <strong>2]</strong> Counts calories, distance walked, heart rate, stress levels, body battery energy and VO2 max.<br>
               <strong>3]</strong> Activity timers that track your activities like walks, runs, yoga, swim and more.<br>
               <strong>4]</strong> Stress tracking that tracks HRV and sends out alerts when continuously stressed.<br>
               <strong>5]</strong> Monitors REM sleep and SpO2 while sleeping.
        </small><br></br>
        <a href="#" class="btn">Buy Now &#8594;</a>
      </div>
    </div>
  </div>
</div>

<!--- testimonials ---->

  <div class="testimonials">
    <div class="small-container">
      <div class="row">
        <div class="col-3">
          <i class="fa fa-quote-left" aria-hidden="true"></i>
          <p>The Slim Straight is the most diverse fitting jean in the Aviator lineup.
             Available in a stonewashed faded indigo with a slightly worn-in look.
              They're the perfect choice to take you through all your travels in style.</p>

              <div class="rating">
               <i class="fa fa-star"></i>
               <i class="fa fa-star"></i>
               <i class="fa fa-star"></i>
               <i class="fa fa-star"></i>
               <i class="fa fa-star-o"></i>
              </div>
              <img src="Storeimg/user1.jpg">
              <h3>Sean Parker</h3>
        </div>
        <div class="col-3">
          <i class="fa fa-quote-left" aria-hidden="true"></i>
          <p>The Slim Straight is the most diverse fitting jean in the Aviator lineup.
             Available in a stonewashed faded indigo with a slightly worn-in look.
              They're the perfect choice to take you through all your travels in style.</p>

               <div class="rating">
               <i class="fa fa-star"></i>
               <i class="fa fa-star"></i>
               <i class="fa fa-star"></i>
               <i class="fa fa-half"></i>
               <i class="fa fa-star-o"></i>
              </div>
              <img src="Storeimg/user2.jpg">
              <h3>Katherine Langford</h3>
        </div>
        <div class="col-3">
          <i class="fa fa-quote-left" aria-hidden="true"></i>
          <p>The Slim Straight is the most diverse fitting jean in the Aviator lineup.
             Available in a stonewashed faded indigo with a slightly worn-in look.
              They're the perfect choice to take you through all your travels in style.</p>

               <div class="rating">
               <i class="fa fa-star"></i>
               <i class="fa fa-star"></i>
               <i class="fa fa-star"></i>
               <i class="fa fa-star"></i>
               <i class="fa fa-star-half"></i>
              </div>
              <img src="Storeimg/user3.jpg">
              <h3>Laura Barton</h3>
        </div>

      </div>
    </div>
  </div>

<!--- Brands ---->

    <div class="brands">
      <div class="small-container">
        <div class="row">

          <div class="col-5">
            <img src="Storeimg/godrejlogo1.png">
          </div>
          <div class="col-5">
            <img src="Storeimg/Oppo-Logo.png">
          </div>
          <div class="col-5">
            <img src="Storeimg/Coca-Cola_logo.png">
          </div>
          <div class="col-5">
            <img src="Storeimg/paypalogo3.png">
          </div>
          <div class="col-5">
            <img src="Storeimg/philipslogo.png">
          </div>

        </div>
      </div>
    </div>

<!--- footer ------------------------>

     <div class="footer">
       <div class="container">
         <div class="row">
           <div class="footer-col-1">
             <h3>Download Our App :-</h3>
             <p>Download App for Android and ios mobile phone.</p>
              <div class="app-logo">
                <img src="Storeimg/Appstore_logo3.png">
                <img src="Storeimg/Appstore_logo2.png">
              </div>
           </div>
           <div class="footer-col-2">
             <img src="Storeimg/reddy-store_logo1.jpg">
             <p>Our purpose is to sustainably make the pleasure and benefits of sports accessible to the many.</p>
           </div>
           <div class="footer-col-3">
             <h3>Useful Links</h3>

             <ul>
               <li>Coupons</li>
               <li>Blog Post</li>
               <li>Return Policy</li>
               <li>Join Affiliate</li>
             </ul>

           </div>
           <div class="footer-col-4">
             <h3>Follow Us</h3>

             <ul>
               <li>Facebook</li>
               <li>Twitter</li>
               <li>Instagram</li>
               <li>YouTube</li>
             </ul>

           </div>
         </div>
         <hr><br>
         <p class="copyright" id="copyright">Copyright &copy 2022 - Reddystore.com Site</p>
       </div>
     </div>
<!--- JS for toggle menu ------------------------>

<script type="text/javascript">
   var MenuItems = document.getElementById("MenuItems");

   MenuItems.style.maxHeight = "0px";

   function menuToggle(){
     if(MenuItems.style.maxHeight == "0px"){
       MenuItems.style.maxHeight = "200px";
     }else{
       MenuItems.style.maxHeight = "0px";
     }
   }
</script>


</body>
</html>





<?php


?>
