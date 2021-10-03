<?php
require('database/DBController.php');

$db = new DBController();

$fname = mysqli_real_escape_string($db->con, $_POST['fname']);
$lname = mysqli_real_escape_string($db->con, $_POST['lname']);
$email = mysqli_real_escape_string($db->con, $_POST['useremail']);
$gender = mysqli_real_escape_string($db->con, $_POST['gender']);

$result = mysqli_query($db->con,"UPDATE `users` SET `first_name` = '$fname', `last_name` = '$lname', `gender` = '$gender' WHERE `users`.`email` = '$email'");

if($result){
    echo "done";
}

?>