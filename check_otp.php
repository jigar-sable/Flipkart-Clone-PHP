<?php 
session_start();

$otp = $_POST['otp'];

$email = $_SESSION['EMAIL'];

$con = mysqli_connect('localhost','root','','flipkart_clone');

$query = "SELECT * from `users` where `email` = '$email' and `otp` = '$otp'";
$result = mysqli_query($con,$query);
// mysqli_error($con);
$count = mysqli_num_rows($result);
if($count>0){
    mysqli_query($con, "UPDATE `users` set `otp` = '' WHERE `email` = '$email'");
    echo "yes";
} else {
	echo "not_exist";
}

?>