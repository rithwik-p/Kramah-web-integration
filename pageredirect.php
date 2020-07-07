<?php
header("Pragma: no-cache");
header("Cache-Control: no-cache");
header("Expires: 0");
require_once("./includes/configuration_paytm.php");
require_once("./includes/encdec_paytm.php");
$checkSum = "";
$List = array();
$ORDER_ID = $_POST["ORDER_ID"];
$CUST_ID = $_POST["CUST_ID"];
$INDUSTRY_TYPE_ID = $_POST["INDUSTRY_TYPE_ID"];
$CHANNEL_ID = $_POST["CHANNEL_ID"];
$TXN_AMOUNT = $_POST["TXN_AMOUNT"];
$Mobile = $_POST["Mobile"];
$Email = $_POST["Email"];
$List["MID"] = PAYTM_MERCHANT_MID;
$List["ORDER_ID"] = $ORDER_ID;
$List["CUST_ID"] = $CUST_ID;
$List["INDUSTRY_TYPE_ID"] = $INDUSTRY_TYPE_ID;
$List["CHANNEL_ID"] = $CHANNEL_ID;
$List["TXN_AMOUNT"] = $TXN_AMOUNT;
$List["WEBSITE"] = PAYTM_MERCHANT_WEBSITE; 
$List["CALLBACK_URL"] = "http://localhost/Paytmintegration/pageresponse.php";
//$List["Mobile"] = $Mobile;
//$List["Email"] = $Email;
$checkSum = getChecksumFromArray($List,PAYTM_MERCHANT_KEY);
?>
<html>
<head>
<title>Kramah Check Out Page</title>
</head>
<body>
	<center><h1>Please do not refresh this page...</h1></center>
		<form method="post" action="<?php echo PAYTM_TXN_URL ?>" name="f1">
		<table border="1">
			<tbody>
			<?php
			foreach($List as $name => $value) {
				echo '<input type="hidden" name="' . $name .'" value="' . $value . '">';
			}
			?>
			<input type="hidden" name="CHECKSUMHASH" value="<?php echo $checkSum ?>">
			</tbody>
		</table>
		<script type="text/javascript">
			document.f1.submit();
		</script>
	</form>
</body>
</html>
