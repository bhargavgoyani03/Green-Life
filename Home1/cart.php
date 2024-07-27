<?php
include 'connection.php';
?>

<?php
    if(isset($_POST['update_btn'])){
        $update_value = $_POST['update_qty'];
        $update_id = $_POST['update_qty_id'];
        $update_qty_query = mysqli_query($conn,"UPDATE `cart` SET qty = '$update_value' WHERE cart_id ='$update_id'");
        if($update_qty_query){
            header('location:cart.php');
        }
    }

    if(isset($_GET['remove'])){
        $remove_id = $_GET['remove'];
        mysqli_query($conn,"DELETE FROM `cart` WHERE cart_id = '$remove_id' ");
        header('location:cart.php');
    }

    if(isset($_GET['delete_all'])){
        mysqli_query($conn,"DELETE FROM `cart`");
        header('location:cart.php');
    }
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

        .shopping-cart table{
            text-align:center;
            width:100% ;
        }

        .favi{
            height: 50px;
        }
        
        .shopping-cart table thead th{
            padding:1rem;
            font-size:1rem;
            color:var(--white);
            background-color:#074f0b; 
        }

        .shopping-cart table tr td{
            border-bottom:var(--border);
            padding:1rem;
            font-size:1rem;
            color:black;
        }

        .btn{
            background-color:#074f0b;
            color:#fff;
            padding:3px;
            height: 30px;
            width:80px;
        }

    </style>

</head>

<body>
    <!-- Preloader -->
    <div class="preloader d-flex align-items-center justify-content-center">
        <div class="preloader-circle"></div>
        <div class="preloader-img">
            <img src="img/core-img/leaf.png" alt="" class="favi">
        </div>
    </div>

    <!-- ##### Header Area Start ##### -->
    <?php include('header.php');?>
    <!-- ##### Header Area End ##### -->

    <!-- ##### Breadcrumb Area Start ##### -->
    <div class="breadcrumb-area">
        <!-- Top Breadcrumb Area -->
        <div class="top-breadcrumb-area bg-img bg-overlay d-flex align-items-center justify-content-center" style="background-image: url(4.jpeg);">
            <h2>Shopping Cart</h2>
        </div>

        <div class="container">
            <div class="row">
                <div class="col-12">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="#"><i class="fa fa-home"></i> Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Cart</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>
    <!-- ##### Breadcrumb Area End ##### -->

    <!-- ##### Shopping Cart Area Start ##### -->
    <div class="container mb-5">    
       <section class="shopping-cart">
            <table>
                <thead>
                    <th>Name</th>
                    <th>Price</th>
                    <th>Quantity</th>
                    <th>Total Price</th>
                    <th>Action</th>
                </thead>
                <tbody>
                    <?php
                        $select_cart = mysqli_query($conn,"SELECT * FROM `cart` ");
                        $grand_total = 0 ; 
                        if(mysqli_num_rows($select_cart) > 0){
                            while($fetch_cart = mysqli_fetch_assoc($select_cart)){
                    ?>
                    <tr>           
                        
                        <td><?php echo $fetch_cart['name']; ?> </td>
                        <td><?php echo number_format($fetch_cart['price']); ?> </td>
                        <td>
                            <form action="" method="POST">
                            <input type="hidden" name="update_qty_id"  value="<?php echo $fetch_cart['cart_id']; ?>">
                                <input type="number" name="update_qty" min="1" value="<?php echo $fetch_cart['qty']; ?>">
                                <input type="submit" value="Update" name="update_btn" class="btn">
                            </form>
                        </td>
                        <td><?php echo $sub_total = number_format($fetch_cart['price'] * $fetch_cart['qty']); ?> /- </td>
                        <td><a href="cart.php?remove=<?php echo $fetch_cart['cart_id'];?>" onclick="return confirm('Remove item from cart?')" class="btn">  Remove </a> </td>
                    </tr>
                    
                    <?php
                    $grand_total = $grand_total + $fetch_cart['price'] * $fetch_cart['qty'] ;
                        };
                    };      
                
                    ?>
                    <tr>
                        <td><a href="product.php" class="option-btn" style="margin-top: 0;">Continue Shopping</a></td>
                        <td colspan="2">Grand Total</td>
                        <td><?php echo $grand_total; ?></td>
                        <td><a href="cart.php?delete_all" onclick="return confirm ('Are you sure you want to delete all?');" class="btn">Delete all</a></td>
                    </tr>
                    <!-- <tr>
                    <td colspan="5"><a href="cart.php?Checkout" onclick="return confirm ('Are you sure you want to Checkout?');" class="btn">Checkout</a></td>
                    </tr> -->
                </tbody>
            </table> 
      
                <!-- Cart Totals -->
                <div class="col-12 col-lg-6">
                    <div class="cart-totals-area mt-70">
                        <h5 class="title--">Cart Total</h5>
                        <div class="subtotal d-flex justify-content-between">
                            <h5>Subtotal</h5>
                            <h5><?php echo $grand_total; ?></h5>
                        </div>
                        <!-- <div class="shipping d-flex justify-content-between">
                            <h5>Shipping</h5>
                            <div class="shipping-address">
                                <form action="#" method="post">
                                    <select class="custom-select">
                                      <option selected="">Country</option>
                                      <option value="1">USA</option>
                                      <option value="2">Latvia</option>
                                      <option value="3">Japan</option>
                                      <option value="4">Bangladesh</option>
                                    </select>
                                    <input type="text" name="shipping-text" id="shipping-text" placeholder="State">
                                    <input type="text" name="shipping-zip" id="shipping-zip" placeholder="ZIP">
                                    <button type="submit">Update Total</button>
                                </form>
                            </div>
                        </div> -->
                        <div class="total d-flex justify-content-between">
                            <h5>Total</h5>
                            <h5><?php echo $grand_total; ?></h5>
                        </div>  
                        <div class="checkout-btn">
                            <a href="checkout.php" style="height:50px" class="btn alazea-btn w-100">PROCEED TO CHECKOUT</a>
                        </div>
                    </div>
                </div>
            </div>

       <section>
    </div>
    <?php include('footer.php');?>
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