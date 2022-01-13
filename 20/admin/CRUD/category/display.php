<?php
require_once 'config.php';
require_once 'process.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Display</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
</head>
<body>
    <div class="container">
        <button class="btn btn-primary my-5">
          <a href="index.php" class="text-light">Add category</a></button>
<table class="table">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Name</th>
    </tr>
  </thead>
  <tbody>
  <?php

$sql = "Select * from category";
$result = mysqli_query($conn,$sql);

if($result){
  while($row = mysqli_fetch_assoc($result)){
      $id=$row['id'];
      $name=$row['name'];
      echo '<tr>
            <th scope="row">'.$id.'</th>
            <td>'.$name.'</td>
            <td>
            <button class="btn btn-primary"><a href="update.php?updateid='.$id.'"class="text-light">Update</a></button>
            <br><br>
            <button class="btn btn-danger" ><a href="delete.php?deleteid='.$id.'"class="text-light">Delete</a></button>
          </td>
            </tr>';
  }

}
?>
   
     

  </tbody>
</table>
</body>
</html>