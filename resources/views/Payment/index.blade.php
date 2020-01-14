<?php
//Merchant's account information
$merchant_id = "104840000000281";			//Get MerchantID when opening account with 2C2P
$secret_key = "87BE396BE913D4F83068DF95B041738B5B492272B5C21035219D99BB0AD15C69";	//Get SecretKey from 2C2P PGW Dashboard

//Transaction information
$payment_description  = '2 days 1 night hotel room';
$order_id  = time();
$currency = "840";
$amount  = '000000025000';

//Request information
$version = "8.5";
$payment_url = "https://demo2.2c2p.com/2C2PFrontEnd/RedirectV3/payment";
//$result_url_1 = "http://localhost/devPortal/V3_UI_PHP_JT01_devPortal/result.php";
$result_url_1 = "http://localhost/December25/Wings&Wheels/resources/views/Payment/response.php";
//$result_url_1 = "http://localhost:8000/get_se/lect_package";

//Construct signature string
$params = $version.$merchant_id.$payment_description.$order_id.$currency.$amount.$result_url_1;
$hash_value = hash_hmac('sha256',$params, $secret_key,false);	//Compute hash value

echo 'Payment information:';
echo '<html>
	<body>
	<form id="myform" method="post" action="'.$payment_url.'">
		<input type="hidden" name="version" value="'.$version.'"/>
		<input type="hidden" name="merchant_id" value="'.$merchant_id.'"/>
		<input type="hidden" name="currency" value="'.$currency.'"/>
		<input type="hidden" name="result_url_1" value="'.$result_url_1.'"/>
		<input type="hidden" name="hash_value" value="'.$hash_value.'"/>
    PRODUCT INFO : <input type="text" name="payment_description" value="'.$payment_description.'"  readonly/><br/>
		ORDER NO : <input type="text" name="order_id" value="'.$order_id.'"  readonly/><br/>
		AMOUNT: <input type="text" name="amount" value="'.$amount.'" readonly/><br/>
		<input type="submit" name="submit" value="Confirm" />
	</form>

	<script type="text/javascript">
		document.forms.myform.submit();
	</script>
	</body>
	</html>';
?>
