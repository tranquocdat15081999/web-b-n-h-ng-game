<!DOCTYPE>

<?php

include("resources/config.php");

?>
<html>
	<head>
		<title>Inserting Product</title> 
		
<script src="//tinymce.cachefly.net/4.1/tinymce.min.js"></script>
<script>
        tinymce.init({selector:'textarea'});
</script>
	</head>
	
<body bgcolor="skyblue">


	<form action="insert_product.php" method="post" enctype="multipart/form-data"> 
		
		<table align="center" width="795" border="2" bgcolor="#187eae">
			
			<tr align="center">
				<td colspan="7"><h2>THÊM SẢN PHẨM</h2></td>
			</tr>
			
			<tr>
				<td align="right"><b>Tên SP:</b></td>
				<td><input type="text" name="product_title" size="60" required/></td>
			</tr>
			
			<tr>
				<td align="right"><b>Loại:</b></td>
				<td>
				<select name="product_cat" >

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
				<td><input type="file" accept="image/*" name="product_image" /></td>
			</tr>
			
			<tr>
				<td align="right"><b>Giá tiền:</b></td>
				<td><input type="number" name="product_price" required/> vnđ </td>
			</tr>
            <tr>
				<td align="right"><b>Ngày phát hành:</b></td>
				<td><input type="date" name="product_date" required/></td>
			</tr>
            <tr>
				<td align="right"><b>Số lượng:</b></td>
				<td><input type="number" name="product_quantity" required/></td>
			</tr>
            <tr>
				<td align="right"><b>NSX:</b></td>
				<td><input type="text" name="product_brand" required/></td>
			</tr>
			
			<tr>
				<td align="right"><b>Mô tả:</b></td>
				<td><textarea name="product_desc" cols="20" rows="10"></textarea></td>
			</tr>
			

			
			<tr align="center">
				<td colspan="7"><input type="submit" name="insert_post" value="Thêm SP"/></td>
			</tr>
		
		</table>
	
	
	</form>


</body> 
</html>
<?php 

	if(isset($_POST['insert_post'])){
	
		//getting the text data from the fields
		$product_title = $_POST['product_title'];
		$product_cat= $_POST['product_cat'];
		$product_brand = $_POST['product_brand'];
		$product_price = $_POST['product_price'];
		$product_desc = $_POST['product_desc'];
		$product_quantity = $_POST['product_quantity'];
        //$product_date = $_POST['product_date'];
        $product_date= date('Y-m-d',strtotime($_POST['product_date']));

		//getting the image from the field
		$product_image = $_FILES['product_image']['name'];
		$product_image_tmp = $_FILES['product_image']['tmp_name'];
		$uploads_dir = 'product_images';
		move_uploaded_file($product_image_tmp,"$uploads_dir/$product_image");

		 $insert_product = "insert into products (categories_main_id,brand,title,price,image,quantity,date,description) values ('$product_cat','$product_brand','$product_title','$product_price','$product_image','$product_quantity','$product_date','$product_desc')";

		 $insert_pro = mysqli_query($connection, $insert_product);
		 
		 if($insert_pro){
		 
		 echo "<script>alert('Thêm thành công!')</script>";
		 echo "<script>window.open('index.php?insert_product','_self')</script>";
		 
		 }
	}








?>



