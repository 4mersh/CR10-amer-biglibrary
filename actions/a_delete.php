<?php

    require_once "./db_connect.php";

    if($_POST){
        $id = $_POST["id"];

        $sql = "DELETE FROM products where id = {$id}";
        $result = mysqli_query($conn, $sql);

        if($result ){
            echo "Success <br> <a href='../index.php'>Home</a>";
        }
    }