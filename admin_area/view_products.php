<?php
if(!isset($_SESSION['admin_name'])){

	echo "<script>window.open('login.php?not_admin=You are not an Admin!','_self')</script>";
}
else {

?>
<table width="795" align="center" bgcolor="pink">

	
	<tr align="center">
		<td colspan="6"><h2>CÁC SẢN PHẨM</h2></td>
	</tr>
	
	<tr align="center" bgcolor="skyblue">
		<th>ID</th>
		<th>Tên</th>
		<th>Hình</th>
		<th>Giá</th>
		<th>Chỉnh Sửa</th>
		<th>Xóa SP</th>
	</tr>
	<?php 
	include("resources/config.php");
	
	$get_pro = query("select * from products");
	
	confirm($get_pro);
	
	$i = 0;
	
	while ($row_pro= fetch_array($get_pro)){
		
		$pro_id = $row_pro['id'];
		$pro_title = $row_pro['title'];
        $pro_sub= $row_pro['categories'];
		$pro_image = $row_pro['image'];
		$pro_price = $row_pro['price'];
		$i++;
	
	?>
	<tr align="center">
		<td><?php echo $i;?></td>
		<td style="font-weight: bold;"><?php echo $pro_title;echo "- "; echo $pro_sub;?></td>
		<td><img src="product_images/<?php echo $pro_image;?>" width="90" height="110"/></td>
		<td><?php echo number_format($pro_price);?> đ</td>
		<td><a href="index.php?edit_pro=<?php echo $pro_id; ?>">SỬA</a></td>
		<td><a onclick='javascript:confirmationDelete($(this));return false;' href="delete_pro.php?delete_pro=<?php echo $pro_id;?>">XÓA</a></td>

	</tr>
    <script>
    function confirmationDelete(anchor)
{
    var conf = confirm('Bạn có chắc muốn xóa SP này?');
    if(conf)
        window.location=anchor.attr("href");
}

    </script>
	<?php } ?>
</table>

<?php } ?>