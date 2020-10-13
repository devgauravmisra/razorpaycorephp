<!DOCTYPE html>
<html>
<head>
	<title>Payment Response</title>
</head>
<body style="backdrop-filter: blur(5px);text-align:center">

<h3 style="color:green;text-align:center">Payment Response</h3>
<?php

$responseData = $_REQUEST;
if(!empty($responseData)){

	echo "Your Payment is successfull";
	echo "<br>";
}   echo "Payment id is ".$responseData['razorpay_payment_id'];


?>

</body>
</html>
