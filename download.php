<?php
require_once __DIR__ . '/vendor/autoload.php';


$ORDER_ID = array_key_exists('ORDER_ID', $_POST) ? $_POST['ORDER_ID'] : null;
$CUST_ID = array_key_exists('CUST_ID', $_POST) ? $_POST['CUST_ID'] : null;
$CHANNEL_ID = array_key_exists('CHANNEL_ID', $_POST) ? $_POST['HANNEL_ID'] : null;
$TXN_AMOUNT = array_key_exists('TXN_AMOUNT', $_POST) ? $_POST['TXN_AMOUNT'] : null;
$Mobile = array_key_exists('Mobile', $_POST) ? $_POST['Mobile'] : null;
$Email = array_key_exists('Email', $_POST) ? $_POST['Email'] : null;
$mpdf = new \Mpdf\Mpdf();
$data ='';
$data .= '<h1>Kramah Software Private Limited  Banglore</h1>';
$data .= '<h2>Here are your Transaction Details</h2>';
$data .= '<strong>Order ID:</strong>'.$ORDER_ID.'<br />';
$data .= '<strong>Customer ID:</strong>'.$CUST_ID.'<br />';
$data .= '<strong>Channel ID:</strong>'.$CHANNEL_ID.'<br />';
$data .= '<strong>Amount Paid:</strong>'.$TXN_AMOUNT.'<br />';
$data .= '<strong>Mobile Number:</strong>'.$Mobile.'<br />';
$data .= '<strong>Email Id:</strong>'.$Email.'<br />';
//$data .= "<br><br/>" . $paramName . " = " . $paramValue;
$mpdf->WriteHTML($data);
$mpdf->Output('payment.pdf','D');
