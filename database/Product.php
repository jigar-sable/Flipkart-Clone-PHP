<?php

class Product {
    public $db = null;

    public function __construct(DBController $db) {
        if(!isset($db->con)) return null;
        $this->db = $db;
    }

    public function getData($table = 'products'){
        $result = $this->db->con->query("SELECT * FROM {$table}");

        $resultArray = array();

        while($item = mysqli_fetch_array($result, MYSQLI_ASSOC)){
            $resultArray[] = $item;
        }

        return $resultArray;
    }

    public function getProducts($productid = null, $table = 'products') {
        if(isset($productid)){
            $result = $this->db->con->query("SELECT * FROM {$table} where product_id = {$productid}");

            $resultArray = array();

            while($item = mysqli_fetch_array($result, MYSQLI_ASSOC)){
                $resultArray[] = $item;
            }

            return $resultArray;
        }
    }

    public function searchProducts($search = null) {
        if($search != null) {
            $result = $this->db->con->query("SELECT * FROM `products` WHERE `product_title` LIKE '%$search%'");

            $resultArray = array();

            while($row = mysqli_fetch_array($result, MYSQLI_ASSOC)){
                $resultArray[] = $row;
            }

            return $resultArray;
        }
    }
}


?>