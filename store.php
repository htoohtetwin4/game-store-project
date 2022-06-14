<?php

include("vendor/autoload.php");

use Libs\Database\MySQL;
use Libs\Database\ProductsTable;
use Helpers\Auth;

$table = new ProductsTable(new MySQL());
$all = $table->getAllProducts();
$auth = Auth::check();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Store</title>
    <link rel="stylesheet" href="css/bootstrap.min.css"/>
    <link rel="stylesheet" href="./css/store.css"/>
    
</head>
<body>
    <!--STORE HEAD -->
    <div class="store-header">
        <div style="float: right">
            <a href="home.php"><i class="fa-solid fa-house"></i></a>
            <a href="_actions/logout.php" class="text-danger"><i class="fa-solid fa-arrow-right-from-bracket"></i></a>
        </div>
            <h1 class="mt-3 mb-5">
                Store
            <?php if($auth->value > 1): ?>
                <span class="badge bg-info text-white">
                    <?= count($all) ?>
                </span>
            <?php endif ?>
            </h1>
    </div>         
    <!-- STORE HEAD END -->
    <!-- STORE TABLE -->
    <div class="container">
        <table class="table table-bordered">
        <tr>
            <?php if($auth->value > 1): ?>
                <th>Id</th>
            <?php endif ?>
            <th>GAME</th>
            <th>Description</th>
            <th>Join Us</th>
        </tr>

        <?php foreach ($all as $products): ?>
        <tr>
            <?php if($auth->value > 1): ?>
                <td><?= $products->product_id ?></td>
            <?php endif ?>

                <td>
                    <p><?= $products->product_name ?></p>
                    <?php if($products->product_photo ): ?>
                        <img
                            class="img-thumbnail mb-3"
                            src="_actions/photos/<?= $products->product_photo ?>"
                            alt="Profile Photo" width="2000" />
                    <?php endif ?>
                </td>

                <td><?= $products->product_description ?></td>
                <td>
                    <button class="btn btn-sm btn-outline-success mb-3" onCLick="installGame()">INSTALL</button>
                    <?php if($auth->value > 1): ?>
                        
                            <a href="_actions/deleteGame.php?product_id=<?= $products->product_id ?>" class="btn btn-sm btn-outline-danger" onClick="return confirm('Are you sure?')">Delete</a>
                        
                    <?php endif ?>
                </td>  
        </tr>
        <?php endforeach ?>
        </table>
    </div>
    <!-- STORE TABLE  END-->
    <footer class="py-3">
        <div class="border-top border-top-2 py-5 text-center text-muted">
                THANKS FOR SHOPPING AT OUR STORE
                &copy; Copyright 2022

        </div>
    </footer>
    <script>
        function installGame() {
        alert("Game is Successfully Installed....");
        }
        </script>

 <script src="js/bootstrap.bundle.min.js"></script>
 <script src="https://kit.fontawesome.com/5d4c9321e7.js" crossorigin="anonymous"></script>
</body>
</html>
