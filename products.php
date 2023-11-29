<?php include("header.php"); ?>
        <h1 class="pro1">Products</h1>

       <style>
        .pro1{
          color:rgb(221,221,221);
          text-align:center;
          
          

        }
        .na{
          color:rgb(221,221,221)
        }

        .pbox{
            /* height:250px; */
            border:1px solid gray;
            margin:15px;
            text-align:center;
            border-radius:10px;
            box-shadow:5px 5px 10px black;   
            transition:1s;
        }
        .pbox:hover{
          transform:translatex(20px);
        }
        .rupee{
          color:rgb(221,221,221)
        }
        .rupee:hover{
            transform:scale(1.2);
        }
        .pro{
          overflow:hidden; 

        }
        .pro1{
          font-family:'Times New Roman', Times, serif;
        }
        .rupee{
          transition:0.5s;
        }
       </style>
       <div class="container">
            <div class="row">

              
        <?php
        if(isset($_GET['pid'])){
          $pid=$_GET['pid'];
          if(isset($_SESSION['user'])){
            $user =$_SESSION['user'];
          if(isset($_GET['cart'])){
            
            $sql = "SELECT * FROM `product` WHERE `product_id`=$pid";
          $result = $conn->query($sql);
        if ($result->num_rows > 0) {
            $row = $result->fetch_assoc();
            $pname =  $row["product_name"];
            $pprice =  $row["product_price"];
            $pimage =  $row["product_image"]; 
            
           
                
            }
            $sql = "INSERT INTO `cart`(`cart_id`, `cart_pid`, `cart_name`, `cart_price`, `cart_image`, `cart_user`) VALUES ('','$pid',' $pname','$pprice','$pimage','$user')";
            if($conn->query($sql)===TRUE){
             
            }

          }
        }
        else{
          header("Location: login.php");
        }
      }

     
    
            ?>

            <?php
            $sql = "SELECT * FROM Product";
            $result = $conn->query($sql);
          
            if($result->num_rows>0){
              while($row=$result->fetch_assoc()){

            
            ?>
        <div class="col-sm-3">
            <div class="pbox">
              <div class="pro"> <img src="<?php echo $row['product_image']; ?>" style="height:200px;max-width:100%;margin-top:15px;" class="img">
            </div>
               
                <h3 class="na"><?php echo $row['product_name']; ?></h3>
                <h4 class="rupee">Rs. <?php echo $row['product_price']; ?></h4>
                <div class="row">
                  <div class="col-sm-6"><i class="bi-suit-heart-fill class=heart"></i>
                  </div>
                    
                  
                  <div class="col-sm-6">
                    <a href="products.php?pid=<?php echo $row['product_id'];?>&cart=1"><i class=" bi-cart  class=cart"></i></a>
</div>
                </div>

                
            </div>
        </div>



          <?php 
            }
          }
         else {
          echo "0 results";
        }

        $conn->close();

        ?>
     </div>
       </div>




    </body>
</html>