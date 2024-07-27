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
$conn = new mysqli($servername, $username, $password, $database);

?>

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
    <link href="DataTables-1.13.4/datatables.min.css" rel="stylesheet" />
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
                        <a href="faqs.php">FAQs</a>
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

            <div class="card-body">


                <!-- Bordered Tabs -->
                <ul class="nav nav-tabs nav-tabs-bordered" id="borderedTab" role="tablist">
                    <li class="nav-item" role="presentation">
                        <button class="nav-link active" id="post-tab" data-bs-toggle="tab" data-bs-target="#bordered-post" type="button" role="tab" aria-controls="post" aria-selected="true">Post</button>
                    </li>
                    &nbsp;
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="comment-tab" data-bs-toggle="tab" data-bs-target="#bordered-comment" type="button" role="tab" aria-controls="comment" aria-selected="false">Comment</button>
                    </li>
                </ul>


                <div class="tab-content pt-2" id="borderedTabContent">
                    <div class="tab-pane fade show active" id="bordered-post" role="tabpanel" aria-labelledby="post-tab">
                        <!-- course add space-->
                        <div class="row  mt-3">
                            <div class="col-xl-12 col-md-6">
                                <div class="card mb-4" style="background-color:#074f0b">
                                    <div class="card-body">
                                        <h3 style="color:#fff;">Total Post</h3>
                                        <?php
                                        $dash_category_query = "SELECT * from post";
                                        $dash_category_query_run = mysqli_query($conn, $dash_category_query);
                                        if ($Post_idtotal = mysqli_num_rows($dash_category_query_run)) {
                                            echo '<h4 class="mb-0" style="color:#fff;">' . $Post_idtotal . '</h4>';
                                        } else {
                                            echo '<h4 class="mb-0" style="color:#fff;"> No data </h4>';
                                        }
                                        ?>
                                    </div>
                                    <div class="card-footer d-flex align-items-center justify-content-between">
                                    </div>
                                </div>
                                <h3 style="text-align:center;">Total Gardening Post Details</h3>
                                <div class="card mt-4">
                                    <div class="card-body">
                                        <table style="width:100%" class="table table-borderless datatable" id="myTable">
                                            <thead>
                                                <tr>
                                                    <th scope="col">Post</th>
                                                    <th scope="col">Image</th>
                                                    <th scope="col">Caption</th>
                                                    <th scope="col">Date</th>
                                                    <th scope="col">Time</th>
                                                    <th scope="col">Action</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php
                                                $query = "SELECT * FROM `post`";
                                                $result = mysqli_query($conn, $query);

                                                while ($row = mysqli_fetch_assoc($result)) {
                                                ?>
                                                    <tr>
                                                        <td><?php echo $row['Post_id'] ?></td>


                                                        <td>
                                                            <img src="<?php echo "./images/" . $row['Post_image'] ?>" style="height:70px; width:80px;">
                                                        </td>

                                                        <td><?php echo $row['Caption'] ?></td>
                                                        <td><?php echo $row['Date'] ?></td>
                                                        <td><?php echo $row['Time'] ?></td>
                                                        <?php echo "<td><a href='post.php?Post_id=" . $row['Post_id'] . "' class='btn' style='background-color:#074f0b; color:#fff;'>Delete</button></td>"; ?>

                                                    </tr>
                                                <?php
                                                }

                                                ?>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="bordered-comment" role="tabpanel" aria-labelledby="comment-tab">
                        <div class="row mt-3">
                            <div class="col-xl-12 col-md-6">
                                <div class="card mb-4" style="background-color:#074f0b">
                                    <div class="card-body">
                                        <h3 style="color:#fff;">Total Comment</h3>
                                        <!-- total seller count -->
                                        <?php
                                        $dash_comment_query = "SELECT * from comment";
                                        $dash_comment_query_run = mysqli_query($conn, $dash_comment_query);
                                        if ($C_idtotal = mysqli_num_rows($dash_comment_query_run)) {
                                            echo '<h4 class="mb-0" style="color:#fff;">' . $C_idtotal . '</h4>';
                                        } else {
                                            echo '<h4 class="mb-0" style="color:#fff;"> No data </h4>';
                                        }
                                        ?>
                                    </div>
                                    <div class="card-footer d-flex align-items-center justify-content-between">
                                    </div>
                                </div>
                                <h3 style="text-align:center;">Total Post Comment Details</h3>
                                <div class="card mt-4">
                                    <div class="card-body">
                                        <table class="table table-borderless datatable" id="myTable">
                                            <thead>
                                                <tr>
                                                    <th scope="col">Comment</th>
                                                    <th scope="col">Post</th>
                                                    <th scope="col">Text</th>
                                                    <th scope="col">Date</th>
                                                    <th scope="col">Time</th>
                                                    <th scope="col">Action</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <!-- Comment table from database -->
                                                <?php
                                                $sql = "SELECT comment.C_id, post.Post_id, comment.Text, comment.Date, comment.Time
                             FROM comment,post
                             WHERE comment.Post_id = post.Post_id";
                                                $result = mysqli_query($conn, $sql);

                                                while ($row = mysqli_fetch_assoc($result)) {
                                                    echo " <tr>
                            <th scope='row'>" . $row['C_id'] . "</th>
                            <td>" . $row['Post_id'] . "</td>
                            <td>" . $row['Text'] . "</td>
                            <td>" . $row['Date'] . "</td>
                            <td>" . $row['Time'] . "</td>
                            <td><a href='post.php?C_id=" . $row['C_id'] . "' class='btn' style='background-color:#074f0b; color:#fff'>Delete</button></td>
                            </tr>";
                                                }
                                                ?>
                                                <?php
                                                if (isset($_GET['C_id'])) {
                                                    $C_id = $_GET['C_id'];
                                                    $delete = mysqli_query($conn, "DELETE FROM `comment` WHERE `C_id`='$C_id'");
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




            <script src="simple-datatables.js"></script>
            <script src="DataTables-1.13.4/datatables.min.js"></script>
            <!-- 
    <script src="js/jquery.min.js"></script>
    <script src="js/popper.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/main.js"></script> -->
</body>

</html>
<?php
try {
    if (isset($_GET['Post_id'])) {
        $Post_id = $_GET['Post_id'];
        $delete = mysqli_query($conn, "DELETE FROM `post` WHERE `Post_id`='$Post_id'");
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
<?php
try {
    if (isset($_GET['C_id'])) {
        $C_id = $_GET['C_id'];
        $delete = mysqli_query($conn, "DELETE FROM `comment` WHERE `C_id`='$C_id'");
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
