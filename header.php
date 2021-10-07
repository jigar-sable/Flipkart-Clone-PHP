<?php
// ob_start();
session_start();
require('globals.php');

require('functions.php'); 
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Flipkart Clone Online Shopping Site for Mobiles, Electronics & More. Best Offers!</title>
    <meta name="og_title" property="og:title" content="Flipkart Clone Online Shopping Site for Mobiles, Electronics &amp; More. Best Offers!">
    <meta name="Keywords" content="Flipkart Clone,Flipkart PHP,Flipkart Jigar Sable,Jigar,Flipkart Clone PHP,ecommerce PHP,PHP Projects,Online Shopping in India,online Shopping store,Online Shopping Site,Buy Online,Shop Online,Online Shopping,Flipkart">
    <meta name="Description" content="Flipkart Clone PHP Online store for Mobiles, Fashion, Electronics, Home Appliances Find the largest selection from all brands at the lowest prices in India. Payment options - Credit card, Debit card & more.">
    <!-- <link rel="canonical" href="https://"> -->
    <meta name="robots" content="index, follow">
    <meta name="language" content="English">
    <meta name="author" content="Jigar Sable">

    <link rel="shortcut icon" href="assets/images/favicon.ico" type="image/x-icon">

    <!-- font awesome cdn -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css" integrity="sha512-YWzhKL2whUzgiheMoBFwW8CKV4qpHQAEuvilg9FAn5VJUDwKZZxkJNuGM4XkWuk94WCrrwslk8yWNGmY1EduTA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
   
    <!-- material icons cdn -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

    <!-- owl carousel cdn -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" integrity="sha512-tS3S5qG0BlhnQROyJXvNjeEM4UpMXHrQfTGmbQ1gKmelCxlSEBUaxhRBj/EFTzpbP4RVSrpEikbmdJobCvhE3g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css" integrity="sha512-sMXtMNL1zRzolHYKEujM2AqCLUR9F2C4/05cdbxjjLSRvMQIciEPCQZo++nk7go3BtSuK9kfa/s+a4f4i5pLkw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    
    <!-- custom build css -->
    <link rel="stylesheet" href="assets/css/style.min.css">
    
    <!-- jquery cdn -->
    <script src="assets/js/jquery-3.6.0.min.js"></script>

</head>
<body class="bg-gray-100" oncontextmenu="return true;">
    

<!-- header starts -->
<header class="bg-primary-blue fixed top-0 py-2.5 w-full z-10">

    <!-- navbar container -->
    <div class="w-full sm:w-9/12 px-4 m-auto flex justify-between items-center relative">

        <!-- logo & search container -->
        <div class="flex items-center flex-1">
        <a class="h-7 mr-4" href="<?php echo $URL; ?>/index.php">
            <img draggable="false" loading="lazy" class="h-full w-full object-contain" src="assets/images/logo.webp" alt="Logo">
        </a>

        <!-- search container -->
        <form action="search.php" method="GET" class="w-9/12 px-4 py-1.5 hidden sm:flex justify-between items-center shadow-md bg-white rounded-sm">
            <input name="q" class="text-sm flex-1 outline-none border-none placeholder-gray-500" type="text" placeholder="Search for products, brands and more" required>
            <button type="submit" class="material-icons text-primary-blue">search</button>
        </form>
        <!-- search container -->
        </div>
        <!-- logo & search container -->

        <!-- right navs -->
        <div class="flex items-center justify-between gap-7 relative">

            <span class="<?php if(isset($_SESSION['login'])) { echo "flex"; } else { echo "hidden"; } ?> userDropDown items-center text-white font-medium gap-1 cursor-pointer">
               <!-- set user's first name -->
               <?php
               foreach($user->getUserData($_SESSION['login']) as $users) {
                    echo $users['first_name'];
               }
               ?>
               <!-- set user's first name -->
               <span class="material-icons text-sm transition-transform duration-100">expand_more</span>
            </span>

            <a href="login.php" class="<?php if(isset($_SESSION['login'])) { echo "hidden"; } ?> userDropDown px-9 py-0.5 text-primary-blue bg-white border font-medium rounded-sm cursor-pointer">Login</a>

           <!-- dropdown navbar hover tabs -->
           <div class="userDropDownMenu hidden absolute w-60 <?php if(!isset($_SESSION['login'])) { echo "-left-16 top-10"; } else { echo "-left-24 top-9"; }?> ml-2 bg-white shadow-2xl rounded flex-col text-sm">
               <?php 
                  if(isset($_SESSION['login'])) {
               ?>
               <a class="pl-3 py-3.5 border-b flex gap-3 items-center hover:bg-gray-50 rounded-t" href="profile.php">
                    <span class="material-icons md-18 text-primary-blue">account_circle</span>
                    My Profile
               </a>
               <?php
                   } else { 
               ?>
               <div class="pl-3 py-4 border-b flex justify-between pr-3 items-center font-medium text-sm hover:bg-gray-50 rounded-t">
                    <span>New Customer?</span>
                    <a href="signup.php" class="text-primary-blue font-medium hover:underline">Signup</a>
               </div>
               <?php
                   }
               ?>
               <a class="pl-3 py-3.5 border-b flex gap-3 items-center hover:bg-gray-50" href="#">
                    <span class="material-icons md-18 text-primary-blue">offline_bolt</span>
                    Supercoin Zone
               </a>
               <a class="pl-3 py-3.5 border-b flex gap-3 items-center hover:bg-gray-50" href="https://www.flipkart.com/plus/all-offers">
                    <span class="material-icons md-18 text-primary-blue">add_circle</span>
                    Flipkart Plus Zone
               </a>
               <a class="pl-3 py-3.5 border-b flex gap-3 items-center hover:bg-gray-50" href="orders.php">
                    <span class="material-icons md-18 text-primary-blue">shopping_bag</span>
                    Orders
               </a>
               <a class="pl-3 py-3.5 border-b flex gap-3 items-center hover:bg-gray-50" href="wishlist.php">
                    <span class="material-icons md-18 text-primary-blue">favorite</span>
                    Wishlist
                    <span class="ml-auto mr-3 bg-gray-100 p-0.5 px-2 text-gray-600 rounded">
                    <?php if(isset($_SESSION['login'])){ if(count($Cart->getData(getUserId($user),'wishlist')) > 0) { echo count($Cart->getData(getUserId($user),'wishlist')); } else { echo 0; } } ?>
                    </span>
               </a>
               <a class="pl-3 py-3.5 border-b flex gap-3 items-center hover:bg-gray-50" href="#">
                    <span class="material-icons md-18 text-primary-blue">chat</span>
                    My Chats
               </a>
               <a class="pl-3 py-3.5 border-b flex gap-3 items-center hover:bg-gray-50" href="https://www.flipkart.com/account/rewards">
                    <span class="material-icons md-18 text-primary-blue">redeem</span>
                    Coupons
               </a>
               <a class="pl-3 py-3.5 border-b flex gap-3 items-center hover:bg-gray-50" href="#">
                    <span class="material-icons md-18 text-primary-blue">account_balance_wallet</span>
                    Gift Cards
               </a>
               <a class="pl-3 py-3.5 border-b flex gap-3 items-center hover:bg-gray-50" href="#">
                    <span class="material-icons md-18 text-primary-blue">notifications</span>
                    Notifications
               </a>
               <a class="pl-3 py-3.5 flex gap-3 items-center hover:bg-gray-50 rounded-b" href="logout.php">
                    <span class="material-icons md-18 text-primary-blue">power_settings_new</span>
                    Logout
               </a>
               <div class="absolute right-1/2 -top-2.5">
                    <div class="arrow_down"></div>
               </div>
           </div>
           <!-- dropdown navbar hover tabs -->

            <span class="moreDropDown hidden sm:flex items-center text-white font-medium gap-1 cursor-pointer">More
                <span class="material-icons text-sm transition-transform duration-100">expand_more</span>
            </span>

            <!-- dropdown navbar hover tabs -->
            <div class="moreDropDownMenu hidden absolute w-60 <?php if(!isset($_SESSION['login'])) { echo "-right-12 top-9"; } else { echo "-right-2 top-9"; }?> top-9 bg-white shadow-2xl rounded flex-col text-sm">
            <a class="pl-3 py-3.5 border-b flex gap-3 items-center hover:bg-gray-50 rounded-t" href="https://www.flipkart.com/communication-preferences/push">
                 <span class="material-icons md-18 text-primary-blue">notifications</span>
                 Notification Preferences
            </a>
            <a class="pl-3 py-3.5 border-b flex gap-3 items-center hover:bg-gray-50" href="https://seller.flipkart.com/sell-online">
                 <span class="material-icons md-18 text-primary-blue">business_center</span>
                 Sell on Flipkart
            </a>
            <a class="pl-3 py-3.5 border-b flex gap-3 items-center hover:bg-gray-50" href="https://www.flipkart.com/helpcentre">
                 <span class="material-icons md-18 text-primary-blue">live_help</span>
                 24x7 Customer Care
            </a>
            <a class="pl-3 py-3.5 border-b flex gap-3 items-center hover:bg-gray-50" href="https://advertising.flipkart.com">
                 <span class="material-icons md-18 text-primary-blue">trending_up</span>
                 Advertise
            </a>
            <a class="pl-3 py-3.5 flex gap-3 items-center hover:bg-gray-50 rounded-b" href="https://www.flipkart.com/mobile-apps">
                 <span class="material-icons md-18 text-primary-blue">download</span>
                 Download App
            </a>
            <div class="absolute right-1/2 -top-2.5">
                 <div class="arrow_down"></div>
            </div>
            </div>
            <!-- dropdown navbar hover tabs -->

            <a href="cart.php" class="flex items-center text-white font-medium gap-2 relative">
                <span class="material-icons">shopping_cart</span>
                <!-- badge count -->
                <?php
                    if(isset($_SESSION['login'])){
                         if(count($Cart->getData(getUserId($user),'cart')) > 0 ){
                ?>
                <div class="w-5 h-5 p-2 bg-red-500 text-xs rounded-full absolute -top-2 left-3 flex justify-center items-center border">
                <?php
                     echo count($Cart->getData(getUserId($user),'cart'));
                }
                }
                ?>
                </div>
                <!-- badge count -->
                &nbsp;Cart
            </a>
        </div>
        <!-- right navs -->

    </div>
    <!-- navbar container -->
</header>
<!-- header ends -->