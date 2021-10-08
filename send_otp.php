<?php 
session_start();
require('database/DBController.php');

$db = new DBController();

$email = mysqli_real_escape_string($db->con, $_POST['email']);

$query = "INSERT INTO `users` (`email`) VALUES ('$email')";

$result = mysqli_query($db->con,$query);
$otp = rand(111111,999999);
mysqli_query($db->con, "UPDATE `users` set `otp`='$otp' where `email` = '$email'");

$htmldata = 'Hi, <br> You are just a step away from accessing your Flipkart Clone account <br><br> Your OTP for Flipkart Clone is : <h3>'.$otp.'</h3>';

smtp_mailer($email,'Your OTP for Email Verification',$htmldata);
echo "mailed";

$_SESSION['EMAIL'] = $email;
// echo $email;

function smtp_mailer($to,$subject,$msg){
	require_once("phpmailer/PHPMailerAutoload.php");
	$mail = new PHPMailer(); 
	$mail->IsSMTP();
	// $mail->SMTPDebug = 1;
	$mail->SMTPAuth = true;
	$mail->SMTPSecure = 'tls';
	$mail->Host = "smtp.gmail.com";
	$mail->Port = 587;
	$mail->IsHTML(true);
	$mail->CharSet = 'UTF-8';
	$mail->Username = "jhondoe@gmail.com";
	$mail->Password = "jhonDoe#11";
	$mail->SetFrom("jhondoe@gmail.com","Fipkart Clone");
	$mail->Subject = $subject;
	$mail->Body = $msg;
	$mail->AddAddress($to);
	if(!$mail->Send()){
		return 0;
        // echo $mail->ErrorInfo;
        // echo "yes";
	}else{
		return 1;
	}
}

?>