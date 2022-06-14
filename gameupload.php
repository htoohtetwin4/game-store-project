<?php

include("vendor/autoload.php");

use Helpers\Auth;

$auth = Auth::check();

?>

<!DOCTYPE html>
<html>
<head>
    <title>Game-Upload</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <style>
        .wrap {
        width: 100%;
        max-width: 400px;
        margin: 40px auto;
        }
        body{
            background: lightgrey;
        }
    </style>
</head>

<body class="text-center">
    <div class="wrap">
        <h1 class="h3 mb-3">Game - Upload</h1>

        <?php if (isset($_GET['error'])): ?>
            <div class="alert alert-warning">
            Game Upload Fail!!!
            </div>
        <?php endif ?>

        <?php if (isset($_GET['registered'])): ?>
            <div class="alert alert-success">
            Game Upload Successful!
            </div>
        <?php endif ?>

        <form action="_actions/creategame.php" method="post" enctype="multipart/form-data">
            
            <input type="file" name="product_photo" class="form-control mb-2">  

            <input type="text" name="product_name" class="form-control mb-2" placeholder="Game Name" required>

            <textarea name="product_description" class="form-control mb-2" placeholder="Game Description" required></textarea>

            <button type="submit" name ="upload" class="w-100 btn btn-lg btn-primary">
                    Upload
            </button>
        </form>
        <a href="home.php" class="w-50 mt-2 btn btn-lg btn-success">HOME</a>
</div>
</body>
</html>