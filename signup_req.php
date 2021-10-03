<?php
session_start();
require('database/DBController.php');

$db = new DBController();

$email = $_SESSION['EMAIL'];

$fname = $_POST['fname'];
$lname = $_POST['lname'];
$gender = $_POST['gender'];
$mobile = $_POST['mobile'];
$password = $_POST['password'];
$cpassword = $_POST['cpassword'];
$address = $_POST['address'];

if($password != $cpassword) {
    ?>
    <script>
        $(function(){
            $('.cpasswordError').html("Password Doesn't Match");
        })
    </script>

    <?php
} else {
    $result = mysqli_query($db->con, "UPDATE `users` SET `first_name`='$fname', `last_name`='$lname', `mobile`='$mobile', `password`='$password', `gender`='$gender', `address`='$address' where `email` = '$email'");
    echo mysqli_error($db->con);

    if($result){
        header('location:index.php');
        echo mysqli_error($db->con);
        $_SESSION['login'] = $email;
    } else {
        
    }
}
   

?>