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
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/bootstrap.min.css"/>
    <link rel="stylesheet" href="./css/style.css"/>
    <title>GAME-STORE</title>

</head>
<body>
    <!----HOME header---->
    <div class="header">
        <nav class="navbar navbar-expand-sm navbar-dark">
            <a href="#" class="navbar-brand">Strai<span>X</span></a>
            <div class="menu">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a href="store.php" class="nav-link">
                            <i class="fa-solid fa-store"></i>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="profile.php" class="nav-link">
                        <i class="fa-regular fa-circle-user"></i>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="_actions/logout.php" class="nav-link text-danger">
                            <i class="fa-solid fa-arrow-right-from-bracket"></i>
                        </a>
                    </li>
                </ul>
            </div>
        </nav>
    </div>
    <!----HOME header end---->
    <!----HOME BODY section---->
    <div class="gamehub">
        <!----GAMES DISPLAY---->
        <main class="py-5">
            <div class="">
                <div class="displaybox">
                    <div class="head-container">
                        <div class="box box1">
                            <video src="./video/shortclip/lol.mp4" autoplay loop muted></video>
                            <div class="content">
                                <h2> </h2>
                            </div>
                        </div>
                        <div class="box box2">
                            <video src="./video/shortclip/d2.mp4"  autoplay loop muted></video>
                            <div class="content">
                                <h2>   </h2>
                            </div>
                        </div>
                        <div class="box box3">
                            <video src="./video/shortclip/wow1.mp4"  autoplay loop muted></video>
                            <div class="content">
                                <h2>   </h2>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </main>
        

        <!----GAMES TABS---->
        <section class="container py-3">
            <div class="row g-3">
                <div class="col-12 col-md-6 col-lg-3">
                    <a href="store.php"><img src="./image/gamephoto/d2.jpg" alt=""></a>
                </div>

                <div class="col-12 col-md-6 col-lg-3">
                        <a href="store.php"><img src="./image/gamephoto/lol.jpg" alt=""></a>
                </div>

                <div class="col-12 col-md-6 col-lg-3">
                        <a href="store.php"><img src="./image/gamephoto/dbd.jpg" alt=""></a>
                </div>

                <div class="col-12 col-md-6 col-lg-3">
                        <a href="store.php"><img src="./image/gamephoto/csgo.jpg" alt=""></a>
                </div>

                <div class="col-12 col-md-6 col-lg-3">
                        <a href="store.php"><img src="./image/gamephoto/apexlegends.jpg" alt=""></a>
                </div>

                <div class="col-12 col-md-6 col-lg-3">
                        <a href="store.php"><img src="./image/gamephoto/mc.jpg" alt=""></a>
                </div>

                <div class="col-12 col-md-6 col-lg-3">
                        <a href="store.php"><img src="./image/gamephoto/pubg.jpg" alt=""></a>
                </div>

                <div class="col-12 col-md-6 col-lg-3">
                        <a href="store.php"><img src="./image/gamephoto/DL.jpg" alt=""></a>
                </div>

                
                <div class="col-12 col-md-6 col-lg-3">
                        <a href="store.php"><img src="./image/gamephoto/gtav.jpg" alt=""></a>
                </div>

                <div class="col-12 col-md-6 col-lg-3">
                        <a href="store.php"><img src="./image/gamephoto/psba.jpg" alt=""></a>
                </div>

                <div class="col-12 col-md-6 col-lg-3">
                        <a href="store.php"><img src="./image/gamephoto/shadowlands.jpg" alt=""></a>
                </div>

                <div class="col-12 col-md-6 col-lg-3">
                        <a href="store.php"><img src="./image/gamephoto/valorant.jpg" alt=""></a>
                </div>
            </div>
        </section>      
    </div>
    <!----HOME BODY section end---->
    <footer class="py-3">
        <div class="border-top border-top-2 py-5 text-center text-muted">
                THANKS FOR VISITING AT OUR STORE
                <div class="social-links">
                    <a href="#" class="facebook"><i class="fa-brands fa-facebook"></i></a>
                    <a href="#" class="twitter"><i class="fa-brands fa-twitter-square"></i></a>
                    <a href="#" class="instagram"><i class="fa-brands fa-instagram-square"></i></a>
                </div>
        </div>
    </footer>
    <script src="https://kit.fontawesome.com/5d4c9321e7.js" crossorigin="anonymous"></script>
    <script src="./js/script.js"></script>
</body>
</html>