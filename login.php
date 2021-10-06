<?php
@ob_start();
// session_start();

// if(!session_id()) session_start();

// print_r($_SESSION['login']);

include 'header.php';

if(isset($_SESSION['login'])){
   header('location:index.php');
   // echo "<script>location.href='".$URL."/index.php';</script>";
}

include 'partials/_categories_nav.php';

include 'partials/_login.php';

include 'partials/_footer.php';
?>