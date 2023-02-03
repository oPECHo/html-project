<?php
include "connect.php";
?>
<!DOCTYPE html>
  <head>
	<meta charset="utf-8">
	<meta name="description" content="Food Blog Web Template">
	<meta name="keywords" content="food, unica, creative, html">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title>Highcharts</title>
	
    <!-- Bootstrap -->
    <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>

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
  </head>
  <body>
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
						<a href="php_link.php?cmd=logout" >Logout </a>
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
					<li><a href="main.html">Home</a></li>
					<li><a href="billuser.php">Bill</a></li>
				</ul>
			</div>
		</div>
	</header>
	<!-- Header section end -->


	<!-- Hero section -->
	<section class="hero-section">
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


<div class="container">
<form id="form_user" action="highchart1.php" target="_blank" name="form1" method="post">
    
<div class="x_content">	
<div class="row">	
	<div class="col-sm-2">
		<div class="form-group"> 
			<label>วันที่เริ่มต้น</label><font color="red"><b>*</b></font>	
			<div class="input-group">
				<div class="input-group-addon"><i class="fa fa-calendar"></i></div>									
				<input type="date" name="stu_date"  class="form-control"  value="<?php if($date_search<>""){echo $date_search;} else {echo date('Y-m-d');}?>">
			</div>
		</div>
	</div>
	<div class="col-sm-2">
		<div class="form-group"> 
			<label>วันที่สิ้นสุด</label><font color="red"><b>*</b></font>	
			<div class="input-group">
				<div class="input-group-addon"><i class="fa fa-calendar"></i></div>									
				<input type="date" name="stu_date_end"  class="form-control"  value="<?php if($date_search_end<>""){echo $date_search_end;} else {echo date('Y-m-d');}?>">
			</div>
		</div>
	</div>
	<div class="col-sm-2">
		<div class="form-group">
			<label>&nbsp;</label><br>
			<button type="text" name="search" class="btn btn-success"><i class="fa fa-search"></i>  ค้นหา</button>
			<button type="reset" name="reset" class="btn btn-warning"><i class="fa fa-refresh"></i>  ยกเลิก</button>
		</div>
	</div>	


</div>
</div>
</form>
</div><br>	

<?php
if(isset($_POST['search'])){
				$start_date=date("Y-m-d 00:00:00",strtotime($_POST['stu_date']));
				$end_date=date("Y-m-d 23:59:59",strtotime($_POST['stu_date_end']));

				$sql="SELECT nameproduct,count(tb_basket_detail.id_product) as count_product FROM tb_basket_detail
					inner join tb_basket on tb_basket.id_basket=tb_basket_detail.id_basket
					inner join tb_product on tb_product.id_product=tb_basket_detail.id_product
					where basket_date BETWEEN '$start_date' AND '$end_date'
					group by nameproduct";
				$query = mysqli_query($conn,$sql);


				$sql_sum="SELECT nameproduct,count(tb_basket_detail.id_product)   as sum_product FROM tb_basket_detail
				inner join tb_basket on tb_basket.id_basket=tb_basket_detail.id_basket
				inner join tb_product on tb_product.id_product=tb_basket_detail.id_product
				where basket_date BETWEEN '$start_date' AND '$end_date'
					group by nameproduct";
				$query_sum = mysqli_query($conn,$sql_sum);?>
		
	

				<div class="container">
				<h1>Hello, world!</h1>
		
				<div id="container" style="min-width: 310px; height: 400px; margin: 0 auto"></div>
				<table class="table table-striped" id="datatable">
				<thead class="thead-dark">
						<tr>	
							<th>ชื่อสินค้า</th>
							<th>จำนวนที่ขาย</th>
						</tr>
					</thead>
					<tbody>

<?php			while($obj = mysqli_fetch_array($query,MYSQLI_ASSOC)){

			?>
			<tr>
				<td><?php echo $obj['nameproduct']; ?></td>
				<td><?php echo $obj['count_product']; ?></td>
			</tr>
			<?php } ?>
			</tbody>
		</table>
    </div><br>
	<div class="container">
    <h1>Hello, world!</h1>

		<div id="container1" style="min-width: 310px; height: 400px; margin: 0 auto"></div>

		<table class="table table-striped" id="datatable1">
		<thead class="thead-dark">
				<tr>
				<th>ชื่อสินค้า</th>
				<th>รายได้ที่ขาย</th>
	
				</tr>
			</thead>
			<tbody>
			<?php			while($obj_sum = mysqli_fetch_array($query_sum,MYSQLI_ASSOC)){

?>
				<tr>
					<th><?php echo $obj_sum['nameproduct']; ?></th>
					<td><?php echo $obj_sum['sum_product']; ?></td>
				</tr>
				<?php } ?>		
			</tbody>
		</table>
	</div><br>


				<?php } ?>


</div>
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
	<script src="js/jquery-3.2.1.min.js"></script>
	<script src="js/owl.carousel.min.js"></script>
	<script src="js/main.js"></script>
	<script src="http://code.jquery.com/jquery-1.12.0.min.js"></script>
	<script src="https://code.highcharts.com/highcharts.js"></script>
	<script src="https://code.highcharts.com/modules/data.js"></script>
	<script src="https://code.highcharts.com/modules/exporting.js"></script>
	<script>

$(function () {
			
	$('#container').highcharts({
		
		data: {
		
			table: 'datatable'
		},
			plotOptions: {
series: {
borderWidth: 0,
dataLabels: {
enabled: true,
format: '{point.y}'
}
}
},
		
		
		
		
		chart: {
			type: 'column'
		},
		title: {
			text: 'Ἱ�������ʴ��ӹǹ�ѡ���¹�����дѺ  <br>'
		},
		yAxis: {
			allowDecimals: false,
			title: {
				text: '�ӹǹ'
				
			}
		},
		
		tooltip: {
			formatter: function () {
				return '<b>' + this.series.name + '</b><br/>' +
					this.point.y; + ' ' + this.point.name.toLowerCase();
			}
		}
		
	});
});

</script>
	
	<script>
	
	$(function () {
		
		$('#container1').highcharts({
			data: {
				table: 'datatable1'
			},
			chart: {
				type: 'line'
			},
			title: {
				text: 'Data extracted from a HTML table in the page'
			},
			yAxis: {
				allowDecimals: false,
				title: {
					text: 'Units'
				}
			},		
			tooltip: {
				formatter: function () {
					return '<b>' + this.series.name + '</b><br/>' +
						this.point.y + ' ' + this.point.name.toLowerCase();
				}
			}
		});
	});
	
	</script>
	
  </body>
</html>