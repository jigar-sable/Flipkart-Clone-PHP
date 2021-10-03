<?php
require('../database/DBController.php');
require('../database/Product.php');

$db = new DBController();
$product = new Product($db);

if(isset($_POST['product_id'])){
    $result = $product->getProducts($_POST['product_id']);
    echo json_encode($result);
}

?>