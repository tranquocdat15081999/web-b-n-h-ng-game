<table width="795" align="center" bgcolor="pink">


    <tr align="center">
        <td colspan="9"><h2>TOP SẢN PHẨM BÁN CHẠY</h2></td>
    </tr>

    <tr align="center" bgcolor="skyblue">
        <th>STT</th>
        <th>Sản Phẩm</th>
        <th>Số lượng đã bán</th>
    </tr>
    <?php
    include("resources/config.php");
    global $connection;
    mysqli_set_charset($connection, 'UTF8');
    $get_t = query("SELECT *, COUNT(p_num)  AS cnt FROM orders WHERE status= 'Đã xử lí' GROUP BY p_num ORDER BY cnt DESC LIMIT 10");

    confirm($get_t);

    $i = 0;

    while ($row_c= fetch_array($get_t)){


        $i++;
        $pop=$row_c['p_id'];
        $sl=$row_c['cnt']

    ?>
    <tr align="center">
        <td><?php echo $i;?></td>
        <td style="font-weight: bold;"><?php echo $pop;?></td>
        <td style="font-weight: bold;"><?php echo $sl;?></td>
    </tr>

    <?php } ?>




</table>


















<br>


















<table width="795" align="center" bgcolor="pink">


    <tr align="center">
        <td colspan="4"><h2>SẢN PHẨM HẾT HÀNG</h2></td>
    </tr>

    <tr align="center" bgcolor="skyblue">
        <th>STT</th>
        <th>Sản Phẩm</th>
        <th>Hình</th>
        <th>Giá</th>

    </tr>
    <?php
    include("resources/config.php");
    global $connection;
    mysqli_set_charset($connection, 'UTF8');
    $get_o = query("select * from products where quantity='0' ");

    confirm($get_o);

    $i = 0;

    while ($row_c= fetch_array($get_o)){

        $o_id = $row_c['id'];
        $o_name = $row_c['title'];
        $o_sub = $row_c['categories'];
        $o_image = $row_c['image'];
        $o_price = $row_c['price'];
        $i++;

    ?>
    <tr align="center">
        <td><?php echo $i;?></td>
        <td style="font-weight: bold;"><?php echo $o_name;echo "- "; echo $o_sub;?></td>
        <td><img src="product_images/<?php echo $o_image;?>" width="90" height="110"/></td>
        <td><?php echo number_format($o_price);?> đ</td>

    </tr>

    <?php } ?>




</table>












<br>









<table width="795" align="center" bgcolor="pink">


    <tr align="center">
        <td colspan="5"><h2>SẢN PHẨM SẮP HẾT HÀNG</h2></td>
    </tr>

    <tr align="center" bgcolor="skyblue">
        <th>STT</th>
        <th>Sản Phẩm</th>
        <th>Hình</th>
        <th>Giá</th>
        <th>Số lượng còn lại</th>

    </tr>
    <?php
    include("resources/config.php");
    global $connection;
    mysqli_set_charset($connection, 'UTF8');
    $get_q = query("select * from products where quantity <= 10 and quantity!=0 ");

    confirm($get_q);

    $i = 0;

    while ($row_q= fetch_array($get_q)){

        $q_id = $row_q['id'];
        $q_name = $row_q['title'];
        $q_sub = $row_q['categories'];
        $q_image = $row_q['image'];
        $q_price = $row_q['price'];
        $q_quan = $row_q['quantity'];
        $i++;

    ?>
    <tr align="center">
        <td><?php echo $i;?></td>
        <td style="font-weight: bold;"><?php echo $q_name;echo "- "; echo $q_sub;?></td>
        <td><img src="product_images/<?php echo $q_image;?>" width="90" height="110"/></td>
        <td><?php echo number_format($q_price);?> đ</td>
        <td><?php echo $q_quan;?></td>
    </tr>

    <?php } ?>




</table>















