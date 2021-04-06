<?php
    include("resources/config.php");
    global $connection;
    mysqli_set_charset($connection, 'UTF8');
    if(isset($_GET['delete_o'])){

    $delete_id = $_GET['delete_o'];

    $delete_o = query("UPDATE orders SET status= 'Đã xử lí' where order_id='$delete_id'");

    confirm($delete_o);

    if($delete_o){

    echo "<script>alert('Đã xử lí đơn hàng!')</script>";
    echo "<script>window.open('index.php?view_orders','_self')</script>";
    }

    }





?>