<?php

require_once("../WEB1/resources/config.php");

?>
<html>
    <head>
        <title>Rùa Đỏ Game</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta charset="utf-8">

        <!--CSS-->
        <link href="https://fonts.googleapis.com/css?family=Montserrat:400,800,800i,900,900i&amp;subset=vietnamese" rel="stylesheet">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
        <style>
            body {
                font-family: Arial, Helvetica, sans-serif;
            }

            * {
                box-sizing: border-box;
            }

            /* style the container */
            .box {
                position: relative;
                border-radius: 5px;
                background-color: #f2f2f2;
                padding: 20px 0 30px 0;
            }

            /* style inputs and link buttons */
            input,
            .btn {
                width: 100%;
                padding: 12px;
                border: none;
                border-radius: 4px;
                margin: 5px 0;
                opacity: 0.85;
                display: inline-block;
                font-size: 17px;
                line-height: 20px;
                text-decoration: none; /* remove underline from anchors */
            }

            input:hover,
            .btn:hover {
                opacity: 1;
            }

            /* add appropriate colors to fb, twitter and google buttons */
            .fb {
                background-color: #3B5998;
                color: white;
            }

            .twitter {
                background-color: #55ACEE;
                color: white;
            }

            .google {
                background-color: #dd4b39;
                color: white;
            }

            /* style the submit button */
            input[type=submit] {
                background-color: red;
                background-image: linear-gradient(to right, red , #f2357a);
                color: white;
                font-weight: bolder;
                cursor: pointer;
            }


            /* Two-column layout */
            .col {
                float: left;
                width: 50%;
                margin: auto;
                padding: 0 50px;
                margin-top: 6px;
            }

            /* Clear floats after the columns */
            .row:after {
                content: "";
                display: table;
                clear: both;
            }

            /* vertical line */
            .vl {
                position: absolute;
                left: 50%;
                transform: translate(-50%);
                border: 2px solid #ddd;
                height: 175px;
            }

            /* text inside the vertical line */
            .vl-innertext {
                position: absolute;
                top: 50%;
                transform: translate(-50%, -50%);
                background-color: #f1f1f1;
                border: 1px solid #ccc;
                border-radius: 50%;
                padding: 8px 10px;
            }

            /* hide some text on medium and large screens */
            .hide-md-lg {
                display: none;
            }

            /* bottom container */
            .bottom-container {
                text-align: center;
                background-color: #666;
                border-radius: 0px 0px 4px 4px;
            }


            @media screen and (max-width: 650px) {
                .col {
                    width: 100%;
                    margin-top: 0;
                }
                /* hide the vertical line */
                .vl {
                    display: none;
                }
                /* show the hidden text on small screens */
                .hide-md-lg {
                    display: block;
                    text-align: center;
                }
            }
            .center{
                margin: auto;
            }
            body{

                background-image: url(new-bg2.png);
                background-image: url(new-bg2.png),linear-gradient(55deg, #0fb8ad 0%, #1fc8db 51%, #2cb5e8 85%);

            }
            .tuade{
                font-family:  'Montserrat', sans-serif;
                font-size: 37px;
                font-weight: bold;
                color: #000000;
                text-shadow: 4px 2px #c0c8d6;
            }
        </style>
    </head>
    <body>
        <div style="text-align: center" class="container">
            <a href="index.php"><img src="head_logo.png"></a>
        </div>

        <div class="container box">
            <form action="" method="post">

            <?php login_user(); ?>

                <div class="row">
                    <p class="tuade" style="text-align:center">ĐĂNG NHẬP</p>
                    <div class="vl">
                        <span class="vl-innertext"></span>
                    </div>

                    <div class="col">
                        <a href="#" class="fb btn">
                            <i class="fa fa-facebook fa-fw"></i> Đăng nhập bằng Facebook
                        </a>
                        <a href="#" class="twitter btn">
                            <i class="fa fa-twitter fa-fw"></i> Đăng nhập bằng Twitter
                        </a>
                        <a href="#" class="google btn"><i class="fa fa-google fa-fw">
                            </i> Đăng nhập bằng Google+
                        </a>
                    </div>

                    <div class="col">
                        <div class="hide-md-lg">
                            <p></p>
                        </div>

                        <input id="username" type="text" name="username" maxlength="16" pattern="[A-Za-z0-9]+" placeholder="Tên Đăng Nhập" required>
                        <input id="password" type="password" name="password" pattern="[A-Za-z0-9]+" minlength="8" placeholder="Mật Khẩu" required>
                        <input type="submit" name="submit" value="Đăng Nhập" onclick="">
                    </div>

                </div>
            </form>
        </div>

        <div class="bottom-container">
            <div class="row">
                <div class="col">
                    <a href="register.php" style="color:white;font-weight: bold" class="btn">Đăng Ký</a>
                </div>
                <div class="col">
                    <a href="#" style="color:white;font-weight: bold" class="btn">Quên Mật Khẩu?</a>
                </div>
            </div>
        </div>

    </body>
</html>
