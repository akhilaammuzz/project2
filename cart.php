<?php include("header.php"); 

?>
<h1>cart</h1>

<div class="container">
    <div class="row">

    <?php

    $user = $_SESSION['user'];
    $sql = "SELECT * FROM `cart` WHERE `cart_user` = '$user'";
    $result = $conn->query($sql);
    if($result){
    if($result->num_rows>0){
        while($row=$result->fetch_assoc()){
?>

 


        <div class="col-sm-3">
            <style>
                 .pbox{
            /* height:250px; */
            border:1px solid gray;
            margin:15px;
            text-align:center;
            border-radius:10px;
            box-shadow:5px 5px 10px black;   
            transition:1s;
                }
            </style>

            <div class="pbox">
                <div class="pro">
                    <img src="<?php echo $row['cart_image']; ?>" alt=""style="height:200px;max-width:100%;margin-top:15px;" class="img">
                </div>
                               
                <h3 class="na"><?php echo $row['cart_name']; ?></h3>
                <h4 class="rupee">Rs. <?php echo $row['cart_price']; ?></h4>
            </div>
        </div>
        <?php
    }
    }
    }
    else{
        echo "Error in ".$sql."".$conn->error;
    }

?>
    </div>
</div>

