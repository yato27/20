<?php
session_start();
if(!isset($_SESSION['id'])){
   


echo 'bạn cần đăng nhập'; 

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="http://localhost/admin/style.css">
</head>
<body>
<div class="header">
        <div class="sub_header">
            <a href="../signin.php">log in</a><a href="../signout.php">log out</a>
        </div>

    </div>
</body>
</html>
<?php }
else { ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>update</title>
</head>
<body>
    <?php $id = $_GET['id'] ;
    $connect = mysqli_connect('localhost','root','','20');
    mysqli_set_charset($connect,'utf8');
    $sql="select * from products where id = '$id'";
    
    $array_result = mysqli_query($connect,$sql);
    $row = mysqli_num_rows($array_result);
     if($row == 1){
    $result = mysqli_fetch_array($array_result);
    $error=mysqli_error($connect);
    echo $error;?>
    <form action="update_process.php" method="POST">
        <input type="hidden" name="id" value="<?php echo $id ?>">
        name
        <input type="text" name="name" value="<?php echo $result['name'] ?>" ><br>
        slug
        <input type="text" name="slug" value="<?php echo $result['slug'] ?>"><br>
        parent_id
        <input type="text" name="parent_id" value="<?php echo $result['parent_id'] ?>"><br>
        create_at 
        <input type="text" name="create_at" value="<?php echo $result['create_at'] ?>"><br>
        update_at
        <input type="text" name="update_at" value="<?php echo $result['update_at'] ?>"><br>
        
        brand
        <input type="text" name="brand" value="<?php echo $result['brand'] ?>"><br>
        description
        <input type="text" name="description" value="<?php echo $result['description'] ?>"><br>
        price 
        <input type="number" name="price" value="<?php echo $result['price'] ?>"><br>
        more-info 
        <input type="text" name="more_info" value="<?php echo $result['more_info'] ?>">
        
        <button type="submit">update</button>

    </form>
</html>
<?php }
else {
    echo "không có sản phẩm này";
}
} ?>