<?php
// Start the session
session_start();
?>
<?php
    error_reporting(0);
?>
<?php
include 'connection.php';
?>
<?php
include 'connection.php';
session_start();
$R_id= $_SESSION['R_id'];

if (isset($_POST['update'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $contact = $_POST['contact'];
    $city = $_POST['city'];
    $address = $_POST['address'];


    $query = "UPDATE user SET name = '$name' , email = '$email', contact = '$contact', city = '$city', address = '$address' WHERE R_id = '$R_id'";
    $query_run = mysqli_query($conn, $query);


    if ($query_run) {
        echo "success full update";
        echo " <script> window.location.href='profile.php'</script> ";
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- The above 4 meta tags must come first in the head; any other head content must come after these tags -->

     <!-- Title -->
     <title>Green Life</title>

<!-- Favicon -->
<link rel="icon" href="F.png">

    <!-- Core Stylesheet -->
    <link rel="stylesheet" href="style.css">
    <style>
       
       body{margin-top:20px;
background-color:#ffff;
color:#69707a;
}
.img-account-profile {
    height: 10rem;
}
.rounded-circle {
    border-radius: 50% !important;
}
.btn{
    background-color: #064709;
    color: #ffff;
}
.card {
    background-color: #38723B;
    color: #ffff;
    font-size: 25px;
    font-style: bold;
    box-shadow: 0 0.15rem 1.75rem 0 rgb(33 40 50 / 15%);
}
.card .card-header {
    font-weight: 500;
}
.card-header:first-child {
    border-radius: 0.35rem 0.35rem 0 0;
}
.card-header {
    padding: 1rem 1.35rem;
    margin-bottom: 0;
    color: #ffff;
    background-color: #064709;
    border-bottom: 1px solid rgba(33, 40, 50, 0.125);
}
.form-control, .dataTable-input {
    display: block;
    width: 100%;
    padding: 0.875rem 1.125rem;
    font-size: 0.875rem;
    font-weight: 400;
    line-height: 1;
    color: #69707a;
    background-color: #ffff;
    background-clip: padding-box;
    border: 1px solid #c5ccd6;
    -webkit-appearance: none;
    -moz-appearance: none;
    appearance: none;
    border-radius: 0.35rem;
    transition: border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out;
}


    </style>

</head>

<body>

    <hr class="mt-0 mb-4">
    <div class="row">
        <div class="col-xl-4">
        <?php
            // Connect to the database
            $conn = mysqli_connect("localhost", "root", "", "glife");

            // Retrieve the user's information
            $sql = "SELECT * FROM user WHERE R_id = '$R_id'";
            $result = mysqli_query($conn, $sql);
            $user = mysqli_fetch_assoc($result);
            ?>  
             
            <!-- Profile picture card-->
            <div class="card mb-4 mb-xl-0">
                <div class="card-header">Profile Picture</div>
                <div class="card-body text-center">
                    <!-- Profile picture image-->
                    <img class="img-account-profile rounded-circle mb-2" style="width:150px; mar" src="<?php echo "./images/" . $user['image_name'] ?>" alt="">
                    <br>
                    <input type="file" name="file" id="file" style="background-color:#064709;">
                    <!-- Profile picture upload button-->
                    <button class="btn" type="button">Upload new image</button>
                </div>
            </div>
        </div>
         
        <div class="col-xl-8">
            <!-- Account details card-->
            <div class="card mb-4">
                <div class="card-header">Account Details</div>
                <div class="card-body">
                    <form action="updateprofile.php" method="POST">
                    <div class="mb-3">
                            <input class="form-control" id="R_id" name="R_id"  type="hidden" value="<?php echo $R_id; ?>">
                        </div>
                        <!-- Form Group (username)-->
                        <div class="mb-3">
                            <label class="small mb-1" for="name">Username (how your name will appear to other users on the site)</label>
                            <input class="form-control" id="name" name="name" type="text" value="<?php echo $user['name']; ?>">
                        </div>
                     
                         <!-- Form Group (email address)-->
                         <div class="mb-3">
                            <label class="small mb-1" for="email">Email address</label>
                            <input class="form-control" id="email" name="email" type="email" value="<?php echo $user['email']; ?>">
                        </div>
                        <!-- Form Row-->

                        <!-- Form Row        -->
                        <div class="row gx-3 mb-3">
                            <!-- Form Group (organization name)-->
                            <div class="col-md-6">
                                <label class="small mb-1" for="address">Address</label>
                                <input class="form-control" id="address" name="address" type="text" value="<?php echo $user['address']; ?>">
                            </div>
                            <!-- Form Group (location)-->
                            <div class="col-md-6">
                                <label class="small mb-1" for="city">City</label>
                                <input class="form-control" id="city" name="city" type="text" value="<?php echo $user['city']; ?>">
                            </div>
                        </div>
                    
                         <!-- Form Group (email address)-->
                         <div class="mb-3">
                            <label class="small mb-1" for="contact">Phone Number</label>
                            <input class="form-control" id="contact" name="contact" type="text" value="<?php echo $user['contact']; ?>">
                        </div>
                        <!-- Form Row-->
                        <!-- Save changes button-->
                        <button class="btn" name="update" type="submit">Save changes</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
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