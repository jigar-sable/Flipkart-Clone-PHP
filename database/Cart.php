<?php

class Cart {
    public $db = null;

    public function __construct(DBController $db) {
        if(!isset($db->con)) return null;
        $this->db = $db;
    }

    public function insertIntoCart($params = null, $table = 'cart') {
        if($this->db->con != null){
            if($params != null) {
                $columns = implode(",", array_keys($params));
                $values = implode(",", array_values($params));
                // printf($values);
                $query = sprintf("INSERT INTO %s(%s) VALUES(%s)",$table, $columns, $values);

                $result = $this->db->con->query($query);
                return $result;
            }
        }
    }

    public function addToCart($userid, $productid, $table = 'cart') {
        if(isset($userid) && isset($productid)){
            $params = array (
                "user_id" => $userid,
                "product_id" => $productid
            );

            // pass params to insertIntoCart function
            $result = $this->insertIntoCart($params, $table);
            if($result){
                header("Location:".$_SERVER['REQUEST_URI']);
            }
            // echo $this->db->con->error;
        }
    }

    public function buyNow($userid, $productid, $table = 'cart') {
        if(isset($userid) && isset($productid)){
            $params = array (
                "user_id" => $userid,
                "product_id" => $productid
            );

            // pass params to insertIntoCart function
            $result = $this->insertIntoCart($params, $table);
            if($result){
                // header("Location:".$_SERVER['REQUEST_URI']);
                echo "<script>location.href='cart.php';</script>";
            }
        }
    }


    public function deleteCartItem($user_id = null, $product_id = null, $table = 'cart', $location = 'cart.php') {
        if($product_id != null){
            $result = $this->db->con->query("DELETE FROM {$table} WHERE `user_id` = {$user_id} AND `product_id` = {$product_id}");
            if($result){
                // header("Location:".$_SERVER['PHP_SELF']);
                echo "<script>location.href = $location; </script>";
            }
            echo $this->db->con->error;
        }
        return $result;
    }

    public function saveForLater($user_id = null, $product_id = null, $saveToTable = 'save_for_later', $fromTable = 'cart') {
        if($product_id != null){
            $query = "INSERT INTO {$saveToTable} SELECT * FROM {$fromTable} WHERE `user_id` = {$user_id} AND `product_id` = {$product_id};";
            $query .= "DELETE FROM {$fromTable} WHERE `user_id` = {$user_id} AND `product_id` = {$product_id};";

            $result = $this->db->con->multi_query($query);
            if($result){
                // header("Location:".$_SERVER['PHP_SELF']);
                echo "<script>location.href = 'cart.php'; </script>";
            }
        }
        return $result;
    }


    public function getSum($pricesArr) {
        if(isset($pricesArr)){
            $sum = 0;
            foreach($pricesArr as $item){
                $sum += floatval($item[0]);
            }
            return $sum;
        }
    }

    public function getCartIds($cartArray = null, $key = 'product_id') {
        if($cartArray != null){
            $cartIds = array_map(function($value) use($key) {
                return $value[$key];
            }, $cartArray);
            return $cartIds;
        }
    }



    // most important function
    public function getData($userid, $table = 'cart') {
        if(isset($userid)){
            $result = $this->db->con->query("SELECT * FROM {$table} where `user_id` = {$userid}");
            echo $this->db->con->error;
            $resultArray = array();

            while($row = mysqli_fetch_array($result, MYSQLI_ASSOC)){
                $resultArray[] = $row;
            }
            return $resultArray;
        }
    }


    // old function to order products

    // public function deleteCartItems($user_id = null, $product_ids) {
    //     if($product_ids != null){

    //         foreach($product_ids as $product_id){
    //             $query = "INSERT INTO `orders` (`user_id`,`product_id`) SELECT `user_id`, `product_id` FROM `cart` WHERE `user_id` = '$user_id' AND `product_id` = '$product_id';";
    //             $query .= "DELETE FROM `cart` WHERE `user_id` = {$user_id} AND `product_id` = {$product_id};";
    //             // echo $this->db->con->error;

    //             $result = $this->db->con->multi_query($query);
    //         }
    //         if($result){
    //             // header("Location:".$_SERVER['PHP_SELF']);
    //             echo "<script>location.href = 'orders.php'; </script>";
    //         }
    //         return $result;
    //         // echo $this->db->con->error;
    //     }
    // }


    public function placeOrder($user_id = null, $product_ids) {
        if($product_ids != null){

            foreach($product_ids as $product_id) {
                $query = "INSERT INTO `orders` (`user_id`,`product_id`,`product_img`,`product_img_alt`,`product_title`,`product_color`,`product_seller`,`product_price`) SELECT `cart`.`user_id`, `cart`.`product_id`, `products`.`product_img`,`products`.`product_img_alt`,`products`.`product_title`, `products`.`product_color`, `products`.`product_seller`, `products`.`product_price` FROM `cart`, `products` WHERE `cart`.`user_id` = '$user_id' AND `cart`.`product_id` = '$product_id' AND `products`.`product_id` = `cart`.`product_id`";
                // echo $query;
                $result = $this->db->con->query($query);
                // echo mysqli_error($con);
                // mysqli_report(5);
            }
    
            foreach($product_ids as $product_id) {
                $query = "DELETE FROM `cart` WHERE `user_id` = {$user_id} AND `product_id` = {$product_id}";
                // echo $query;
                $result = $this->db->con->query($query);
                // echo mysqli_error($con);
                // mysqli_report(5);
                
                if($result){
                    header("Location: orders.php");
                    // echo "<script>location.href = 'orders.php'; </script>";
                }
            }
      
            return $result;
        }
    }


}

?>