<?php

require_once 'connect.php';
// require_once 'process.php';

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product</title>
    <!doctype html>
    <html lang="en">

    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    </head>

<body>

    <div class="container my-5">
        <form method="post" action="display.php">
            <div class="form-group">
                <label>Ảnh</label>
                <input type="text" class="form-control" placeholder="" name="picture" autocomplete="off">
            </div>
            <div class="form-group">
                <label>NAME</label>
                <input type="text" class="form-control" placeholder="Enter your name" name="name" autocomplete="off">
            </div>
            <div class="form-group">
                <label>Slug</label>
                <input type="text" class="form-control" placeholder="Enter your slug" name="slug" autocomplete="off">
            </div>
            <div class="form-group">
                <!-- <label>Banner</label>
                <input type="text" class="form-control" placeholder="Enter your password" name="banner" autocomplete="off">
            </div> -->
            <div class="form-group">
                <label>ParentID</label>
                <input type="text" class="form-control" placeholder="Enter your ParentID" name="parent_id" autocomplete="off">
            </div>
            <div class="form-group">
                <label>Create at</label>
                <input type="date" class="form-control" placeholder="Enter your create at" name="create_at" autocomplete="off">
            </div>
            <div class="form-group">
                <label>Update at</label>
                <input type="date" class="form-control" placeholder="Enter your update at" name="update_at" autocomplete="off">
            </div>
            <div class="form-group">
                <label>Brand</label>
                <input type="text" class="form-control" placeholder="Enter your brand" name="brand" autocomplete="off">
            </div>
            <div class="form-group">
                <label>Description</label>
                <input type="text" class="form-control" placeholder="Enter your description" name="description" autocomplete="off">
            </div>
            <div class="form-group">
                <!-- <label>Price</label>
                <input type="number" class="form-control" placeholder="Enter your price" name="price autocomplete="off">
            </div> -->
            <div class="form-group">
                <label>Info</label>
                <input type="text" class="form-control" placeholder="Enter your info" name="more_info" autocomplete="off">
            </div>
           <button type="submit" class="btn btn-primary" name="submit">Submit</button>
        </form>
    </div>
</body>
</html>