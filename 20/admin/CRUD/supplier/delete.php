<?php
require_once 'config.php';
require_once 'display.php';
if(isset($_GET['deleteid'])){
    $id=$_GET['deleteid'];

$sql = "delete from supplier where id=$id";
$result = mysqli_query($conn,$sql);
if($result){
    // echo "Deleted successfull";
    header('location:display.php');
}else{
    die(mysqli_error($conn));
}


}



?>