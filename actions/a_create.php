<?php 
    require_once "db_connect.php";
    require_once "file_upload.php";

    if($_POST){
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

        $sql = "INSERT INTO `blibrary`(`pname`, `paddress`, `p_size`, `publish_date`, `author_fname`, `author_lname`, `title`, `image`, `ISBNcode`, `short_description`, `type`, `status`, `price`) VALUES ('$pname','$paddress','$p_size','$publish_date','$author_fname','$author_lname','$title','$image->fileName','$ISBNcode','$short_description','$type','$status','$price')";


        if(mysqli_query($conn, $sql)){
            echo "Success <br>";
        }else {
            echo "Error";
        }

        
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
    <a href="../index.php"><input type="submit" value ="Back to Home"></input></a>
    
</body>
</html>