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
    $sql="select * from employee ";
    $array_result= mysqli_query($connect,$sql);
    // $result = mysqli_fetch_array($array_result);


    ?>
    
        <table>
            <tr>
                <th>id</th>
                <th>name</th>
                <th>phone</th>
                <th>address</th>
                <th>date of birth</th>
                <th>email</th>
                <th>password</th>
                <th>level</th>
                <th>gender</th>
                <th>update</th>
                <th>delete</th>
            </tr>
            <?php foreach ($array_result as $each){ ?>
            <tr>
                <td><?php echo $each['id'] ?></td>
                <td><?php echo $each['name'] ?></td>
                <td><?php echo $each['phone'] ?></td>
                <td><?php echo $each['address'] ?></td>
                <td><?php echo $each['date_of_birth'] ?></td>
                <td><?php echo $each['email'] ?></td>
                <td><?php echo $each['password'] ?></td>
                <td><?php echo $each['level'] ?></td>
                <td><?php echo $each['gender'] ?></td>
                <td><a href="update.php?id=<?php echo $each['id'] ?>">
                 update 
                </a>
                </td>
                <td><a href="delete_process.php?id=<?php echo $each['id'] ?>">
                 delete
                </a>
                </td>
            </tr>
            <?php } ?>
        </table>
    
</body>
</html>