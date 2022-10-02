<?php
    require_once "actions/db_connect.php";




    $id = $_GET["id"];
    
    $sql = "SELECT * FROM blibrary WHERE pname = '$id' "; 
    $result = mysqli_query($conn, $sql);

    $body = "";
    while($row = mysqli_fetch_assoc($result)){
        $body.= "
        <div class='card-body'>
          <img src='image/{$row["image"]}' class='card-img-top' alt='{$row["title"]}'>
          <p class='card-text'>{$row["pname"]} </p> 
          <p class='card-text'>{$row["paddress"]} </p> 
          <p class='card-text'>{$row["publish_date"]} </p> 
          </div>
         
      ";
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
    </div>
  </div>
</nav>
<div class="p-3 mb-2 bg-white text-dark"></div>

    <div class="container ">
        <div class="row row-cols-3 ">
            <?= $body; ?>
        </div>
    </div>

     <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
    </body>
    </html>