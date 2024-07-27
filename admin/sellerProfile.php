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
        body {
            background: rgb(99, 39, 120)
        }

        .form-control:focus {
            box-shadow: none;
            border-color: #BA68C8
        }

        .profile-button {
            background: rgb(99, 39, 120);
            box-shadow: none;
            border: none
        }

        .profile-button:hover {
            background: #682773
        }

        .profile-button:focus {
            background: #682773;
            box-shadow: none
        }

        .profile-button:active {
            background: #682773;
            box-shadow: none
        }

        .back:hover {
            color: #682773;
            cursor: pointer
        }

        .labels {
            font-size: 20px
        }

        .add-experience:hover {
            background: #BA68C8;
            color: #fff;
            cursor: pointer;
            border: solid 1px #BA68C8
        }

        .center {
            text-align:left;
            border: 1px solid;
            margin: auto;
            width: 50%;
            padding: 10px;
        }

        .center1 {
            text-align:center;
            margin: auto;
            width: 50%;
            padding: 10px;
        }

        .card {
            width: 600px;
            background-color: #efefef;
            border: none;
            cursor: pointer;
            transition: all 0.5s;
        }

        h1{
            text-align: center;
        }
       
        .box-container::after{
            display:grid;
            grid-template-columns:repeat(auto-fit,40rem);
            display:table;
            clear: both;
            content: "";
        }

        .box{
            float:left;
            width:35%;
            height: 300px;
            padding:30px;
            box-shadow:var(--box-shadow);
            border-radius:7px;
        }

        img{
            height:15rem;
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

                <a href="#" class="img logo rounded-circle mb-3" style="background-image: url(pot.jpg);"></a>
                <ul class="list-unstyled components mb-5">
                <li>
            <a href="SellerD.php">Home</a>
          </li>
          <li>
            <a href="Profile.php">Profile</a>
          </li>
          <li>
            <a href="SellerProduct.php">Product</a>
          </li>
                </ul>
            </div>
        </nav>

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
                        
                        <h1>My Profile</h1>
                        <div class="card center">
                        <?php
                            $seller_products = mysqli_query($conn,"SELECT user.* FROM `user` WHERE R_id = 3");
                            if(mysqli_num_rows($seller_products) > 0){
                            while($seller_product = mysqli_fetch_assoc($seller_products)){     
                        ?>
                            <div class="col-md-12"><label class="labels">Name: &nbsp;&nbsp;<?php echo $seller_product['name']; ?> </label></div>
                            <div class="col-md-12"><label class="labels">Contact number: &nbsp;&nbsp;<?php echo $seller_product['contact']; ?></label></div>
                            <div class="col-md-12"><label class="labels">Email: &nbsp;&nbsp;<?php echo $seller_product['email']; ?></label></div>
                            <div class="col-md-12"><label class="labels">City: &nbsp;&nbsp;<?php echo $seller_product['city']; ?></label></div>
                            <div class="col-md-12"><label class="labels">Address: &nbsp;&nbsp;<?php echo $seller_product['address']; ?> </label></div>

                        <div class="center1">
                            <button type="submit" name="submit" class="btn btn-success">Edit</button>
                        </div>
                        </div>

                        <div class="container">    
                        <section class="products">
                        <div class="box-container">
                        <?php
                            $seller_products = mysqli_query($conn,"SELECT * FROM `product` WHERE S_id =2");
                            if(mysqli_num_rows($seller_products) > 0){
                            while($seller_product = mysqli_fetch_assoc($seller_products)){     
                        ?>
                        <form action="" method="POST">
                            <div class="box">
                            <img src="images/<?php echo $seller_product['Prod_image']; ?>" alt="">
                            </div><div class="box">
                            <h5>Product Name: <?php echo $seller_product['Prod_name']; ?></h5>
                            <h5>Price: <?php echo $seller_product['Prod_price']; ?>/-</h5>
                            <h5>Description: <?php echo $seller_product['Prod_description']; ?></h5>
                            </div>
                        </form>
                        <?php
                                };
                            };
                        };
                    };
                        ?>
                    <!-- <div class="col-12 text-center">
                        <a href="#" class="btn alazea-btn">More</a>
                    </div> -->
                </div>
        </section>
    </div>
                    
                    <script src="js/jquery.min.js"></script>
                    <script src="js/popper.js"></script>
                    <script src="js/bootstrap.min.js"></script>
                    <script src="js/main.js"></script>
</body>
</html>