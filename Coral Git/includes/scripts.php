<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
<script src="./assets/js/bootstrap.min.js"></script>
<!--owl-->
<script src="./assets/js/owl-carousel/owl.carousel.js"></script>
<script>
    $(window).scroll(function () {
        if ($(this).scrollTop() > 1) {
            $('header').addClass("sticky");
        } else {
            $('header').removeClass("sticky");
        }
    });


    $(document).ready(function () {

        $("#owl-demo").owlCarousel({
            navigation: false, // Show next and prev buttons
            slideSpeed: 300,
            paginationSpeed: 400,
            singleItem: true

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

    });
</script>