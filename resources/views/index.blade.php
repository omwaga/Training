@extends('layouts.master')
@section('content')
    @include('layouts.menubar')

    <!-- Slider -->
    <div class="slidercontainer">
        <div id="mainslider" class="owl-carousel">
            <div class="item no-before">
                <div class="slidecaption">
                    <h2>Full Stack Programs</h2>
                    <h4>Get your Business Online  Easy way</h4>
                    <p><a class="btn btn-slide" href="#">See the Features</a> </p>
                </div> <img src="{{ asset('images/image3.png') }}" alt="" /> </div>
            <div class="item no-before">
                <div class="slidecaption">
                    <h2>Data Science. </h2>
                    <h4>Just Resell, Just Support, Get More Money</h4>
                    <p><a class="btn btn-slide" href="#">Learn More</a> </p>
                </div> <img src="{{ asset('images/image3.png') }}" alt="" /> </div>
            <div class="item no-before">
                <div class="slidecaption">
                    <h2>Machine Learning.</h2>
                    <h4>Secure, Trusted, Money Back, Full Support</h4>
                    <p><a class="btn btn-slide" href="#">More Info</a> </p>
                </div> <img src="{{ asset('images/image3.png') }}" alt="" /> </div>
            <div class="item no-before">
                <div class="slidecaption">
                    <h2>Artificial Intelligence</h2>
                    <h4>99.99% Uptime SuperMicro Blade Servers</h4>
                    <p><a class="btn btn-slide" href="#">Order Now</a> </p>
                </div> <img src="{{ asset('images/image3.png') }}" alt="" /> </div>
        </div>
        <div class="row bg_gray">
            <div class="container">
                <div class="col-sm-12">
                    <div id="mainslider-nav" class="owl-carousel">
                        <div class="item"><i class="fa fa-rocket"></i>
                            <h5>Full Stack Programs</h5>
                            <h6>Starting from $299</h6></div>
                        <div class="item"><i class="fa fa-line-chart"></i>
                            <h5>Data Science</h5>
                            <h6>Starting from $299</h6></div>
                        <div class="item"><i class="fa fa-cloud"></i>
                            <h5>Machine Learning</h5>
                            <h6>Starting from $299</h6></div>
                        <div class="item"><i class="fa fa-tasks"></i>
                            <h5>Artificial Intelligence</h5>
                            <h6>Starting from $299</h6></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End of Slider -->

    <!-- Shared Hosting Tabs -->
    <section class="shared-features section_sapce section_gray">
        <div class="section-title margin-b50">
            <h2>Trending Courses</h2>
        </div>
        <div class="row">
            <div class="container">
                <div class="col-sm-12">
                    <div id="shared-hosting-features-tabs">
                        <ul>
                            <li><a href="#feature2"> <i class="fa fa-globe" aria-hidden="true"></i>All Categories</a></li>
                            <li><a href="#feature1"><i class="fa fa-mouse-pointer" aria-hidden="true"></i>  Full Stack</a> </li>
                            <li><a href="#feature3"><i class="fa fa-cog" aria-hidden="true"></i>Data Science</a> </li>
                            <li><a href="#feature4"><i class="fa fa-question-circle" aria-hidden="true"></i>Artificial Intelligence</a> </li>
                        </ul>

                        <!-- 1st tab  -->
                        <div id="feature2">
                            <div class="tabfeatures">
                                <div class="row">
                                    <div class="col-sm-4">
                    <div class="boxes boxes-border-top margin-top-30 clearfix">
                        <div class="col-sm-12">
                            <h2>Omnis Natus</h2>
                            <p>Sed ut perspiciatis unde omnis iste natus error doloremque laudantium.</p>
                            <a href="#" class="btn btn-new btn-lg">Purchease now</a>
                         </div>
                        <!-- end boxes -->
                     </div>
                </div>
                <div class="col-sm-4">
                    <div class="boxes boxes-border-top margin-top-30 clearfix">
                        <div class="col-sm-12">
                            <h2>Omnis Natus</h2>
                            <p>Sed ut perspiciatis unde omnis iste natus error doloremque laudantium.</p>
                            <a href="#" class="btn btn-new btn-lg">Purchease now</a>
                         </div>
                        <!-- end boxes -->
                     </div>
                </div>
                <div class="col-sm-4">
                    <div class="boxes boxes-border-top margin-top-30 clearfix">
                        <div class="col-sm-12">
                            <h2>Omnis Natus</h2>
                            <p>Sed ut perspiciatis unde omnis iste natus error doloremque laudantium.</p>
                            <a href="#" class="btn btn-new btn-lg">Purchease now</a>
                         </div>
                        <!-- end boxes -->
                     </div>
                </div>
                                </div>
                            </div>
                        </div>

                        <!-- 2nd tab  -->
                        <div id="feature1">
                            <div class="tabfeatures">
                                <div class="row">
                                        <div class="col-sm-3">
                    <div class="boxes border-dotted-2 margin-top-30 clearfix relative">
                        <div class="ribbon ribbon-small text-white">
                            <div class="ribbon-content bg_dark text-uppercase text_white">NEW</div>
                        </div>
                        <div class="col-sm-12">
                            <h2>Sit voluptatem accusantium doloremque</h2>
                            <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis.</p> <a href="#" class="btn btn-new btn-lg">Purchease now</a>
                        </div>
                    </div>
                </div>
                                </div>
                            </div>
                        </div>

                        <!-- 3rd tab  -->
                        <div id="feature3">
                            <div class="tabfeatures">
                                <div class="row">
                                        <div class="col-sm-3">
                    <div class="boxes border-dashed-2 margin-top-30 clearfix relative">
                        <div class="ribbon ribbon-small text-white">
                            <div class="ribbon-content bg_yellow text-uppercase ">50% OFFER</div>
                        </div>
                        <div class="col-sm-12">
                            <h2>Sit voluptatem accusantium doloremque</h2>
                            <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis.</p> <a href="#" class="btn btn-new btn-lg">Purchease now</a>
                         </div>
                    </div>
                </div>
                                </div>
                            </div>
                        </div>

                        <!-- 4th tab  -->
                        <div id="feature4">
                            <div class="tabfeatures">
                                <div class="row faq">
                                                 <div class="col-sm-3">
                    <div class="boxes border-dotted margin-top-30 clearfix relative">
                        <div class="ribbon ribbon-small text-white">
                            <div class="ribbon-content bg-primary text-uppercase text_white">NEW</div>
                        </div>
                        <div class="col-sm-12">
                            <div class="row">
                                <h2>Neque Porro Quisquam Est Magnam Aliquam Dolorem</h2>
                                <p>Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit.</p>
                            </div>
                            <div class="row">
                                <a href="#" class="btn btn-lg btn-new pull-right  margin-top-15">Purchease now</a>
                            </div>
                        </div>
                    </div>
                </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

        <!-- Pricing Tables -->
    <div class="servers-table section_sapce">
        <div class="row">
            <div class="section-title margin-b50">
                <h2>Recent Additions</h2>
            </div>
            <div class="container">
                <div class="col-sm-12">
                    <table class="products-table responsive tablesaw tablesaw-stack" data-tablesaw-mode="stack">
                        <thead>
                            <tr>
                                <th>Title</th>
                                <th>Venue</th>
                                <th>Duration</th>
                                <th>Fees</th>
                                <th>ORDER</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($courses as $course)
                            <tr>
                                <td>{{$course->title}}</td>
                                <td>{{$course->venue}}</td>
                                <td>{{$course->duration}}</td>
                                <td>{{$course->fees}}</td>
                                <td><a class="btn btn-block btn-new" href="">APPLY</a> </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <!-- End of Pricing Tables -->
    <!-- Counter Area Start -->
    <section class="section_sapce bg_primary cover-image2" data-image-src="{{ asset('images/image3.png') }}">
        <div class="container">
            <div class="row">
                <div class="col-sm-6 col-md-3 margin-top-30">
                    <!-- Counter Item Start -->
                    <i class="fa fa-superpowers fa-3x text_white square-border-icon"></i>
                    <div class="counter-holder margin-top-15">
                        <p class="counter-text  text_white">Courses Online</p>
                        <div class="counter-number  text_white">587</div>
                    </div>
                    <!-- Counter Item End -->
                </div>


                <div class="col-sm-6 col-md-3 margin-top-30">
                    <!-- Counter Item Start -->
                    <i class="fa fa-calendar fa-3x text_white square-border-icon"></i>
                    <div class="counter-holder margin-top-15">
                        <p class="counter-text text_white">Training Days</p>
                        <div class="counter-number text_white">1.8412</div>
                    </div>
                    <!-- Counter Item End -->
                </div>

                <div class="col-sm-6 col-md-3 margin-top-30">
                    <!-- Counter Item Start -->
                    <i class="fa fa-address-book fa-3x text_white square-border-icon"></i>
                    <div class="counter-holder margin-top-15">
                        <p class="counter-text text_white">Delegates</p>
                        <div class="counter-number text_white">1,300</div>
                    </div>
                    <!-- Counter Item End -->
                </div>

                <div class="col-sm-6 col-md-3 margin-top-30">
                    <!-- Counter Item Start -->
                    <i class="fa fa-smile-o fa-3x text_white square-border-icon"></i>
                    <div class="counter-holder margin-top-15">
                        <p class="counter-text text_white">Clients Happy </p>
                        <div class="counter-number text_white">25,324</div>
                    </div>
                    <!-- Counter Item End -->
                </div>
            </div>
        </div>
    </section>
    <!-- Counter Area End -->

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
@endsection