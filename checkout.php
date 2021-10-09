<?php
ob_start();

include 'header.php';
include 'partials/_categories_nav.php';

// $userId = getUserId($user);
// 				echo $userId;
// if(!isset($_SESSION['login'])){
//     // header('location:index.php');
//     echo "<script>location.href='".$URL."/login.php';</script>";
// }
error_reporting(0);
// mysqli_report(5);

?>

	<?php  
		 $secretkey = ""; /* enter secret key here */
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

			if($txStatus == "SUCCESS") { 
				// $userId = getUserId($user);
				
                // $product_ids = $Cart->getCartIds($Cart->getData($userId,'cart'));
                // $Cart->placeOrder($userId, $product_ids);
				placeOrders($Cart, $user);
			} else { 
				header('refresh:3; url=cart.php');
			?>

			    <!-- main sections starts -->
				<main class="w-full mt-12 sm:mt-0">

                <!-- row -->
                <div class="flex flex-col items-center justify-center sm:w-4/6 sm:mt-4 m-auto mb-7 bg-white shadow rounded p-6 pb-12">
                	<img draggable="false" class="w-1/2 h-60 object-contain" src="assets/images/transaction-error.gif" alt="Transaction Error">
                	<h1 class="text-2xl font-semibold">Transaction Failed</h1>
                	<p class="mt-4 text-lg text-gray-800">Redirecting to cart in 0<span id="timer">3</span> sec</p>
                </div>
                <!-- row -->
                
                </main>
                <!-- main sections starts -->
	
	 <?php 
		}  
	  	} else {
			// header('refresh:3; url=cart.php');
	 ?>

	
	<?php	
	 	}
	include 'partials/_footer.php';
	?>



