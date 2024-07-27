<?php
	error_reporting(0);
?>
<!doctype html>
<html lang="en">

<!-- database connection -->
<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "glife";

$conn = mysqli_connect($servername, $username, $password, $database);
?>
<!-- end conn -->

<head>
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
                <!-- <sidenav bar> -->
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
            <!-- tabs -->
            <div class="card-body">
                <ul class="nav nav-tabs" id="myTab" role="tablist">
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="detail-tab" data-bs-toggle="tab" data-bs-target="#detail" type="button" role="tab" aria-controls="detail" aria-selected="false">Portfolio Details</button>
                    </li>
                    &nbsp;
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="addplant-tab" data-bs-toggle="tab" data-bs-target="#addplant" type="button" role="tab" aria-controls="addplant" aria-selected="false">Add Plant Details</button>
                    </li>
                    &nbsp;
                </ul>
                <!-- end tabs -->

                <!-- tab1 -->
                <div class="tab-content" id="myTabContent">
                    <div class="tab-pane fade" id="addplant" role="tabpanel" aria-labelledby="addplant-tab">
                        <h3 style="text-align:center;">Add Plant Detail Form</h3>
                        <div class="card mt-4">
                            <div class="card-body">
                                <form action="" method="POST" enctype="multipart/form-data">
                                    <div class="row justify-content-center mt-3">
                                        <div class="col-xl-8">
                                            <div class="form-group row">
                                                <label class="form-label" for="customFile">Select Type :</label>
                                                <select name="p_type" type="select" class="form-control" id="select" required>
                                                    <option>Select</option>
                                                    <?php
                                                    $sql = "SELECT * FROM plant_type";
                                                    $result = mysqli_query($conn, $sql);

                                                    while ($row = mysqli_fetch_assoc($result)) {
                                                        echo "<option>" . $row['Type_name'] . "</option>";
                                                    }
                                                    ?>

                                                </select>
                                            </div>
                                            <div class="form-group row">
                                                <label class="form-label" for="customFile">Plant Image :</label>
                                                <input name="file" type="file" class="form-control" id="file" required>
                                            </div>
                                            <div class="form-group row">
                                                <label class="form-label" for="customFile">Plant Name:</label>
                                                <input name="name" type="text" class="form-control" id="name" placeholder="Enter Plant Name" required>
                                            </div>
                                            <!-- <div class="form-group row">
                                                <label class="form-label" for="customFile">Plant Description :</label>
                                                <textarea name="desc" class="form-control" id="desc" placeholder="Enter Description" required></textarea>
                                            </div> -->
                                            <div class="text-center">
                                                <button type="reset" class="btn btn-danger">Cancle</button>&nbsp;&nbsp;
                                                <button type="submit" name="submit1" class="btn" style='background-color:#074f0b; color:#fff;'>Submit</button>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                                <!-- connection form with database -->
                                <?php
                                if (isset($_POST['submit1'])) {

                                    $filename = $_FILES["file"]["name"];
                                    $tempname = $_FILES["file"]["tmp_name"];

                                    $folder = "images/";
                                    $p_type = $_POST['p_type'];
                                    $name = $_POST['name'];

                                    // Create a connection 
                                    {
                                        $sql = "INSERT INTO `plant_details`(`Plant_name`, `Plant_image`, `Type_name`, `Date`, `Time`,`Ptype_id`) VALUES 
                                        ('$name','$filename', '$p_type', curdate(), curtime(),'$p_type')";
                                    echo $sql;
                                        if ($conn->query($sql) === TRUE) {
                                            echo "New record created successfully";
                                            if (move_uploaded_file($tempname, $folder . $filename)) {
                                                echo "<h3>  Image uploaded successfully!</h3>";
                                            } else {
                                                echo $_FILES['file']['error'];
                                                echo "<h3>  Failed to upload image!</h3>";
                                            }
                                        } else {
                                            echo "Error";
                                        }
                                    }
                                }

                                ?>
                                <!-- end database conn -->

                                <!-- form end -->
                            </div>
                        </div>
                    </div>
                    <!-- <tab3 end> -->
                    <!-- tab 2 -->
                    <div class="tab-pane fade show active" id="detail" role="tabpanel" aria-labelledby="detail-tab">
                        <div class="row  mt-3">
                            <div class="col-xl-12 col-md-6">
                                <div class="card mb-4" style="background-color:#074f0b">
                                    <div class="card-body">
                                        <h3 style="color:#fff;"> Plant Details</h3>
                                        <!-- count of plant details -->
                                        <?php
                                        $query = "SELECT * from plant_details";
                                        $query_run = mysqli_query($conn, $query);
                                        if ($Pl_idtotal = mysqli_num_rows($query_run)) {
                                            echo '<h4 class="mb-0" style="color:#fff;">' . $Pl_idtotal . '</h4>';
                                        } else {
                                            echo '<h4 class="mb-0" style="color:#fff;"> No data </h4>';
                                        }
                                        ?>
                                        <!-- end count -->
                                    </div>
                                    <div class="card-footer d-flex align-items-center justify-content-between">
                                    </div>
                                </div>
                                <h3 style="text-align:center;">Total Plant Details</h3>
                                <div class="card mt-4">
                                    <div class="card-body">
                                        <table class="table table-borderless datatable" id="myTable">
                                            <thead>
                                                <tr>
                                                    <!-- <th scope="col">Plant</th> -->
                                                    <th>Name</th>
                                                    <th>Image</th>
                                                    <!-- <th>Description</th> -->
                                                    <th>Date</th>
                                                    <th>Time</th>
                                                    <th>Edit</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <!-- table form database plant_Details -->
                                                <?php
                                                $sql = "SELECT * FROM `plant_details`";
                                                $result = mysqli_query($conn, $sql);

                                                while ($row = mysqli_fetch_assoc($result)) { ?>
                                                    <tr>
                                                        <!-- <td>
                                                            <?php //echo $row['Plant_id']; ?>
                                                        </td> -->
                                                        <td>
                                                            <?php echo $row['Plant_name']; ?>
                                                        </td>
                                                        <td>
                                                            <img src="<?php echo "./images/" . $row['Plant_image'] ?>" style="height:70px; width:80px;">
                                                        </td>
                                                        <!-- <td>
                                                            <?php echo $row['description']; ?>
                                                        </td> -->
                                                        <td>
                                                            <?php echo $row['Date']; ?>
                                                        </td>
                                                        <td>
                                                            <?php echo $row['Time']; ?>
                                                        </td>
                                                        <td>
                                                            <?php echo "<a href='padd.php?Plant_id=" . $row['Plant_id'] . "' class='btn' style='background-color:#074f0b; color:#fff;'>Edit</button>"; ?>


                                                        </td>
                                                    </tr>
                                                <?php
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
                    <!-- tab 2 end -->


                    <div class="tab-pane fade" id="viewcat" role="tabpanel" aria-labelledby="viewcat-tab">
                        <div class="row  mt-3">
                            <div class="col-xl-12 col-md-6">
                                <div class="card mb-4" style="background-color:#074f0b">
                                    <div class="card-body">
                                        <h3 style="color:#fff;">View Category</h3>
                                        <?php
                                        $dash_user_query = "SELECT * from plant_type";
                                        $dash_user_query_run = mysqli_query($conn, $dash_user_query);
                                        if ($Ptype_idtotal = mysqli_num_rows($dash_user_query_run)) {
                                            echo '<h4 class="mb-0" style="color:#fff;">' . $Ptype_idtotal . '</h4>';
                                        } else {
                                            echo '<h4 class="mb-0" style="color:#fff;"> No data </h4>';
                                        }
                                        ?>
                                    </div>
                                    <div class="card-footer d-flex align-items-center justify-content-between">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <h3 style="text-align:center;">Total Plant Category Details</h3>
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
                                        $sql = "SELECT * FROM `plant_type`";
                                        $result = mysqli_query($conn, $sql);

                                        while ($row = mysqli_fetch_assoc($result)) {
                                            echo "  <tr>
                                                <th scope='row'>" . $row['Ptype_id'] . "</th>
                                                <td>" . $row['Type_name'] . "</td>
                                                <td>" . $row['Description'] . "</td>
                                                <td><a href='plantedit.php?Ptype_id=" . $row['Ptype_id'] . "'class='btn' style='background-color:#074f0b; color:#fff;'>Edit</button></td>
                                                </tr>";
                                        }
                                        ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="pcat" role="tabpanel" aria-labelledby="pcat-tab">
                        <h3 style="text-align:center;">Add Plant Category Form</h3>
                        <div class="card mt-4">
                            <div class="card-body">
                                <form action="" method="POST">
                                    <div class="row justify-content-center mt-3">
                                        <div class="col-xl-8">
                                            <div class="form-group row">
                                            </div>
                                            <div class="form-group row">
                                                <label class="form-label" for="customFile">Plant Category Name:</label>
                                                <input name="plcname" type="text" class="form-control" id="plcname" placeholder="Enter Name Of Plant Category" required>
                                            </div>

                                            <div class="form-group row">
                                                <label class="form-label" for="customFile">Plant Category Description :</label>
                                                <textarea name="pldesc" class="form-control" id="pldesc" placeholder="Enter Plant Category Description" required></textarea>
                                            </div>
                                            <div class="text-center">
                                                <button type="reset" class="btn btn-danger">Cancle</button>&nbsp;&nbsp;
                                                <button type="submit" name="submit" class="btn" style='background-color:#074f0b; color:#fff;'>Submit</button>
                                            </div>
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
if (isset($_POST['submit']) && isset($_POST['Type_name']) && isset($_POST['pldesc'])) {
    $Type_name = $_POST['Type_name'];
    $pldesc = $_POST['pldesc'];
    // Create a connection 

    $errors = array();
    $plc = "SELECT * FROM  plant_type WHERE Type_name='$Type_name'";
    $pcn = mysqli_query($conn, $plc);

    if (empty($Type_name)) {
        $errors['plc'] = "Plant name requires";
    } else if (mysqli_num_rows($pcn) > 0) {
        $errors['pcn'] = "Record already exists.";
    }


    if (count($errors) == 0) {
        $query = "INSERT INTO `plant_type`(`Type_name`, `Description`) VALUES ('$Type_name', '$pldesc')";
        $result = mysqli_query($conn, $query);
    }
    if ($result) {
        echo "";
    } else {
        echo "failed";
    }
}

try {
    if (isset($_GET['I_id'])) {
        $I_id = $_GET['I_id'];
        $delete = mysqli_query($conn, "DELETE FROM `info_type` WHERE `I_id`='$I_id'");
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