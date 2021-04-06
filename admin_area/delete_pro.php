<?php
	include("resources/config.php");
	
	if(isset($_GET['delete_pro'])){

	$delete_id = $_GET['delete_pro'];

	$delete_pro = query("delete from products where id='$delete_id'");

	confirm($delete_pro);
	
	if($delete_pro){

	echo "<script>alert('Đã xóa 1 sản phẩm!')</script>";
	echo "<script>window.open('index.php?view_products','_self')</script>";
	}
	
	}





?>