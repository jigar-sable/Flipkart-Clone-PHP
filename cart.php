<?php
// ob_start();
require 'globals.php';

include 'header.php';

if(!isset($_SESSION['login'])){
    // header('location:index.php');
    echo "<script>location.href='".$URL."/login.php';</script>";
}

include 'partials/_cart.php';

include 'partials/_footer.php';
?>