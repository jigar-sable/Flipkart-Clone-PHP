<?php
require('database/DBController.php');

$db = new DBController();

$mobile = mysqli_real_escape_string($db->con, $_POST['mobile']);
$email = mysqli_real_escape_string($db->con, $_POST['useremail']);

$result = mysqli_query($db->con,"UPDATE `users` SET `mobile` = '$mobile' WHERE `users`.`email` = '$email'");

if($result){
    echo "done";
}

?>