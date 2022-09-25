<?php 
    require_once "db_connect.php";
    require_once "file_upload.php";

    if($_POST){
        $id = $_POST["id"];
        $pname = $_POST["pname"];
        $paddress = $_POST["paddress"];
        $p_size = $_POST["p_size"];
        $publish_date = $_POST["publish_date"];
        $author_fname = $_POST["author_fname"];
        $author_lname = $_POST["author_lname"];
        $title = $_POST["title"];
        $image = file_upload($_FILES["image"]);
        $ISBNcode = $_POST["ISBNcode"];
        $short_description = $_POST["short_description"];
        $type = $_POST["type"];
        $status = $_POST["status"];
        $price = $_POST["price"];        

       $sql = "UPDATE `blibrary` SET `pname`='$pname',`paddress`='$paddress',`p_size`='$p_size',`publish_date`='$publish_date',`author_fname`='$author_fname',`author_lname`='$author_lname',`title`='$title',`image`='$image->fileName',`ISBNcode`='$ISBNcode',`short_description`='$short_description',`type`='$type',`status`='$status',`price`='$price' WHERE id = {$id}";
       $result = mysqli_query($conn, $sql);

        
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Book has been updated</h1>
    <a href="../index.php">Back to Home</a>
</body>
</html>