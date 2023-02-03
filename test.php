<?php
include "connect.php";
$sql="SELECT * from tb_basket
inner join tb_customer on tb_basket.id_person=tb_customer.id_person";

$query = mysqli_query($conn,$sql);
while($obj = mysqli_fetch_array($query,MYSQLI_ASSOC)){
 ?>



  <table>
  <tr>
    <th  colspan="3"><?php echo "หมายเลขการสั่งซื้อ : ".$obj['id_basket']; ?></th>
  <tr>
    <th>ID</th>
    <th>Product</th>
    <th>qty</th>
  </tr>
  <?php

$id_basket=$obj['id_basket'];
  $sql1="SELECT * from tb_basket_detail
inner join tb_product on tb_basket_detail.id_product=tb_product.id_product
where id_basket='$id_basket'
";
  $query1 = mysqli_query($conn,$sql1);
  while($obj1 = mysqli_fetch_array($query1,MYSQLI_ASSOC)){?>

  <tr>

    <td><?php echo $obj1['id_basket'];?></td>
    <td><?php echo $obj1['nameproduct'];?></td>
	<td><?php echo $obj1['qty'];?></td>
    </tr>


<?php
}
?>

  </table>
<?php
}
?>

if($obj['status_basket'] == '2'){ ?>
  <center><a button class="btn btn-round btn-danger btn-xs " href="pdf.php?id_person=<?php echo $obj["id_person"]; ?>&id_basket=<?php echo $obj1["id_basket"]; ?>">ออกรายงาน</button></a></center>

<?php  
}else{?>
<center><a button class="btn btn-round btn-danger btn-xs disabled " href="pdf.php?id_person=<?php echo $obj["id_person"]; ?>&id_basket=<?php echo $obj1["id_basket"]; ?>">ออกรายงาน</button></a> </center>
<?php
}
?></td></tr>