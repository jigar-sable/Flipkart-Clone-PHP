<?php
require('database/DBController.php');
require('database/Product.php');
require('database/User.php');

$db = new DBController();

$product = new Product($db);
// $product_shuffle = $product->getData();

$user = new User($db);

function isMale($user) {
    foreach($user->getUserData($_SESSION['login']) as $users) {
        if($users['gender'] == "male"){
            return true;
        } else {
            return false;
        }
    } 
}
                           
?>