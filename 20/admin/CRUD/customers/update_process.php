<?php
$id = $_POST['id'];
$name = $_POST['name'];
$gender = $_POST['gender'];
$phone = $_POST['phone'];
$address = $_POST['address'];
$birth = $_POST['birth'];
$email = $_POST['email'];
$password = $_POST['password'];


$connect = mysqli_connect('localhost','root','','20');
mysqli_set_charset($connect,'utf8');
$sql="update customers
set name ='$name',gender =$gender,phone ='$phone',address ='$address',
birth ='$birth',email ='$email',
password ='$password'
where id_cus ='$id'";


mysqli_query($connect,$sql);

$error=mysqli_error($connect);
echo $error;
mysqli_close($connect);

