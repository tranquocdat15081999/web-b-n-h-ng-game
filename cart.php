<?php

require_once("../WEB1/resources/config.php");

?>
<?php

require_once("gio.php");

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







    <form method="post">
    <main>

        <p class="tuade">Giỏ Hàng</p>
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
                    <?php cart(); ?>
                </thead>
                <tbody></tbody>
                <tfoot>
                    <tr>
                    <th colspan="3">Tổng Cộng:</th>
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
            <button class="btn btn-lg btn-success" type="submit" name="checkout" onclick="checkout()"><i class="fas fa-shipping-fast"></i> Đặt hàng</button>
        </div>
    </main>
    </form>






<?php
    include (TEMPLATE_FRONT . DS . "footer.php");

?>











  </body>
  </html>

  <!--JS-->
<!--  <script type="text/javascript">
  function checkout(){
      $.ajax({url:"echo.php",success:function(result)
      {
          alert(result);
      }
      })
  }


    </script> -->
    <?php

   if(array_key_exists('checkout',$_POST)){
   if(!isset($_SESSION['username'])){
                    $chualogin= <<<OED
                    <script>alert("Bạn cần đăng nhập để có thể mua hàng!")</script>
OED;
                    echo $chualogin;
                    }
                    else {
                        if($_SESSION['total']='0'){
                          echo "<script>alert('Giỏ hàng trống!')</script>";
                        } else {
                          header('Location: /WEB1/checkout.php');
                        }


                    }
}

    ?>