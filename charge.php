<!DOCTYPE html>
<html>
   <head>
      <title>Payment Response</title>
   </head>
   <body style="backdrop-filter: blur(5px);text-align:center">
      <h3 style="color:green;text-align:center">Payment Response</h3>
      <?php
        error_reporting(E_ERROR | E_PARSE);
         // capture payment response
         $responseData = $_REQUEST;
            //Handling failed response
           // Checking for payment id
         if($responseData['razorpay_signature'] ==   null){
          $data = json_decode($responseData['error']['metadata']);
          echo "<table border='1' style = 'margin-left: 343px;'>
         <tr>
         <th>Code</th>
         <th>Descrition</th>
         <th>source</th>
         <th>Step</th>
         <th>reason</th>
         <th>Payment ID</th>
         <th>Order ID</th>
         </tr>";
           echo "<tr>";
           echo "<td>" . $responseData['error']['code'] . "</td>";
           echo "<td>" . $responseData['error']['description'] . "</td>";
           echo "<td>" . $responseData['error']['source'] . "</td>";
           echo "<td>" . $responseData['error']['reason'] . "</td>";
           echo "<td>" . $responseData['error']['step'] . "</td>";
           echo "<td>" . $data->payment_id . "</td>";
           echo "<td>" . $data->order_id . "</td>";
           echo "</tr>";
           echo "</table>";

           // If you want to redirect on failed page, then you can use failed page related url
         }else{
          // In case of payment success
          $razorpay_signature = $responseData['razorpay_signature'];
          $order_id  = $responseData['razorpay_order_id'];
          $razorpay_payment_id = $responseData['razorpay_payment_id'];
          // merchant secret key
          $secret = "djTVxJ9hxMpspmmE1D9xUeL5";
          // generating signature
          $generated_signature = hash_hmac("sha256",$order_id."|".$razorpay_payment_id, $secret);
                     if ($generated_signature == $razorpay_signature) {
                      echo "Your Payment is successful";
                         echo "<table border='1' style = 'margin-left: 343px;'>
                               <tr>
                               <th>Paymen ID</th>
                               <th>Order Id</th>
                               <th>Signature</th>
                               </tr>";
                                 echo "<tr>";
                                 echo "<td>" . $responseData['razorpay_payment_id']. "</td>";
                                 echo "<td>" . $responseData['razorpay_order_id'] . "</td>";
                                 echo "<td>" . $responseData['razorpay_signature']. "</td>";
                                 echo "</tr>";

                                 // If you want to redirect on success page, then you can use success page related url
                     }else{
                      echo "Signature varification failed";
                     }
         } ?>
   </body>
</html>
