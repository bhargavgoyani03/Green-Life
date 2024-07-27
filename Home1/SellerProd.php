<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- The above 4 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <!-- Title -->
    <title>Green Life</title>

    <!-- Favicon -->
    <link rel="icon" href="F.png">

    <!-- Core Stylesheet -->
    <link rel="stylesheet" href="style.css">

</head>

<body>
  
  <!-- Modal -->
  <div class="modal fade" id="edit" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLongTitle"> Product Details </h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
            <form>
                <div class="form-group">
                  <label for="pname">Product Name :</label>
                  <input type="text" class="form-control" name="pname" id="pname" aria-describedby="pname" placeholder="Enter Produt Name">
                </div>
                <label for="des">Description :</label>
                <input type="text" class="form-control" name="des" placeholder="Enter Description" aria-label="des">

                <div class="form-group">
                  <label for="ptype">Product Type :</label>
                  <select name="sel" id="inputState" class="form-control">
                    <option selected>Select</option>
                    <option value="1">Pots</option>
                    <option Value="2">Seeds</option>
                    <option Value="3">Plant</option>
                    <option Value="4">Tools</option>
                  </select>
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Image :</label>
                    <input type="file" name="img" class="form-control" id="img" aria-describedby="img" placeholder="Select Image">
                   
                  </div>
                  <div class="form-group">
                    <label for="price">Price :</label>
                    <input type="number" name="price" class="form-control" placeholder=" Enter Price" aria-label="price">
                   
                  </div>
                  <div class="form-group">
                    <label for="qty">Quantity :</label>
                    <input type="number" class="form-control" name="qty" placeholder="Enter Quantity" aria-label="Qty">
                   
                  </div>
                  
              </form>
        </div>
        <div class="modal-footer">
          <button type="submit" class="btn btn-danger" data-dismiss="modal">Close</button>
          <button type="submit" class="btn btn-success">Save changes</button>
        </div>
      </div>
    </div>
  </div>
    <!-- ##### Header Area Start ##### -->
    
    <?php include('header.php');?>

    <!-- ##### Header Area End ##### -->

    <!-- ##### Hero Area Start ##### -->
    
    <!-- ##### Hero Area End ##### -->
   

  
    <!-- ##### Testimonial Area End ##### -->

    <!-- ##### Product Area Start ##### -->
    <section class="new-arrivals-products-area bg-gray section-padding-100">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <!-- Section Heading -->
                    <div class="section-heading text-center mt-5">
                        <h2 class="edit"> <i class="fa fa-plus" aria-hidden="true"></i> Add Products </h2>
                     
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
    <script>
        
    $(document).ready(function() {

      $(".edit").click(function() {
        $('#edit').modal('show');
      });
    });
 
        </script>
</body>
<?php

$servername = "localhost";
$username = "root";
$passwordDB = "";
$database = "green_life";

$conn = mysqli_connect($servername, $username, $passwordDB, $database);
  // Check connection
  if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
  }

  if (isset($_POST['pname']) && isset($_POST['des']) && isset($_POST['sel']) && isset($_POST['img']) && isset($_POST['price']) && isset($_POST['qty'])) {

    $pname = $_POST['pname'];
    $des = $_POST['des'];
    $sel = $_POST['sel'];
    $img = $_POST['img'];
    $price = $_POST['price'];
    $qty = $_POST['qty'];

    $sql = "INSERT INTO `product`(`Prod_id`, `Prod_name`, `Prod_image`, `Prod_description`, `Prod_price`, `prod_qt`, `Date`, `Time`, `Pc_id`, `S_id`) VALUES 
   ('$pname','$des','$sel','$img','$price', '$qty',curdate() , curdate())";
  
   try {
    if ($conn->query($sql) === TRUE) {
      echo "New record created successfully";
      echo " <script> window.location.href='Home.php'</script> ";
    } else if ($conn->error) {
      echo " <script> alert('Email is already registered');
               </script> ";
    }
  } catch (Exception $e) {
    echo " <script> alert('Email Already Exists')
  window.location.href='Register.php' </script> ";
  }
}
$conn->close();

?>






</html>
