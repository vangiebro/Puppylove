<!DOCTYPE html>
<html>

<head>
   <title>Home&Styles</title>
   <meta charset="utf-8" />
   <meta name="viewport" content="width-device-width, initial-scale=1">

   <!-- LOCAL STYLES -->
   <link rel="stylesheet" type="text/css" href="CSS/designs.css" media="all">
   <link rel="stylesheet" type="text/css" href="CSS/footer.css" media="all">
   <link rel="stylesheet" type="text/css" href="CSS/navbar.css" media="all">
   <link rel="stylesheet" type="text/css" href="CSS/slideshow.css" media="all">

   <!-- HOSTED STYLES -->
   <link href="https://fonts.googleapis.com/css2?family=Montserrat&display=swap" rel="stylesheet">

</head>

<body>
   <div class="grid">

      <!-- NAVBAR -->
   <div class="navbar">
      <div>
         <header class="header">
            <!-- LOGO-->
            Home&Styles
            <a id="cart_button" href="cart.html"><img src="images/cart.png" alt="Cart"
                  style="width:60px;height:60px;"></a>
         </header>
      </div>

      <div class="nav">
         <nav>
            <ul>
               <li><a class="drop_nav_link" href="index.php">Home</a></li>
               <li>
                  <div class="dropdown">
                     <button class="dropbtn">Products</button>
                     <div class="dropdown-content">
                        <a class="drop_nav_link" href="products_flooring.html">Flooring</a>
                        <a class="drop_nav_link" href="products_lighting.html">Lighting</a>
                        <a class="drop_nav_link" href="products_painting.html">Painting</a>
                        <a class="drop_nav_link" href="products_tooling.html">Tooling</a>
                     </div>
                  </div>
               </li>
               <li><a class="drop_nav_link" href="about.html">About</a></li>
               <li><a class="drop_nav_link" href="contact.php">Contact Us</a></li>
            </ul>
         </nav>
      </div>
   </div>
      <!-- END - NAV BAR -->

      <!-- CONTENT SECTION -->
      <div class="grid_div">
         <div class="lateral"></div>
         <div class="post">

            <!-- SLIDESHOW -->
            <?php include 'assets/slideshow.php';?>
            <!-- END - SLIDESHOW -->

         </div>
         <div class="lateral"></div>
      </div>
      <!-- END - CONTENT SECTION -->
   </div>

   <!-- FOOTER -->
   <?php include 'assets/footer.php';?>
   <!-- END - FOOTER -->

   <script src="JS/slideshow.js"></script>
</body>

</html>