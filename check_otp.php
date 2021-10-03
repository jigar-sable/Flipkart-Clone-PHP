<?php 
session_start();
require('database/DBController.php');

$db = new DBController();

$otp = mysqli_real_escape_string($db->con, $_POST['otp']);

$email = $_SESSION['EMAIL'];

$query = "SELECT * from `users` where `email` = '$email' and `otp` = '$otp'";
$result = mysqli_query($db->con,$query);
// mysqli_error($db->con);
$count = mysqli_num_rows($result);
if($count>0){
    mysqli_query($db->con, "UPDATE `users` set `otp` = '' WHERE `email` = '$email'");
    echo "verified";
} else {
	echo "error";
}

?>