<?php
// Start the session
session_start();
error_reporting(0);
// $_SESSION['R_id'] = $Rid;
?>
<?php 
    // include('connection.php');

$servername = "localhost";
$username = "root";
$passwordDB = "";
$database = "glife";
$email = $_SESSION['user_email'];
$conn = mysqli_connect($servername,$username,$passwordDB,$database);
// echo $email;
$sql = "SELECT * FROM user WHERE email = '$email'";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            $R_id = $row['R_id'];
        }
    }
    $_SESSION['R_id']=$R_id;
if(!$conn)
{
    echo 'Connection Fail';
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

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
            <img src="images/leaf.png" alt="">
        </div>
    </div>

    <!-- ##### Header Area Start ##### -->
    <?php include('header.php');?>
    <!-- ##### Header Area End ##### -->

    <!-- ##### Hero Area Start ##### -->
    <section class="hero-area">
        <div class="hero-post-slides owl-carousel">

            <!-- Single Hero Post -->
            <div class="single-hero-post bg-overlay">
                <!-- Post Image -->
                <div class="slide-img bg-img" style="background-image: url(4.jpeg);"></div>
                <!-- <div class="container h-100"> -->
                <div class="row h-100 align-items-center">
                    <div class="col-12">
                        <!-- Post Content -->
                        <div class="hero-slides-content text-center">
                            <h2>Welcome to "Green Life!"</h2>
                            <h2>Plants exist in the weather and light</h2>
                            <h2> rays that surround them</h2>
                            <div class="welcome-btn-group">
                                <a href="Register.php" class="btn alazea-btn mr-30">GET STARTED</a>
                                <a href="about.php" class="btn alazea-btn active">About US</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- ##### Hero Area End ##### -->
        <!-- ##### Product Area Start ##### -->
        <section class="new-arrivals-products-area bg-gray section-padding-100">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <!-- Section Heading -->
                        <div class="section-heading text-center">
                            <h2>Products</h2>
                        </div>
                    </div>
                </div>
                <div class="row">

                    <!-- Single Product Area -->
                    <div class="col-12 col-sm-6 col-lg-3">
                        <div class="single-product-area mb-50 wow fadeInUp" data-wow-delay="100ms">
                            <!-- Product Image -->
                            <div class="product-img">
                                <a href="#"><img src="img/bg-img/9.jpg" alt=""></a>
                                    <!-- <div class="product-meta d-flex">
                                    <a href="#" class="wishlist-btn"><i class="icon_heart_alt"></i></a>
                                    <a href="#" class="add-to-cart-btn">Add to cart</a>
                                    <a href="#" class="compare-btn"><i class="arrow_left-right_alt"></i></a>
                                </div> -->
                            </div>
                            <!-- Product Info -->
                            <div class="product-info mt-15 text-center">
                                <a href="shop-details.html">
                                    <p>Opuntia</p>
                                </a>
                            </div>
                        </div>
                    </div>
                    <!-- Single Product Area -->
                    <div class="col-12 col-sm-6 col-lg-3">
                        <div class="single-product-area mb-50 wow fadeInUp" data-wow-delay="200ms">
                            <!-- Product Image -->
                            <div class="product-img">
                                <a href="#"><img src="img/bg-img/10.jpg" alt=""></a>
                                <!-- <div class="product-meta d-flex">
                                    <a href="#" class="wishlist-btn"><i class="icon_heart_alt"></i></a>
                                    <a href="#" class="add-to-cart-btn">Add to cart</a>
                                    <a href="#" class="compare-btn"><i class="arrow_left-right_alt"></i></a>
                                </div> -->
                            </div>
                            <!-- Product Info -->
                            <div class="product-info mt-15 text-center">
                                <a href="#">
                                    <p>Pink Lotus</p>
                                </a>
                            </div>
                        </div>
                    </div>

                    <!-- Single Product Area -->
                    <div class="col-12 col-sm-6 col-lg-3">
                        <div class="single-product-area mb-50 wow fadeInUp" data-wow-delay="300ms">
                            <!-- Product Image -->
                            <div class="product-img">
                                <a href="#"><img src="img/bg-img/11.jpg" alt=""></a>
                                <!-- <div class="product-meta d-flex">
                                    <a href="#" class="wishlist-btn"><i class="icon_heart_alt"></i></a>
                                    <a href="cart.html" class="add-to-cart-btn">Add to cart</a>
                                    <a href="#" class="compare-btn"><i class="arrow_left-right_alt"></i></a>
                                </div> -->
                            </div>
                            <!-- Product Info -->
                            <div class="product-info mt-15 text-center">
                                <a href="#">
                                    <p>Cactus</p>
                                </a>
                            </div>
                        </div>
                    </div>

                    <!-- Single Product Area -->
                    <div class="col-12 col-sm-6 col-lg-3">
                        <div class="single-product-area mb-50 wow fadeInUp" data-wow-delay="400ms">
                            <!-- Product Image -->
                            <div class="product-img">
                                <a href="#"><img src="img/bg-img/12.jpg" alt=""></a>
                                <!-- <div class="product-meta d-flex">
                                    <a href="#" class="wishlist-btn"><i class="icon_heart_alt"></i></a>
                                    <a href="cart.html" class="add-to-cart-btn">Add to cart</a>
                                    <a href="#" class="compare-btn"><i class="arrow_left-right_alt"></i></a>
                                </div> -->
                            </div>
                            <!-- Product Info -->
                            <div class="product-info mt-15 text-center">
                                <a href="#">
                                    <p>Bonsai</p>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 text-center">
                        <a href="product.php" class="btn alazea-btn">More</a>
                    </div>
                </div>
            </div>
        </section>
        <!-- ##### Product Area End ##### -->
<?php include('footer.php');?>
<!-- <Session destroy go to login page> -->
<!-- <?php
// include 'connection.php';
// {
//     session_destroy(); 
//     if(isset($_POST["log"]))
//     {
//     header("locaiton:Login.php");
//     }
// }
?> -->
<!-- <end session> -->

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