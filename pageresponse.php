<html>
<body>
<style>
p1{
	background-color:green;
}
p2{
	background-color:red;
}
.button{
	transition-duration: 0.4s;
	width:150px;
	height:40px;
	border-radius:20px;
}
.button:hover{
	background-color:lightgreen;
	color:blue;
}
</style>
</body>
</html>
<?php
header("Pragma: no-cache");
header("Cache-Control: no-cache");
header("Expires: 0");
require_once("./includes/configuration_paytm.php");
require_once("./includes/encdec_paytm.php");

$paytmChecksum = "";
$List = array();
$isValidChecksum = "FALSE";
$List = $_POST;
$paytmChecksum = isset($_POST["CHECKSUMHASH"]) ? $_POST["CHECKSUMHASH"] : "";
$isValidChecksum = verifychecksum_e($List, PAYTM_MERCHANT_KEY, $paytmChecksum);
if($isValidChecksum == "TRUE") {
	echo "<b>Please NOTEDOWN the following transaction details for FUTURE reference:</b>" . "<br/><br>";
	if ($_POST["STATUS"] == "TXN_SUCCESS") {
		echo "<p1><b>Your Transaction is SUCCESSFULL</b></p1>" . "<br/><br>";
		echo' <a href="Testtransaction.php"><button class="button" name="Dashbord">Go To Your Dashbord</button></a>';
		echo' <a href="Testtransaction.php"><button class="button" name="Home">Home</button></a>';
		echo' <a href="download.php"><button class="button" name="PDF">Download PDF</button></a>';
	}
	else {
		echo "<p2><b>Your Transaction has FAILED</b></p2>" . "<br/>";
		echo' <a href="Testtransaction.php"><button class="button" name="Dashbord">Retry Transaction</button></a>';
		echo' <a href="Testtransaction.php"><button class="button" name="Home">Home</button></a>';
	}
	if (isset($_POST) && count($_POST)>0 )
	{
		foreach($_POST as $paramName => $paramValue) {
				echo "<br><br/>" . $paramName . " = " . $paramValue;
		}
	}
}
else {
	echo "<b>Checksum mismatched.</b>";
}
?>
