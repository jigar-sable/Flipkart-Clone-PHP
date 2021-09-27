<?php
// @ob_start();
session_start();

if(isset($_POST['email'])){
    $email = $_POST['email'];
    $password = $_POST['password'];

    $con = mysqli_connect('localhost','root','','flipkart_clone');
    $query = "SELECT * from `users` where `email` = '$email' and `password` = '$password'";
    
    $result = mysqli_query($con,$query);
    $count = mysqli_num_rows($result);
    if($count>0){
        $_SESSION['login'] = true;
        header('location:index.php');
    } else {
        echo "invalid id pw";
    }
}

?>