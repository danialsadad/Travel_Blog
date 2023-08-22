<?php
 
    include('db.php');

    if (isset($_POST["submit"])) {

           $image_name = $_FILES["image"]["name"];
           $image_data = (file_get_contents($_FILES["image"]["tmp_name"]));
            
           file_put_contents("uploads/$image_name", $image_data);


           $query = "INSERT INTO collection(image_name) VALUES ('$image_name')";
           mysqli_query($conn, $query);
           
           mysqli_close($conn);
    }
    include('display.php');
?>
