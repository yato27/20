
<?php

include 'connect.php';

    $id = $_GET['updateid']??$_POST['id']??NULL;
    if($id==NULL){
        die();
    }
    $sql = "Select  * from product where id=$id";
    $result=mysqli_query($conn,$sql);
    $row=mysqli_fetch_assoc($result);
    $picture=$row['picture'];
    $name=$row['name'];
    $slug=$row['slug'];
    $parent_id=$row['parent_id'];
    $create_at=$row['create_at'];
    $update_at=$row['update_at'];
    $brand=$row['brand'];
    $description=$row['description'];
    $more_info=$row['more_info'];

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

    $sql="update product set picture ='$picture',name ='$name',slug ='$slug',parent_id ='$parent_id',create_at ='$create_at',update_at ='$update_at',
                             brand ='$brand', description ='$description',more_info ='$more_info' where id=$id";
    $result=mysqli_query($conn,$sql);
    if($result){
        echo "Updated successfully";
        header('location:display.php');
    }else{
        die(mysqli_error($conn));
    }
}
?>