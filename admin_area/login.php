<?php
session_start();

?>
<!DOCTYPE>
<html>
    <head>
        <title>ADMIN</title>
<link rel="stylesheet" href="styles/login_style.css" media="all" />

    </head>
<body>
<div class="login">
<!--<h2 style="color:white; text-align:center;"><?php echo @$_GET['not_admin']; ?></h2>-->

<h2 style="color:white; text-align:center;"><?php echo @$_GET['logged_out']; ?></h2>

    <h1>Đăng Nhập Admin</h1>
    <form method="post" action="login.php">
    	<input type="text" name="admin" placeholder="Tài khoản Admin" required="required" />
        <input type="password" name="password" placeholder="Mật khẩu" required="required" />
        <button type="submit" class="btn btn-primary btn-block btn-large" name="login">Đăng Nhập</button>
    </form>
</div>


</body>
</html>
<?php
    include("resources/config.php");

    if(isset($_POST['login'])){

        $admin = escape_string($_POST['admin']);
        $pass = escape_string($_POST['password']);

    $sel_user = "select * from admins where admin_name='$admin' AND admin_pass='$pass'";

    $run_user = mysqli_query($connection, $sel_user);

    $check_user = mysqli_num_rows($run_user);

    if($check_user==1){

    $_SESSION['admin_name']=$admin;

    echo "<script>window.open('index.php?logged_in=Chào admin {$admin}!','_self')</script>";

    }
    else {

    echo "<script>alert('Sai tên admin hoặc mật khẩu!')</script>";

    }


    }













?>