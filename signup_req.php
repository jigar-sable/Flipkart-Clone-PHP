<?php
session_start();
require('database/DBController.php');

$db = new DBController();

$email = $_SESSION['EMAIL'];

$fname = mysqli_real_escape_string($db->con, $_POST['fname']);
$lname = mysqli_real_escape_string($db->con, $_POST['lname']);
$gender = mysqli_real_escape_string($db->con, $_POST['gender']);
$mobile = mysqli_real_escape_string($db->con, $_POST['mobile']);
$password = mysqli_real_escape_string($db->con, $_POST['password']);
$cpassword = $_POST['cpassword'];
$address = mysqli_real_escape_string($db->con, $_POST['address']);

if($password != $cpassword) {
    ?>
    <script>
        $(function(){
            $('.cpasswordError').html("Password Doesn't Match");
        })
    </script>

    <?php
} else {
    $pwHash = password_hash($password, PASSWORD_DEFAULT);
    $result = mysqli_query($db->con, "UPDATE `users` SET `first_name`='$fname', `last_name`='$lname', `mobile`='$mobile', `password`='$pwHash', `gender`='$gender', `address`='$address' where `email` = '$email'");
    echo mysqli_error($db->con);

    if($result){
        header('location:index.php');
        echo mysqli_error($db->con);
        $_SESSION['login'] = $email;
    } else {
        
    }
}
   

?>