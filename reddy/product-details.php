<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">

   <title>All Products - Reddystore </title>
   <link rel="stylesheet" href="CSS/storestyle.css">
   <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300,400,500,600,700,800,900&display=swap" rel="stylesheet">
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" integrity="sha512-Fo3rlrZj/k7ujTnHg4CGR2D7kSs0v4LLanw2qksYuRlEzO+tcaEPQogQ0KaoGN26/zrn20ImR1DfuLWnOo7aBA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
   <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">


</head>
<body>


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
       <li><a href="#">Account</a></li>
   </ul>
</nav>

<a href="Storecart.php"><img src="Storeimg/caryshop2.PNG" width="30px" height="30px"></a>
<img src="Storeimg/menu.PNG" class="menu-icon" onclick="menuToggle();">
</div>

</div>

<!--- single product details ------------------------>

<div class="small-container single-product" id="small-container">
   <div class="row">
     <div class="col-2">
       <img src="Storeimg/red-tshirt1.jpg" width="100%" id="ProductImg">


    <div class="small-img-row">
         <div class="small-img-col">
            <img src="Storeimg/red-tshirt1.jpg" width="100%" class="small-img">
          </div>
          <div class="small-img-col">
             <img src="Storeimg/red-tshirt2.jpg" width="100%" class="small-img">
           </div>
           <div class="small-img-col">
              <img src="Storeimg/red-tshirt3.jpg" width="100%" class="small-img">
            </div>
            <div class="small-img-col">
               <img src="Storeimg/red-tshirt4.jpg" width="100%" class="small-img">
             </div>
      </div>


     </div>
     <div class="col-2">
       <p>Home / T-Shirt</p>
       <h1>Red Printed T-Shirt by HRX</h1>
       <h4>$50.00</h4>
          <select>
              <option>Select Size</option>
              <option>XXL</option>
              <option>XL</option>
              <option>L</option>
              <option>M</option>
              <option>S</option>
          </select>
          <input type="number" value="1">
          <a href="" class="btn">Add to Cart</a>

          <h3>Product Details <i class="fa fa-indent"></i></h3>
          <br>
          <p>Premium Quality bio washed T-Shirts. 100% premium cotton. Double stitched on seams for durability. Comfort Fit with true size.
             Dispatch in 1-2 Working days. Delivery with in 3-4 working days. We accept return/refund requests for any kind of printing or product defects.</p>
     </div>
   </div>
</div>
<!--- title------------------------>
  <div class="small-container">
    <div class="row row-2">
      <h2>Related Products</h2>
      <p><a href="products.php" class="viewmore">View More</a></p>
    </div>
  </div>

<!-- products ------------------------>

<div class="small-container">

  <div class="row">
    <div class="col-4">
      <img src="Storeimg/red-tshirt1.jpg">
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

<!--- JS for product gallery ------------------------>

<script>
 var ProductImg = document.getElementById("ProductImg");
 var SmallImg = document.getElementsByClassName("small-img");

 SmallImg[0].onclick = function(){
   ProductImg.src = SmallImg[0].src;
 }
 SmallImg[1].onclick = function(){
   ProductImg.src = SmallImg[1].src;
 }
 SmallImg[2].onclick = function(){
   ProductImg.src = SmallImg[2].src;
 }
 SmallImg[3].onclick = function(){
   ProductImg.src = SmallImg[3].src;
 }

</script>


product-img
</body>
</html>











<?php

?>
