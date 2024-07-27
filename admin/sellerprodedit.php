<?php
	error_reporting(0);
?>
<!doctype html>
<html lang="en">
<?php

$servername = "localhost";
$username = "root";
$password = "";
$database = "glife";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $database);

?>


<head>
    <style>

    </style>
    <title>Green Life</title>
    <!-- Favicon -->
    <link rel="icon" href="F.png">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800,900" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>


    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="css/style.css">
</head>

<body>

    <div class="wrapper d-flex align-items-stretch">
        <nav id="sidebar" style="background-color:#043b07;">
            <div class="p-4 pt-5">

                <a href="#" class="img logo rounded-circle mb-5" style="background-image: url(pot.jpg);"></a>
                <ul class="list-unstyled components mb-5">
                    <li>
                    <li>
                        <a href="SellerD.php">Home</a>
                    </li>
                    <li>
                        <a href="sellerProfile.php">Profile</a>
                    </li>
                    <li>
                        <a href="SellerProdcut.php">Product</a>
                    </li>
                </ul>
            </div>
        </nav>



        <!-- Page Content  -->
        <div id="content" class="p-4 p-md-5">
            <nav class="navbar navbar-expand-lg navbar-light bg-light">
                <div class="container-fluid">
                    <button type="button" id="sidebarCollapse" class="btn btn-primary">
                        <i class="fa fa-bars"></i>
                        <span class="sr-only">Toggle Menu</span>
                    </button>
                    <button class="btn btn-dark d-inline-block d-lg-none ml-auto" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <i class="fa fa-bars"></i>
                    </button>
                    <h1><span style="color:green">Green </span> Life </h1>
                </div>
            </nav>
            <h2> Edit Seller Product </h2>
            <?php
            $id = $_GET['Prod_id'];
            $sellerprodedit = " select * from product where Prod_id='$id' LIMIT 1";
            $sellerprodedit_run = mysqli_query($conn, $sellerprodedit);

            if (mysqli_num_rows($sellerprodedit_run)  > 0) {
                $row = mysqli_fetch_array($sellerprodedit_run);
            ?>


                <form action="sellerprodupdate.php" method="POST">
                    <input type="hidden" name="Prod_id" value="<?php echo $row['Prod_id']; ?>">
                    <div class="row justify-content-center mt-3">
                        <div class="col-xl-8">
                            <div class="form-group row">
                                <label class="form-label" for="customFile">Product Name:</label>
                                <input name="name" type="text" class="form-control" id="name" placeholder="Enter product name" value="<?php echo $row['Prod_name']; ?>" />
                            </div>

                            <div class="form-group row">
                                <label class="form-label" for="customFile">Select Product category:</label>
                                <select name="prodcat" type="select" class="form-control" id="select" Disabled>
                                    <option>1 Tools</option>
                                    <option>2 Plant</option>
                                    <option>3 Pots</option>
                                    <option>4 Seeds</option>
                                </select>
                            </div>

                            <div class="form-group row">
                                <label class="form-label" for="customFile">Product Description:</label>
                                <textarea name="desc" class="form-control" id="desc" placeholder="Enter product description"><?php echo $row['Prod_description']; ?></textarea>
                            </div>

                            <div class="form-group row">
                                <label class="form-label" for="customFile">Product Price :</label>
                                <input name="price" type="text" class="form-control" id="price" placeholder="Enter product price" value="<?php echo $row['Prod_price']; ?>" />
                            </div>

                            <div class="form-group row">
                                <label class="form-label" for="customFile">Product Quantity :</label>
                                <input name="qty" type="text" class="form-control" id="qty" placeholder="Enter product quantity" value="<?php echo $row['prod_qt']; ?>" />
                            </div>

                            <div class="text-center">
                                <button type="reset" class="btn btn-danger">Cancle</button>&nbsp;&nbsp;
                                <button type="submit" name="update" class="btn" style="background-color:#074f0b; color:#fff">Update</button>
                            </div>
                        </div>
                    </div>

                <?php
            } else {
                ?>
                    <h4> no record </h4>
                <?php
            }

                ?>
        </div>
    </div>
    </form>

    <script src="js/jquery.min.js"></script>
    <script src="js/popper.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/main.js"></script>

</body>

</html>