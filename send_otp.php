<?php 
$email = 'jigarsable21@gmail.com';

$con = mysqli_connect('localhost','root','','flipkart_clone');

$query = "INSERT INTO `users` (`email`) VALUES ('$email')";

$result = mysqli_query($con,$query);
$otp = rand(111111,999999);

mysqli_query($con, "UPDATE `users` set `otp`='$otp' where `email` = '$email'");

$htmldata = '<h3>Your OTP for Flipkart Clone is : '.$otp.'</h3>';

smtp_mailer($email,'Flipart Clone PHP Signup',$htmldata);
echo "yes";

// echo $email;

function smtp_mailer($to,$subject,$msg){
	require_once("phpmailer/PHPMailerAutoload.php");
	$mail = new PHPMailer(); 
	$mail->IsSMTP();
	$mail->SMTPDebug = 1;
	$mail->SMTPAuth = true;
	$mail->SMTPSecure = 'tls';
	$mail->Host = "smtp.gmail.com";
	$mail->Port = 587;
	$mail->IsHTML(true);
	$mail->CharSet = 'UTF-8';
	$mail->Username = "jigartesters@gmail.com";
	$mail->Password = "Qwerty!2024";
	$mail->SetFrom("jigartesters@gmail.com");
	$mail->Subject = $subject;
	$mail->Body = $msg;
	$mail->AddAddress($to);
	if(!$mail->Send()){
		return 0;
        echo $mail->ErrorInfo;
	}else{
		return 1;
	}
}

?>