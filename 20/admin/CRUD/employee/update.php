<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>create</title>
</head>
<body>
    <?php $id = $_GET['id'] ?>
    <form action="update_process.php" method="POST">
        <input type="hidden" name="id" value="<?php echo $id ?>">
        name
        <input type="text" name="name"><br>
        gender
        <input type="number" name="gender"><br>
        phone 
        <input type="text" name="phone"><br>
        address
        <input type="text" name="address"><br>
        date of birth
        <input type="date" name="birth"><br>
        email
        <input type="password" name="email"><br>
        password
        <input type="text" name="password"><br>
        level
        <input type="number" name="level">
        
        <button type="submit">update</button>

    </form>
</body>
</html>