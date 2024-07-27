<?php
	error_reporting(0);
?>
<?php
include('Product.php');

$servername = "localhost";
$username = "root";
$password = "";
$database = "glife";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $database);


// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully";

if(isset($_POST['category_add']))
{
  $cname=$_POST['cname'];
  $cdes=$_POST['desc'];

  $query="INSERT INTO product_category(Pc_name`, `Pc_description`) VALUES ('$cname','$desc')";
  $query_run = mysqli_query($conn, $query);

  if($query_run)
  {
    $_SESSION['message'] = "hello";
    exit(0);
  }
  else{
    $_SESSION['message'] = "ohh noo";
    exit(0);
  }
}
