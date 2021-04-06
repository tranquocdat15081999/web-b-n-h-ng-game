<?php

require_once("../WEB1/resources/config.php");

?>



<?php
    include (TEMPLATE_FRONT . DS . "header.php");

?>


<?php
    include (TEMPLATE_FRONT . DS . "side_nav.php");

?>


<?php
    include (TEMPLATE_FRONT . DS . "menu.php");

?>

<?php
    include (TEMPLATE_FRONT . DS . "slideshow.php");

?>











<?php

function get_productps4(){
    $query= query("SELECT * FROM products WHERE categories='GAME PS4'");

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
function get_productps3(){
    $query= query("SELECT * FROM products WHERE categories='GAME PS3'");

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
function get_productpsv(){
    $query= query("SELECT * FROM products WHERE categories='GAME PSV'");

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
function get_productx1(){
    $query= query("SELECT * FROM products WHERE categories='GAME X1'");

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
function get_productx360(){
    $query= query("SELECT * FROM products WHERE categories='GAME X360'");

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
function get_productsw(){
    $query= query("SELECT * FROM products WHERE categories='GAME SW'");

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
function get_product3ds(){
    $query= query("SELECT * FROM products WHERE categories='GAME 3DS'");

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
function get_productwii(){
    $query= query("SELECT * FROM products WHERE categories='GAME WII'");

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
function get_productpc(){
    $query= query("SELECT * FROM products WHERE categories='GAME PC'");

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
function get_productsteam(){
    $query= query("SELECT * FROM products WHERE categories='PK PC'");

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
            <ul class="nav nav-pills">
                <li class="active"><a class="but-collor" data-toggle="pill" href="#home">Game PS4</a></li>
                <li><a class="but-collor" data-toggle="pill" href="#menu1">Game PS3</a></li>
                <li><a class="but-collor" data-toggle="pill" href="#menu2">Game PS Vita</a></li>
            </ul>

            <div class="tab-content">
                <div id="home" class="tab-pane fade in active">
                    <div class="row whitebox">
                        <div class="col-10">
                            <?php
                            get_productps4();
                            ?>

                        </div>
                    </div>
                </div>
                <div id="menu1" class="tab-pane fade">
                    <div class="row whitebox">
                        <div class="col-10">
                            <?php
                            get_productps3();
                            ?>
                        </div>
                    </div>
                </div>
                <div id="menu2" class="tab-pane fade">
                    <div class="row whitebox">
                        <div class="col-10">
                            <?php
                            get_productpsv();
                            ?>
                            
                            
                            
                            
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
















        <div class="container">
            <ul class="nav nav-pills">
                <li class="active"><a class="but-collor" data-toggle="pill" href="#home2">Game XBOX ONE</a></li>
                <li><a class="but-collor" data-toggle="pill" href="#menux1">Game XBOX 360</a></li>
            </ul>

            <div class="tab-content">
                <div id="home2" class="tab-pane fade in active">
                    <div class="row whitebox">
                        <div class="col-10">
                            <?php
                            get_productx1();
                            ?>
                        </div>
                    </div>
                </div>
                <div id="menux1" class="tab-pane fade">
                    <div class="row whitebox">
                        <div class="col-10">
                            <?php
                            get_productx360();
                            ?>
                        </div>
                    </div>
                </div>

            </div>
        </div>









<div class="container">
            <ul class="nav nav-pills">
                <li class="active"><a class="but-collor" data-toggle="pill" href="#home3">Game SWITCH</a></li>
                <li><a class="but-collor" data-toggle="pill" href="#menun1">Game 3DS</a></li>
                <li><a class="but-collor" data-toggle="pill" href="#menun2">Game Wii</a></li>
            </ul>

            <div class="tab-content">
                <div id="home3" class="tab-pane fade in active">
                    <div class="row whitebox">
                        <div class="col-10">
                            <?php
                            get_productsw();
                            ?>
                        </div>
                    </div>
                </div>
                <div id="menun1" class="tab-pane fade">
                    <div class="row whitebox">
                        <div class="col-10">
                            <?php
                            get_product3ds();
                            ?>
                            
                            
                            
                            
                            
                        </div>
                    </div>
                </div>
                <div id="menun2" class="tab-pane fade">
                    <div class="row whitebox">
                        <div class="col-10">
                            <?php
                            get_productwii();
                            ?>
                            
                            
                            
                            
                            
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>



        
        
        
        
        <div class="container">
            <ul class="nav nav-pills">
                <li class="active"><a class="but-collor" data-toggle="pill" href="#home4">Game PC</a></li>
                <li><a class="but-collor" data-toggle="pill" href="#menup1">STEAM WALLET</a></li>
            </ul>

            <div class="tab-content">
                <div id="home4" class="tab-pane fade in active">
                    <div class="row whitebox">
                        <div class="col-10">
                            <?php
                            get_productpc();
                            ?>
                        </div>
                    </div>
                </div>
                <div id="menup1" class="tab-pane fade">
                    <div class="row whitebox">
                        <div class="col-10">
                        <?php
                            get_productsteam();
                            ?>
                        </div>
                    </div>
                </div>

            </div>
        </div>


<?php
    include (TEMPLATE_FRONT . DS . "footer.php");

?>


    </body>
</html>
