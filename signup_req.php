<?php
session_start();
$email = $_SESSION['EMAIL'];

$fname = $_POST['fname'];
$lname = $_POST['lname'];
$gender = $_POST['gender'];
$mobile = $_POST['mobile'];
$password = $_POST['password'];
$cpassword = $_POST['cpassword'];
$address = $_POST['address'];

$con = mysqli_connect('localhost','root','','flipkart_clone');

if($password != $cpassword) {
    ?>
    <script>
        $(function(){
            $('.cpasswordError').html("Password Doesn't Match");
        })
    </script>

    <?php
} else {
    $result = mysqli_query($con, "UPDATE `users` SET `first_name`='$fname', `last_name`='$lname', `mobile`='$mobile', `password`='$password', `gender`='$gender', `address`='$address' where `email` = '$email'");
    echo mysqli_error($con);

    if($result){
        header('location:index.php');
        echo mysqli_error($con);
        $_SESSION['login'] = $email;
    } else {
        
    }
}
   

?>