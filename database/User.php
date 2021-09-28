<?php

class User {
    public $db;

    public function __construct(DBController $db) {
        if(!isset($db->con)) return null;
        $this->db = $db;
    }

    public function getUserData($email) {
        $result = $this->db->con->query("SELECT * FROM `users` where `email`='$email'");

        $userArray = array();

        while($row = mysqli_fetch_assoc($result)){
            $userArray[] = $row;
        }
        // echo var_dump($userArray);
        return $userArray;
    }
}

?>