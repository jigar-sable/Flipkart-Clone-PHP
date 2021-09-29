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

    public function addToCart($userid, $productid) {
        if(isset($userid) && isset($productid)){
            $params = array (
                "user_id" => $userid,
                "product_id" => $productid
            );

            // pass params to insertIntoCart function
            $result = $this->insertIntoCart($params);
            if($result){
                // header("Location:".$_SERVER['PHP_SELF']);
            }
            // echo $this->db->con->error;
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