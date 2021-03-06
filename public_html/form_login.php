<?php
session_start();
if (isset($_SESSION['banana'])) {
	header("Location:home.php");
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
	<title>Login V2</title>
	<meta charset="UTF-8">
	<noscript>
		<meta http-equiv="Refresh" content="1;   url=404js.html"></noscript>
	<link rel="shortcut icon" type="image/x-icon" href="vendor/img/logo_orange.ico">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!--===============================================================================================-->
	<link rel="icon" type="image/png" href="vendor/images/icons/favicon.ico" />
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/fonts/iconic/css/material-design-iconic-font.min.css">
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
	<link rel="stylesheet" type="text/css" href="vendor/css/cadastro_util.css">
	<link rel="stylesheet" type="text/css" href="vendor/css/cadastro_main.css">
	<!--===============================================================================================-->
</head>

<body>

	<div class="container-login100">
		<div class="wrap-login100">
			<form class="login100-form validate-form">
				<span class="login100-form-title p-b-48">
					<img src="vendor/img/logo/logo_orange.svg" width="80px">
				</span>

				<div class="wrap-input100 validate-input" data-validate="Valid email is: a@b.c">
					<input class="input100" type="text" name="email_login">
					<span class="focus-input100" data-placeholder="Email"></span>
				</div>

				<div class="wrap-input100 validate-input mt-4" data-validate="Enter password">
					<span class="btn-show-pass">
						<i class="zmdi zmdi-eye"></i>
					</span>
					<input class="input100" type="password" name="senha_login">
					<span class="focus-input100" data-placeholder="Password"></span>
				</div>

				<div class="container-login100-form-btn">
					<div class="wrap-login100-form-btn">
						<div class="login100-form-bgbtn"></div>
						<button class="login100-form-btn">
							Login
						</button>
					</div>
				</div>
			</form>
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
	<script src="vendor/js/cadastro_main.js"></script>

</body>

</html>