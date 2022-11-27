
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

<!--- Acccount-Page ------------------------>

<div class="account-page">
  <div class="container">
    <div class="row">
      <div class="col-2">
        <img src="Storeimg/strimgae2.PNG" width="100%">
      </div>
      <div class="col-2">
        <div class="form-container">
          <div class="form-btn">
            <span onclick="login();">Login</span>
            <span onclick="register();">Register</span>
            <hr id="Indicator">
          </div>

            <form method="POST" id="LoginForm">
               <input type="text" name="user" placeholder="UserName / Email">
               <input type="Password" name="password"  placeholder="Password">
               <button type="submit" class="btn">Login</button>
               <a href="">Forgot Password?</a>
            </form>

            <form method="POST" id="RegForm">
               <input type="text" name="user" placeholder="UserName">
               <input type="tel" id="phone" name="phone" pattern="[0-9]{3}-[0-9]{2}-[0-9]{3}" placeholder="Phone">
               <input type="email" name="Email"  placeholder="E-mail">
               <input type="Password" name="password"  placeholder="Password">
               <input type="Password" name="re-password"  placeholder="Re-enter Password">
               <button type="submit" class="btn">Register</button>
            </form>

        </div>
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

<!--- JS for toggle form ------------------------>

<script>

  var LoginForm = document.getElementById("LoginForm");
  var RegForm = document.getElementById("RegForm");
  var Indicator = document.getElementById("Indicator");

  function register(){
    RegForm.style.transform = "translateX(0px)";
    LoginForm.style.transform = "translateX(0px)";
    Indicator.style.transform = "translateX(100px)";
  }
  function login(){
    RegForm.style.transform = "translateX(300px)";
    LoginForm.style.transform = "translateX(300px)";
    Indicator.style.transform = "translateX(0px)";
  }

</script>

</body>
</html>




<?Php
?>
