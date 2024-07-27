<?php
    error_reporting(0);
?>
<?php

session_start();
$R_id= $_SESSION['R_id'];

include('connection.php');

// Create connection
$conn = mysqli_connect($servername, $username, $password, $database);


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