<?php
	header("Pragma: no-cache");
	header("Cache-Control: no-cache");
	header("Expires: 0");
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<title>Kramah Check Out Page</title>
<meta name="GENERATOR" content="Evrsoft First Page">
</head>
<body>
<style>
h1 {
  color: green;
  text-align: center;
  background-color:auto;
}
table {
  border: 0px solid black;
	width: 100%;
}
th {
  height: 50px;
	text-align: left;
}
td{
	height:45px;
}
tr:hover {
	background-color: lightgray;
}
	</style>
	<h1>Kramah Check Out Page</h1>
	<pre>
	</pre>
	<form method="post" action="pageredirect.php">
		<table border="0">
			<tbody>
				<tr>
					<th>S.No</th>
					<th>Label</th>
					<th>Value</th>
				</tr>
				<tr>
					<td>1</td>
					<td><label>ORDER_ID*</label></td>
					<td><input id="ORDER_ID" tabindex="1" maxlength="20" size="20"
						name="ORDER_ID" autocomplete="off"
						value="<?php echo  "ORDS" . rand(10000,99999999)?>">
					</td>
				</tr>
				<tr>
					<td>2</td>
					<td><label>CUSTOMER_ID*</label></td>
					<td><input id="CUST_ID" tabindex="2" maxlength="20" size="12" name="CUST_ID" autocomplete="off"
					value="<?php echo  "CUST" . rand(1000,99999)?>"></td>
				</tr>
				<tr>
					<td>3</td>
					<td><label>INDUSTRY_TYPE_ID*</label></td>
					<td><input id="INDUSTRY_TYPE_ID" tabindex="4" maxlength="12" size="12" name="INDUSTRY_TYPE_ID" autocomplete="off" value="Retail"></td>
				</tr>
				<tr>
					<td>4</td>
					<td><label>Channel*</label></td>
					<td><input id="CHANNEL_ID" tabindex="4" maxlength="12"
						size="12" name="CHANNEL_ID" autocomplete="off" value="WEB">
					</td>
				</tr>
				<tr>
					<td>5</td>
					<td><label>Amount*</label></td>
					<td><input title="TXN_AMOUNT" tabindex="10"
						type="text" name="TXN_AMOUNT"
						value="1">
					</td>
				</tr>
				<tr>
					<td>6</td>
					<td><label>Mobile Number*</label></td>
					<td><input title="Mobile" tabindex="10"
						type="text" name="Mobile"
						placeholder="Mobile.no">
					</td>
				</tr>
				<tr>
					<td>7</td>
					<td><label>Email ID*</label></td>
					<td><input title="Email" tabindex="10"
						type="text" name="Email"
						placeholder="Email.id">
					</td>
				</tr>
				<tr>
					<td></td>
					<td></td>
					<td>
						<button type="submit" name="Checkout">Checkout</button>
					</td>
				</tr>
			</tbody>
		</table>
		* - Mandatory Fields
	</form>
</body>
</html>
