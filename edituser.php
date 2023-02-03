<?php
include("connect.php");

$id_person=$_GET['id_person'];

    $sql = "SELECT * FROM tb_customer where id_person='$id_person'";
    $query = mysqli_query($conn,$sql);
    $obj = mysqli_fetch_array($query,MYSQLI_ASSOC);
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
		<div class="container-login100" style="background-image: url('img/bg-05.jpg');">
			<div class="wrap-login100 p-l-55 p-r-55 p-t-65 p-b-54">
				<form class="login100-form validate-form" method="POST" action="php_link.php" id="signup-form">
					<span class="login100-form-title p-b-49">
						Register
					</span>
					
					<div class="wrap-input100 validate-input m-b-23" data-validate = "Your num_person">
						<span class="label-input100">Number_person</span>
						<input class="input100" type="text" name="num_person" value ="<?php echo $obj['num_person'];?>">
						<span class="focus-input100" data-symbol="&#xf206;"></span>
					</div>
					<div class="wrap-input100 validate-input m-b-23" data-validate = "Your prefix">
						<select name="prefix" class="wrap-input100 validate-input m-b-23" required>
							<option value="">--เลือก--</option>
							<option <?php if($obj['prefix']=='Mr.'){echo "selected";} ?> value="Mr.">Mr.</option>
							<option <?php if($obj['prefix']=='Mrs.'){echo "selected";} ?> value="Mrs.">Mrs.</option>
							
						</select>
					</div>
					<div class="wrap-input100 validate-input m-b-23" data-validate = "Your firstname">
						<span class="label-input100">Firstname</span>
						<input class="input100" type="text" name="firstname" value ="<?php echo $obj['firstname'];?>">
						<span class="focus-input100" data-symbol="&#xf206;"></span>
					</div>
					<div class="wrap-input100 validate-input m-b-23" data-validate = "your lastname">
						<span class="label-input100">Lastname</span>
						<input class="input100" type="text" name="lastname" value ="<?php echo $obj['lastname'];?>">
						<span class="focus-input100" data-symbol="&#xf206;"></span>
					</div>
					<div class="wrap-input100 validate-input m-b-23" data-validate = "your username">
						<span class="label-input100">Username</span>
						<input class="input100" type="text" name="username" value ="<?php echo $obj['username'];?>">
						<span class="focus-input100" data-symbol="&#xf206;"></span>
					</div>
					<div class="wrap-input100 validate-input" data-validate="your password">
						<span class="label-input100">Password</span>
						<input class="input100" type="text" name="password" value ="<?php echo $obj['password'];?>">
						<span class="focus-input100" data-symbol="&#xf190;"></span>
					</div>
					<div class="wrap-input100 validate-input m-b-23" data-validate = "your gmail">
						<span class="label-input100">Gmail</span>
						<input class="input100" type="text" name="gmail" value ="<?php echo $obj['gmail'];?>">
						<span class="focus-input100" data-symbol="&#xf206;"></span>
					</div>
					<div class="wrap-input100 validate-input m-b-23" data-validate = "your tel">
						<span class="label-input100">Tel</span>
						<input class="input100" type="text" name="tel" value ="<?php echo $obj['tel'];?>">
						<span class="focus-input100" data-symbol="&#xf206;"></span>
					</div>
					<div class="wrap-input100 validate-input m-b-23" data-validate = "your address">
						<span class="label-input100">Address</span>
						<input class="input100" type="address" name="address" value ="<?php echo $obj['address'];?>">
						<span class="focus-input100" data-symbol="&#xf206;"></span>
					</div>
					
							
					<div class="container-login100-form-btn">

						<input type="hidden" name="cmd" value="edituser" >
						<input type="hidden" name="id_person" value ="<?php echo $id_person; ?>" >		
					<input type="submit" class="btn btn-outline-info btn-lg btn-block" value="Update">
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