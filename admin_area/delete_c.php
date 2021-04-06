<?php
	include("resources/config.php");

	if(isset($_GET['delete_c'])){
	
	$delete_id = $_GET['delete_c'];
	
	$delete_c = query("delete from users where user_id='$delete_id'");
	
	confirm($delete_c);
	
	if($delete_c){
	
	echo "<script>alert('Đã xóa tài khoản người dùng!')</script>";
	echo "<script>window.open('index.php?view_customers','_self')</script>";
	}
	
	}





?>