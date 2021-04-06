
<table width="795" align="center" bgcolor="pink">


    <tr align="center">
        <td colspan="9"><h2>QUẢN LÍ ĐƠN HÀNG</h2></td>
    </tr>

    <tr align="center" bgcolor="skyblue">
        <th>STT</th>
        <th>Tên người nhận</th>
        <th>SĐT</th>
        <th>Địa chỉ</th>
        <th>Hình thức thanh toán</th>
        <th>Sản phẩm mua</th>
        <th>Tổng đơn hàng</th>
        <th>Tình trạng đơn</th>
        <th>Xử lí đơn hàng</th>

    </tr>
    <?php
    include("resources/config.php");
    global $connection;
    mysqli_set_charset($connection, 'UTF8');
    $get_o = query("select * from orders");

    confirm($get_o);

    $i = 0;

    while ($row_c= fetch_array($get_o)){

        $o_id = $row_c['order_id'];
        $o_name = $row_c['name'];
        $o_phone = $row_c['phone'];
        $o_add = $row_c['address'];
        $o_pay = $row_c['payment_card'];
        $o_product = $row_c['p_id'];
        $o_total = $row_c['total_price'];
        $o_status = $row_c['status'];
        $i++;

    ?>
    <tr align="center">
        <td><?php echo $i;?></td>
        <td><?php echo $o_name;?></td>
        <td><?php echo $o_phone;?></td>
        <td><?php echo $o_add;?></td>
        <td><?php echo $o_pay;?></td>
        <td><?php echo $o_product;?></td>
        <td><?php echo number_format($o_total);?> đ</td>
        <td style="font-weight: bold;"><?php echo $o_status; ?></td>
        <td><a onclick='javascript:confirmationDelete($(this));return false;' href="delete_o.php?delete_o=<?php echo $o_id;?>">Ấn để xác nhận</a></td>

    </tr>
    <script>
    function confirmationDelete(anchor)
{
    var conf = confirm('Xác nhận đã xử lí đơn hàng này?');
    if(conf)
        window.location=anchor.attr("href");
}

    </script>
    <?php } ?>




</table>



<br>



<table width="795" align="center" bgcolor="pink">


    <tr align="center">
        <td colspan="9"><h2>DOANH THU THU VỀ</h2></td>
    </tr>



    <?php
    include("resources/config.php");
    global $connection;
    mysqli_set_charset($connection, 'UTF8');
    $get_o = query("SELECT SUM(total_price) AS TotalItemsOrdered FROM orders WHERE status='Đã xử lí';");

    confirm($get_o);

    $i = 0;

    while ($row_c= fetch_array($get_o)){

        $o_tong = $row_c['TotalItemsOrdered'];


    ?>








    <tr align="center" bgcolor="skyblue">
        <th style="font-size: 150%;"><?php echo number_format($o_tong);?> VNĐ</th>


    </tr>


    <?php } ?>




</table>