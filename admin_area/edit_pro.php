<!DOCTYPE>

<?php 

include("resources/config.php");

if(isset($_GET['edit_pro'])){

	$get_id = $_GET['edit_pro'];

	$get_pro = query("select * from products where id='$get_id'");

	confirm($get_pro);

	$i = 0;

	$row_pro= fetch_array($get_pro);

		$pro_id = $row_pro['id'];
		$pro_title = $row_pro['title'];
		$pro_image = $row_pro['image'];
		$pro_price = $row_pro['price'];
		$pro_quantity = $row_pro['quantity'];
		$phathanh=$row_pro["date"];
        $pro_date = new DateTime($phathanh);
		$pro_cat = $row_pro['categories_main_id'];
		$pro_brand = $row_pro['brand'];
        $pro_desc = $row_pro['description'];

		$get_cat = query("select * from categories where cat_id='$pro_cat'");

		confirm($get_cat);
		
		$row_cat= fetch_array($get_cat);
		
		$category_id = $row_cat['cat_id'];
		$category_title = $row_cat['cat_name'];

}
?>
<html>
	<head>
		<title>Update Product</title>
		
<script src="//tinymce.cachefly.net/4.1/tinymce.min.js"></script>
<script>
        tinymce.init({selector:'textarea'});
</script>
	</head>
	
<body bgcolor="skyblue">


	<form action="" method="post" enctype="multipart/form-data" accept-charset="utf-8">
		
		<table align="center" width="795" border="2" bgcolor="#187eae">
			
			<tr align="center">
				<td colspan="7"><h2>Sửa Thông Tin Sản Phẩm</h2></td>
			</tr>
			
			<tr>
				<td align="right"><b>Tên SP:</b></td>
				<td><input type="text" name="product_title" size="60" value="<?php echo $pro_title;?>"/></td>
			</tr>
			
			<tr>
				<td align="right"><b>Loại:</b></td>
				<td>
				<select name="product_cat" >
					<?php echo "<option value='$category_id'>$category_title</option>"; ?>
					<?php
        $get_cats = "select * from categories";

		$run_cats = mysqli_query($connection, $get_cats);

		while ($row_cats=mysqli_fetch_array($run_cats)){

		$cat_id = $row_cats['cat_id'];
		$cat_title = $row_cats['cat_name'];

		echo "<option value='$cat_id'>$cat_title</option>";
	
	
	}
					
					?>
				</select>
				
				
				</td>
			</tr>

			
			<tr>
				<td align="right"><b>Hình SP:</b></td>
				<td><input type="file" accept="image/*" name="product_image"><img src="product_images/<?php echo $pro_image; ?>" width="90" height="110"/></td>
			</tr>
			
			<tr>
				<td align="right"><b>Giá tiền:</b></td>
				<td><input type="text" name="product_price" value="<?php echo $pro_price;?>"/> vnđ </td>
			</tr>
            
            <tr>
				<td align="right"><b>Số lượng:</b></td>
				<td><input type="number" name="product_quantity" value="<?php echo $pro_quantity;?>"/></td>
			</tr>
            <tr>
				<td align="right"><b>NSX:</b></td>
				<td><input type="text" name="product_brand" value="<?php echo $pro_brand;?>"/></td>
			</tr>

			<tr>
				<td align="right"><b>Mô tả:</b></td>
				<td><textarea name="product_desc" cols="20" rows="10"><?php echo $pro_desc;?></textarea></td>
			</tr>

            


			
			<tr align="center">
				<td colspan="7"><input type="submit" name="update_product" value="Update Product"/></td>
			</tr>
		
		</table>
	
	
	</form>


</body> 
</html>
<?php 

	if(isset($_POST['update_product'])){
	
		//getting the text data from the fields
		
		$update_id = $pro_id;
		
		$product_title = $_POST['product_title'];
		$product_cat= $_POST['product_cat'];
		$product_brand = $_POST['product_brand'];
		$product_price = $_POST['product_price'];
		$product_desc = $_POST['product_desc'];
		$product_quantity = $_POST['product_quantity'];

	    if(isset($_POST['product_image'])){

        $product_image = $_FILES['product_image']['name'];
		$product_image_tmp = $_FILES['product_image']['tmp_name'];

		move_uploaded_file($product_image_tmp,"product_images/$product_image");

		 $update_product = query("update products set categories_main_id='$product_cat',brand='$product_brand',title='$product_title',price='$product_price',image='$product_image', quantity='$product_quantity', description='$product_desc' where id='$update_id'");

		 confirm($update_product);

		 if($update_product){

		 echo "<script>alert('Đã cập nhập thành công!')</script>";

		 echo "<script>window.open('index.php?view_products','_self')</script>";

		 }

	    } else {


		 $update_product = query("update products set categories_main_id='$product_cat',brand='$product_brand',title='$product_title',price='$product_price', quantity='$product_quantity',description='$product_desc' where id='$update_id'");

		 confirm($update_product);

		 if($update_product){

		 echo "<script>alert('Đã cập nhập thành công!')</script>";

		 echo "<script>window.open('index.php?view_products','_self')</script>";

		 }

	    }
		//getting the image from the field

	}








?>












