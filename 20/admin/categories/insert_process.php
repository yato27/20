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
} else {
$name = $_POST['name'];


$connect = mysqli_connect('localhost','root','','20');
mysqli_set_charset($connect,'utf8');
$sql="insert into categories (name) values ('$name')";

mysqli_query($connect,$sql);

$error=mysqli_error($connect);
echo $error;
header('location:http://localhost/admin/categories');

mysqli_close($connect);
}


