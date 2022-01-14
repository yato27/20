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
else {
    ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>create</title>
</head>
<body>
    <form action="insert_process.php" method="POST">
        name
        <input type="text" name="name"><br>
        slug
        <input type="text" name="slug"><br>
        parent_id
        <input type="number" name="parent_id"><br>
        create_at
        <input type="date" name="create_at"><br>
        update_at
        <input type="date" name="update_at"><br>
        
        brand
        <input type="text" name="brand"><br>
        description
        <input type="text" name="description"><br>
        price 
        <input type="number" name="price"><br>
        more-info 
        <input type="text" name="more_info" id="">
       
        
        <button type="submit">add</button>

    </form>
</body>
</html>
<?php } ?>