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
    $Prod_id = $_POST['Prod_id'];
    $name = $_POST['name'];
    $desc = $_POST['desc'];
    $price = $_POST['price'];
    $qty = $_POST['qty'];

    $query = "UPDATE product SET Prod_name = '$name', Prod_description = '$desc', Prod_price = '$price', prod_qt = '$qty' WHERE Prod_id = '$Prod_id'";
    $query_run = mysqli_query($conn, $query);

    if ($query_run) {
        echo "success full update";
        echo " <script> window.location.href='SellerProduct.php'</script> ";
    }
}
?>
