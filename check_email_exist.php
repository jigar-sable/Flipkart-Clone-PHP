<?php 
require('database/DBController.php');

$db = new DBController();

$email = mysqli_real_escape_string($db->con, $_POST['email']);

$query = "SELECT * from `users` where `email` = '$email'";
$result = mysqli_query($db->con, $query);
// mysqli_error($db->con);
$count = mysqli_num_rows($result);
if($count>0){
    echo "exist";
} else {
	echo "not_exist";
}

?>