<?php include("header.php"); 
if(isset($_SESSION["user"])){
    header("Location: account.php");
}



?>

<html>
<head>
    <title>log in page</title>
    <link rel="stylesheet" href="log.css">

</head>
<body>
    <?php 
    $scc = $err = "";
    if(isset($_POST['userid'])){
        $log_userid=$log_password="";

        $log_userid =$_POST['userid'];
        $log_password =$_POST['password'];

        $sql = "SELECT * FROM registration WHERE reg_user = '$log_userid' AND reg_pass='$log_password'";

        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            $scc= "Login successful";
            $_SESSION["user"]=$log_userid;
            header("Location: account.php");
        } else {
            $err= "Invalid username or password";
        }
        $conn->close();
    } ?>
    <div class="box3">
    <form action=""method="post">
        <span style="color:green;"><?php echo $scc; ?></span>
        <span style="color:red;"><?php echo $err; ?></span>
        <table>
        <tr>
       <td> <label for="">USER ID</label></td>
       <td><input type="text" name="userid" id=""></td>
        </tr>
        <tr>
        <td><label for="">PASSWORD</label></td>
        <td><input type="password" name="password" id=""></td>
        </tr>
        <tr>
        <td>    
        <button type=submit>LOGIN</button>
        </td>
        </tr>
        
        

        </table>
    
    
    </form>
    </div>


</body>
</html>