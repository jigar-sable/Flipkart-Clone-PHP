<?php
require('database/DBController.php');

$db = new DBController();

$mobile = $_POST['mobile'];
$email = $_POST['useremail'];

$result = mysqli_query($db->con,"UPDATE `users` SET `mobile` = '$mobile' WHERE `users`.`email` = '$email'");

if($result){
    echo "done";
}

?>