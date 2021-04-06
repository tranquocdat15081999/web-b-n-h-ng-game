<?php

require_once("../WEB1/resources/config.php");

?>



<?php
    include (TEMPLATE_FRONT . DS . "header_product.php");

?>


<?php
    include (TEMPLATE_FRONT . DS . "side_nav.php");

?>


<?php
    include (TEMPLATE_FRONT . DS . "menu.php");

?>










         <?php
         if(isset($_GET['id'])){
             $get_id = $_GET['id'];

        $query= query("select * from products where id='$get_id' ");

                confirm($query);

                $row= fetch_array($query);
                $name= $row["title"];
                $price=$row["price"];
                $brand=$row["brand"];
                $image=$row["image"];
                $desc=$row["description"];
                $phathanh=$row["date"];
                $date = new DateTime($phathanh);

         }




         ?>






    <?php

    function buy(){
    $query= query("SELECT * FROM products WHERE id=".escape_string($_GET['id'])." ");

    confirm($query);

    $row= fetch_array($query);
        $quan=$row['quantity'];
        if(empty($quan)){
            echo "<script type='text/javascript'>alert('Sản Phẩm Đã Hết Hàng, mong quý khách thông cảm!');</script>";
        }
        else{
        $buy= <<<OED
       <a href="gio.php?add={$row['id']}"><button class="add-to-cart btn btn-default" type="button">mua hàng</button></a>
OED;
echo $buy;
        }

    }



    ?>














        <div class="container">
            <div class="card">
                <div class="container-fliud">
                    <div class="wrapper row">
                        <div class="preview col-md-6">

                            <div class="preview-pic tab-content">
                                <div class="tab-pane active" id="pic-1"><?php echo "<img src='admin_area/product_images/{$image}'>"; ?></div>



                            </div>
                            <ul class="preview-thumbnail nav nav-tabs">
                                <li class="active"><a data-target="#pic-1" data-toggle="tab"><?php echo "<img src='admin_area/product_images/{$image}'>"; ?></a></li>


                            </ul>

                        </div>
                        <div class="details col-md-6">
                            <h2 class="product-title" style="color:#ffffff;border:3px; border-style:solid; border-color:#3366cc; background-color: #3366cc;"><?php echo $name;?></h2>
                            <div class="rating">
                                <div class="stars">
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star"></span>
                                </div>
                                <span class="review-no">- Metacritic Score</span>
                            </div>
                            <p class="product-description" style="font-weight: bold;font-size:18px"><!--Thể loại: Action-adventure, hack and slash, third-person-->
                                <br>
                                NSX: <?php echo $brand;  ?>
                                <br><br><br>
                                Ngày Phát Hành: <?php echo $date->format('d-m-Y');  ?>
                            </p>
                            <br><br>
                            <h4 class="price1">GIÁ: <span><?php echo number_format($price);  ?> vnđ</span></h4>
                            <br><br>
                            <div class="action">
                                <?php buy(); ?>
                                <button class="like btn btn-default" type="button"><span class="fa fa-heart"></span></button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container">
                <ul class="nav nav-pills">
                    <li class="active"><a class="but-collor" data-toggle="pill" href="#home">Chi Tiết</a></li>
                    <li><a class="but-collor" data-toggle="pill" href="#menu1">Thanh Toán</a></li>
                    <li><a class="but-collor" data-toggle="pill" href="#menu2">Bảo Hành</a></li>
                </ul>

                <div class="tab-content">
                    <div id="home" class="tab-pane fade in active">
                        <div class="row whitebox">
                            <div class="container">


                                <?php echo $desc; ?>
                                <br>
                                <div class="utube">
                                    <iframe width="789" height="444" src="https://www.youtube.com/embed/dDIxhfaIrcg" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div id="menu1" class="tab-pane fade">
                        <div class="row whitebox">
                            <div class="container">


                                <p style="font-size: 20px"><span style="font-weight: bold">NGÂN HÀNG VIETINBANK</span>
                                    <br><br>
                                    Số tài khoản :      <span style="font-weight: bold">104 005 774 848</span>
                                    <br><br>
                                    Chủ tài khoản:      <span style="font-weight: bold">Nguyễn Thị Lân</span>
                                </p>
                                <br><br>
                                <p style="font-size: 20px"><span style="font-weight: bold">NGÂN HÀNG TPBANK</span>
                                    <br><br>
                                    Số tài khoản :      <span style="font-weight: bold">037 1000 406 597</span>
                                    <br><br>
                                    Chủ tài khoản:      <span style="font-weight: bold">Nguyễn Thị Lân</span>
                                </p>
                            </div>
                        </div>
                    </div>
                    <div id="menu2" class="tab-pane fade">
                        <div class="row whitebox">
                            <div class="container">
                                <p style="font-size: 16px">
                                    <span style="font-weight: bold">Về phần cứng</span>: bảo hành từ 3 tháng - 12 tháng đối với máy mới tùy loại, 1 tháng với máy cũ không bao gồm các trường hợp được nêu bên dưới.
                                    <br><br>
                                    <span style="font-weight: bold">Về phần mềm</span>: bảo hành 12 tháng đối với tất cả các máy không bao gồm các trường hợp được nêu bên dưới.

                                    <br><br><br>
                                    <span style="font-weight: bold">* Những trường hợp sau,shop sẽ không chịu trách nhiệm bảo hành:</span>
                                    <br><br>
                                    -Camera,Màn hình Cảm ứng sẽ không được bảo hành vì nguyên nhân hư hỏng thường bị tác động bới các yếu tố bên ngoài như nhiệt độ,độ ẩm,nguồn điện và cách sử dụng.
                                    <br><br>
                                    -Khách hàng tự ý can thiệp vào bên trong máy hoặc tự ý nạp phần mềm,nâng cấp Firmware,sửa chữa hoặc thay đổi phần mềm thiết bị từ một bên không phải là dịch vụ của RedTurtle.
                                    <br><br>
                                    -Lỗi hư hỏng do máy được sử dụng không đúng cách hoặc do khách hàng bên thứ ba tự ý can thiệp vào máy.
                                    <br><br>
                                    -Vỏ thân máy bị nứt vỡ,có vết mốc,gỉ,biến dạng,cháy nổ,có chất lỏng.
                                    <br><br>
                                    -Máy để trong môi trường âm ướt,nhiệt độ cao,các nguồn nhiệt vượt quá nhiệt độ cho phép (trên 15C và dưới 40C)
                                    <br><br>
                                    -Máy có mùi khét,mùi lạ tại 1 phần của máy hoặc toàn bộ máy.
                                    <br><br>
                                    -Máy rơi vào nước,máy bị cấn,va chạm vào vật cứng dẫn đến cong mainboard.
                                    <br><br>
                                    -Máy trong tình trang bị BAN eshop,máy mất nguồn không kiểm tra được IMEI,máy mất IMEI.
                                    <br><br>
                                    -Phiếu bảo hành bị mất,chỉnh sửa hoặc không chính xác với thông tin của shop.
                                    <br><br>
                                    -Tem bao hành trên thân máy bị rách hoặc có dấu vết cạo,sửa...
                                    <br><br>
                                    -Shop không giải quyết mọi lý do đổi hoặc trả máy nếu thấy không phù hợp với quy định.
                                    <br><br>
                                    -Không bảo hành phụ kiện kèm theo,chỉ bao test 7 ngày.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <br><br><br><br><br>





        <?php
        function get_product_vui(){
    $query= query("SELECT * FROM products WHERE brand='CAPCOM' OR brand='Ubisoft' OR brand='Atlus' ");

    confirm($query);

    while($row= fetch_array($query)){
        $price= number_format($row['price']);

    echo "<div class='responsive'>
        <a href='product.php?id={$row['id']}'>
            <div class='gallery'>
                <img src='admin_area/product_images/{$row['image']}'>
                <div>
                    <div class='title'>{$row['title']}</div>
                    <div class='price'>
                        {$price} đ
                    </div>
                    <div class='xemhang'>
                        <button>Xem Chi Tiết</button>
                    </div>
                </div>
            </div>
        </a>
        </div>";
    }

}


        ?>









        <div class="container">
            <div class="row donghang"><h3 style="font-weight: bolder">Sản Phẩm Khác</h3></div>
            <div class="row whitebox">
                <div class="col-10" >

                    <?php
                    get_product_vui();
                    ?>




                </div>
            </div>
        </div>






















































<?php
    include (TEMPLATE_FRONT . DS . "footer.php");

?>

    </body>
</html>