<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Rùa Đỏ Game</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <link href="otherproduct.css" rel="stylesheet" type="text/css">
        <link href="thamkhao/DoAnWeb/css/mobile.css" rel="stylesheet" type="text/css">
    </head>
    <body>
        <nav class="navbar navbar-inverse">
            <div class="container-fluid">
                <div class="navbar-header">
                    <a class="navbar-brand" href="index.php">Rùa Đỏ Gaming Store</a>
                </div>
                <ul class="nav navbar-nav navbar-right">
                    <?php
                    if(!isset($_SESSION['username'])){

                    $notlogin= <<<OED
                    <li><a href="register.php"><span class="glyphicon glyphicon-user"></span> Đăng Kí</a></li>
                    <li><a href="login.php"><span class="glyphicon glyphicon-log-in"></span>Đăng Nhập</a></li>

OED;
                    echo $notlogin;

                    }
                    else {
                    $login= <<<OED
                    <li><a href="info.php"><span class="glyphicon glyphicon-user"></span> {$_SESSION['username']} </a></li>
                    <li><a href="logout.php"><span class="glyphicon glyphicon-log-in"></span>Đăng Xuất</a></li>

OED;
                    echo $login;
                    }



                    ?>
                </ul>
            </div>
        </nav>
        <div class="inline">

            <div class="row">

                <div class="col-xs-12 text-center">
                    <a href="index.php"><img class="img-responsive img-res" src="head_logo.png"></a>
                    <div class="search-container">
                        <form class="example" method="get" action="result.php" enctype="multipart/form-data">
                            <input id="bar" type="text" placeholder="Tìm Kiếm..." name="user_query" required>
                            <input id="bar" type="hidden" placeholder="Tìm Kiếm..." name="page" value="1" required>
                            <button type="submit" name="search" ><i class="fa fa-search"></i></button>
                        </form>
                    </div>
                    <a href="cart.php" class="btn btn-info btn-lg cart">
                        <span class="glyphicon glyphicon-shopping-cart"></span> Giỏ Hàng
                    </a>
                </div>
            </div>
        </div>