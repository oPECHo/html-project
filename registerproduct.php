<?php 
include("connect.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<title>Register</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/iconic/css/material-design-iconic-font.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animsition/css/animsition.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="vendor/daterangepicker/daterangepicker.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
<!--===============================================================================================-->
</head>
<body>
	
	<div class="limiter">
		<div class="container-login100" style="background-image: url('img/bg-04.jpg');">
			<div class="wrap-login100 p-l-55 p-r-55 p-t-65 p-b-54">
				<form class="login100-form validate-form" method="POST" action="php_link.php" id="signup-form" enctype="multipart/form-data">
					<span class="login100-form-title p-b-49">
						Insert Product
					</span>
					
					<div class="wrap-input100 validate-input m-b-23" data-validate = "Your nameproduct">
						<span class="label-input100">nameproduct</span>
						<input class="input100" type="text" name="nameproduct" placeholder="Your nameproduct" required>
						<span class="focus-input100" data-symbol="&#xf206;"></span>
					</div>
					<div class="wrap-input100 validate-input m-b-23" data-validate = "Yourcategory">
						<select name="category" class="wrap-input100 validate-input m-b-23" required>
							<option value="">--เลือก--</option>
							<?php 
							$sql = "SELECT * FROM tb_type";
                            $result = mysqli_query($conn,$sql); 
                            
							while($row = mysqli_fetch_assoc($result)){?>
                                <option value="<?php echo $row['id_type']; ?>"><?php echo $row['name_type']; ?></option>   
							<?php }
							?>
						</select>
					</div>
					<div class="wrap-input100 validate-input m-b-23" data-validate = "Your number">
						<span class="label-input100">number</span>
						<input class="input100" type="number" name="number" placeholder="Type Your number" required>
						<span class="focus-input100" data-symbol="&#xf206;"></span>
					</div>
					<div class="wrap-input100 validate-input m-b-23" data-validate = "your image">
						<span class="label-input100">image</span>
						<input class="input100" type="file" name="image" placeholder="Type your image" required>
						<span class="focus-input100" data-symbol="&#xf206;"></span>
					</div>
					<div class="wrap-input100 validate-input m-b-23" data-validate = "your price">
						<span class="label-input100">price</span>
						<input class="input100" type="number" name="price" placeholder="Type your price" required>
						<span class="focus-input100" data-symbol="&#xf206;"></span>
					</div>
										
					<div class="container-login100-form-btn">

						<input type="hidden" name="cmd" value="insert" >	
					<input type="submit" class="btn btn-outline-info btn-lg btn-block" value="Insert">
					</div>		
				</form>
			</div>
		</div>
	</div>
	

	<div id="dropDownSelect1"></div>
	
<!--===============================================================================================-->
	<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/bootstrap/js/popper.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/daterangepicker/moment.min.js"></script>
	<script src="vendor/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
	<script src="vendor/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->
	<script src="js/main.js"></script>

</body>
</html>