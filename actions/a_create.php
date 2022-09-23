<?php 
    require_once "db_connect.php";
    require_once "file_upload.php";

    if($_POST){
        $title = $_POST["title"];
        $pname = $_POST["pname"];
        $paddress = $_POST["paddress"];
        $p_size = $_POST["p_size"];
        $publish_date = $_POST["publish_date"];
        $author_fname = $_POST["author_fname"];
        $author_lname = $_POST["author_lname"];
        $ISBNcode = $_POST["ISBNcode"];
        $short_description = $_POST["short_description"];
        $type = $_POST["type"];
        $status = $_POST["status"];
        $price = $_POST["price"];
        $image = file_upload($_FILES["image"]);

        $sql = "INSERT INTO `blibrary`(`pname`, `paddress`, `p_size`, `publish_date`, `author_fname`, `author_lname`, `title`, `image`, `ISBNcode`, `short_description`, `type`, `status`, `price`) VALUES ('$pname','$paddress','$p_size','$publish_date','$author_fname','$author_lname','$title','$image->fileName','$ISBNcode','$short_description','$type','$status',$price)";


        if(mysqli_query($conn, $sql)){
            echo "Success";
        }else {
            echo "Error";
        }

        
    }
?>