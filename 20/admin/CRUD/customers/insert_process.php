<?php
$name = $_POST['name'];
$gender = $_POST['gender'];
$phone = $_POST['phone'];
$address = $_POST['address'];
$birth = $_POST['birth'];
$email = $_POST['email'];
$password = $_POST['password'];


$connect = mysqli_connect('localhost','root','','20');
mysqli_set_charset($connect,'utf8');
$sql="insert into customers (name,	gender,	birth,	phone,	address
,	email,	password) values ('$name',$gender
,'$birth','$phone','$address','$email','$password')";

mysqli_query($connect,$sql);

$error=mysqli_error($connect);
echo $error;
mysqli_close($connect);

