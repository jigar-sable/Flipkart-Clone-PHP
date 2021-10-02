<?php
ob_start();
require 'globals.php';

include 'header.php';

?>

	<?php  
		 $secretkey = "b4ddf9ea26a6ee515214980135ebe8e9d95174ec";
		 $orderId = $_POST["orderId"];
		 $orderAmount = $_POST["orderAmount"];
		 $referenceId = $_POST["referenceId"];
		 $txStatus = $_POST["txStatus"];
		 $paymentMode = $_POST["paymentMode"];
		 $txMsg = $_POST["txMsg"];
		 $txTime = $_POST["txTime"];
		 $signature = $_POST["signature"];
		 $data = $orderId.$orderAmount.$referenceId.$txStatus.$paymentMode.$txMsg.$txTime;
		 $hash_hmac = hash_hmac('sha256', $data, $secretkey, true) ;
		 $computedSignature = base64_encode($hash_hmac);
		 if ($signature == $computedSignature) {

			if($txStatus == "SUCCESS"){
				$userId = getUserId($user);
				// echo $userId;
                $product_ids = $Cart->getCartIds($Cart->getData(getUserId($user),'cart'));
                $Cart->placeOrder($userId, $product_ids);
			} else {
				echo "Bhai Transaction Failed!";
				header('refresh:5;url=cart.php');
			}
	 ?>
	
	 <?php   
	  	} else {
	 
	 ?>
	
	
	<?php	
	 	}
	include 'partials/_footer.php';
	?>



