

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<h1>This is My Home page</h1>

<?php
echo "Payment Status is ".$payment_status = $_REQUEST["payment_status"]."<br>";
echo "Payment Channel is ".$payment_channel = $_REQUEST["payment_channel"]."<br>";
echo $channel_response_desc = $_REQUEST["channel_response_desc"];
echo "Channel Response code is ".$channel_response_code = $_REQUEST["channel_response_code"]."<br>";
if($payment_status==000 && $payment_channel==001 && $channel_response_code==00){
    echo "Customer Payment is Successful So You Can do as you wish";
}else if($payment_status==003){
    echo "Cancle By User";
}else if($payment_status==001){
    echo "Payment is pending";
}else if($payment_status==999){
    echo "Payment is Fail";
}
//  else if($payment_status==999 && $payment_channel==001 && $channel_response_code==9000){
//   echo "Customer Payment is Fail So You Can do as you wish";
//}
// else if($payment_status==003 && $payment_channel=="" && $channel_response_code==0036){
//       echo "Cancle By User";
// }
?>
<br>
<a href="http://localhost:8000/get_select_package">Hello</a>
</body>
</html>
