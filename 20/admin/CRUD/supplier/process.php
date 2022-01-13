<?php
include 'config.php';
if(isset($_POST['submit'])){
    $name=$_POST['name'];
    $phone=$_POST['phone'];
    $address=$_POST['address'];
    $contact=$_POST['contact'];

    $sql="insert into supplier(name,phone,address,contact)
    values('$name','$phone','$address','$contact')";
    $result=mysqli_query($conn,$sql);
    if($result){
        echo "Data inserted successfully";
        header('location:display.php');
    }else{
        die(mysqli_error($con));
    }
}

?>