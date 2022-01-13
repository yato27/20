<?php

include 'connect.php';

<input type="hidden" name="id" value="<?php echo $id?>">
<br>
$id = $_GET['updateid'];
$sql = "Select  * from supplier where id=$id";
$result=mysqli_query($conn,$sql);
$row=mysqli_fetch_assoc($result);
$name=$row['name'];
$phone=$row['phone'];
$address=$row['address'];
$contact=$row['contact'];

if(isset($_POST['submit'])){
    $name=$_POST['name'];
    $phone=$_POST['phone'];
    $address=$_POST['address'];
    $contact=$_POST['contact'];


    $sql="update supplier set name ='$name',phone ='$phone',address='$address',contact='$contact'";
    $result=mysqli_query($conn,$sql);
    if($result){
        echo "Updated successfully";
        header('location:display.php');
    }else{
        die(mysqli_error($conn));
    }
}
?>