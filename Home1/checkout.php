<?php
// Start the session
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
            <h2>Checkout</h2>
        </div>

        <div class="container">
            <div class="row">
                <div class="col-12">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="#"><i class="fa fa-home"></i> Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Checkout</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>
    <!-- ##### Breadcrumb Area End ##### -->
    
    <!-- ##### Checkout Area Start ##### -->
    <div class="container mb-100">
        <div class="container">
        <form action="" method="post">
            <div class="row justify-content-between">
                <div class="col-12 col-lg-7">
                    <div class="checkout_details_area clearfix">
                        <h5>Billing Details</h5>
                        
                            <div class="row">
                                <div class="col-md-6 mb-4">
                                    <label for="firstname">First Name *</label>
                                    <input type="text" name="firstname" class="form-control"  value="" required>
                                </div>
                                <div class="col-md-6 mb-4">
                                    <label for="last_name">Last Name *</label>
                                    <input type="text" name="lastname" class="form-control" value="" required>
                                </div>
                                <div class="col-12 mb-4">
                                    <label for="email_address">Email Address *</label>
                                    <input type="email" name="emailid" class="form-control" value="">
                                </div>
                                <div class="col-12 mb-4">
                                    <label for="phone_number">Phone Number *</label>
                                    <input type="number" name="phonenumber" class="form-control" min="0" value="">
                                </div>
                                <div class="col-12 mb-4">
                                    <label for="company">Address *</label>
                                    <input type="text" name="address" class="form-control" value="">
                                </div>
                                <div class="col-md-6 mb-4">
                                    <label for="city">City *</label>
                                    <input type="text"  name="city"class="form-control" value="">
                                </div>
                                <div class="col-md-6 mb-4">
                                    <label for="state">State *</label>
                                    <input type="text"  name="state" class="form-control" value="">
                                </div>
                                <div class="col-md-6 mb-4">
                                    <label for="postcode">Pincode</label>
                                    <input type="text" name="zip" class="form-control" value="">
                                </div>
                                
                                <div class="col-12">
                                    <div class="d-flex align-items-center">
                                        <!-- Single Checkbox -->
                                        <div class="custom-control custom-checkbox d-flex align-items-center mr-30">
                                            <input type="checkbox" class="custom-control-input" id="customCheck1">
                                            <label class="custom-control-label" for="customCheck1">Cash on delivery</label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        
                    </div>
                </div>
                
                    <?php
                        // $select_cart = mysqli_query($conn,"SELECT * FROM `cart` ");
                        // $grand_total = 0 ; 
                        // if(mysqli_num_rows($select_cart) > 0){
                        //     while($fetch_cart = mysqli_fetch_assoc($select_cart)){
                            $sql = "SELECT *,sum(price) as price FROM `cart`";
                            $result = mysqli_query($conn,$sql);
                            $temp = mysqli_fetch_array($result);
                            $price = $temp['price'];
                    ?>
                
                <div class="col-12 col-lg-4">
                    <div class="checkout-content">
                        <h5 class="title--">Your Order</h5>
                        <div class="products">
                            <?php
                            //$grand_total = $grand_total + $fetch_cart['price'] * $fetch_cart['qty'] ;
                            ?>    
                            <div class="products-data">
                                    <h5>Products:</h5>
                                    <div class="single-products d-flex justify-content-between align-items-center">
                                        <p>Recuerdos Plant</p>
                                        <h5><?php echo $price; ?></h5>
                                    </div>
                                </div>
                            </div>
                            <div class="subtotal d-flex justify-content-between align-items-center">
                                <h5>Subtotal</h5>
                                <h5><?php echo $price; ?></h5>
                            </div>
                            <div class="order-total d-flex justify-content-between align-items-center">
                                <h5>Order Total</h5>
                                <h5><?php echo $price; ?></h5>
                            </div>
                            <div class="checkout-btn mt-30">
                                <button type="submit1" id="submit1" name="submit1" class="btn alazea-btn w-100">Place Order</button>
                            </div>
                        </div>
                    </div>
                </div>
                <?php //} } ?>
            </div>
            </form>
            
        </div>
    </div>
    <!-- ##### Checkout Area End ##### -->

    <!-- ##### Footer Area Start ##### -->
    <?php include('footer.php');?>
    <!-- ##### Footer Area End ##### -->
    <?php
    if (isset($_REQUEST['submit1'])) {
        $firstname = $_REQUEST['firstname'];
        $lastname = $_REQUEST['lastname'];
        $emailid = $_REQUEST['emailid'];
        $phonenumber = $_REQUEST['phonenumber'];
        $address = $_REQUEST['address'];
        $city = $_REQUEST['city'];
        $state = $_REQUEST['state'];
        $zip = $_REQUEST['zip'];

        $sql = "INSERT INTO checkout(firstname,lastname,emailid,phonenumber,address,city,state,zip) 
        VALUES('$firstname','$lastname','$emailid','$phonenumber','$address','$city','$state','$zip')";
        $insert = mysqli_query($conn,$sql);
        if($insert){ 
            //header('Location:http://localhost:8080/Glife/Home1/thankyou.php');
            echo "<script>window.location.href='thankyou.php'</script>";
        }else{
            echo "not working";
        }
    }
    // else {
    //     echo "error:" . mysqli_error($conn);
    // }
    ?>
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



