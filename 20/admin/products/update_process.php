<?php
session_start();
if(!isset($_SESSION['id'])){
   


echo 'bạn cần đăng nhập'; 

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="http://localhost/admin/style.css">
</head>
<body>
<div class="header">
        <div class="sub_header">
            <a href="../signin.php">log in</a><a href="../signout.php">log out</a>
        </div>

    </div>
</body>
</html>
<?php
}
else {
$id = $_POST['id'];
$name = $_POST['name'];
$slug = $_POST['slug'];
$parent_id = $_POST['parent_id'];
$create_at = $_POST['create_at'];
$update_at = $_POST['update_at'];
$brand = $_POST['brand'];
$description = $_POST['description'];
$price = $_POST['price'];
$more_info = $_POST['more_info'];


$connect = mysqli_connect('localhost','root','','20');
mysqli_set_charset($connect,'utf8');
$sql="update products
set name ='$name',slug ='$slug',parent_id ='$parent_id',create_at ='$create_at',
update_at ='$update_at',description ='$description',price ='$price',
more_info ='$more_info'

where id ='$id'";


mysqli_query($connect,$sql);

$error=mysqli_error($connect);
echo $error;
header('location:http://localhost/admin/products');
mysqli_close($connect);
}
