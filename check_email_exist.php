<?php 
$email = $_POST['email'];
$con = mysqli_connect('localhost','root','','flipkart_clone');

$query = "SELECT * from `users` where `email` = '$email'";
$result = mysqli_query($con,$query);
// mysqli_error($con);
$count = mysqli_num_rows($result);
if($count>0){
    echo "exist";
} else {
	echo "not_exist";
}

?>