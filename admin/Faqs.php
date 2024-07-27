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
                <li class="nav-item" role="presentation">
                    <button class="nav-link active" id="faq-tab" data-bs-toggle="tab" data-bs-target="#faq" type="button" role="tab" aria-controls="faq" aria-selected="true">Faqs</button>
                </li>
                &nbsp;
                <li class="nav-item" role="presentation">
                    <button class="nav-link" id="fcat-tab" data-bs-toggle="tab" data-bs-target="#fcat" type="button" role="tab" aria-controls="fcat" aria-selected="false">Add faqs</button>
                </li>


            </ul>

            <div class="tab-content" id="myTabContent">
                <div class="tab-pane fade show active" id="faq" role="tabpanel" aria-labelledby="faq-tab">
                    <div class="row  mt-3">
                        <div class="col-xl-6 col-md-6 ">
                            <div class="card mb-4" style="background-color:#074f0b">
                                <div class="card-body">
                                    <h3 style="color:#fff;">Order Related</h3>
                                    <?php
                                    $query = "SELECT * FROM faq WHERE fq_type='order related' ";
                                    $query_run = mysqli_query($conn, $query);
                                    if ($OrderTotal = mysqli_num_rows($query_run)) {
                                        echo '<h4 class="mb-0" style="color:#fff;">' . $OrderTotal . '</h4>';
                                    } else {
                                        echo '<h4 class="mb-0" style="color:#fff;"> No data </h4>';
                                    }
                                    ?>

                                </div>
                                <div class="card-footer d-flex align-items-center justify-content-between">
                                    <a class="small text-black stretched-link" href="orderfaq.php">View Details</a>
                                    <div class="small text-black"><i class="fa fa-angle-right"></i></div>

                                </div>
                            </div>
                        </div>
                        <div class="col-xl-6 col-md-6">
                            <div class="card mb-4" style="background-color:#074f0b">
                                <div class="card-body">
                                    <h3 style="color:#fff;">Plant Related</h3>
                                    <?php
                                    $query = "SELECT * FROM faq WHERE fq_type='plant related'";
                                    $query_run = mysqli_query($conn, $query);
                                    if ($planttotal = mysqli_num_rows($query_run)) {
                                        echo '<h4 class="mb-0" style="color:#fff;">' . $planttotal . '</h4>';
                                    } else {
                                        echo '<h4 class="mb-0" style="color:#fff;"> No data </h4>';
                                    }
                                    ?>

                                </div>
                                <div class="card-footer d-flex align-items-center justify-content-between">
                                    <a class="small text-black stretched-link" href="plantfaq.php">View Details</a>
                                    <div class="small text-black"><i class="fa fa-angle-right"></i></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <h3 style="text-align:center;">Total FAQs detail</h3><br>
                    <div class="card mt-4">
                        <div class="card-body">
                            <table class="table table-borderless datatable" id="myTable">
                                <thead>
                                    <tr>
                                        <th scope="col">Faq</th>
                                        <th scope="col">Type</th>
                                        <th scope="col">Question</th>
                                        <th scope="col">Answer</th>
                                        <th scope="col">Delete</th>
                                        <th scope="col">Edit</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    $sql = "SELECT * FROM `faq`";
                                    $result = mysqli_query($conn, $sql);

                                    while ($row = mysqli_fetch_assoc($result)) {
                                        echo "  <tr>
                            <th scope='row'>" . $row['fq_id'] . "</th>
                            <td>" . $row['fq_type'] . "</td>  
                            <td>" . $row['Question'] . "</td>  
                            <td>" . $row['Answer'] . "</td>
                            <td><a href='Faqs.php?fq_id=" . $row['fq_id'] . "' class='btn' style='background-color:#074f0b; color:#fff'>Delete</button></td>
                            <td> <a href='faqedit.php?fq_id=" . $row['fq_id'] . "' class='btn' name='submit' style='background-color:#074f0b; color:#fff'>Edit</button></td> 
                            </tr>";
                                        // echo $row['R_id'].".".$row['name']."".$row['email']."".$row['password'];
                                        // echo"<br>";
                                    }

                                    ?>

                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade" id="fcat" role="tabpanel" aria-labelledby="fcat-tab">
                    <h3 style="text-align:center;">Add FAQs form</h3>
                    <div class="card mt-4">
                        <div class="card-body">
                            <form action="Faqs.php" method="POST">
                                <div class="row justify-content-center mt-3">
                                    <div class="col-xl-8">
                                        <div class="form-group row">
                                            <label class="form-label" for="customFile">Select Type :</label>
                                            <select name="fq_type" type="select" class="form-control" id="select" required>
                                                <option select>Select</option>
                                                <option value="Order">Order related</option>
                                                <option value="plantcare">Plant care related</option>
                                            </select>
                                        </div>

                                        <div class="form-group row">
                                            <label class="form-label" for="customFile">Question :</label>
                                            <textarea name="Question" class="form-control" id="Question" placeholder="Enter question" required></textarea>
                                        </div>
                                        <div class="form-group row">
                                            <label class="form-label" for="customFile">Answer :</label>
                                            <textarea name="Answer" class="form-control" id="Answer" placeholder="Enter answer" required></textarea>
                                        </div>
                                        <div class="text-center">
                                            <button type="reset" class="btn btn-danger">Cancle</button>&nbsp;&nbsp;
                                            <button type="submit" name="submit" class="btn" style='background-color:#074f0b; color:#fff'>Submit</button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>



        </div>

    </div>




    <!--  <script src="js/jquery.min.js"></script>
        <script src="js/popper.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <script src="js/main.js"></script> -->

</body>

</html>
<?php
if (isset($_POST['fq_type']) && isset($_POST['Question']) && isset($_POST['Answer'])) {
    $fq_type = $_POST['fq_type'];
    $Question = $_POST['Question'];
    $Answer = $_POST['Answer'];
    // Create a connection 

    $sql = "INSERT INTO `faq`(`fq_type`, `Question`, `Answer`) VALUES ('$fq_type', '$Question', '$Answer')"; {
        if ($conn->query($sql) === TRUE) {
            echo "New record created successfully";
        } else if ($conn->error) {
            echo "Error";
        }
    }
}
try {
    if (isset($_GET['fq_id'])) {
        $fq_id = $_GET['fq_id'];
        $delete = mysqli_query($conn, "DELETE FROM `faq` WHERE `fq_id`='$fq_id'");
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