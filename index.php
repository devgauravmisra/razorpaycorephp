<!DOCTYPE html>
<html>
<head>
	<title>Core PHP Integration</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta
</head>
<body>
<form action="charge.php" method="POST">
<script
		    src="https://checkout.razorpay.com/v1/checkout.js"
		    data-key="rzp_test_OYI3C2xIBTHKkY"   
		    data-amount="50000" 
		    data-currency="INR"
		    data-buttontext="Pay with Razorpay"
		    data-name="Gaurav Shoping Center"
		    data-description="Test transaction"
		    data-image="website log url"
		    data-prefill.name="Gaurav"
		    data-prefill.email="gauravphpdev@gmail.com"
		    data-prefill.contact="9044789347"
		    data-theme.color="#F37254"
></script>
<input type="hidden" custom="Hidden Element" name="hidden">
</form>
</body>
</html>