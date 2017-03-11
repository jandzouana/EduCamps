<?php
    $target_dir = "images/";
    $target_file = $target_dir . basename($_FILES["image_submission"]["name"]);
    $uploadOk = 1;
    $imageFileType = pathinfo($target_file, PATHINFO_EXTENSION);
    
    if(isset($_POST["submit"])) {
        $check = getimagesize($_FILES["image_submission"]["name"]);
        if($check !== false) {
            $uploadOk = 1;
        } else {
            echo "File is not an image.";
            $uploadOk = 0;
        }
    }

    if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg" && $imageFileType != "gif") {
        echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.<br/>";
        $uploadOk = 0;
    }

    if ($uploadOk == 0) {
        echo "Sorry, your file was not uploaded.<br/>";
    // if everything is ok, try to upload file
    } else {
        if (move_uploaded_file($_FILES["image_submission"]["tmp_name"], $target_file)) {
            echo "The file ". basename( $_FILES["image_submission"]["name"]). " has been uploaded.<br/>";
        } else {
            echo "Sorry, there was an error uploading your file.<br/>";
        }
        $target_file = basename($_FILES["image_submission"]["name"]);
        $caption = $_POST["caption"];
        $name = $_POST["name"];
        $camp_id = $_POST["camp_id"];
        
        if ($uploadOk == 0) {
            echo "Sorry, your file was not uploaded.<br/>";
        } else {
            $connection = mysqli_connect("localhost","fourthreefour","americo","educamps");
            if(!$connection){
                die("Database connection failed: ".mysqli_connect_error());
            }
            $upload_query = "INSERT INTO gallery (filename, caption, name, camp_id) VALUES ('$target_file', '$caption', '$name', '$camp_id')";
            $upload = mysqli_query($connection, $upload_query);
            if($upload){
                echo "Database upload successful!";
            } else {
                echo "Error uploading to database: ".mysqli_error($connection);
            }
            mysqli_close($connection);
        }
    }
?>