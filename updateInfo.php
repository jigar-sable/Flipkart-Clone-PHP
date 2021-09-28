<?php
require('database/DBController.php');

$db = new DBController();

$fname = $_POST['fname'];
$lname = $_POST['lname'];
$email = $_POST['useremail'];
$gender = $_POST['gender'];

$result = mysqli_query($db->con,"UPDATE `users` SET `first_name` = '$fname', `last_name` = '$lname', `gender` = '$gender' WHERE `users`.`email` = '$email'");

if($result){
    echo "done";
}

?>