<?php
include 'connection.php';
include 'common_function.php';
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
    <style>
        .btn{
            background-color:#074f0b; 
            color:#fff;
            width:50%;
            text-align:center;
            font-size:20px;
            padding:1px 1px;
            border-radius:2px;
            cursor:pointer;
            margin-top:1rem;
        }
       
        .heading{
            text-align:center;
            font-size:2.5rem;
            text-transform:uppercase;
            color:var(--black);
            margin-bottom: 2rem;
        }

        .box-container{
            display:grid;
            grid-template-columns:repeat(auto-fit,16rem);
            gap:1.5rem;
        }

        .box{
            text-align:center;
            padding:2px;
            box-shadow: 0 10px 10px rgba(0, 0, 0, 25),0 10px 10px rgba(0, 0, 0, 22);
            border-color: white;
            border-radius: 20px;
            padding-top: 30px;
            opacity: 0.9;
            background-color: white; 
            transition: #f2f2f2;
        }

        img{
            height:10rem;
        }

        h3{
            margin:1rem 0;
            font-size:20px;
            color:var(--black);
        }

        .price{
            font-size:20px;
            color:var(--black);
        }


    </style>

</head>

<body>
    

    <!-- ##### Header Area Start ##### -->
    <?php include('header.php');?>
    <!-- ##### Header Area End ##### -->

    <!-- ##### Breadcrumb Area Start ##### -->
    <div class="breadcrumb-area">
        <!-- Top Breadcrumb Area -->
        <div class="top-breadcrumb-area bg-img bg-overlay d-flex align-items-center justify-content-center" style="background-image: url(4.jpeg);">
            <h2>Product</h2>
        </div>

        <div class="container">
            <div class="row">
                <div class="col-12">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="#"><i class="fa fa-home"></i> Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Product</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>
    <!-- ##### Breadcrumb Area End ##### -->

    <!-- ##### Shop Area Start ##### -->
    <div class="container">    
        <section class="products">
                <div class="box-container">
                <?php
                      search_product();
                ?>
                   
                </div>
        </section>
    </div>
   
   
    <!-- Add to cart php code  -->
    <?php
        if(isset($_POST['add_to_cart'])){
            $product_name = $_POST['product_name'];
            $product_image = $_POST['product_image'];
            $product_price = $_POST['product_price'];
            $product_qty = 1;

            $select_cart = mysqli_query($conn,"SELECT * FROM `cart` WHERE name = '$product_name' ");
            
            if(mysqli_num_rows($select_cart) > 0){
                echo "product already added to cart";
            }else{
                $insert_product = mysqli_query($conn,"INSERT INTO  `cart` (name,image,price,qty) VALUES('$product_name',' $product_image','$product_price','$product_qty')");
                echo "product added to cart successfully";
            }
        }
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