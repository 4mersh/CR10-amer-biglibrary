<?php
    require_once "actions/db_connect.php";

    if($_GET["id"]){
        $id = $_GET["id"];
        $sql = "SELECT * FROM blibrary WHERE id = {$id}";
        $result = mysqli_query($conn, $sql);

        $data = mysqli_fetch_assoc($result);
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <?php require_once "./components/bootstrap.php"; ?>
</head>
<body>
    <h1 class="text-center">Are you sure you want to delete this Book (<?= $data["title"] ?>) <img style="border-radius: 50%; width: 150px" src="image/<?= $data["image"] ?>"></h1>

    <div class="text-center">
        <a href="index.php" class="btn btn-danger">No</a> 
        <form action="actions/a_delete.php" method="POST">
            <input type="hidden" name="id" value="<?= $id ?>">
            <input type="submit" class="btn btn-success" value="Yes">
        </form>
    </div>
</body>
</html>