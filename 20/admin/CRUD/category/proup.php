<?php

include 'connect.php';
<input type="hidden" name="id" value="<?php echo $id?>">
<br>

$id = $_GET['updateid'];
$sql = "Select  * from category where id=$id";
$result=mysqli_query($conn,$sql);
$row=mysqli_fetch_assoc($result);
$name=$row['name'];


if(isset($_POST['submit'])){
    $name=$_POST['name'];
    

    $sql="update catogory set name ='$name'";
    $result=mysqli_query($conn,$sql);
    if($result){
        echo "Updated successfully";
        header('location:display.php');
    }else{
        die(mysqli_error($conn));
    }
}
?>