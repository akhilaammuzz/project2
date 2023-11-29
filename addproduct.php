<?php include("header.php"); ?>


<link rel="stylesheet" href="addproduct.css">
<?php 
 if(isset($_POST['pname'])){
    $pname=$_POST['pname'];
    $pprice=$_POST['pprice'];

    ///////////////

    $target_dir = "uploads/";
    $target_file = $target_dir . basename($_FILES["pimage"]["name"]);
    $uploadOk = 1;
    $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
    
    // Check if image file is a actual image or fake image

    $check = getimagesize($_FILES["pimage"]["tmp_name"]);
    if($check !== false) {
       // echo "File is an image - " . $check["mime"] . ".";
        $uploadOk = 1;
    } else {
        echo "File is not an image.";
        $uploadOk = 0;
    }
    
    
    // Check if file already exists
    if (file_exists($target_file)) {
      echo "Sorry, file already exists.";
      $uploadOk = 0;
    }
    
    // Check file size
    if ($_FILES["pimage"]["size"] > 500000) {
      echo "Sorry, your file is too large.";
      $uploadOk = 0;
    }
    
    // Allow certain file formats
    if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
    && $imageFileType != "gif"  && $imageFileType != "webp" ) {
      echo "Sorry, only JPG, JPEG, PNG, WEBP & GIF files are allowed.";
      $uploadOk = 0;
    }
    
    // Check if $uploadOk is set to 0 by an error
    if ($uploadOk == 0) {
      echo "Sorry, your file was not uploaded.";
    // if everything is ok, try to upload file
    } else {
      if (move_uploaded_file($_FILES["pimage"]["tmp_name"], $target_file)) {
        echo "The file ". htmlspecialchars( basename( $_FILES["pimage"]["name"])). " has been uploaded.";
        //////////
        $pimage = $target_file;
      
        $sql ="INSERT INTO `product` (`product_id`, `product_name`, `product_price`, `product_image`) VALUES (NULL, '$pname', '$pprice', '$pimage')";
        if($conn->query($sql)===TRUE){
            echo "Product uploaded successfully";
        }
        else{
            echo "Error : " .$sql ."<br>" .$conn->error ;
        }

    
        }
        $conn->close();

        //////////


      } 
    }
    

    /////////////




?>
        <div class="box01">
        <form action="" method="post" enctype="multipart/form-data">
            <table>
            <tr>
                <td><label for="">Name</label></td>
           <td><input type="text" name="pname" id=""></td>
            </tr>
            <tr>
            <td><label for="">Price</label></td>
            <td><input type="text" name="pprice" id=""></td>
            </tr>
            <tr>
            <td><label for="">Image</label></td>
            <td><input type="file" name="pimage" id=""></td>
            </tr>
            <tr>
            <td><button type="submit">Submit</button></td>
            </tr>
            </table>
        </form>
        </div>
    </body>
</html>