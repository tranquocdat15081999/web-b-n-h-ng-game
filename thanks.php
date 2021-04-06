<?php

require_once("../WEB1/resources/config.php");

?>
<?php

require_once("gio.php");

?>
<?php
    include (TEMPLATE_FRONT . DS . "header_thanks.php");

?>
<form method="post">
        <main>

                <p class="tuade">Đơn Mua Hàng</p>
                <div class="hr"><hr></div>
                <div class="row">
                        <table class="table table-bordered" id="table-products">
                                <thead>
                                        <tr>
                                                <th>Tên</th>
                                                <th>Đơn Giá</th>
                                                <th>Số Lượng</th>
                                                <th>Tổng Đơn Giá</th>
                                        </tr>
                                        <?php show(); ?>
                                </thead>

                        </table>
                </div>


                <div class="row">
                        <table class="table table-bordered" id="table-products">
                                <thead>
                                        <tr>
                                                <th>Tên Người Nhận</th>
                                                <th>SĐT</th>
                                                <th>Địa Chỉ</th>
                                                <th>Hình Thức Thanh Toán (hiện số thẻ nếu trả bằng thẻ)</th>
                                        </tr>
                                       <?php info(); ?>
                                </thead>
                                <tbody></tbody>
                                <tfoot>
                                        <tr>
                                        <th colspan="3">Tổng Cộng (Bao gồm VAT) :</th>
                                        <td style="font-weight: bold;">
                                        <?php

                                        echo number_format(isset($_SESSION['total']) ? $_SESSION['total'] : $_SESSION['total']='0');

                                        ?>
                                        vnd
                                        </td>
                                        </tr>
                                </tfoot>
                        </table>
                </div>

                <div class="datlaicart">
                        <button class="btn btn-lg btn-success" type="submit" name="checkout" onclick="checkout()"><i ></i> Quay Lại Trang Chủ</button>
                </div>
        </main>
        </form>


    </body>
    </html>















<?php
function info(){

$user = $_SESSION['username'];
$query = query("SELECT * FROM orders WHERE username='$user' ");
confirm($query);
while($row= fetch_array($query)){
$cus_name=$row['name'];
$phone=$row['phone'];
$add=$row['address'];
$payment=$row['payment_card'];



}
$info= <<<OED
    <tr>
        <td>{$cus_name}</td>
        <td>{$phone}</td>
        <td>{$add}</td>
        <td>{$payment}</td>
    </tr>
OED;
    echo $info;

}



if(isset($_POST['checkout'])){
session_destroy();
redirect("index.php");

}



?>