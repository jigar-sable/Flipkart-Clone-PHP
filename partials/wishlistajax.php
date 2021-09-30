<?php
require('../database/DBController.php');
$db = new DBController();

if(isset($_POST['add_to_wishlist'])){

    $userid = $_POST['user_id'];
    $productid = $_POST['product_id'];

    $result = $db->con->query("INSERT INTO `wishlist` (`user_id`, `product_id`) VALUES ('$userid', '$productid')");
    if($result){
        echo "done";
    }
}

?>