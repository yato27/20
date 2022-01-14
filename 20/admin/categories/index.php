<?php
session_start();
if(!isset($_SESSION['id'])){
   


echo 'bạn cần đăng nhập'; ?>

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
    include '../header.php';
    $page = 1;
    $search ='';
    if(isset($_GET['search'])){
        $search=$_GET['search'];
    }
    $connect = mysqli_connect('localhost','root','','20');
    mysqli_set_charset($connect,'utf8');
    $sql="select count(*) from categories 
    where (name like '%$search%' or id like '%$search%') ";
    
    $array_result= mysqli_query($connect,$sql);
    $record = mysqli_fetch_array($array_result)['count(*)']; 
    $record_per_page = 10;
    $page_number = ceil($record/$record_per_page);
    if(isset($_GET['page'])){
        $page = $_GET['page'];
    }
    
    $offset = ($page-1)*$record_per_page;
    


    
    $connect = mysqli_connect('localhost','root','','20');
    
    $sql="select * from categories 
    where (name like '%$search%' or id like '%$search%') 
    limit $record_per_page offset $offset 
    ";
    mysqli_set_charset($connect,'utf8');
    
    $array_result= mysqli_query($connect,$sql);
    // $result = mysqli_fetch_array($array_result);


    ?>
    <caption>
        <form action="" method="get">
            <input type="search" name="search" value="<?php echo $search ?>">
        </form>
    </caption>
    <a href="insert.php">insert</a>
    <table style =" width:100%" border= '1px solid black'>
            <tr>
                <th>id</th>
                <th>name</th>
                
            </tr>
            <?php foreach ($array_result as $each){ ?>
            <tr>
                <td><?php echo $each['id'] ?></td>
                <td><?php echo $each['name'] ?></td>
               
                
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
        <?php   for ($x = 1;$x <= $page_number; $x++){ ?>
                <a href="?page=<?php echo $x ?>&search=<?php echo $search ?>"> <?php echo $x ?> </a>
             
            <?php } ?>
    
<?php include '../footer.php'; } ?>