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

<!--- cart items details ------------------------>

<div class="small-container cart-page">
  <table>
      <tr>
        <th>Product</th>
        <th>Quantity</th>
        <th>Subtotal</th>

      </tr>

      <tr>
        <td>
          <div class="cart-info">
            <img src="Storeimg/red-tshirt1.jpg">
         <div>
           <p>Red Printed T-Shirt</p>
           <small>Price: $50.00</small>
           <br>
           <a href="">Remove</a>
         </div>
       </div>

        </td>
        <td><input type="number" value="1"></td>
        <td>$50.00</td>
      </tr>
      <tr>
        <td>
          <div class="cart-info">
            <img src="Storeimg/latestimg6.jpg">
         <div>
           <p>Red Printed T-Shirt</p>
           <small>Price: $80.00</small>
           <br>
           <a href="">Remove</a>
         </div>
       </div>

        </td>
        <td><input type="number" value="1"></td>
        <td>$80.00</td>
      </tr>
      <tr>
        <td>
          <div class="cart-info">
            <img src="Storeimg/latestimg3.jpg">
         <div>
           <p>Red Printed T-Shirt</p>
           <small>Price: $90.00</small>
           <br>
           <a href="">Remove</a>
         </div>
       </div>

        </td>
        <td><input type="number" value="1"></td>
        <td>$90.00</td>
      </tr>
      <tr>
        <td>
          <div class="cart-info">
            <img src="Storeimg/mentshirt1.jpg">
         <div>
           <p>Red Printed T-Shirt</p>
           <small>Price: $45.00</small>
           <br>
           <a href="">Remove</a>
         </div>
       </div>

        </td>
        <td><input type="number" value="1"></td>
        <td>$45.00</td>
      </tr>

    </table>

    <div class="total-price">

         <table>
           <tr>
                <td>Subtotal</td>
                <td>$265.00</td>
           </tr>
           <tr>
                <td>Tax</td>
                <td>$35.00</td>
           </tr>
           <tr>
                <td>Total</td>
                <td>$300.00</td>
           </tr>

        </table>

         </div>

         <a href="" class="btn">Confirm Order &#8594;</a>

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
