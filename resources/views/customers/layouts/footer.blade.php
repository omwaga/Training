<!--  Footer -->
    <footer class="footer section_sapce4 error bg_dark ">
        <div class="row section_sapce3 main-footer">
            <div class="container">
                <div class="col-sm-3">
                    <h4 class="text_white">Choose.</h4>
                    <ul>
                        <li class="text_white"> <a href="" class="text_white">Shared Hosting</a> </li>
                        <li class="text_white"> <a href="" class="text_white">Reseller Hosting</a> </li>
                        <li class="text_white"> <a href="" class="text_white">Cloud Managed VPS</a> </li>
                        <li class="text_white"> <a href="" class="text_white">Managed Dedicated Servers</a> </li>
                  </ul>
                </div>
                <div class="col-sm-6">
                    <div id="mc_embed_signup">
                        <form class="form-inline validate" action="//sreethemes.us9.list-manage.com/subscribe/post?u=f86de306ae229d9cca9373ff6&id=44e7c219bf" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" target="_blank" novalidate>
                            <div class="row no-gutter">
                                <div class="col-sm-9">
                                    <input type="email" value="" name="EMAIL" class="form-control" id="mce-EMAIL" placeholder="Subscribe to our newsletter" required>
                                    <div style="position: absolute; left: -5000px;">
                                        <input type="text" name="b_f86de306ae229d9cca9373ff6_44e7c219bf" tabindex="-1" value="">
                                    </div>
                                </div>
                                <div class="col-sm-3">
                                    <input type="submit" value="SUBSCRIBE" name="subscribe" id="mc-embedded-subscribe">
                                </div>
                            </div>
                        </form>
                    </div>
                     <div class="col-sm-12 col-md-6">
                    <h3>Newsletter</h3>
                    <p>Lorem Ipsum is simply dummy text of the printing  industry.</p>
                </div>
            </div>
            <div class="col-sm-3">
                    <h4 class="text_white">Choose.</h4>
                    <ul>
                        <li class="text_white"> <a href="" class="text_white">Shared Hosting</a> </li>
                        <li class="text_white"> <a href="" class="text_white">Reseller Hosting</a> </li>
                        <li class="text_white"> <a href="" class="text_white">Cloud Managed VPS</a> </li>
                        <li class="text_white"> <a href="" class="text_white">Managed Dedicated Servers</a> </li>
                  </ul>
                </div>
        </div>
    </footer>
    <!--  End of Footer -->


    <!--  Back to Top -->
    <a href="#top" id="back-to-top"><i class="fa fa-angle-up"></i></a>

    <!--  Scripts -->
    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/hoverIntent.js"></script>
    <script src="js/superfish.min.js"></script>
    <script src="js/owl.carousel.js"></script>
    <script src="js/wow.min.js"></script>
    <script src="js/video-popup.js"></script>
    <script src="js/jquery.circliful.min.js"></script>
    <script src="js/waypoints.min.js"></script>
    <script src="js/jquery.responsiveTabs.js"></script>
    <script src="js/jquery.counterup.min.js"></script>
    <script src="js/jquery.sticky.js"></script>
    <script src="js/jquery.slicknav.min.js"></script>
    <script src="js/jquery.slicknav.min.js"></script>
    <script src="js/retina.min.js"></script>
    <script src="js/jquery.parallax-1.1.3.js"></script>
    <script src="js/jquery.countdown.js"></script>
    <script src="js/custom.js"></script>

    <script>
    $(document).on("ready", function(e) {
        var sync1 = $("#mainslider");
        var sync2 = $("#mainslider-nav");
        sync1.owlCarousel({
            singleItem: true,
            slideSpeed: 1000,
            paginationSpeed: 800,
            navigation: false,
            pagination: false,
            autoPlay: 7500,
            afterAction: syncPosition,
            responsiveRefreshRate: 200,
        });
        sync2.owlCarousel({
            items: 4,
            itemsDesktop: [1199, 4],
            itemsDesktopSmall: [979, 4],
            itemsTablet: [768, 3],
            itemsMobile: [479, 2],
            pagination: false,
            responsiveRefreshRate: 100,
            afterInit: function(el) {
                el.find(".owl-item").eq(0).addClass("synced");
            }
        });

        function syncPosition(el) {
            var current = this.currentItem;
            $("#mainslider-nav").find(".owl-item").removeClass("synced").eq(current).addClass("synced")
            if($("#mainslider-nav").data("owlCarousel") !== undefined) {
                center(current)
            }
        }
        $("#mainslider-nav").on("click", ".owl-item", function(e) {
            e.preventDefault();
            var number = $(this).data("owlItem");
            sync1.trigger("owl.goTo", number);
        });

        function center(number) {
            var sync2visible = sync2.data("owlCarousel").owl.visibleItems;
            var num = number;
            var found = false;
            for(var i in sync2visible) {
                if(num === sync2visible[i]) {
                    var found = true;
                }
            }
            if(found === false) {
                if(num > sync2visible[sync2visible.length - 1]) {
                    sync2.trigger("owl.goTo", num - sync2visible.length + 2)
                } else {
                    if(num - 1 === -1) {
                        num = 0;
                    }
                    sync2.trigger("owl.goTo", num);
                }
            } else if(num === sync2visible[sync2visible.length - 1]) {
                sync2.trigger("owl.goTo", sync2visible[1])
            } else if(num === sync2visible[0]) {
                sync2.trigger("owl.goTo", num - 1)
            }
        }
    });

    $(document).on("ready", function(e) {
        // ______________ TESTIMONIALS
        $("#testimonials-carousel").owlCarousel({
            items: 1,
            autoPlay: 5000,
            itemsDesktop: [1199, 1],
            itemsDesktopSmall: [979, 1],
            itemsTablet: [768, 1]
        });
        // ______________ PRICE TABS
        $('#shared-hosting-price-tabs').responsiveTabs({
            startCollapsed: 'accordion'
        });
        // ______________ FEATURES TABS
        $('#shared-hosting-features-tabs').responsiveTabs({
            startCollapsed: 'accordion'
        });
        // ______________ VIDEOPOPUP
        $("a.autoplay").VideoPopUp();
        $("a.noautoplay").VideoPopUp({
            autoplay: 0
        }); // Disable autoplay

        // ______________ COUNTDOWN
        $("#limited").countdown("2019/08/15", function(event) {
            $(this).text(
                event.strftime('%D Days %H:%M:%S')
            );
        });
        // ______________ PARTNERS
        $("#datacenter-partners").owlCarousel({
            autoPlay: 3000, //Set AutoPlay to 3 seconds
            items: 6,
            itemsDesktop: [1199, 5],
            itemsDesktopSmall: [979, 3],
            pagination: false
        });
        // ______________ PARALLAX
        $('.section-parallax').parallax("50%", 0.4);
        // ______________ STATS
        $('.statistics').waypoint(function() {
            $('#myStat1').circliful();
            $('#myStat2').circliful();
            $('#myStat3').circliful();
            $('#myStat4').circliful();

        }, {
            offset: 800,
            triggerOnce: true
        });
    });
    </script>
</body>

</html>