<?php
include("connect.php");
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
<title>Minimark_Online</title>
	<meta charset="UTF-8">
	<meta name="description" content="Food Blog Web Template">
	<meta name="keywords" content="food, unica, creative, html">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<!-- Favicon -->   
	<link href="img/favicon.jpg" rel="shortcut icon"/>

	<!-- Google Fonts -->
	<link href="https://fonts.googleapis.com/css?family=Poppins:400,400i,500,500i,600,600i,700" rel="stylesheet">

	<!-- Stylesheets -->
	<link rel="stylesheet" href="css/bootstrap.min.css"/>
	<link rel="stylesheet" href="css/font-awesome.min.css"/>
	<link rel="stylesheet" href="css/owl.carousel.css"/>
	<link rel="stylesheet" href="css/animate.css"/>
	<link rel="stylesheet" href="css/style.css"/>


	<!--[if lt IE 9]>
	  <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
	  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	<![endif]-->

</head>
<body>
	<!-- Page Preloder -->
	<div id="preloder">
		<div class="loader"></div>
	</div>
	<!-- Header section -->
	<header class="header-section">
		<div class="header-top">
			<div class="container">
				<div class="header-social">
					<a href="#"><i class="fa fa-pinterest"></i></a>
					<a href="#"><i class="fa fa-facebook"></i></a>
					<a href="#"><i class="fa fa-twitter"></i></a>
					<a href="#"><i class="fa fa-dribbble"></i></a>
					<a href="#"><i class="fa fa-behance"></i></a>
					<a href="#"><i class="fa fa-linkedin"></i></a>
				</div>
				<div class="user-panel">
						<a href="php_link.php?cmd=logout" >Login by &nbsp; <?php echo $_SESSION['gmail']; ?></a>
				</div>
			</div>
		</div>
		<div class="header-bottom">
			<div class="container">
				<a href="index.html" class="site-logo">
					<img src="img/logo1.png" alt="">
				</a>
				<div class="nav-switch">
					<i class="fa fa-bars"></i>
				</div>
				<div class="header-search">
					<a href="#"><i class="fa fa-search"></i></a>
				</div>
				<ul class="main-menu">
					<li><a href="main.php">Home</a></li>
				</ul>
			</div>
		</div>
	</header>
	<!-- Header section end -->


	<!-- Hero section -->
	<section class="hero-section">
		<div class="hero-slider owl-carousel">
			<div class="hero-slide-item set-bg" data-setbg="img/slider-bg-3.jpg">
				<div class="hs-text">
					<h2 class="hs-title-1"><span>Minimart Online</span></h2>
					<h2 class="hs-title-2"><span>many thing</span></h2>
					<h2 class="hs-title-3"><span>for Buy</span></h2>
				</div>
			</div>
			<div class="hero-slide-item set-bg" data-setbg="img/slider-bg-4.jpg">
				<div class="hs-text">
					<h2 class="hs-title-1"><span>Minimart Online</span></h2>
					<h2 class="hs-title-2"><span>many thing</span></h2>
					<h2 class="hs-title-3"><span>for Buy</span></h2>
				</div>
			</div>
		<div class="hero-slide-item set-bg" data-setbg="img/slider-bg-1.jpg">
			<div class="hs-text">
				<h2 class="hs-title-1"><span>Minimart Online</span></h2>
				<h2 class="hs-title-2"><span>many thing</span></h2>
				<h2 class="hs-title-3"><span>for Buy</span></h2>
			</div>
		</div>
		<div class="hero-slide-item set-bg" data-setbg="img/slider-bg-2.jpg">
			<div class="hs-text">
				<h2 class="hs-title-1"><span>Minimart Online</span></h2>
				<h2 class="hs-title-2"><span>many thing</span></h2>
				<h2 class="hs-title-3"><span>for Buy</span></h2>
			</div>
		</div>
	</div>
	</section>
	<!-- Hero section end -->


	<!-- Add section end -->
	<section class="add-section spad">
	<div class="container">
			<div class="add-warp">
				<div class="add-slider owl-carousel">
					<div class="as-item set-bg" data-setbg="img/add/1.jpg"></div>
					<div class="as-item set-bg" data-setbg="img/add/2.jpg"></div>
					<div class="as-item set-bg" data-setbg="img/add/3.jpg"></div>
				</div>
				<div class="row add-text-warp">
					<div class="col-lg-4 col-md-5 offset-lg-8 offset-md-7">
						<div class="add-text text-white">
							<div class="at-style"></div>
							<h2>Amazing Minimart</h2>
							<ul>
								<li>Easy to Buy</li>
								<li>many thing</li>
								<li>Send to everywhere</li>
								<li>Safe goods</li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- Add section end -->


    <div class="container">
        <h2>Striped Rows</h2>
        <p>The .table-striped class adds zebra-stripes to a table:</p>            
    
		<?php
include "connect.php";
$sql="SELECT * from tb_basket
where  id_person='$_SESSION[id_person]'";

$query = mysqli_query($conn,$sql);
while($obj = mysqli_fetch_array($query,MYSQLI_ASSOC)){
 ?>

  <tr>
    <th  colspan="6"><?php echo "หมายเลขการสั่งซื้อ : ".$obj['id_basket']; ?></th>
  <tr>

<table class="table table-striped table-bordered table-hover">
<thead class="thead-light ">
    <th width="10%">ID</th>
	<th width="40%">Product</th>
	<th width="10%">Price</th>
	<th width="10%">qty</th>
    <th width="10%">total</th>
	<th width="20%">status</th>
  </tr>  
 </thead>
  <?php

$id_basket=$obj['id_basket'];
  $sql1="SELECT * from tb_basket_detail
inner join tb_product on tb_basket_detail.id_product=tb_product.id_product
where id_basket='$id_basket'";
  $query1 = mysqli_query($conn,$sql1);
  while($obj1 = mysqli_fetch_array($query1,MYSQLI_ASSOC))
{
    if($obj['status_basket']=='0'){ $status="รอยืนยัน";}
    else if($obj['status_basket']=='1'){ $status="กำลังจัดส่ง";}
    else if($obj['status_basket']=='2'){ $status="จัดส่งเรียบร้อยแล้ว";} 
    
    ?>
  <tr>
    <td><?php echo $obj1['id_basket'];?></td>
	<td><?php echo $obj1['nameproduct'];?></td>
	<td><?php echo number_format($obj1['price']);?></td>
	<td><?php echo number_format($obj1['qty']);?></td>
    <td><?php echo number_format($obj1['price'] * $obj1['qty']); ?></td>
    <td><?php echo  $status;?></td>
	</tr>
	<?php
}
?>
  
  </table>

<?php
}
?>
</div><br>


	<!-- Gallery section -->

	<div class="gallery">
		<div class="gallery-slider owl-carousel">
			<div class="gs-item set-bg" data-setbg="img/instagram/11.jpg"></div>
			<div class="gs-item set-bg" data-setbg="img/instagram/12.jpg"></div>
			<div class="gs-item set-bg" data-setbg="img/instagram/13.jpg"></div>
			<div class="gs-item set-bg" data-setbg="img/instagram/14.jpg"></div>
			<div class="gs-item set-bg" data-setbg="img/instagram/15.jpg"></div>
			<div class="gs-item set-bg" data-setbg="img/instagram/16.jpg"></div>
		</div>
	</div>
	<!-- Gallery section end -->


	<!-- Footer section  -->
	<footer class="footer-section set-bg" data-setbg="img/footer-bg.jpg">
		<div class="container-fluid">
			<div class="row">
				<div class="col-lg-6">
					<div class="footer-logo">
						<img src="img/logo1.png" alt="">
					</div>
					<div class="footer-social">
						<a href="#"><i class="fa fa-pinterest"></i></a>
						<a href="#"><i class="fa fa-facebook"></i></a>
						<a href="#"><i class="fa fa-twitter"></i></a>
						<a href="#"><i class="fa fa-dribbble"></i></a>
						<a href="#"><i class="fa fa-behance"></i></a>
						<a href="#"><i class="fa fa-linkedin"></i></a>
					</div>
				</div>
				<div class="col-lg-6 text-lg-right">
					<ul class="footer-menu">
						<li><a href="#">Home</a></li>
						<li><a href="#">Features</a></li>
						<li><a href="#">Receipies</a></li>
						<li><a href="#">Reviews</a></li>
						<li><a href="#">Contact</a></li>
					</ul>
					<p class="copyright"><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
</p>
				</div>
			</div>
		</div>
	</footer>
	<!-- Footer section end -->


	<!--====== Javascripts & Jquery ======-->
	<script src="js/jquery-3.2.1.min.js"></script>
	<script src="js/owl.carousel.min.js"></script>
	<script src="js/main.js"></script>
</body>
</html>