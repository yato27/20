<?php
include 'connect.php';
if(isset($_POST['submit'])){
    $picture=$_POST['picture'];
    $name=$_POST['name'];
    $slug=$_POST['slug'];
    $parent_id=$_POST['parent_id'];
    $create_at=$_POST['create_at'];
    $update_at=$_POST['update_at'];
    $brand=$_POST['brand'];
    $description=$_POST['description'];
    $more_info=$_POST['more_info'];

    $sql="insert into product (picture,name,slug,parent_id,create_at,update_at,brand,description,more_info)
    values('$picture','$name','$slug','$parent_id','$create_at','$update_at','$brand','$description','$more_info')";
    $result=mysqli_query($conn,$sql);
    if($result){
        // echo "Data inserted successfully";
        header('location:display.php');
    }else{
        die(mysqli_error($conn));
    }
}

?>