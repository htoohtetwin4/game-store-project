<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.min.css" />
    <style>
    .wrap {
        width:100%;
        max-width: 350px;
        margin: 0px auto;
        position: absolute;
        top: 25%;
        left: 38%;
    }
    
    body{
        background-image: url(./image/gamephoto/mdk.jpg);
        background-size: cover;
        background-position: center;
        height: 100vh;
        background-repeat: no-repeat;
        color: white;
        position: relative;
    }
    .btn {
        color: #fbfcfd;
        padding: 10px 35px;
        background: transparent;
        border: 2px solid #fff;
        border-radius: 20px;
        outline: none;
    }
    .btn:hover{
        color: black;
        background: white;
        transition: 0.5;
    }
    
    </style>
    <title>Home</title>
</head>
<body class="text-center">
    <div class="background">
    <div class="wrap">
        <h1 class="h3 mb-3">Login</h1>

        <?php if (isset($_GET['registered'])): ?>
            <div class="alert alert-success">
            Account created. Please login.
            </div>
        <?php endif ?>

        <?php if (isset($_GET['suspended'])): ?>
            <div class="alert alert-danger">
            Your account is suspended.
        </div>
        <?php endif ?>

        <?php if ( isset($_GET['incorrect'])) : ?>
            <div class="alert alert-warning">
                Incorrect Email or Password
            </div>
        <?php endif ?>

        <form action="_actions/login.php" method="post">
            <input
                type="email" name="email"
                class="form-control mb-2"
                placeholder="Email" required />
            <input
                type="password" name="password"
                class="form-control mb-2"
                placeholder="Password" required />
            <button type="submit"
                    class="btn btn-md  mb-2">Login</button>
        </form>
        <a href= "register.php"class="btn btn-md">Register</a>
    </div>
    </div>
</body>
</html>