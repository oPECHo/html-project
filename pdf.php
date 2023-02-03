<?php
require_once __DIR__ . '/vendor/autoload.php';
include "connect.php";
session_start();

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
$id_basket=$_GET['id_basket'];
$sql = mysqli_query($conn, "select * from tb_basket_detail inner join tb_product on tb_basket_detail.id_product=tb_product.id_product where id_basket='$id_basket'");
$content .= '<div align="center"><img src="img/1.jpg" style="width:50%;height:30%;border:0;"></div><hr><br>
<table align="center" width="100%"  style="text-align: center;" >
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
	while($row = mysqli_fetch_assoc($sql))	
		{		
$content .= '<tr bgcolor="#E8E8E8">
				<td>'.$row['id_basket'].'</td>
				<td>'.$row['nameproduct'].'</td>
				<td>'.$row['price'].'</td>
				<td>'.$row['qty'].'</td>
				<td>'.$row['qty'] * $row['price'].'</td>

			</tr>';
		}
		
$end = '</table></body></html>';
		

$mpdf->WriteHTML($head);
$mpdf->WriteHTML($content);
$mpdf->WriteHTML($end);
$mpdf->Output();
