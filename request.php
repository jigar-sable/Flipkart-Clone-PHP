<?php
ob_start();
include 'header.php';
include 'partials/_categories_nav.php';

if (!isset($_POST['orderId'])) {
    header('location:index.php');
    exit(); // Add an exit to stop script execution after the header redirect.
}

// Define your secret key securely using environment variables.
$secretKey = getenv('YOUR_SECRET_KEY'); // Replace with the actual name of your secret key environment variable.

// Validate and sanitize user input (e.g., use filter_input() and validation functions).

$mode = "TEST"; // Change to "TEST" for the test server, "PROD" for production

$postData = [
    "appId" => $appId,
    "orderId" => $orderId,
    "orderAmount" => $orderAmount,
    "orderCurrency" => $orderCurrency,
    "orderNote" => $orderNote,
    "customerName" => $customerName,
    "customerPhone" => $customerPhone,
    "customerEmail" => $customerEmail,
    "returnUrl" => $returnUrl,
    "notifyUrl" => $notifyUrl,
];

ksort($postData);
$signatureData = "";
foreach ($postData as $key => $value) {
    $signatureData .= $key . $value;
}
$signature = hash_hmac('sha256', $signatureData, $secretKey, true);
$signature = base64_encode($signature);

if ($mode == "PROD") {
    $url = "https://www.cashfree.com/checkout/post/submit";
} else {
    $url = "https://test.cashfree.com/billpay/checkout/post/submit";
}
?>

<form action="<?php echo $url; ?>" id="payForm" name="frm1" method="post">
    <p>Please wait.......</p>
    <?php
    // Output hidden input fields
    foreach ($postData as $key => $value) {
        echo '<input type="hidden" name="' . htmlspecialchars($key) . '" value="' . htmlspecialchars($value) . '"/>';
    }
    ?>
    <input type="hidden" name="signature" value='<?php echo $signature; ?>' />
</form>

<script type="text/javascript">
    $(document).ready(function () {
        $('#payForm').submit();
    });
</script>

<?php
include 'partials/_footer.php';
?>

