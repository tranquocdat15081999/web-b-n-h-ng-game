

<div id="mySidebar" class="sidebar">

<?php
  get_categories();
?>
            <!--<a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
            <a href="">PS4</a>
            <a href="">PS3</a>
            <a href="">PS Vita</a>
            <a href="">Xbox One</a>
            <a href="">Xbox 360</a>
            <a href="">Switch</a>
            <a href="">3DS</a>
            <a href="">Wii</a>
            <a href="">PC</a>-->
        </div>

        <div id="main">
            <button class="openbtn" onclick="openNav()">&#9776;</button>
        </div>

        <script>
            function openNav() {
                document.getElementById("mySidebar").style.width = "250px";
                document.getElementById("main").style.marginLeft = "250px";
            }

            function closeNav() {
                document.getElementById("mySidebar").style.width = "0";
                document.getElementById("main").style.marginLeft= "0";
            }
        </script>