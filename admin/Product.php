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
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $productname = $_POST['name'];
    $category = $_POST['prodcat'];
    $description = $_POST['desc'];
    $price = $_POST['price'];
    $qty = $_POST['qty'];

    if (empty($_POST["name"])) {
        echo "Product name is required";
    }

    if (empty($_POST["desc"])) {
        echo "Product description is required";
    }

    if (empty($_POST["price"])) {
        echo "Product price is required";
    } elseif (!is_numeric($price) && is_float($price)) {
        echo "<p><span class='error'>Price should be numeric</span></p>";
    }

    if (empty($_POST["qty"])) {
        echo "Product quantity is required";
    }
}
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
                        <i class="bi bi-house"></i>
                        <a href="gdashbord.php">Home</a>
                    </li>
                    <li>
                        <a href="users.php">User</a>

                    </li>
                    <li>
                        <a href="Portfolio.php">Portfolio</a>
                    </li>
                    <li>
                        <a href="Product.php">Product</a>
                    </li>
                    <li>
                        <a href="post.php">Post</a>
                    </li>
                    <li>
                        <a href="Faqs.php">FAQs</a>
                    </li>
                    <!-- <li>
                        <a href="Report.php">Report</a>
                    </li> -->
                    <li>
                        <a href="Logout.php">Logout</a>
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


            <ul class="nav nav-tabs" id="myTab" role="tablist">
                <li class="nav-item " role="presentation">
                    <button class="nav-link active" id="prod-tab" data-bs-toggle="tab" data-bs-target="#prod" type="button" role="tab" aria-controls="prod" aria-selected="true">Product</button>
                </li>
                &nbsp;
                <li class="nav-item" role="presentation">
                    <button class="nav-link" id="prodform-tab" data-bs-toggle="tab" data-bs-target="#prodform" type="button" role="tab" aria-controls="detail" aria-selected="false">New Product Form</button>
                </li>
                &nbsp;
                <li class="nav-item" role="presentation">
                    <button class="nav-link" id="detail-tab" data-bs-toggle="tab" data-bs-target="#detail" type="button" role="tab" aria-controls="detail" aria-selected="false">Product Category</button>
                </li>
                &nbsp;        
                <li class="nav-item" role="presentation">
                    <button class="nav-link" id="addprod-tab" data-bs-toggle="tab" data-bs-target="#addprod" type="button" role="tab" aria-controls="addprod" aria-selected="false">Add New Product Category</button>
                </li>
                

            </ul>
            <div class="tab-content" id="myTabContent">
                <div class="tab-pane fade show active" id="prod" role="tabpanel" aria-labelledby="prod-tab">
                    <div class="row  mt-3">
                        <div class="col-xl-4 col-md-6">
                            <div class="card mb-4" style="background-color:#074f0b">
                                <div class="card-body">
                                    <h3 style="color:#fff;">Tools</h3>
                                    <?php
                                    $dash_tool_query = "SELECT * FROM product WHERE Prod_id=1";
                                    $dash_tool_query_run = mysqli_query($conn, $dash_tool_query);
                                    if ($Prod_idtotal = mysqli_num_rows($dash_tool_query_run)) {
                                        echo '<h4 class="mb-0" style="color:#fff;">' . $Prod_idtotal . '</h4>';
                                    } else {
                                        echo '<h4 class="mb-0" style="color:#fff;"> No data </h4>';
                                    }
                                    ?>

                                </div>
                                <div class="card-footer d-flex align-items-center justify-content-between">
                                    <a class="small text-black stretched-link" href="tool.php">View Details</a>
                                    <div class="small text-black"><i class="fa fa-angle-right"></i></div>
                                </div>
                            </div>
                            </div>
                            <div class="col-xl-4 col-md-6">
                            <div class="card mb-4" style="background-color:#074f0b">
                                <div class="card-body">
                                    <h3 style="color:#fff;">Plants</h3>
                                    <?php
                                    $dash_plant_query = "SELECT * FROM `product` WHERE Pc_id='2'";
                                    $dash_plant_query_run = mysqli_query($conn, $dash_plant_query);
                                    if ($Prod_idtotal = mysqli_num_rows($dash_plant_query_run)) {
                                        echo '<h4 class="mb-0" style="color:#fff;">' . $Prod_idtotal . '</h4>';
                                    } else {
                                        echo '<h4 class="mb-0" style="color:#fff;"> No data </h4>';
                                    }
                                    ?>

                                </div>
                                <div class="card-footer d-flex align-items-center justify-content-between">
                                    <a class="small text-black stretched-link" href="plant.php">View Details</a>
                                    <div class="small text-black"><i class="fa fa-angle-right"></i></div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4 col-md-6">
                            <div class="card mb-4" style="background-color:#074f0b">
                                <div class="card-body">
                                    <h3 style="color:#fff;">Pots</h3>
                                    <?php
                                    $dash_pot_query = "SELECT * from product WHERE Prod_id=3";
                                    $dash_pot_query_run = mysqli_query($conn, $dash_pot_query);
                                    if ($Prod_idtotal = mysqli_num_rows($dash_pot_query_run)) {
                                        echo '<h4 class="mb-0" style="color:#fff;">' . $Prod_idtotal . '</h4>';
                                    } else {
                                        echo '<h4 class="mb-0" style="color:#fff;"> No data </h4>';
                                    }
                                    ?>

                                </div>
                                <div class="card-footer d-flex align-items-center justify-content-between">
                                    <a class="small text-black stretched-link" href="pot.php">View Details</a>
                                    <div class="small text-black"><i class="fa fa-angle-right"></i></div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4 col-md-6">
                            <div class="card mb-4" style="background-color:#074f0b">
                                <div class="card-body">
                                    <h3 style="color:#fff;">Seeds</h3>
                                    <?php
                                    $dash_seed_query = "SELECT * from product WHERE Prod_id=4";
                                    $dash_seed_query_run = mysqli_query($conn, $dash_seed_query);
                                    if ($Prod_idtotal = mysqli_num_rows($dash_seed_query_run)) {
                                        echo '<h4 class="mb-0" style="color:#fff;">' . $Prod_idtotal . '</h4>';
                                    } else {
                                        echo '<h4 class="mb-0" style="color:#fff;"> No data </h4>';
                                    }
                                    ?>

                                </div>
                                <div class="card-footer d-flex align-items-center justify-content-between">
                                    <a class="small text-black stretched-link" href="seed.php">View Details</a>
                                    <div class="small text-black"><i class="fa fa-angle-right"></i></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <h3 style="text-align:center;">Total Product Detail</h3>
                    <div class="card mt-4">
                        <div class="card-body">
                            <table class="table table-borderless datatable" id="myTable">
                                <thead>
                                    <tr>
                                        <th scope="col">Product</th>
                                        <th scope="col">Name</th>
                                        <th scope="col">Image</th>
                                        <th scope="col">Description</th>
                                        <th scope="col">Price</th>
                                        <th scope="col">Quantity</th>
                                        <th scope="col">Date</th>
                                        <th scope="col">Time</th>
                                        <th scope="col">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    $sql = "SELECT * FROM `product`";
                                    $result = mysqli_query($conn, $sql);

                                    while ($row = mysqli_fetch_assoc($result)) {
                                    ?>
                                        <tr style="width:10px;">
                                            <td><?php echo $row['Prod_id'] ?></td>
                                            <td><?php echo $row['Prod_name'] ?></td>

                                            <td>
                                                <img src="<?php echo "./images/" . $row['Prod_image'] ?>" style="height:70px; width:80px;">
                                            </td>

                                            <td><?php echo $row['Prod_description'] ?></td>
                                            <td><?php echo $row['Prod_price'] ?></td>
                                            <td><?php echo $row['prod_qt'] ?></td>
                                            <td><?php echo $row['Date'] ?></td>
                                            <td><?php echo $row['Time'] ?></td>
                                            <?php echo "<td><a href='Product.php?Prod_id=" . $row['Prod_id'] . "' class='btn' style='background-color:#074f0b; color:#fff;'>Delete</button></td>"; ?>
                                        </tr>
                                    <?php
                                    }

                                    ?>

                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>

                <div class="tab-pane fade" id="detail" role="tabpanel" aria-labelledby="detail-tab">
                    <div class="row  mt-3">
                        <div class="col-xl-12 col-md-6">
                            <div class="card mb-4" style="background-color:#074f0b">
                                <div class="card-body">
                                    <h3 style="color:#fff;">View Product Category</h3>
                                    <?php
                                    $dash_user_query = "SELECT * from product_category";
                                    $dash_user_query_run = mysqli_query($conn, $dash_user_query);
                                    if ($Pc_idtotal = mysqli_num_rows($dash_user_query_run)) {
                                        echo '<h4 class="mb-0" style="color:#fff;">' . $Pc_idtotal . '</h4>';
                                    } else {
                                        echo '<h4 class="mb-0" style="color:#fff;"> No data </h4>';
                                    }
                                    ?>
                                </div>
                                <div class="card-footer d-flex align-items-center justify-content-between">
                                </div>
                            </div>
                            <h3 style="text-align:center;">Total Product Category Detail</h3>
                            <div class="card mt-4">
                                <div class="card-body">
                                    <table class="table table-borderless datatable" id="myTable">
                                        <thead>
                                            <tr>
                                                <th scope="col">Category</th>
                                                <th scope="col">Name</th>
                                                <th scope="col">Description</th>
                                                <th scope="col">Edit</th>

                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                            $sql = "SELECT * FROM `product_category`";
                                            $result = mysqli_query($conn, $sql);

                                            while ($row = mysqli_fetch_assoc($result)) {

                                                $id = $row['Pc_id'];

                                                echo "  <tr>
                                            <th scope='row'>" . $row['Pc_id'] . "</th>
                                            <td>" . $row['Pc_name'] . "</td>
                                            <td>" . $row['Pc_description'] . "</td>
                                            <td><a href='PEdit.php?Pc_id=" . $row['Pc_id'] . "'class='btn' style='background-color:#074f0b; color:#fff;'>Edit</button></td>
                                            </tr>";
                                            }

                                            ?>
                                            <?php
                                            if (isset($_GET['Pc_id'])) {
                                                $Pc_id = $_GET['Pc_id'];
                                            }
                                            ?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade" id="addprod" role="tabpanel" aria-labelledby="addprod-tab">
                    <h3 style="text-align:center;">Add New Product Category Form</h3>
                    <div class="card mt-4">
                        <div class="card-body">
                            <form action="" method="POST">
                                <div class="row justify-content-center mt-3">
                                    <div class="col-xl-8">
                                        <div class="form-group row">
                                        </div>

                                        <div class="form-group row">
                                            <label class="form-label" for="customFile">Product Category Name:</label>
                                            <input name="cname" type="text" class="form-control" id="cname" placeholder="Enter Name Of Product Category" require />
                                        </div>

                                        <div class="form-group row">
                                            <label class="form-label" for="customFile">Product Category Description :</label>
                                            <textarea name="desc" class="form-control" id="desc" placeholder="Enter Product Category Description" require></textarea>
                                        </div>
                                        <div class="text-center">
                                            <button type="reset" class="btn btn-danger">Cancle</button>&nbsp;&nbsp;
                                            <button type="submit" name="submit" class="btn" style="background-color:#074f0b; color:#fff">Submit</button>
                                        </div>
                                    </div>
                                </div>

                            </form>
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade" id="prodform" role="tabpanel" aria-labelledby="prodform-tab">
                    <h3 style="text-align:center;">New Product Form</h3>
                    <div class="card mt-4">
                        <div class="card-body">
                            <form action="" method="POST">
                                <div class="row justify-content-center mt-3">
                                    <div class="col-xl-8">
                                        <div class="form-group row">
                                            <label class="form-label" for="customFile">Product Name:</label>
                                            <input name="name" type="text" class="form-control" id="name" placeholder="Enter product name" />
                                        </div>

                                        <div class="form-group row">
                                            <label class="form-label" for="customFile">Select Product Category:</label>
                                            <select name="prodcat" type="select" class="form-control" id="select" required>
                                                <option>1 Tools</option>
                                                <option>2 Plant</option>
                                                <option>3 Pots</option>
                                                <option>4 Seeds</option>
                                            </select>
                                        </div>

                                        <div class="form-group row">
                                            <label class="form-label" for="customFile">Product Image :</label>
                                            <input name="file" type="file" class="form-control" id="file" />
                                        </div>

                                        <div class="form-group row">
                                            <label class="form-label" for="customFile">Product Description:</label>
                                            <textarea name="desc" class="form-control" id="desc" placeholder="Enter Product Description"></textarea>
                                        </div>

                                        <div class="form-group row">
                                            <label class="form-label" for="customFile">Product Price :</label>
                                            <input name="price" type="text" class="form-control" id="price" placeholder="Enter Product Price" />
                                        </div>

                                        <div class="form-group row">
                                            <label class="form-label" for="customFile">Product Quantity :</label>
                                            <input name="qty" type="text" class="form-control" id="qty" placeholder="Enter Product Quantity" />
                                        </div>

                                        <div class="text-center">
                                            <button type="reset" class="btn btn-danger">Cancle</button>&nbsp;&nbsp;
                                            <button type="submit" name="submit1" class="btn" style="background-color:#074f0b; color:#fff">Submit</button>
                                        </div>
                                    </div>
                                </div>
                                <?php
                                if (isset($_POST['submit1']) && isset($_POST['prodcat'])) {

                                    $name = $_POST['name'];
                                    $category = $_POST['prodcat'];
                                    $image = $_POST['file'];
                                    $desc = $_POST['desc'];
                                    $price = $_POST['price'];
                                    $qty = $_POST['qty'];

                                    $sql = "insert into product(Prod_name,Pc_id,Prod_image,Prod_description,Prod_price,prod_qt,Date,Time) values ('$name','$category','$image','$desc','$price','$qty',curdate(),curtime())";
                                    if (mysqli_query($conn, $sql)) {
                                        $select = "SELECT product.Pc_id , product_category.Pc_id from `product`,`product_category` WHERE product_category.Pc_id = '$category'";
                                        if (mysqli_query($conn, $select)) {
                                            echo "product added";
                                        }
                                    } else {
                                        echo "error:" . mysqli_error($conn);
                                    }
                                }
                                ?>
                        </div>
                    </div>
                    </form>
                </div>
            </div>
            </div>



        </div>

    </div>


    <script>
        $(document).ready(function() {
            $('#myTable').DataTable();
        });
        let table = new DataTable('#myTable');
    </script>
    <script src="simple-datatables.js"></script>
    <script src="DataTables-1.13.4/datatables.min.js"></script>


    <script src="js/jquery.min.js"></script>
    <script src="js/popper.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/main.js"></script>

</body>

</html>
<?php
if (isset($_POST['submit'])) {
    $cname = $_POST['cname'];
    $desc = $_POST['desc'];
    // Create a connection 

    $errors = array();
    $a = "SELECT * FROM product_category WHERE Pc_name='$cname'";
    $ab = mysqli_query($conn, $a);

    if (empty($cname)) {
        $errors['a'] = "abc";
    } else if (mysqli_num_rows($ab) > 0) {
        $errors['ab'] = "Record already exists.";
    }

    if (count($errors) == 0) {
        $query = "INSERT INTO product_category(Pc_name, Pc_description) VALUES ('$cname', '$desc')";
        $result = mysqli_query($conn, $query);
    }
    if ($result) {
        echo "";
    } else {
        echo "failed";
    }
}

try {
    if (isset($_GET['Prod_id'])) {
        $Prod_id = $_GET['Prod_id'];
        $delete = mysqli_query($conn, "DELETE FROM `product` WHERE `Prod_id`='$Prod_id'");
        $sql = mysqli_query($conn, $sql);

        if ($sql) {
            echo "Data deleted successfully";
        } else {
            echo "Error" . mysqli_error($conn);
        }
        mysqli_close($conn);
    }
} catch (Exception $e) {
    echo "Record is already deleted.";
}

?>