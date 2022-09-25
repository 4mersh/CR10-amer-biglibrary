<?php 
    require_once "actions/db_connect.php";

    $sql = "SELECT * FROM blibrary";
    $result = mysqli_query($conn, $sql);

    $body = "";

    if(mysqli_num_rows($result) == 0){
        $body = "<div class='text-center h1 text-danger'>No Result</div>";
    }else {
        while($row = mysqli_fetch_assoc($result)){
            $body.= "
            <div class='container'>
            <div class='card' style='width: 18rem;'>
  <img src='image/{$row["image"]}' class='card-img-top' alt='{$row["title"]}'>
  <div class='card-body'>
    <h5 class='card-title'>{$row["title"]}</h5>
    <p class='card-text'>{$row["type"]}</p>
    <p class='card-text'>{$row["publish_date"]}</p>
    <p class='card-text'>{$row["status"]}</p>
    <p class='card-text'>{$row["price"]} €</p>
    <a href='#' class='btn btn-success'>Buy</a>
    <a href='update.php?id={$row["id"]}' class='btn btn-primary'>Update</a>
    <a href='delete.php?id={$row["id"]}' class='btn btn-danger'>Delete</a>
  </div>
  </div>
</div>
            ";
        }
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php require_once "components/Bootstrap.php";?>
    <title>Document</title>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <div class="container-fluid">
    <a class="navbar-brand" href="index.php">CR10-AmerSh-Biglibrary</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="index.php">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="create.php">Create_New_Book</a>
        </li>
      </ul>
      <form class="d-flex" role="search">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Search</button>
      </form>
    </div>
  </div>
</nav>
<div class="p-3 mb-2 bg-white text-dark"></div>
    <div class="container">
        <div class="row row-cols-3">
           <?= $body;?> 
        </div>
    </div>
   
    
</body>
</html>