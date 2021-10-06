<?php
require('database/DBController.php');
require('database/Product.php');
require('database/User.php');
require('database/Cart.php');

$db = new DBController();

$product = new Product($db);
$Cart = new Cart($db);

$product_array = $product->getData();
$top_selection_array = $product->getData('top_selection');

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

function calcDiscount($product_price, $cutted_price){
    $discount = (($cutted_price - $product_price) / $cutted_price) * 100;
    echo intval($discount);
}

function highlightSplit($str) {
    $result_array = explode(",",$str);
    return $result_array;
}

function getUserId($user) {
    $userEmail = $_SESSION['login'];
    foreach($user->getUserData($userEmail) as $userIds) { 
        return $userIds['id']; 
    }
}

function placeOrders($Cart, $user) { 
    $userId = getUserId($user);
    $product_ids = $Cart->getCartIds($Cart->getData($userId,'cart'));
    $Cart->placeOrder($userId, $product_ids);
}
                           
?>