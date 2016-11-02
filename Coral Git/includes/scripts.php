<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
<script src="./assets/js/bootstrap.min.js"></script>
<!--owl-->
<script src="./assets/js/owl-carousel/owl.carousel.js"></script>
<script>
    $(document).ready(function () {

        $(window).scroll(function () {
            if ($(this).scrollTop() > 1) {
                $('header').addClass("sticky");
                $('#content-menu-sec').addClass("space-sticky");
            } else {
                $('header').removeClass("sticky");
                $('#content-menu-sec').removeClass("space-sticky");
            }
        });

        /*     $("#sobre-nosaltres-sub").mouseleave(function () {
         $("#sobre-nosaltres-sub").hide();
         });
         $("#transport-sub").mouseleave(function () {
         $("#transport-sub").hide();
         });*/

        $(".space-text-menu a").mouseenter(function () {
            var menus = $(this).attr('menusub');
            $('.img-default').hide();
            $('.no-show').hide();
            $('.'+ menus).show();
        });
        $(".space-text-menu-two a").mouseenter(function () {
            var menus = $(this).attr('menusub');
            $('.img-default-2').hide();
            $('.no-show').hide();
            $('.col-blue-sub').show();
            $('.'+ menus).show();
        });
   
        
        
        $("#owl-demo").owlCarousel({
            navigation: false, // Show next and prev buttons
            slideSpeed: 300,
            paginationSpeed: 400,
            singleItem: true,
            responsiveClass: true,
            responsive: {
                600: {
                    items: 3,
                    nav: false
                }

            }

            // "singleItem:true" is a shortcut for:
            // items : 1, 
            // itemsDesktop : false,
            // itemsDesktopSmall : false,
            // itemsTablet: false,
            // itemsMobile : false

        });

        $("#nosaltres").click(function () {
            $(this).addClass("active-sub");
            $("#transport").removeClass("active-sub");
            $(".sub-menu-head").hide();
            $("#sobre-nosaltres-sub").slideToggle("slow", function () {
                // Animation complete.
            });
        });


        $("#transport").click(function () {
            $(this).addClass("active-sub");
            $("#nosaltres").removeClass("active-sub");
            $(".sub-menu-head").hide();
            $("#transport-sub").slideToggle("slow", function () {
                // Animation complete.
            });
        });

        $("#btn-more-ttn-sub").click(function () {
            $(".menu-sub-tranport").slideToggle("slow", function () {
                // Animation complete.
            });
        });
        $("#btn-menu-movil").click(function () {
            $("#menu-movil").slideToggle("slow", function () {
                // Animation complete.
            });
        });

    });
</script>