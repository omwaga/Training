@extends('layouts.master')
@section('content')
    @include('layouts.menubar')
    <!-- Slider -->
    <div class="slidercontainer">
        <div id="mainslider" class="owl-carousel">

            <div class="item">
                <div class="row full-width no-gutter section_sapce bg_primary cover-image2" data-image-src="{{ asset('images/image1.jpeg') }}">
                    <div class="container">
                        <div class="col-sm-12 col-md-6 radius">
                            <div class="thequote">
                                <h5 class="text_light">Full Stack Programs</h5>
                                <p class="text_light">Our web hosting services will rock your world. All servers are SSD-powered.</p>
                                <a href="#" class="btn btn-lg btn-new">Buy Now</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="item">
                <div class="row full-width no-gutter section_sapce bg_primary cover-image2" data-image-src="{{ asset('images/image2.jpg') }}">
                    <div class="container">
                        <div class="col-sm-12 col-md-6 radius">
                            <div class="thequote">
                                <h5 class="text_light">Data Science</h5>
                                <p class="text_light">Our web hosting services will rock your world. All servers are SSD-powered.</p>
                                <a href="#" class="btn btn-lg btn-new">Buy Now</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="item">
                <div class="row full-width no-gutter section_sapce bg_primary cover-image2" data-image-src="{{ asset('images/image3.png') }}">
                    <div class="container">
                        <div class="col-sm-12 col-md-6 radius">
                            <div class="thequote">
                                <h5 class="text_light">Big Data</h5>
                                <p class="text_light">Our web hosting services will rock your world. All servers are SSD-powered.</p>
                                <a href="#" class="btn btn-lg btn-new">Buy Now</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="item">
                <div class="row full-width no-gutter section_sapce bg_primary cover-image2" data-image-src="{{ asset('images/image4.png') }}">
                    <div class="container">
                        <div class="col-sm-12 col-md-6 radius">
                            <div class="thequote">
                                <h5 class="text_light">Artificial Intelligence</h5>
                                <p class="text_light">Our web hosting services will rock your world. All servers are SSD-powered.</p>
                                <a href="#" class="btn btn-lg btn-new">Buy Now</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
    <!-- End of Slider -->

    <!--  Features -->
    <section class="section_sapce">
        <div class="row">
                <div class="section-title margin-b30">
                    <h2><span>Welcome to TheHosting</span> Why Choose TheHosting ?</h2>
                </div>
        </div>
        <div class="row">
            <div class="container">
                <div class="col-lg-4 margin-t30">
                    <div class="text-center">
                        <i class="fa fa-percent fa-3x text_primary square-border-icon"></i>
                        <h3>Interactive Engagement Training</h3>
                         <p>We create an environment for participants to challenge, question, learn and grow through engaging interactive courses.</p>
                    </div>
                </div>
                <div class="col-lg-4 margin-t30">
                    <div class="text-center">
                        <i class="fa fa-phone fa-3x text_primary square-border-icon"></i>
                        <h3>Wide Range of Training Subjects</h3>
                         <p>We have an unrivalled selection of courses from leadership, management and business, into more specialist and technical areas of expertise.</p>
                    </div>
                </div>
                <div class="col-lg-4 margin-t30">
                    <div class="text-center">
                        <i class="fa fa-check fa-3x text_primary square-border-icon"></i>
                        <h3>Internationaly Certified Instructors</h3>
                         <p>We have one of the largest and most extensive portfolio of highly qualified, experienced experts, chosen as being the best in their professional field.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End of Features -->

      <!-- Partners -->
    <section class="partners section_sapce3 bg_gray">
        <div class="row">
            <div class="container">
                <div class="col-sm-12">
                    <div id="datacenter-partners">
                        <div class="item"><img src="images/clients/1.png" alt=""> </div>
                        <div class="item"><img src="images/clients/2.png" alt=""> </div>
                        <div class="item"><img src="images/clients/3.png" alt=""> </div>
                        <div class="item"><img src="images/clients/4.png" alt=""> </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End of Partners -->

        <!-- Pricing Tables -->
    <section class="servers-table section_sapce">
        <div class="row">
            <div class="section-title margin-b50">
                <h2><span>Full Managed</span>Most Trending Courses</h2>
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
                                <td>{{$course->fee}}</td>
                                <td><a class="btn btn-block btn-new" href="">APPLY</a> </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </section>
    <!-- End of Pricing Tables -->



    <!--APPS Downloads -->
    <section class="section_sapce bg_dark section-parallax parallax cover-image apps-download" data-image-src="{{ asset('images/image4.png') }}">
        <div class="container ">
            <div class="row">
                <div class="section-title  margin-b50">
                    <h2><span>Available for Downloads</span>Download our Calendar</h2>
                </div>
                <div class="text-center relative">
                    <a href="#" class="btn btn-primary btn-lg"><i class="fa fa-calendar "></i> 2019 Calendar</a>
                    <a href="#" class="btn btn-primary btn-lg"><i class="fa fa-calendar"></i> 2020 Calendar</a>
                    <a href="#" class="btn btn-primary btn-lg"><i class="fa fa-calendar"></i> 2021 Calendar </a>
                </div>
            </div>
        </div>
    </section>
    <!--End of APPS Downloads -->

    <!-- Counter Area Start -->
    <section class="counter section_sapce cover-image" data-image-src="{{ asset('images/image3.png') }}">
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
    
    
    <!--  Subscribe -->
    <div class="subscribe section_sapce4 bg_dark">
        <div class="row">
            <div class="container">
                <div class="col-sm-12 col-md-6">
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
                </div>
                <div class="col-sm-12 col-md-6">
                    <h3>Newsletter</h3>
                    <p>Lorem Ipsum is simply dummy text of the printing  industry.</p>
                </div>
            </div>
        </div>
    </div>
    <!--  End of Subscribe -->

    <!--  Footer -->
    <footer class="footer" style="background: rgb(00,00,00);">
        <div class="row section_sapce3 main-footer">
            <div class="container">
                <div class="col-sm-2">
                    <h4>Choose.</h4>
                    <ul>
                        <li> <a href="">Shared Hosting</a> </li>
                        <li> <a href="">Reseller Hosting</a> </li>
                        <li> <a href="">Cloud Managed VPS</a> </li>
                        <li> <a href="">Managed Dedicated Servers</a> </li>
                  </ul>
                </div>
                <div class="col-sm-2">
                    <h4>Get Support.</h4>
                    <ul>
                        <li> <a href="">Contact Us</a> </li>
                        <li> <a href="">Knowledge Base</a> </li>
                        <li> <a href="">Submit a Ticket</a> </li>
                        <li> <a href="">Email</a> </li>
                  </ul>
                </div>
                <div class="col-sm-2">
                    <h4>Start.</h4>
                    <ul>
                        <li> <a href="">WordPress Hosting</a> </li>
                        <li> <a href="">Joomla Hosting</a> </li>
                        <li> <a href="">Magento Hosting</a> </li>
                        <li> <a href="">Drupal Hosting</a> </li>
                  </ul>
                </div>
                <div class="col-sm-2">
                    <h4>Resources</h4>
                    <ul>
                        <li> <a href="">Webmail</a> </li>
                        <li> <a href="">WHOIS Search</a> </li>
                        <li> <a href="">ICANN Confirmation</a> </li>
                        <li> <a href="">Site Map</a> </li>
                  </ul>
                </div>
                <div class="col-sm-2">
                    <h4>Shopping</h4>
                    <ul>
                        <li> <a href="">Product Catalog</a> </li>
                        <li> <a href="">Find a Domain</a> </li>
                        <li> <a href="">Reseller Programs</a> </li>
                        <li> <a href="">Create Account</a> </li>
                  </ul>
                </div>
                <div class="col-sm-2">
                    <h4>About Us</h4>
                    <ul>
                        <li> <a href="">About TheOptimal</a> </li>
                        <li> <a href="">Privacy Policy</a> </li>
                        <li> <a href="">Terms</a> </li>
                        <li> <a href="">Awards</a> </li>
                  </ul>
                </div>
            </div>
        </div>
        <div class="row bg_white copyright">
            <div class="container">
                <div class=" padding-t30 clearfix">
                    <div class="col-sm-6">
                        <h4>Follow us</h4>
                        <div class="social-links">
                            <a href="#"><i class="fa fa-facebook"></i></a>
                            <a href="#"><i class="fa fa-google-plus"></i></a>
                            <a href="#"><i class="fa fa-twitter"></i></a>
                            <a href="#"><i class="fa fa-pinterest"></i></a>
                        </div>
                    </div>
                    <div class="col-sm-6 text-right">
                         <h4>Payment Modes</h4>
                        <ul class="list-inline payment-icons">
                          <li><i class="fa fa-cc-mastercard fa-3x"></i></li>
                          <li><i class="fa fa-cc-visa fa-3x"></i></li>
                          <li><i class="fa fa-cc-amex fa-3x"></i></li>
                          <li><i class="fa fa-cc-discover fa-3x"></i></li>
                          <li><i class="fa fa-cc-paypal fa-3x"></i></li>
                          <li><i class="fa fa-google-wallet fa-3x"></i></li>
                      </ul>
                    </div>
                </div>
            </div>
            <hr>
            <p class="copyright text-center">Copyright © 2017 - 2018 TheOptimal. All Rights Reserved</p>
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