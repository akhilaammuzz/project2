<?php
session_start();

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "akhila_website_db";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="index.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-sm-12"></div>
        </div>
    </div>
    <style>
        .link{
            background-color:gray;
            font-family:bold;
            height:40px;
           
            color:white;
            font-size:20px;
            text-align:center;
            
           

        }
        body{
            background-image:url("background.webp");
            background-size:100%;

        }
       
        
        .imag{
            background-image:url("imag1.avif")

        }
        
        .demo{
            color:white;
            font-family:'times new roman';
            margin:50px;
            margin-right:0px;
            transition:1s;
            padding-top:10px;

            display:inline block;
            

            

        }
        .demo:hover{
            text-decoration:none;
            color:black;
            background-color:white;
            padding:15px 20px;
            transition:1s;



        }
    </style>
<div class="link">
            <a href="index.php" class="demo">Home</a>  
            <a href="about.php" class="demo">About</a>
            <a href="services.php" class="demo">Services</a>
            <a href="products.php" class="demo">Products</a>
            <a href="contact.php" class="demo">Contact</a>
            <?php if(!isset($_SESSION["user"])){ ?>
                <a href="registration.php" class="demo">Registration</a>
                <a href="login.php" class="demo">Login</a>
            <?php }else{ ?>
                <a href="account.php" class="demo">Account</a>
                <a href="logout.php" class="demo">Logout</a>     
                <a href="addproduct.php" class="demo">Addproduct</a>
                <a href="cart.php" class="demo">cart</a>
                
                <?php } ?>

        </div>
</body>
</html>