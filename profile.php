<?php

include("vendor/autoload.php");

use Helpers\Auth;

$auth = Auth::check();

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.min.css" />
    <style>
        body{
            background-color: grey;
        }
        .container a{
            text-decoration: none;
            font-size: 18px;
            color: black;
            padding: 5px 12px;
            background: white;
            border-radius: 20px;
        }
        .container a:hover{
            color: white;
            background: black;
            transition: 0.5s;
        }
    </style>
    <title>Profile</title>
</head>
<body>
    <div class="container mt-5">
        <h1 class= "mt-5 mb-3">
            <?= $auth->name ?>
            <span class="fw-noraml text-muted">
                (<?= $auth->role ?>)
            </span>
        </h1>

        <?php if(isset($_GET['error'])) : ?>
            <div class="alert alert-warning">
                Cannot upoload file
            </div>
        <?php endif ?>

        <?php if($auth->photo): ?>
            <img
                class="img-thumbnail mb-3"
                src="_actions/photos/<?= $auth->photo ?>"
                alt="Profile Photo" width="200" />
        <?php endif ?>

        <form action="_actions/upload.php" method="post"
            enctype="multipart/form-data">
            <div class="input-group mb-3">
                <input type="file" name="photo" class="form-control">
                <button class="btn btn-secondary">Upload</button>
            </div>
        </form>
        <ul class="list-group">
            <li class="list-group-item">
                <b>Email:</b> <?= $auth->email ?>
            </li>
            <li class="list-group-item">
                <b>Phone:</b> <?= $auth->phone ?>
            </li>
            <li class="list-group-item">
                <b>Address:</b> <?= $auth->address ?>
            </li>
        </ul>
        </br>
        <a href="home.php">HOME</a>

        <?php if($auth->value > 1): ?>
        <a href="admin.php">Manage User</a>
        <a href="gameupload.php">Game Upload</a>
        <?php else: ?>
         
        <?php endif ?> 
        <a href="_actions/logout.php" class="text-danger">Logout</a>
    </div>
</body>
</html>