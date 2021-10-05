<?php

class User {
    public $db;

    public function __construct(DBController $db) {
        if(!isset($db->con)) return null;
        $this->db = $db;
    }

    public function getUserData($email) {
        if($email != null) {
            $result = $this->db->con->query("SELECT * FROM `users` where `email`= '$email'");
    
            $userArray = array();
    
            while($row = mysqli_fetch_array($result, MYSQLI_ASSOC)){
                $userArray[] = $row;
            }
            // echo var_dump($userArray);
            return $userArray;
        }
    }

    public function loginUser($email, $password){
        if($email != null && $password != null) {
            $result = $this->db->con->query("SELECT * from `users` where `email` = '$email'");
            $count = mysqli_num_rows($result);
            if($count>0){
                while($row = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
                    if(password_verify($password, $row['password'])) {
                        session_start();
                        $_SESSION['login'] = $email;
                        header('location:index.php');
                    } else {
                        return false;
                    }
                }
            } else {
                return false;
            }
        }
    }

    public function updateInfo($fname, $lname, $email, $gender) {
        if(isset($fname) && isset($lname) && isset($email) && isset($gender)){
            $result = $this->db->con->query("UPDATE `users` SET `first_name` = '$fname', `last_name` = '$lname', `gender` = '$gender' WHERE `users`.`email` = '$email'");

            if($result) {
                header("Location:".$_SERVER['PHP_SELF']);
            }
        }
    }

    public function updateMobile($mobile, $email) {
        if(isset($mobile) && isset($email)){
            $result = $this->db->con->query("UPDATE `users` SET `mobile` = '$mobile' WHERE `users`.`email` = '$email'");

            if($result) {
                header("Location:".$_SERVER['PHP_SELF']);
            }
        }
    }
}

?>