<?php
@session_start();
include("connect.php");
?>
<!DOCTYPE html>
<html>
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
</head>
<body>
    	<!-- Page Preloder -->

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
					<li><a href="billuser.php">Bill</a></li>
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
	</section>
	<!-- Add section end -->

     <?php
	 if (isset($_POST['add_to_card'])) {
		 
		$product = $_POST["id_product"];
				$sql="SELECT * FROM tb_product where id_product='$product'";
				
				$query = mysqli_query($conn,$sql);
				$obj1 = mysqli_fetch_array($query,MYSQLI_ASSOC);
				$qty=$obj1['number'];
				if($qty < $_POST["quantity"] ){
					echo "<script> alert('product over'); window.location = 'main.php'</script>";
				}else{

         
		
		
		//เมื่อมีการกดปุ่ม add_to_cart จาก panel/card วนลูปห้อง
          if (isset($_SESSION["shopping_cart"])) { //ถ้ามีการจองห้องที่เก็บใน sessionมาแล้ว
               $is_available = 0; 
               foreach ($_SESSION["shopping_cart"] as $keys => $values) { //วนลูปข้อมูลที่เก็บการจองห้องใน session
                    if ($_SESSION["shopping_cart"][$keys]['id_product'] == $_POST["id_product"]) { //ถ้าห้องที่จองใหม่คือห้องเดียวกับห้องที่จองอยู่ใน session แล้ว
                         $is_available++; //บวกค่าตัวแปรเพิ่มอีก 1

                         //นำจำนวนที่จองมาใหม่บวกกับจำนวนที่จองเดิมที่เก็บใน session
                         $_SESSION["shopping_cart"][$keys]['quantity'] = $_SESSION["shopping_cart"][$keys]['quantity'] + $_POST["quantity"]; 
                    }
               }
               //กรณีที่การทำงานในส่วนของ    ถ้าห้องที่จองใหม่คือห้องเดียวกับห้องที่จองอยู่ใน session แล้ว    
               //$is_available จะมีค่ามากกว่า 0 ระบบจะไม่ทำงานใน if นี้
               //แต่ถ้าห้องที่จองใหม่ไม่ใช่ห้องเดียวกับห้องที่จองอยู่ใน session ระบบจะทำงานใน if นี้
               if ($is_available < 1) {
                   //คำสั่งเก็บการจองใน session เก็บ 4 ค่า 
                   //ตัวอย่างเช่น ('room_type_id')  คือ ตัวแปรที่สร้างใน session โดยเก็บค่าที่รับจากfrom ($_POST["room_type_id"])
                    $item_array = array(
                         'id_product'               =>     $_POST["id_product"],
                         'nameproduct'               =>     $_POST["nameproduct"],
                         'price'               =>     $_POST["price"],
                         'quantity'          =>     $_POST["quantity"]
                    );
                    $_SESSION["shopping_cart"][] = $item_array;//นำข้อมูลการจองเก็บไว้ใน session ที่ชื่อว่า shopping_cart
               }
          } else {//ถ้าจองครั้งแรก
                //คำสั่งเก็บการจองใน session เก็บ 4 ค่า 
				//ตัวอย่างเช่น ('room_type_id')  คือ ตัวแปรที่สร้างใน session โดยเก็บค่าที่รับจากfrom ($_POST["room_type_id"])
				

				
               $item_array = array(
                    'id_product'               =>     $_POST["id_product"],
                    'nameproduct'               =>     $_POST["nameproduct"],
                    'price'               =>     $_POST["price"],
                    'quantity'          =>     $_POST["quantity"]
               );
               $_SESSION["shopping_cart"][] = $item_array;//นำข้อมูลการจองเก็บไว้ใน session ที่ชื่อว่า shopping_cart
          }
	}


	 }
     if (isset($_GET['id_product'])) {//เมื่อมีการกดปุ่มลบการจองใน session
          foreach ($_SESSION["shopping_cart"] as $keys => $values) {//วนข้อมูลการจองใน session เพื่อหา รายการจองที่กดลบ
               if ($values["id_product"] == $_GET["id_product"]) { //ถ้ารายการที่กดลบตรงกับรายการที่เก็บใน sesion
                    unset($_SESSION["shopping_cart"][$keys]); //ลบรายการจองใน session ในตำแหน่งนั้น
                    $message = '<label class="text-success">Product Removed</label>';
               }
          }
	 }
	 
	
     if (isset($_GET['insert']))//เมื่อกดปุ่ม ยืนยันการจอง
	 {
        $id_person = $_SESSION['id_person'];
          //บันทึกข้อมูลการจองใน session โดยเก็บคนที่จอง วันที่จอง ตามฐานข้อมูลระบบที่กำลังทำของแต่ละกลุ่ม
          $insert = mysqli_query($conn, "INSERT INTO tb_basket(id_person) VALUES ('$id_person')");
		  
          //ดึงข้อมูลในตารางbooking เอาแค่ 1 แถวล่าสุดที่บันทึก
          $select = mysqli_query($conn, "SELECT * FROM tb_basket order by id_basket desc limit 1");
          $row_select = mysqli_fetch_assoc($select);
          $id_basket = $row_select['id_basket'];//เก็บ primary key ตาราง booking ที่ดึงข้อมูลมาใส่ในตัวแปร
		  
          //วันบันทึกข้อมูลการจองใน session เนื่องจากกการจองไม่ได้จองแค่ห้องเดียวต้องวนลูปบันทึกให้ครบทุกห้องทีจองเก็บไว้ใน session
          foreach ($_SESSION["shopping_cart"] as $keys => $values) 
			{
            //insert booking_id จาก ตัวแปร  $booking_id ที่ดึงมาจาก ตาราง booking ที่บันทึกล่าสุด
			$insert_detail = mysqli_query($conn, "INSERT INTO tb_basket_detail(id_basket,id_product,qty)  
			VALUES ('$id_basket','" . $values["id_product"] . "','" . $values["quantity"] . "')");

			}
          if ($insert && $insert_detail) //เมื่อ insert ข้อมูลสำเร็จ
			{
               unset($_SESSION["shopping_cart"]); //ล้างข้อมูลใน session
			   echo "<script> alert('จองสำเร็จ');  </script>";
			   
			}
		  else 
			{
               echo "<script> alert('จองไม่สำเร็จ');  </script>";
			}
     }
     //ถ้ามีการเก็บ session การจองมาแล้ว แสดงข้อมูลการจองทังหมดเป็นตาราง
     if (isset($_SESSION["shopping_cart"])) {  ?> 
         <table class="table table-bordered" style="width:80%;" align="center">
              <tr>
                    <th width="10%">nameproduct</th>
                    <th width="20%">price</th>
                    <th width="15%">quantity</th>
					<th width="15%">total</th>
                    <th width="15%">tool</th>
               </tr>
               <?php 
			   //วนลูปข้อมูลที่เก็บการจองห้องใน session
			   foreach ($_SESSION["shopping_cart"] as $keys => $values) { ?>
                    <tr>                       
                         <td><?php echo $values["nameproduct"]; ?></td>
                         <td><?php echo $values["price"]; ?></td>
                         <td><?php echo $values["quantity"]; ?></td>
						 <td><?php echo ($values["quantity"] * $values["price"]); ?></td>
                         <td>
							  <a button class="btn btn-round btn-danger btn-xs " href="basket.php?id_product=<?php echo $values['id_product']; ?>">ลบ</button></a>
							  
                         </td>
                    </tr>
               <?php } ?>
               <tr>
				  <td colspan="5" align="center"><a button class="btn btn-round btn-success btn-xs " href="basket.php?insert">ยืนยันการจอง</button></a></td>				  
             </tr>         
          </table>
   
	 
</body>
<?php } ?>
<section class="bottom-widgets-section spad">
		<div class="container">
			<div class="row">
				<div class="col-lg-4 col-md-6 ftw-warp">
					<div class="section-title">
						<h3>Top rated recipes</h3>
					</div>
					<ul class="sp-recipes-list">
						<li>
							<div class="rl-thumb set-bg" data-setbg="img/thumb/31.jpg"></div>
							<div class="rl-info">
								<span>March 14, 2018</span>
								<h6>Italian pasta</h6>
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
								<span>March 14, 2018</span>
								<h6>French Onion Soup</h6>
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
								<span>March 14, 2018</span>
								<h6>Homemade  pasta</h6>
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
								<span>March 14, 2018</span>
								<h6>Onion Soup Gratinee</h6>
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
								<span>March 14, 2018</span>
								<h6>Feta Cheese Burgers</h6>
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
						<h3>Most liked recipes</h3>
					</div>
					<ul class="sp-recipes-list">
						<li>
							<div class="rl-thumb set-bg" data-setbg="img/thumb/36.jpg"></div>
							<div class="rl-info">
								<span>March 14, 2018</span>
								<h6>Traditional Food</h6>
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
								<span>March 14, 2018</span>
								<h6>Baked Salmon</h6>
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
								<span>March 14, 2018</span>
								<h6>Deep Fried Fish</h6>
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
								<span>March 14, 2018</span>
								<h6>Raw Tomato Soup</h6>
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
								<span>March 14, 2018</span>
								<h6>Vegan Food</h6>
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
								<span>May 04, 2018</span>
							</div>
						</div>
						<div class="blog-text">
							<h5>Italian restaurant Review</h5>
							<span>By Maria Williams</span>
							<p>Donec quam felis, ultricies nec, pellente sque eu, pretium quis, sem. Nulla conseq uat massa quis enim. </p>
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
	<section class="review-section">
		<div class="container">
			<div class="row">
				<div class="col-lg-6 col-md-8 offset-lg-0 offset-md-2">
					<div class="review-item">
						<div class="review-thumb set-bg" data-setbg="img/thumb/41.jpg">
							<div class="review-date">
								<span>May 04, 2018</span>
							</div>
						</div>
						<div class="review-text">
							<span>March 14, 2018</span>
							<h6>Feta Cheese Burgers</h6>
							<div class="rating">
								<i class="fa fa-star"></i>
								<i class="fa fa-star"></i>
								<i class="fa fa-star"></i>
								<i class="fa fa-star"></i>
								<i class="fa fa-star is-fade"></i>
							</div>
							<div class="author-meta">
								<div class="author-pic set-bg" data-setbg="img/author.jpg"></div>
								<p>By Janice Smith</p>
							</div>
						</div>
					</div>
				</div>
				<div class="col-lg-6 col-md-8 offset-lg-0 offset-md-2">
					<div class="review-item">
						<div class="review-thumb set-bg" data-setbg="img/thumb/42.jpg">
							<div class="review-date">
								<span>May 04, 2018</span>
							</div>
						</div>
						<div class="review-text">
							<span>March 14, 2018</span>
							<h6>Mozarella Pasta</h6>
							<div class="rating">
								<i class="fa fa-star"></i>
								<i class="fa fa-star"></i>
								<i class="fa fa-star"></i>
								<i class="fa fa-star"></i>
								<i class="fa fa-star is-fade"></i>
							</div>
							<div class="author-meta">
								<div class="author-pic set-bg" data-setbg="img/author.jpg"></div>
								<p>By Janice Smith</p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
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