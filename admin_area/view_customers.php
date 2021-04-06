
<table width="795" align="center" bgcolor="pink"> 

	
	<tr align="center">
		<td colspan="6"><h2>TÀI KHOẢN NGƯỜI DÙNG</h2></td>
	</tr>
	
	<tr align="center" bgcolor="skyblue">
		<th>S.N</th>
		<th>Tên tài khoản</th>
        <th>Tên</th>
		<th>Email</th>
		<th>SĐT</th>
        <th>Địa chỉ</th>
		<th>Xóa tài khoản</th>
	</tr>
	<?php 
	include("resources/config.php");
	
	$get_c = query("select * from users");
	
	confirm($get_c);
	
	$i = 0;
	
	while ($row_c= fetch_array($get_c)){
		
		$c_id = $row_c['user_id'];
        $c_user = $row_c['username'];
		$c_name = $row_c['name'];
		$c_email = $row_c['email'];
		$c_phone = $row_c['phone'];
        $c_add = $row_c['address'];
		$i++;
	
	?>
	<tr align="center">
		<td><?php echo $i;?></td>
		<td><?php echo $c_user;?></td>
        <td><?php echo $c_name;?></td>
		<td><?php echo $c_email;?></td>
        <td><?php echo $c_phone;?></td>
        <td><?php echo $c_add;?></td>
		<td><a onclick='javascript:confirmationDelete($(this));return false;' href="delete_c.php?delete_c=<?php echo $c_id;?>">Xóa Tài Khoản</a></td>
	
	</tr>
    <script>
    function confirmationDelete(anchor)
{
    var conf = confirm('Bạn có chắc muốn xóa tài khoản này?');
    if(conf)
        window.location=anchor.attr("href");
}

    </script>
	<?php } ?>




</table>