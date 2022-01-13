<?php
include 'config.php';
if(isset($_POST['submit'])){
    $name=$_POST['name'];

    $sql="insert into category(name)
    values('$name')";
    $result=mysqli_query($conn,$sql);
    if($result){
        echo "Data inserted successfully";
        header('location:display.php');
    }else{
        die(mysqli_error($con));
    }
}

?>