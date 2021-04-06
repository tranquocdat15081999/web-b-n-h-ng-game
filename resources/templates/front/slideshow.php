<?php
function get_reddead(){
    $query= query("SELECT * FROM products WHERE id=7");

    confirm($query);

    while($row= fetch_array($query)){
        echo " <a href='product.php?id={$row['id']}'><img src='reddead.jpg' style='width:100%' ></a> ";
        }

}
?>
<?php
function get_spider(){
    $query= query("SELECT * FROM products WHERE id=9");

    confirm($query);

    while($row= fetch_array($query)){
        echo " <a href='product.php?id={$row['id']}'><img src='spider.jpg' style='width:100%' ></a> ";
        }

}
?>
<?php
function get_dmc(){
    $query= query("SELECT * FROM products WHERE id=1");

    confirm($query);

    while($row= fetch_array($query)){
        echo " <a href='product.php?id={$row['id']}'><img src='dmc5.jpg' style='width:100%' ></a> ";
        }

}
?>
<?php
function get_ff(){
    $query= query("SELECT * FROM products WHERE id=8");

    confirm($query);

    while($row= fetch_array($query)){
        echo " <a href='product.php?id={$row['id']}'><img src='ff19.jpg' style='width:100%' ></a> ";
        }

}
?>











<div class="slideshow-container">

            <div class="mySlides fade">
                <?php get_reddead(); ?>
            </div>

            <div class="mySlides fade">
                <?php get_spider(); ?>
            </div>

            <div class="mySlides fade">
                <?php get_dmc(); ?>
            </div>

            <div class="mySlides fade">
                <?php get_ff(); ?>
            </div>

        </div>

        <script>

            var slideIndex = 0;
            showSlides();

            function showSlides(n) {
                var i;
                var slides = document.getElementsByClassName("mySlides");
                for (i = 0; i < slides.length; i++) {
                    slides[i].style.display = "none";
                }
                slideIndex++;
                if (slideIndex > slides.length) {slideIndex = 1}
                slides[slideIndex-1].style.display = "block";
                setTimeout(showSlides, 4000); // Change image every 2 seconds
            }

        </script>