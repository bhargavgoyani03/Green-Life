<?php
	error_reporting(0);
?>

<!doctype html>
<html lang="en">

<head>

	<title>Green Life</title>
	<link rel="icon" href="F.png">

	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<link href="https://fonts.googleapis.com/css?family=Lato:300,400,700&display=swap" rel="stylesheet">

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

	<link rel="stylesheet" href="css/stylea.css">

</head>

<body class="img js-fullheight" style="background-image: url(images/22.jpg);">
	<section class="ftco-section">
		<div class="container">
			<div class="row justify-content-center">
			</div>
			<div class="row justify-content-center">
				<div class="col-md-6 col-lg-4">
					<div class="login-wrap p-0">
						<h3 class="mb-4 text-center">Login in to Your Account</h3>
						<form action="gdashbord.php" class="signin-form" method="POST">
							<div class="form-group">
								<input type="text" name="emaila" class="form-control" placeholder="Email address" value='<?php echo isset($_COOKIE['aemail']) ? $_COOKIE['aemail'] : ''; ?>' required>
							</div>
							<div class="form-group">
								<input id="password-field" name="passa" type="password" class="form-control" placeholder="Password" value='<?php echo isset($_COOKIE['apass']) ? $_COOKIE['apass'] : ''; ?>' required>
								<span toggle="#password-field" class="fa fa-fw fa-eye field-icon toggle-password"></span>
							</div>
							<div class="form-group">
								<button type="submit" class="form-control btn submit px-3" style='background-color:#074f0b; color:#fff;'>Sign In</button>
							</div>
							<div class="form-group d-md-flex">
								<div class="w-50">
									<label class="checkbox-wrap checkbox" style='color:#074f0b;' name="remember">Remember Me
										<input type="checkbox" style='color:#074f0b;'>
										<span class="checkmark" style="color:#074f0b;"></span>
									</label>
								</div>
								<div class="w-50 text-md-right">
									<a href="#" style='color:#074f0b;'>Forgot Password ?</a>
								</div>
							</div>
						</form>

					</div>
				</div>
			</div>
		</div>
	</section>

	<script src="js/jquery.mina.js"></script>
	<script src="js/popper.js"></script>
	<script src="js/bootstrap.mina.js"></script>
	<script src="js/maina.js"></script>

</body>

</html>