<?php
session_start();


if(isset($_SESSION['login']) || isset($_SESSION['signup'])){
   header('location:index.php');
}

include 'partials/_header.php';
include 'partials/_categories_nav.php';

include 'partials/_login.php';

include 'partials/_footer.php';
?>