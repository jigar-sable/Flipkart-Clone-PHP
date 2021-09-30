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
                // header("Location:".$_SERVER['PHP_SELF']);
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
                // header("Location:".$_SERVER['PHP_SELF']);
                echo "<script>location.href='cart.php';</script>";
            }
        }
    }


    public function deleteCartItem($user_id = null, $product_id = null, $table = 'cart') {
        if($product_id != null){
            $result = $this->db->con->query("DELETE FROM {$table} WHERE `user_id` = {$user_id} AND `product_id` = {$product_id}");
            if($result){
                // header("Location:".$_SERVER['PHP_SELF']);
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
            return number_format($sum);
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


}

?>