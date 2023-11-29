<?php include("header.php"); ?>

       <div class="box1">

<?php

if(isset($_POST["contact_name"])){
    $contact_name = $_POST["contact_name"];
    $contact_email = $_POST["contact_email"];
    $contact_message = $_POST["contact_message"];

    $sql = "INSERT INTO contact (contact_name,contact_email,contact_message)VALUES ('$contact_name', '$contact_email', '$contact_message')";

    if ($conn->query($sql) === TRUE) {
        echo "Contact added successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

$conn->close();



}


?>
    <center>
        <h1 >Contact</h1>
       
        <form action="" method="post">
        <label for="" >ENTER YOUR NAME</label>
        <input type="text" name="contact_name" id=""><br><br>
        <label for="">ENTER YOUR EMAIL</label>
        <input type="text" name="contact_email" id=""><br><br>
        <label for="">ENTER YOUR MESSAGE</label>
        <input type="text" name="contact_message" id=""><br><br>
        <button class="sub">SUBMIT</button>
        </form>
        </center>

       </div>
    </body>
</html>

