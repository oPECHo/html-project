<?php
include("connect.php");
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
						<a href="php_link.php?cmd=logout" >logout</a>
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
					<h2 class="hs-title-1"><span>Minimark Online</span></h2>
					<h2 class="hs-title-2"><span>many thing</span></h2>
					<h2 class="hs-title-3"><span>for Buy</span></h2>
				</div>
			</div>
			<div class="hero-slide-item set-bg" data-setbg="img/slider-bg-4.jpg">
				<div class="hs-text">
					<h2 class="hs-title-1"><span>Minimark Online</span></h2>
					<h2 class="hs-title-2"><span>many thing</span></h2>
					<h2 class="hs-title-3"><span>for Buy</span></h2>
				</div>
			</div>
		<div class="hero-slide-item set-bg" data-setbg="img/slider-bg-1.jpg">
			<div class="hs-text">
				<h2 class="hs-title-1"><span>Minimark Online</span></h2>
				<h2 class="hs-title-2"><span>many thing</span></h2>
				<h2 class="hs-title-3"><span>for Buy</span></h2>
			</div>
		</div>
		<div class="hero-slide-item set-bg" data-setbg="img/slider-bg-2.jpg">
			<div class="hs-text">
				<h2 class="hs-title-1"><span>Minimark Online</span></h2>
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
							<h2>Amazing Minimark</h2>
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

    <!-- Recipes section -->
    <div class="container">
	<div class="row">
<?php

$sql="SELECT * FROM tb_product where category= 2";
$query = mysqli_query($conn,$sql);
while($obj = mysqli_fetch_array($query,MYSQLI_ASSOC)){
?>	

<form id="form_user" action="basket.php" name="form1" method="post" enctype="multpart/form-date">
<div class="container" style="width:385px;">
<div class="col-sm-12">
<div class="form-group">
<div class="card">
  <img class="card-img-top" src="img/<?php echo $obj['image'];?>" alt="image" style="width:100%">
  
  <div class="card-body">
    <h4 class="card-title"> <?php echo $obj['nameproduct'];?></h4>
    <p class="card-text">category : cosmetics  <br>
    <?php echo $obj['number'];?> stock <br> $<?php echo $obj['price'];?>
</p>
	
<div class="row"><div class="col-sm-6"><input type="number" name="quantity" class="form-control" value="1" /></div>
<?php
$qty=$obj['number'];
if($qty == 0){ 
	?>
	<div class="col-sm-6"><input type="submit" name="add_to_card" class="btn btn-outline-info form-control add_to_card " value="Add to card" disabled/></div></div>
<?php
}else{ 
	?>

	<div class="col-sm-6"><input type="submit" name="add_to_card" class="btn btn-outline-info form-control add_to_card" value="Add to card" /></div></div>

<?php
}
?>
	
	<div class="col-sm-12">
		<input type="hidden" name="id_product" value="<?php echo $obj["id_product"]; ?>" />
		<input type="hidden" name="nameproduct" value="<?php echo $obj["nameproduct"]; ?>" />
		<input type="hidden" name="price" value="<?php echo $obj["price"]; ?>" />
    </div>
</div> 
</div>	
</div>
</div>
</div>
</form>

<?php
}
?>
</div>
</div><br>
	<!-- Recipes section end -->


	<!-- Footer widgets section -->
	<section class="bottom-widgets-section spad">
		<div class="container">
			<div class="row">
				<div class="col-lg-4 col-md-6 ftw-warp">
					<div class="section-title">
						<h3>Top rated Select</h3>
					</div>
					<ul class="sp-recipes-list">
						<li>
							<div class="rl-thumb set-bg" data-setbg="img/thumb/31.jpg"></div>
							<div class="rl-info">
								<span>July 20, 2020</span>
								<h6>instant_food</h6>
								<div class="rating">
									<i class="fa fa-star"></i>
									<i class="fa fa-star"></i>
									<i class="fa fa-star"></i>
									<i class="fa fa-star"></i>
									<i class="fa fa-star is-fade"></i>
								</div>
							</div>
						</li>
						<li>
							<div class="rl-thumb set-bg" data-setbg="img/thumb/32.jpg"></div>
							<div class="rl-info">
								<span>July 20, 2020</span>
								<h6>Mama</h6>
								<div class="rating">
									<i class="fa fa-star"></i>
									<i class="fa fa-star"></i>
									<i class="fa fa-star"></i>
									<i class="fa fa-star"></i>
									<i class="fa fa-star is-fade"></i>
								</div>
							</div>
						</li>
						<li>
							<div class="rl-thumb set-bg" data-setbg="img/thumb/33.jpg"></div>
							<div class="rl-info">
								<span>July 20, 2020</span>
								<h6>Pencil</h6>
								<div class="rating">
									<i class="fa fa-star"></i>
									<i class="fa fa-star"></i>
									<i class="fa fa-star"></i>
									<i class="fa fa-star"></i>
									<i class="fa fa-star is-fade"></i>
								</div>
							</div>
						</li>
						<li>
							<div class="rl-thumb set-bg" data-setbg="img/thumb/34.jpg"></div>
							<div class="rl-info">
								<span>July 20, 2020</span>
								<h6>Pen</h6>
								<div class="rating">
									<i class="fa fa-star"></i>
									<i class="fa fa-star"></i>
									<i class="fa fa-star"></i>
									<i class="fa fa-star"></i>
									<i class="fa fa-star is-fade"></i>
								</div>
							</div>
						</li>
						<li>
							<div class="rl-thumb set-bg" data-setbg="img/thumb/35.jpg"></div>
							<div class="rl-info">
								<span>July 20, 2020</span>
								<h6>BasketBall</h6>
								<div class="rating">
									<i class="fa fa-star"></i>
									<i class="fa fa-star"></i>
									<i class="fa fa-star"></i>
									<i class="fa fa-star"></i>
									<i class="fa fa-star is-fade"></i>
								</div>
							</div>
						</li>
					</ul>
				</div>
				<div class="col-lg-4 col-md-6 ftw-warp">
					<div class="section-title">
						<h3>Most liked Select</h3>
					</div>
					<ul class="sp-recipes-list">
						<li>
							<div class="rl-thumb set-bg" data-setbg="img/thumb/36.jpg"></div>
							<div class="rl-info">
								<span>July 20, 2020</span>
								<h6>Football</h6>
								<div class="rating">
									<i class="fa fa-star"></i>
									<i class="fa fa-star"></i>
									<i class="fa fa-star"></i>
									<i class="fa fa-star"></i>
									<i class="fa fa-star is-fade"></i>
								</div>
							</div>
						</li>
						<li>
							<div class="rl-thumb set-bg" data-setbg="img/thumb/37.jpg"></div>
							<div class="rl-info">
								<span>July 20, 2020</span>
								<h6>Lips</h6>
								<div class="rating">
									<i class="fa fa-star"></i>
									<i class="fa fa-star"></i>
									<i class="fa fa-star"></i>
									<i class="fa fa-star"></i>
									<i class="fa fa-star is-fade"></i>
								</div>
							</div>
						</li>
						<li>
							<div class="rl-thumb set-bg" data-setbg="img/thumb/38.jpg"></div>
							<div class="rl-info">
								<span>July 20, 2020</span>
								<h6>Make_up</h6>
								<div class="rating">
									<i class="fa fa-star"></i>
									<i class="fa fa-star"></i>
									<i class="fa fa-star"></i>
									<i class="fa fa-star"></i>
									<i class="fa fa-star is-fade"></i>
								</div>
							</div>
						</li>
						<li>
							<div class="rl-thumb set-bg" data-setbg="img/thumb/39.jpg"></div>
							<div class="rl-info">
								<span>July 20, 2020</span>
								<h6>Telephone</h6>
								<div class="rating">
									<i class="fa fa-star"></i>
									<i class="fa fa-star"></i>
									<i class="fa fa-star"></i>
									<i class="fa fa-star"></i>
									<i class="fa fa-star is-fade"></i>
								</div>
							</div>
						</li>
						<li>
							<div class="rl-thumb set-bg" data-setbg="img/thumb/40.jpg"></div>
							<div class="rl-info">
								<span>July 20, 2020</span>
								<h6>Printer</h6>
								<div class="rating">
									<i class="fa fa-star"></i>
									<i class="fa fa-star"></i>
									<i class="fa fa-star"></i>
									<i class="fa fa-star"></i>
									<i class="fa fa-star is-fade"></i>
								</div>
							</div>
						</li>
					</ul>
				</div>
				<div class="col-lg-4">
					<div class="sp-blog-item">
						<div class="blog-thubm">
							<img src="img/blog/1.jpg" alt="">
							<div class="blog-date">
								<span>July 20, 2020</span>
							</div>
						</div>
						<div class="blog-text">
							<h5>Minimart Review</h5>
							<span>By Akrit Choodet</span>
							<p>This Website is So Cool Beautiful it have manythings and it is very easy for buy</p>
							<a href="#" class="comment">2 Comments</a>
							<a href="#" class="readmore"><i class="fa fa-angle-right"></i></a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- Footer widgets section end -->


	<!-- Review section end -->

	<!-- Review section end -->


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