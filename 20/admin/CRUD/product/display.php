<?php
require_once 'connect.php';
// require_once 'process.php';
// require_once 'user.php';

$picture=$row['picture'];
$name=$row['name'];
$slug=$row['slug'];
$parent_id=$row['parent_id'];
$create_at=$row['create_at'];
$update_at=$row['update_at'];
$brand=$row['brand'];
$description=$row['description'];
$more_info=$row['more_info'];
?>

<?php
$sql = "Select * from product";
$arry_result = mysqli_query($conn,$sql);
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
          <a href="user.php" class="text-light">Add product</a></button>
<table class="table">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Ảnh</th>
      <th scope="col">Name</th>
      <th scope="col">Slug</th>
      <th scope="col">Parent_id</th>
      <th scope="col">Create_at</th>
      <th scope="col">Update_at</th>
      <th scope="col">Description</th>
      <th scope="col">Brand</th>
      <th scope="col">Info</th>
      <th scope="col">Operations</th>
    </tr>
  </thead>
  <tbody>
  <?php



if($arry_result){
  while($row = mysqli_fetch_assoc($arry_result)){
  
<?php foreach ($arry_result as $each) { ?>
      <tr>
        <th> <?php echo $each['$picture']</th>
        <td> <?php echo $each['$name']</td>
        <td> <?php echo $each['$slug']</td>
        <td> <?php echo $each['$parent_id']</td>
        <td> <?php echo $each['$create_at']</td>
        <td> <?php echo $each['$update_at']</td>
        <td> <?php echo $each['$description']</td>
        <td> <?php echo $each['$brand']</td>
        <td> <?php echo $each['$more_info']</td>
        
        <td>
        <button class="btn btn-primary"><a href="update.php?updateid='.$id.'"class="text-light">Update</a></button>
        <br><br>
        <button class="btn btn-danger" ><a href="delete.php?deleteid='.$id.'"class="text-light">Delete</a></button>
      </td>
        </tr>

<?php } ?>
   

  </tbody>
</table>
</body>
</html>