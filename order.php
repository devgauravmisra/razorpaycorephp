<h2 align="center;">Razorpay with CorePHP Implementation</h2>
<?php
$data = array( "amount"=> 100, "currency"=> "INR", "receipt"=> "testo", "payment_capture"=> 1 ); // data u want to post
$data_string = json_encode($data);
$api_key = "rzp_test_8YdcUWhoKi5NFJ";
$password = "MWWe1jfEPd8Zl7gOVxTRIa0h";
$ch = curl_init(); curl_setopt($ch, CURLOPT_URL, "https://api.razorpay.com/v1/orders");
curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 20); curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");
curl_setopt($ch, CURLOPT_POST, true);
curl_setopt($ch, CURLOPT_POSTFIELDS, $data_string);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_USERPWD, $api_key.':'.$password); curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false); curl_setopt($ch, CURLOPT_HTTPAUTH, CURLAUTH_BASIC); curl_setopt($ch, CURLOPT_HTTPHEADER, array(
'Accept: application/json', 'Content-Type: application/json')
);
$result = curl_exec($ch); $returnCode = (int)curl_getinfo($ch, CURLINFO_HTTP_CODE); curl_close($ch);
$resp = json_decode($result, true);
        $data = $resp['id'];
        //echo $data;
        ?>
