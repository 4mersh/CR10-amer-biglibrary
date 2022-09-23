<?php 

    $hostName = "localhost";
    $userName = "root";
    $password = "";
    $dbName = "cr10-amersh-biglibrary";

    $conn = mysqli_connect($hostName, $userName, $password, $dbName);

    if(!$conn){
        die("Error");
    }



?>