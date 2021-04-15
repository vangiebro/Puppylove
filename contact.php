<!DOCTYPE html>
<html>

<head>
   <title>Contact Us</title>
   <meta charset="utf-8" />
   <meta name="viewport" content="width-device-width, initial-scale=1">

   <!-- LOCAL STYLES -->
   <link rel="stylesheet" type="text/css" href="CSS/designs.css" media="all">
   <link rel="stylesheet" type="text/css" href="CSS/footer.css" media="all">
   <link rel="stylesheet" type="text/css" href="CSS/navbar.css" media="all">
   <link rel="stylesheet" type="text/css" href="CSS/contact.css" media="all">

   <!-- HOSTED STYLES -->
   <link href="https://fonts.googleapis.com/css2?family=Montserrat&display=swap" rel="stylesheet">

</head>

<body>


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

   <!-- CONTACT SECTION -->
   <div class="grid_div">
      <div class="lateral"></div>
      <div class="post_contact">
         <h2 class="page_title">Contact Us</h2>

         <!-- CONTACT FORM -->
         <?php
            // variable declaration
            $fnameError = $lnameError = $emailError = "";
            $fname = $lname = $email = $comment = "";

            if ($_SERVER["REQUEST_METHOD"] == "POST") {
               if (empty($_POST["firstname"])) {
                  $fnameError = "Name is required";
               } else {
                  $fname = contact_form_input($_POST["firstname"]);
                  if (!preg_match("/^[a-zA-Z-' ]*$/",$fname)) {
                     $fnameError = "Invalid entry.";
                  }
               }

               if (empty($_POST["lastname"])) {
                  $lnameError = "Name is required";
               } else {
                  $lname = contact_form_input($_POST["lastname"]);
                  if (!preg_match("/^[a-zA-Z-' ]*$/",$lname)) {
                     $lnameError = "Invalid entry.";
                  }
               }

            }

            function contact_form_input($data) {
               $data = trim($data);
               $data = stripslashes($data);
               $data = htmlspecialchars($data);
               return $data;
            }
         ?>
         <?php $_POST = array(); ?>
         <form class="contact_form" method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
            <input class="input_form" type="text" id="fname" name="firstname" placeholder="First Name"
               value="<?php echo $name;?>"><br>
            <span class="error"><?php echo $fnameError;?></span><br><br>
            <input class="input_form" type="text" id="lname" name="lastname" placeholder="Last Name"
               value="<?php echo $name;?>"><br>
            <span class="error"><?php echo $lnameError;?></span><br><br>
            <input class="input_form" type="email" id="email" name="email" placeholder="Email Address"
               value="<?php echo $email;?>"><br>
            <span class="error"><?php echo $emailError;?></span><br><br>
            <textarea class="input_form" type="text" id="textarea_form" name="comment"
               placeholder="Tell Us how can we help" rows="5" cols="40"><?php echo $comment;?></textarea><br>
            <input class="button_form" type="submit" name="submit" value="Submit">
         </form>
         <!-- END - CONTACT FORM -->

      </div>
      <div class="lateral"></div>
   </div>
   <!-- END - CONTACT SECTION -->

   <!-- FOOTER -->
   <?php include 'assets/footer.php';?>
   <!-- END - FOOTER -->

</body>

</html>