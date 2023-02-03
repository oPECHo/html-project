<?php
require_once __DIR__ . '/vendor/autoload.php';
$mpdf = new mPDF('th', 'A4');

$head = '
<html>
	<head>
	<style>
		body
		{
			font-family: "thsarabun";//เรียกใช้font Garuda สำหรับแสดงผล ภาษาไทย
		}
		td,th
		{
			height: 30px;
		}
	</style>

	</head>
	<body>';

$content .= '<table align="center" width="100%"  style="text-align: center;" >
			<tr bgcolor="#CCFFFF">
				<th colspan="5">รายการที่สั่ง</th>
			</tr>
			<tr  bgcolor="#EEEEEE">
				<th>ID</th>
				<th>Product</th>
				<th>Price</th>
				<th>number</th>
				<th>total</th>
			</tr>';
		
$end = '</table></body></html>';
		

$mpdf->WriteHTML($head);
$mpdf->WriteHTML($content);
$mpdf->WriteHTML($end);
$mpdf->Output();
