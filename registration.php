<?php include("header.php"); 
if(isset($_SESSION["user"])){
    header("Location: account.php");
}


?>

<html>
    <head>
        <title>registration</title>
        <link rel="stylesheet" href="register.css">
    </head>
    <body>  
    <?php 
    if(isset($_POST['name'])){
      $reg_name= $reg_email= $reg_phoneno= $reg_user= $reg_pass="";
        
        $reg_name = $_POST['name'];
        $reg_email=$_POST['email'];
        $reg_phoneno=$_POST['phoneno'];
        $reg_user=$_POST['username'];
        $reg_pass=$_POST['password'];
        if($reg_name==""){
            echo "Err: Name should not be blank";
        }else if($reg_email==""){
            echo "Err: Email should not be blank";
        }else if($reg_phoneno==""){
            echo "Err: Phone should not be blank";
        }else{
            $sql = "INSERT INTO `registration` (`reg_id`, `reg_name`, `reg_email`, `reg_phone`, `reg_user`, `reg_pass`) VALUES (NULL, ' $reg_name', '$reg_email', '$reg_phoneno', '$reg_user', '$reg_pass')";

            if($conn->query($sql) === TRUE){
                echo "Registration successful";
                // header("Location: registration.php");
            }
            else{
                echo "Error : " .$sql ."<br>" .$conn->error ;
            }
        }

        $conn->close();
    }


?>
        <div class="box2">


        <form action="" method="post" >
            <table cellpadding="5px" >
            <tr>
            <td><label for="" >ENTER A NAME</label></td>
            <td><input type="text" name="name" id=""></td>
            </tr>

            <tr>
            <td><label for="">ENTER A EMAIL</label></td>
            <td><input type="email" name="email" id=""></td>
            </tr>

            <tr>
            <td><label for="">PHONE NUMBER</label></td>
            <td><input type="number" name="phoneno" id=""></td>
            </tr>

            <tr>
            <td><label for="">USER NAME</label></td>
            <td><input type="text" name="username" id=""></td>
            </tr>

            <tr>
            <td><label for="">PASSWORD</label></td>
            <td><input type="password" name="password" id=""></td>
            </tr>
            </table>

            <button type="submit">REGISTRATION</button>


        </form>
        </div>
    </body>
</html>