<?php
	error_reporting(0);
?>
<?php      
        $host = "localhost";  
        $user = "root";  
        $password = '';  
        $db_name = "glife";  
          
        $con = mysqli_connect($host, $user, $password, $db_name);  
        if(mysqli_connect_errno()) {  
            die("Failed to connect with MySQL: ". mysqli_connect_error());  
        }  
        
        if(isset($_POST['remember']))
            setcookie('aemail',$_POST['emaila'], time() + 86400 * 30, '/');
        else
            setcookie('aemail',$_POST['emaila'], time() - 86400 * 30, '/');
        if(isset($_POST['remember']))
            setcookie('apass',$_POST['passa'], time() + 86400 * 30, '/');
        else
            setcookie('apass',$_POST['passa'], time() - 86400 * 30, '/');

        $email = $_POST['emaila'];  
        $pass = $_POST['passa'];  
          
            //to prevent from mysqli injection  
            $email = stripcslashes($email);  
            $pass = stripcslashes($pass);  
            $email = mysqli_real_escape_string($con, $email);  
            $pass = mysqli_real_escape_string($con, $pass);  
          
            $sql = "select * from admin where email = '$email' and password = '$pass'";  
            $result = mysqli_query($con, $sql);  
            $row = mysqli_fetch_array($result, MYSQLI_ASSOC);  
            $count = mysqli_num_rows($result);  
              
            if($count == 1){  
                echo header("location: gdashbord.php");
            }
            else{  
                echo " <script> alert('Invalid Email')
                 window.location.href='admin.php' </script> "; 
            }
