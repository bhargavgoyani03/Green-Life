<?php
	error_reporting(0);
?>
<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "glife";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $database);

if (isset($_POST['update'])) {
    $Plant_id = $_POST['Plant_id'];
    $name = $_POST['name'];
    $desc = $_POST['desc'];

    $query = "UPDATE plant_details SET Plant_name = '$name' , description = '$desc' WHERE Plant_id = '$Plant_id'";
    $query_run = mysqli_query($conn, $query);

    if ($query_run) {
        echo "success full update";
        echo " <script> window.location.href='Product.php'</script> ";
    }
}
?>