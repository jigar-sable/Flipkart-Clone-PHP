<?php

include 'header.php';

if(isset($_SESSION['login'])){
    // header('location:index.php');
    echo "<script>location.href='".$URL."/index.php';</script>";
}

include 'partials/_categories_nav.php';

include 'partials/_signup.php';

include 'partials/_footer.php';
?>