<?php

require_once("../WEB1/resources/config.php");

?>
<?php

require_once("gio.php");

?>

<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<meta charset="utf-8">

        <!--CSS-->


        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
<style>
body {
    font-family: Arial;
    font-size: 17px;
    padding: 8px;
}

* {
    box-sizing: border-box;
}

.row {
    display: -ms-flexbox; /* IE10 */
    display: flex;
    -ms-flex-wrap: wrap; /* IE10 */
    flex-wrap: wrap;
    margin: 0 -16px;
}

.col-25 {
    -ms-flex: 25%; /* IE10 */
    flex: 25%;
}

.col-50 {
    -ms-flex: 50%; /* IE10 */
    flex: 50%;
}

.col-75 {
    -ms-flex: 75%; /* IE10 */
    flex: 75%;
}

.col-25,
.col-50,
.col-75 {
    padding: 0 16px;
}

.container {
    background-color: #f2f2f2;
    padding: 5px 20px 15px 20px;
    border: 1px solid lightgrey;
    border-radius: 3px;
}

input[type=text] {
    width: 100%;
    margin-bottom: 20px;
    padding: 12px;
    border: 1px solid #ccc;
    border-radius: 3px;
}

label {
    margin-bottom: 10px;
    display: block;
}

.icon-container {
    margin-bottom: 20px;
    padding: 7px 0;
    font-size: 24px;
}

.btn {
    background-color: #4CAF50;
    color: white;
    padding: 12px;
    margin: 10px 0;
    border: none;
    width: 100%;
    border-radius: 3px;
    cursor: pointer;
    font-size: 17px;
}

.btn:hover {
    background-color: #45a049;
}

a {
    color: #2196F3;
}

hr {
    border: 1px solid lightgrey;
}

span.price {
    float: right;
    color: grey;
}

/* Responsive layout - when the screen is less than 800px wide, make the two columns stack on top of each other instead of next to each other (also change the direction - make the "cart" column go on top) */
@media (max-width: 800px) {
    .row {
        flex-direction: column-reverse;
    }
    .col-25 {
        margin-bottom: 20px;
    }
}
</style>
</head>
<body>

<h2>PHƯƠNG THỨC THANH TOÁN</h2>

<div class="row">
    <div class="col-75">
        <div class="container">
            <form action="" method="post">

                <div class="row">


                    <div class="col-50">
                        <h3>Thanh Toán Bằng Thẻ</h3>
                        <label for="fname">Chúng tôi chấp nhận các thẻ</label>
                        <div class="icon-container">
                            <i class="fa fa-cc-visa" style="color:navy;"></i>
                            <i class="fa fa-cc-amex" style="color:blue;"></i>
                            <i class="fa fa-cc-mastercard" style="color:red;"></i>
                            <i class="fa fa-cc-discover" style="color:orange;"></i>
                        </div>
                        <label for="cname">Tên Chủ Thẻ</label>
                        <input type="text" id="cname" name="cardname" placeholder="Tony Stark">
                        <label for="ccnum">Số Thẻ</label>
                        <input type="text" id="ccnum" name="cardnumber" placeholder="1970-2023-3000-3000">
                        <label>
                    <input type="checkbox"  name="cod"> Nhận hàng và thanh toán bằng tiền mặt (COD)
                </label>

                    </div>

                </div>

                <input type="submit" name="submit" value="Thanh toán đơn hàng" class="btn">
            </form>
        </div>
    </div>
    <div class="col-25">
        <div class="container">
            <h4>Giỏ Hàng <span class="price" style="color:black"><i class="fa fa-shopping-cart"></i> <b></b></span></h4>
            <?php checkoutcart(); ?>
            <hr>
            <p>Tổng <span class="price" style="color:black"><b> <?php

                    echo number_format(isset($_SESSION['total']) ? $_SESSION['total'] : $_SESSION['total']='0');

                    ?>  vnd</b></span></p>
        </div>
    </div>
</div>

</body>
</html>





<?php
if(isset($_POST['submit'])){

$user = $_SESSION['username'];
$query = query("SELECT * FROM orders WHERE username='$user' ");
confirm($query);
while($row=fetch_array($query)){
    $o_id=$row['order_id'];
}


if(isset($_POST['cod'])){
$query_checkout = query(" UPDATE orders SET payment_card= 'COD' WHERE order_id='$o_id' ");
confirm($query_checkout);
echo "<script>window.open('thanks.php','_self')</script>";

} else {
    if(empty($_POST['cardnumber'])){
        echo "<script type='text/javascript'>alert('Số thẻ không được để trống');</script>";
    } else {
        $card = $_POST['cardnumber'];
    $query_checkout = query(" UPDATE orders SET payment_card= '$card' WHERE order_id='$o_id' ");
confirm($query_checkout);
echo "<script>window.open('thanks.php','_self')</script>";
    }

}












}

?>