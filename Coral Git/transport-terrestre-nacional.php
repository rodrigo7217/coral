<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <?php include("includes/head.php"); ?>
    <body>
        <?php include("includes/header.php"); ?>
        <?php include("content-pages/transport-terrestre-nacional.php"); ?>
        <?php include("includes/footer.php"); ?>
        <?php include("includes/menu-inferior.php"); ?>
        <?php include("includes/scripts.php"); ?>
        <script>
            $(".option-menu-transport").on("click", "a", function (e) {
                e.preventDefault();
                var id = $(this).attr("href"),
                        topSpace = 30;
                //alert(id);
                $('html, body').animate({
                    scrollTop: $(id).offset().top - topSpace
                }, 800);
            });
        </script>
    </body>
</html>
