<?php
	header("Pragma: no-cache");
	header("Cache-Control: no-cache");
	header("Expires: 0");
	require_once("./includes/configuration_paytm.php");
	require_once("./includes/encdec_paytm.php");
	$ORDER_ID = "";
	$requestList = array();
	$responseList = array();
	if (isset($_POST["ORDER_ID"]) && $_POST["ORDER_ID"] != "") {
		$ORDER_ID = $_POST["ORDER_ID"];
		$requestList = array("MID" => PAYTM_MERCHANT_MID , "ORDERID" => $ORDER_ID);
		$StatusCheckSum = getChecksumFromArray($requestList,PAYTM_MERCHANT_KEY);
		$requestList['CHECKSUMHASH'] = $StatusCheckSum;
		$responseList = getTxnStatusNew($requestList);
	}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<title>Transaction status query</title>
<meta name="GENERATOR" content="Evrsoft First Page">
</head>
<body>
	<h2>Transaction status query</h2>
	<form method="post" action="">
		<table border="1">
			<tbody>
				<tr>
					<td><label>ORDER_ID*</label></td>
					<td><input id="ORDER_ID" tabindex="1" maxlength="20" size="20" name="ORDER_ID" autocomplete="off" value="<?php echo $ORDER_ID ?>">
					</td>
				</tr>
				<tr>
					<td></td>
					<td><input value="Status Query" type="submit"	onclick=""></td>
				</tr>
			</tbody>
		</table>
		<br/></br/>
		<?php
		if (isset($responseList) && count($responseList)>0 )
		{
		?>
		<h2>Response of status query:</h2>
		<table style="border: 1px solid nopadding" border="0">
			<tbody>
				<?php
					foreach($responseList as $paramName => $paramValue) {
				?>
				<tr >
					<td style="border: 1px solid"><label><?php echo $paramName?></label></td>
					<td style="border: 1px solid"><?php echo $paramValue?></td>
				</tr>
				<?php
					}
				?>
			</tbody>
		</table>
		<?php
		}
		?>
	</form>
</body>
</html>
