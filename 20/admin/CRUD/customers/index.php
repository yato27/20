<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>index</title>
</head>
<body>
    <?php
    $connect = mysqli_connect('localhost','root','','20');
    mysqli_set_charset($connect,'utf8');
    $sql="select * from customers ";
    $array_result= mysqli_query($connect,$sql);
    // $result = mysqli_fetch_array($array_result);


    ?>
    <a href="insert.php">insert</a>
        <table>
            <tr>
                <th>id</th>
                <th>name</th>
                <th>gender</th>
                <th>date of birth</th>
                <th>phone</th>
                <th>address</th>
                
                <th>email</th>
                <th>password</th>
               
                
                <th>update</th>
                <th>delete</th>
            </tr>
            <?php foreach ($array_result as $each){ ?>
            <tr>
                <td><?php echo $each['id_cus'] ?></td>
                <td><?php echo $each['name'] ?></td>
                <td><?php echo $each['gender'] ?></td>
                <td><?php echo $each['birth'] ?></td>
                <td><?php echo $each['phone'] ?></td>
                <td><?php echo $each['address'] ?></td>
                <td><?php echo $each['email'] ?></td>
                <td><?php echo $each['password'] ?></td>
                
                <td><a href="update.php?id=<?php echo $each['id_cus'] ?>">
                 update 
                </a>
                </td>
                <td><a href="delete_process.php?id=<?php echo $each['id_cus'] ?>">
                 delete
                </a>
                </td>
            </tr>
            <?php } ?>
        </table>
    
</body>
</html>