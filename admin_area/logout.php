<?php
session_start(); 

session_destroy();
echo "<script>alert('Đăng xuất thành công')</script>";


echo "<script>window.open('login.php?logged_out=Admin đã đăng xuất, hẹn gặp lại!','_self')</script>";




?> 