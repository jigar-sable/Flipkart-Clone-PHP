<?php

class User {
    public $db;

    public function __construct(DBController $db) {
        if(!isset($db->con)) return null;
        $this->db = $db;
    }

    public function getUserData() {
        $this->db->con->query("SELECT * FROM ");
    }
}


?>