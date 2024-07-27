<?php
session_start();

$servername = "localhost";
$username = "root";
$passwordDB = "";

$database = "glife";

if (isset($_POST['name']) && isset($_POST['cnumber']) && isset($_POST['email']) && isset($_POST['city']) && isset($_POST['pincode']) && isset($_Post['password'])) {


    $fullname = $_POST['name'];
    $contactno = $_POST['cnumber'];
    $email = $_POST['email'];
    $city = $_POST['city'];
    $pincode = $_POST['pincode'];
    $password = $_POST['password'];
    echo '<script>alert("Welcome in green life!")</script>';

    // echo "Full name : " . $fullname . "<br>" .
    //     "Email address : " . $email . "<br>" .
    //     "city:" . $city . "<br>" . "pincode:" . $pincode . "<br>";



    // Create a connection 
    $conn = mysqli_connect($servername, $username, $passwordDB, $database);
    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // if (isset($category)) {
    //     $sql = "insert into registeruser (name, number, email, password) values ('$fullname', '$contactno','$email', '$password')";
    // } else {

    // }

    $emailCheck = "select * from seller where (email='$email')";

    $res = mysqli_query($conn, $emailCheck);

    if (mysqli_num_rows($res) > 0)
     {

        $row = mysqli_fetch_assoc($res);
        if ($email == isset($row['email']))
         {
            echo "email already exists";
         }
    } 
    else 
    {

        $sql = "INSERT INTO `seller`(`name`, `contact`, `email`, `city`, `pin`, `password`) VALUES('$fullname', '$contactno','$email',  '$city', '$pincode', '$password')";

        try {
            if ($conn->query($sql) === TRUE) 
            {
                // echo "New record created successfully";
                echo " <script> window.location.href='Home.php'</script> ";
            } else if ($conn->error) 
            {
                echo " <script> alert('Email is already registered');
                        window.location.href='Seller.php' </script> ";
            }
        } 
        catch (Exception $e)
        {
            echo " <script> alert('Email Already Exists'); </script>";
        }

    }

    $conn->close();
}

?>

<?php
session_start();

$servername = "localhost";
$username = "root";
$passwordDB = "";
$database = "glife";

if (isset($_POST['fname']) && isset($_POST['cnumber']) && isset($_POST['email']) && isset($_POST['city']) && isset($_POST['Address']) && isset($_POST['password'])) {

  $fullname = $_POST['fname'];
  $contactno = $_POST['cnumber'];
  $email = $_POST['email'];
  $city = $_POST['city'];
  $address = $_POST['Address'];
  $password = $_POST['password'];
  
if (empty($_POST["email"])) {
    $emailErr = "Email is required";
  } else {
    $email = ($_POST["email"]);
    // check if e-mail address is well-formed
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
      $emailErr = "Invalid email format";
    }
  }

if (strlen($password) <= 8) {
    echo "Password is valid.";
} else {
    echo "Password is too short.";
}

  // Create a connection 
  $conn = mysqli_connect($servername, $username, $passwordDB, $database);

  // Check connection
  if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
  }
  $emailCheck = "select * from user where (email='$email')";
  $res = mysqli_query($conn, $emailCheck);

  if (mysqli_num_rows($res) > 0) {

    $row = mysqli_fetch_assoc($res);
    if ($email == isset($row['email'])) {
      echo "email already exists";
    }
  } else {

    $sql = "insert into user ( `name`, `email`, `contact`, `address`, `city`, `password`) values ('$fullname','$email','$contactno','$address','$city', '$password')";

    try {
      if ($conn->query($sql) === TRUE) {
        echo "New record created successfully";
        echo " <script> window.location.href='Home.php'</script> ";
      } else if ($conn->error) {
        echo " <script> alert('Email is already registered');</script> ";
      }
    } catch (Exception $e) {
      echo " <script> alert('Email Already Exists')
    window.location.href='Register.php' </script> ";
    }
  }
  $conn->close();
}
?>



<!doctype html>
<html lang="en">

<head>
    <!-- Favicon -->
    <link rel="icon" href="F.png">
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"
        integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"
        integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF"
        crossorigin="anonymous"></script>
        
    <title>Green Life</title>
    <style>
        .for {
            margin-left: 330px;
            margin-top: 500px;
        }

        .center {
            margin-left: 70px;
        }

        .full {
            height: 699px;
            width: 420px;
        }
    </style>
    <script src="js/Sscript.js"></script>
</head>

<body>
    <section class="vh-96" style="background-color:rgb(103, 143, 103);">
        <div class="container py-5 h-100">
            <div class="row d-flex justify-content-center align-items-center h-100">
                <div class="col col-xl-10">
                    <div class="card" style="border-radius: 1rem;">
                        <div class="row g-0">
                            <div class="col-md-6 col-lg-5 d-none d-md-block">
                                <img class="full" src="./pot.jpg" alt="login form" class="img-fluid"
                                    style="border-radius: 1rem 0 0 1rem;" />
                            </div>
                            <div class="col-md-6 col-lg-7 d-flex align-items-center">
                                <div class="card-body p-4 p-lg-5 text-black">

                                    <form name="Seller" onsubmit="validateForm1()" action="SDb.php" method="POST">

                                        <div class="d-flex align-items-center mb-3 pb-1">
                                            <i class="fas fa-cubes fa-2x me-3" style="color: #ff6219;"></i>
                                            <span class="h1 fw-bold mb-0"><img style="width:50px;height:50px;"
                                                    src="./1.jpg">&nbsp;Green Life</span>
                                        </div>

                                        <h5 class="fw-normal mb-3 pb-3" style="letter-spacing: 1px;">Register into your
                                            Seller account</h5>

                                        <div class="row">
                                            <div class="col">
                                                <input type="text" id="f_name" class="form-control" name="name"
                                                    placeholder="Full Name" aria-label="Name" Required><span id="username"
                                                    class="text-danger font-weight-bold"></span>
                                            </div>
                                            <div class="col">
                                                <input type="text" id="no" class="form-control" name="cnumber"
                                                    placeholder="Number" aria-label="number" Required><span id="Phone"
                                                    class="text-danger font-weight-bold"></span>
                                            </div>
                                        </div>
                                        <br>
                                        <div class="form-outline mb-4">
                                            <!-- <label class="form-label" for="form2Example17">Email address</label> -->
                                            <input type="email" id="email" placeholder="Email" name="email"
                                                class="form-control form-control-lg" Required><span id="emailadd"
                                                class="text-danger font-weight-bold"></span>

                                        </div>

                                        <div class="row">
                                            <div class="col">
                                                <input type="text" id="city" class="form-control" name="city"
                                                    placeholder="city" aria-label="city" Required><span id="city"
                                                    class="text-danger font-weight-bold"></span>
                                            </div>
                                            <div class="col">
                                                <input type="text" id="pin" class="form-control" name="pincode"
                                                    placeholder="Pincode" aria-label="pincode" Required><span id="pin"
                                                    class="text-danger font-weight-bold" Required></span>
                                            </div>
                                        </div>
                                        <br>
                                        <div class="form-outline mb-4">
                                            <!-- <label class="form-label" for="form2Example17">Email address</label> -->
                                            <input type="password" id="password" name="password" placeholder="Password"
                                                class="form-control form-control-lg" Required><span id="Password"
                                                class="text-danger font-weight-bold"></span>

                                        </div>
                                        <a class="for small" href="#!">Forgot password?</a>
                                        <br><br>
                                        <div class="pt-1 mb-4" onclick="validateForm();">
                                            <button class=" col-12 btn btn-success btn-lg btn-block" type="submit">Sign
                                                up</button>
                                        </div>

                                        <div class="center">
                                            <p class="mb-5 pb-2 text-dark"  style="color: #393f81;">Do you have an account? <a
                                                    href="./Login.php">Login here</a></p>
                                        </div>
                                    </form>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


</body>

</html>