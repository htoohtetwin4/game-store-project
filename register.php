<!DOCTYPE html>
<html>
<head>
    <title>Register</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <style>
        .wrap {
            width: 100%;
            max-width: 400px;
            margin: 0px auto;
            position: absolute;
            top: 20%;
            left: 36%;
        }
        body{
            background-image: url(./image/gamephoto/wowbackground.jpg);
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
            transition: 0.5s;
        }
    </style>
</head>

<body class="text-center">
    <div class="wrap">
        <h1 class="h3 mb-3">Register</h1>

        <?php if (isset($_GET['error'])): ?>
            <div class="alert alert-warning">
            Cannot create account. Please try again.
            </div>
        <?php endif ?>

        <form action="_actions/create.php" method="post">

            <input type="text" name="name" class="form-control mb-2" placeholder="Name" required>

            <input type="email" name="email" class="form-control mb-2"placeholder="Email" required>

            <input type="text" name="phone" class="form-control mb-2" placeholder="Phone" required>

            <textarea name="address" class="form-control mb-2" placeholder="Address" required></textarea>

            <input type="password" name="password" class="form-control mb-2" placeholder="Password" required>

            <button type="submit" class="btn btn-md btn-primary!">
                    Register
            </button>
        </form>
        <a href="index.php" class="mt-2 btn btn-md">Login</a>
</div>
</body>
</html>