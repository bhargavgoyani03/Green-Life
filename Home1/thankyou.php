<?php
session_start();
error_reporting(0);

 include('connection.php');
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- The above 4 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <!-- Title -->
    <title>Green Life</title>

    <!-- Favicon -->
    <link rel="icon" href="F.png">

    <!-- Core Stylesheet -->
    <link rel="stylesheet" href="style.css">

</head>

<body>
    <!-- Preloader -->
    <div class="preloader d-flex align-items-center justify-content-center">
        <div class="preloader-circle"></div>
        <div class="preloader-img">
            <img src="img/core-img/leaf.png" alt="">
        </div>
    </div>

    <!-- ##### Header Area Start ##### -->
    <?php include('header.php');?>
    <!-- ##### Header Area End ##### -->

    <!-- ##### Breadcrumb Area Start ##### -->
    <div class="breadcrumb-area">
        <!-- Top Breadcrumb Area -->
        <div class="top-breadcrumb-area bg-img bg-overlay d-flex align-items-center justify-content-center" style="background-image: url(4.jpeg);">
            <h2>Thank you</h2>
        </div>

        <div class="container">
            <div class="row">
                <div class="col-12">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="#"><i class="fa fa-home"></i> Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Thank you</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>
    <!-- ##### Breadcrumb Area End ##### -->
    
		<!--Main Content-->
		<div class="container p-5">
			<div class="checkout-success-content py-2">
				<!--Order Card-->
				<div class="row">
					<div class="col-12 col-sm-12 col-md-12 col-lg-12">
						<div class="checkout-scard card border-0 rounded">
							<div class="card-body text-center">
								<p class="card-icon"><i class="icon an an-shield-check fs-1"></i></p>
								<h4 class="card-title">Thank you for your order!</h4>
								<h5>Order Requested : <?php echo $billno; ?></h5>
								<!--     -->
								<p class="card-text mb-1">Thank you for being a part of Green Life.</p>
								<p class="card-text text-order badge bg-success my-2"><i class="fa fa-phone"></i> <b>+91 12345 93652</b></p>
								<p class="card-text mb-0" class="d-inline-flex align-items-center btn rounded me-2 mb-2 me-sm-3"><a class="btn btn-outline-secondary" href="home.php">Continue Shopping</a></p>
								<!-- <p class="card-text mb-0" style="margin-top:15px;"><i class="fa fa-envelope"></i> <b style="font-size:15px;">customercare@hakimijewellery.com</b></p> -->
							</div>
						</div>
					</div>
				</div>
				<!--End Order Card-->
				
			</div>
		</div>
		<!--End Main Content-->

    <!-- ##### Footer Area Start ##### -->
    <?php include('footer.php');?>
    <!-- ##### Footer Area End ##### -->
   
    <!-- ##### All Javascript Files ##### -->
    <!-- jQuery-2.2.4 js -->
    <script src="js/jquery/jquery-2.2.4.min.js"></script>
    <!-- Popper js -->
    <script src="js/bootstrap/popper.min.js"></script>
    <!-- Bootstrap js -->
    <script src="js/bootstrap/bootstrap.min.js"></script>
    <!-- All Plugins js -->
    <script src="js/plugins/plugins.js"></script>
    <!-- Active js -->
    <script src="js/active.js"></script>
</body>

</html>