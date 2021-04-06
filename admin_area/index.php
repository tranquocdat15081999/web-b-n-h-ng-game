<?php
session_start();

if(!isset($_SESSION['admin_name'])){

    echo "<script>window.open('login.php?not_admin=You are not an Admin!','_self')</script>";
} else {


?>

<!DOCTYPE>

<html>
    <head>
        <title>Admin Panel</title>
        <meta charset="utf-8">

    <link rel="stylesheet" href="styles/style.css" media="all" />
    
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    </head>


<body>

    <div class="main_wrapper">


        <div id="header"></div>

        <div id="right">
        <h2 style="text-align:center;">CHỨC NĂNG ADMIN</h2>

            <a href="index.php?insert_product">Thêm Sản Phẩm</a>
            <a href="index.php?view_products">Xem Các Sản Phẩm</a>
            <a href="index.php?view_customers">Xem Thông Tin Khách Hàng</a>
            <a href="index.php?view_orders">Xem Đơn Đặt Hàng</a>
            <a href="index.php?view_thongke">Tình Trạng Hàng</a>
            <a href="logout.php">Đăng Xuất</a>

        </div>

        <div id="left">
        <h2 style="color:red; text-align:center;"><?php echo @$_GET['logged_in']; ?></h2>
        <?php
        if(isset($_GET['insert_product'])){

        include("insert_product.php");

        }
        if(isset($_GET['view_products'])){

        include("view_products.php");

        }
        if(isset($_GET['edit_pro'])){

        include("edit_pro.php");

        }
        if(isset($_GET['insert_cat'])){

        include("insert_cat.php");

        }

        if(isset($_GET['view_cats'])){

        include("view_cats.php");

        }

        if(isset($_GET['edit_cat'])){

        include("edit_cat.php");

        }

        if(isset($_GET['view_customers'])){

        include("view_customers.php");

        }
        if(isset($_GET['view_orders'])){

        include("view_orders.php");

        }
        if(isset($_GET['view_thongke'])){

        include("view_thongke.php");

        }


        ?>
        </div>






    </div>


</body>
</html>
<?php } ?>