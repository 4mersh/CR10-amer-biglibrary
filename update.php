<?php 
require_once "actions/db_connect.php";

if(isset($_GET["id"])){
    $id = $_GET["id"];

    $sql = "SELECT * FROM blibrary WHERE id = {$id}";
    $result = mysqli_query($conn, $sql);
    $row = mysqli_fetch_assoc($result);




?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php require_once "components/Bootstrap.php";?> 
    <title>CR10-AmerSh-Biglibrary</title>
</head>
<body>
  <div class="container">
    <form action="actions/a_update.php" method="POST" enctype="multipart/form-data">
  <div class="mb-3">
    <label for="title" class="form-label">title</label>
    <input type="text" class="form-control" id="title" aria-describedby="emailHelp" name="title" value ="<?php echo $row["title"]; ?>">
   
  </div>

  <div class="mb-3">
    <label for="pname" class="form-label">pname</label>
    <input type="text" class="form-control" id="pname" aria-describedby="emailHelp" name="pname" value ="<?php echo $row["pname"]; ?>">
   
    </div>

  <div class="mb-3">
    <label for="paddress" class="form-label">paddress</label>
    <input type="text" class="form-control" id="paddress" aria-describedby="emailHelp" name="paddress" value ="<?php echo $row["paddress"]; ?>">
   
  </div>

  <div class="mb-3">
    <p>p_size</p>
    <select name="p_size" id="p_size">
    <option value="small">small</option>
    <option value="budium">budium</option>
    <option value="big">big</option>
  </select>

  </div>

  <div class="mb-3">
    <label for="publish_date" class="form-label">publish_date</label>
    <input type="date" class="form-control" id="publish_date" aria-describedby="emailHelp" name="publish_date" value ="<?php echo $row["publish_date"]; ?>">
   
  </div>

  <div class="mb-3">
    <label for="author_fname" class="form-label">author_fname</label>
    <input type="text" class="form-control" id="author_fname" aria-describedby="emailHelp" name="author_fname" value ="<?php echo $row["author_fname"]; ?>">
   
  </div>

  <div class="mb-3">
    <label for="author_lname" class="form-label">author_lname</label>
    <input type="text" class="form-control" id="author_lname" aria-describedby="emailHelp" name="author_lname" value ="<?php echo $row["author_lname"]; ?>">
   
  </div>

  <div class="mb-3">
    <label for="ISBNcode" class="form-label">ISBNcode</label>
    <input type="number" class="form-control" id="ISBNcode" aria-describedby="emailHelp" name="ISBNcode" value ="<?php echo $row["ISBNcode"]; ?>">
   
  </div>

  <div class="mb-3">
    <label for="short_description" class="form-label">short_description</label>
    <input type="text" class="form-control" id="short_description" aria-describedby="emailHelp" name="short_description" value ="<?php echo $row["short_description"]; ?>">
   
  </div>


  <div class="mb-3">
  <p>Type</p>
    <select name="type" id="type">
    <option value="Book">Book</option>
    <option value="CD">CD</option>
    <option value="DVD">DVD</option>
  </select>

  </div>


  <div class="mb-3">
  <p>Status</p>
    <select name="status" id="status">
    <option value="available">available</option>
    <option value="reserved">reserved</option>
  </select>
   
  </div>

  <div class="mb-3">
    <label for="price" class="form-label">price</label>
    <input type="numper" class="form-control" id="price" name="price" value ="<?php echo $row["price"]; ?>">
  </div>

  <div class="mb-3">
    <label for="id" class="form-label"></label>
    <input type="hidden" class="form-control" id="id" name="id" value ="<?php echo $row["id"]; ?>">
  </div>
  <div class="mb-3">
    <label for="image" class="form-label">image</label>
    <input type="file" class="form-control" id="image" name="image" value ="<?php echo $row["image"]; ?>">
  </div>
  
  <button type="submit" class="btn btn-primary">Update</button>
  </form> 
</div>

</body>
</html>

<?php

}

?>