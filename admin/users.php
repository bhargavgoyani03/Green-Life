<?php
	error_reporting(0);
?>
<!doctype html>
<html lang="en">

<!-- connection with data -->
<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "glife";

$conn = new mysqli($servername, $username, $password, $database);

?>


<!-- conn end -->

<head>
    <style>
        .btn {
            background-color: #00FF00;
            font-size: 1.2em;
            padding: 5px 30px;
            text-decoration: none;
        }
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
    <link href="style.css" rel="stylesheet">
</head>

<body>

    <div class="wrapper d-flex align-items-stretch">
        <nav id="sidebar" style="background-color:#043b07;">
            <div class="p-4 pt-5">
                <!-- <sidenavnav bar> -->
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

        <!--sidenav end -->
        <!-- Page Content  -->
        <!-- navbar -->

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
            <!-- navbarend -->
            <!-- tab1 -->
            <div class="card-body">
                <ul class="nav nav-tabs nav-tabs-bordered" id="borderedTab" role="tablist">
                    <li class="nav-item" role="presentation">
                        <button class="nav-link active" id="home-tab" data-bs-toggle="tab" data-bs-target="#bordered-home" type="button" role="tab" aria-controls="home" aria-selected="true">Register User</button>
                    </li>
                    &nbsp;

                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="profile-tab" data-bs-toggle="tab" data-bs-target="#bordered-profile" type="button" role="tab" aria-controls="profile" aria-selected="false">Seller</button>
                    </li>

                </ul>
                <div class="tab-content pt-2" id="borderedTabContent">
                    <div class="tab-pane fade show active" id="bordered-home" role="tabpanel" aria-labelledby="home-tab">
                        <!-- course add space-->
                        <div class="row  mt-3">
                            <div class="col-xl-12 col-md-6">
                                <div class="card mb-4" style="background-color:#074f0b">
                                    <div class="card-body">
                                        <h3 style="color:#fff;">Total User</h3>
                                        <!-- total user count -->
                                        <?php
                                        $dash_user_query = "SELECT * from user";
                                        $dash_user_query_run = mysqli_query($conn, $dash_user_query);
                                        if ($R_idtotal = mysqli_num_rows($dash_user_query_run)) {
                                            echo '<h4 class="mb-0" style="color:#fff;">' . $R_idtotal . '</h4>';
                                        } else {
                                            echo '<h4 class="mb-0" style="color:#fff;"> No data </h4>';
                                        }
                                        ?>
                                    </div>
                                    <div class="card-footer d-flex align-items-center justify-content-between">

                                    </div>
                                </div>
                                <h3 style="text-align:center;">Total User Details</h3>
                                <div class="card mt-4">
                                    <div class="card-body">
                                        <table class="table table-borderless datatable" id="myTable">
                                            <thead>
                                                <tr>
                                                    <th scope="col">User</th>
                                                    <th scope="col">Name</th>
                                                    <th scope="col">Email</th>
                                                    <th scope="col">Contact</th>
                                                    <th scope="col">Address</th>
                                                    <th scope="col">City</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <!-- user table from database -->
                                                <?php
                                                $sql = "SELECT * FROM `user`";
                                                $result = mysqli_query($conn, $sql);

                                                while ($row = mysqli_fetch_assoc($result)) {
                                                    echo "  <tr>
                            <th scope='row'>" . $row['R_id'] . "</th>
                            <td>" . $row['name'] . "</td>
                            <td>" . $row['email'] . "</td>
                            <td>" . $row['contact'] . "</td>
                            <td>" . $row['address'] . "</td>
                            <td>" . $row['city'] . "</td>
                            </tr>";
                                                }
                                                ?>
                                                <!-- end of table -->
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- tab1 end -->


                    <!-- tab2 -->
                    <div class="tab-pane fade" id="bordered-profile" role="tabpanel" aria-labelledby="profile-tab">
                        <div class="row mt-3">
                            <div class="col-xl-12 col-md-6">
                                <div class="card mb-4" style="background-color:#074f0b">
                                    <div class="card-body">
                                        <h3 style="color:#fff;">Total Seller</h3>
                                        <!-- total seller count -->
                                        <?php
                                        $dash_seller_query = "SELECT * from seller";
                                        $dash_seller_query_run = mysqli_query($conn, $dash_seller_query);
                                        if ($S_idtotal = mysqli_num_rows($dash_seller_query_run)) {
                                            echo '<h4 class="mb-0" style="color:#fff;">' . $S_idtotal . '</h4>';
                                        } else {
                                            echo '<h4 class="mb-0" style="color:#fff;"> No data </h4>';
                                        }
                                        ?>
                                    </div>
                                    <div class="card-footer d-flex align-items-center justify-content-between">
                                    </div>
                                </div>
                                <h3 style="text-align:center;">Total Seller Details</h3>
                                <div class="card mt-4">
                                    <div class="card-body">
                                        <table class="table table-borderless datatable" id="myTable">
                                            <thead>
                                                <tr>
                                                    <th scope="col">Seller</th>
                                                    <th scope="col">Name</th>
                                                    <th scope="col">Email</th>
                                                    <th scope="col">Contact number</th>
                                                    <th scope="col">Address</th>
                                                    <th scope="col">City</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <!-- seller table from database -->
                                                <?php
                                                $sql = "SELECT seller.S_id, seller.R_id, user.name, user.email, user.contact, user.address, user.city
                             FROM seller,user
                             WHERE user.R_id = seller.R_id";
                                                $result = mysqli_query($conn, $sql);

                                                while ($row = mysqli_fetch_assoc($result)) {
                                                    echo "  <tr>
                            <th scope='row'>" . $row['S_id'] . "</th>
                            <td>" . $row['name'] . "</td>
                            <td>" . $row['email'] . "</td>
                            <td>" . $row['contact'] . "</td>
                            <td>" . $row['address'] . "</td>
                            <td>" . $row['city'] . "</td>
                            </tr>";
                                                }
                                                ?>

                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- tab2 end -->

        <!-- 
    <script src="js/jquery.min.js"></script>
    <script src="js/popper.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/main.js"></script> -->
</body>

</html>