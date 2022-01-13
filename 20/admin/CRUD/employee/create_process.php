<?php
$name = $_POST['name'];
$gender = $_POST['gender'];
$phone = $_POST['phone'];
$address = $_POST['address'];
$birth = $_POST['birth'];
$email = $_POST['email'];
$password = $_POST['password'];
$level = $_POST['level'];

$connect = mysqli_connect('localhost','root','','20');
mysqli_set_charset($connect,'utf8');
$sql="insert into employee (name,phone,address,date_of_birth
,email,password,level,gender) values ('$name','$phone','$address'
,'$birth','$email','$password',$level,$gender)";

mysqli_query($connect,$sql);

$error=mysqli_error($connect);
echo $error;
mysqli_close($connect);

