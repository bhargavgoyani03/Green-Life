<?php
	error_reporting(0);
?>
<!doctype html>
<html lang="en">

<!-- connection with database -->
<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "glife";

$conn = new mysqli($servername, $username, $password, $database);

?>

<!-- conn end -->

<head>

  <title>Green Life</title>
  <!-- Favicon -->
  <link rel="icon" href="F.png">

  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800,900" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
  <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800,900" rel="stylesheet">
  <link href="css/styled.css" rel="stylesheet" />
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="css/style.css">
</head>

<body>

  <div class="wrapper d-flex align-items-stretch">
    <nav id="sidebar" style="background-color:#043b07;">
      <div class="p-4 pt-5">

        <!-- menubar -->
        <a href="#" class="img logo rounded-circle mb-5" style="background-image: url(pot.jpg);"></a>
        <ul class="list-unstyled components mb-5">
          <li>
            <a href="SellerD.php">Home</a>
          </li>
          <li>
            <a href="sellerProfile.php">Profile</a>
          </li>
          <li>
            <a href="SellerProduct.php">Product</a>
          </li>
        </ul>
      </div>
    </nav>
    <!-- navbar end -->

    <!-- Page Content  -->
    <div id="content" class="p-4 p-md-5">

      <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">

          <!-- menubar -->
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
      <!-- menu bar end -->
      <!-- page content -->
      <div id="layoutSidenav_content">
        <main>
          <div class="container-fluid px-4">
            <h1 class="mt-4">Seller Dashboard</h1>

          </div>
          <!-- card 4 -->
          <div class="col-xl-4 col-md-6">
            <div style="background-color:#074f0b" class="card mb-4">
              <div class="card-body">
                <h3 style="color:#fff;">Products</h3>
                <!-- count of products -->
                <?php
                $query = "SELECT * FROM product WHERE S_id = 1 ";
                $query_prod_run = mysqli_query($conn, $query);
                if ($Prod_idtotal = mysqli_num_rows($query_prod_run)) {
                  echo '<h4 class="mb-0" style="color:#fff;">' . $Prod_idtotal . '</h4>';
                } else {
                  echo '<h4 class="mb-0" style="color:#fff;"> No data </h4>';
                }
                ?>
                <!-- end count -->
              </div>
              <div class="card-footer d-flex align-items-center justify-content-between">
                <a class="small text-black stretched-link" href="SellerProduct.php">View Details</a>
                <div class="small text-black"><i class="fa fa-angle-right"></i></div>
              </div>
            </div>
          </div>
      </div>
      <!-- end card4 -->
    </div>
  </div>

  <script src="js/jquery.min.js"></script>
  <script src="js/popper.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/main.js"></script>
</body>

</html>