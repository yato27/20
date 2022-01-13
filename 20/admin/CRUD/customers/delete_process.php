<?php
$id = $_GET['id'];

$connect = mysqli_connect('localhost','root','','20');
mysqli_set_charset($connect,'utf8');
$sql="delete from customers
where id_cus ='$id'";


mysqli_query($connect,$sql);

$error=mysqli_error($connect);
echo $error;
mysqli_close($connect);

