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
            <div class="container">
                <div class="section-title margin-b30">
                    <h2><span>Welcome to TheHosting</span> Why Choose TheHosting ?</h2>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="container">
                <div class="col-lg-4 margin-t30">
                    <div class="text-center">
                        <i class="fa fa-percent fa-3x text_primary square-border-icon"></i>
                        <h3>Discount Guarantee!</h3>
                         <p>Vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti.</p>
                    </div>
                </div>
                <div class="col-lg-4 margin-t30">
                    <div class="text-center">
                        <i class="fa fa-phone fa-3x text_primary square-border-icon"></i>
                        <h3>24/7 Technical Support</h3>
                         <p>Vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti.</p>
                    </div>
                </div>
                <div class="col-lg-4 margin-t30">
                    <div class="text-center">
                        <i class="fa fa-check fa-3x text_primary square-border-icon"></i>
                        <h3>Best Pricing</h3>
                         <p>Vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End of Features -->

    <!--  Pricing Tables -->
    <section class="pricingtables section_sapce section_gray">
        <div class="row">
            <div class="container">
                <div class="section-title  margin-b50">
                    <h2><span>Pricing</span>Best Popular TheHosting Plans</h2>
                </div>
            </div>
        </div>
        <div class="row no-gutter">
            <div class="container">
                <div class="col-sm-6 col-md-3 margin-top-30">
                    <div class="panel panel-info">
                        <div class="panel-heading">
                            <h3 class="text-center">Shared Hosting</h3>
                        </div>
                        <div class="panel-body text-center">
                            <div class="price-cercle">
                              <h4>$15</h4>
                                <span class="per">PER MONTH</span>
                            </div>
                      </div>
                        <ul class="text-center">
                            <li>Free DNS Management</li>
                            <li>Unlimited Server Space</li>
                            <li>24/7 support</li>
                            <li>Free DNS Management</li>
                            <li>Unlimited Server Space</li>
                            <li>24/7 support</li>
                        </ul>
                        <div class="panel-footer">
                             <!--  Various Pricing Dropdown Toggle -->
                              <div class="btn-group btn-block margin-bottom-15">
                                 <button type="button" class="btn btn-lg btn-default dropdown-toggle text-right" data-toggle="dropdown">1 Mo <b class="text_primary">@ $345 /mo</b> <span class="caret"></span>
                                 </button>
                                 <ul class="dropdown-menu btn-block" role="menu">
                                    <li><a href="#">3 Years @ $6000 <b class="text_primary"></b></a></li>
                                    <li><a href="#">2 Years @ $4000 <b class="text_primary"></b></a></li>
                                    <li><a href="#">1 Year @ $2000 <b class="text_primary"></b></a></li>
                                    <li><a href="#">6 Months @ $1000 <b class="text_primary"></b></a></li>
                                    <li><a href="#">3 Months @ $700 <b class="text_primary"></b></a></li>
                                    <li><a href="#">1 Month @ $323 <b class="text_primary"></b></a></li>
                                 </ul>
                              </div>
                              <!--  End Various Pricing Dropdown Toggle -->
                            <a class="btn btn-lg btn-pricetable" href="#">COMPARE PLANS</a>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-md-3 margin-top-30">
                    <div class="panel panel-info relative">
                        <div class="ribbon ribbon-small text-white">
                            <div class="ribbon-content bg_yellow text-uppercase ">50% OFFER</div>
                        </div>
                        <div class="panel-heading">
                            <h3 class="text-center">Reseller Hosting</h3>
                        </div>
                        <div class="panel-body text-center">
                            <div class="price-cercle">
                                <h6 class="through-line common-price ">$150</h6>
                                <h4>$26</h4>
                                <span class="per">STARTING / Mo</span>
                            </div>
                        </div>
                        <ul class="text-center">
                            <li>Free DNS Management</li>
                            <li>Unlimited Server Space</li>
                            <li>24/7 support</li>
                            <li>Free DNS Management</li>
                            <li>Unlimited Server Space</li>
                            <li>24/7 support</li>
                        </ul>
                        <div class="panel-footer">
                          <!--  Various Pricing Dropdown Toggle -->
                          <div class="btn-group btn-block margin-bottom-15">
                             <button type="button" class="btn btn-lg btn-default dropdown-toggle text-right" data-toggle="dropdown">1 Mo <b class="text_primary">@ $345 /mo</b> <span class="caret"></span>
                             </button>
                             <ul class="dropdown-menu btn-block" role="menu">
                                <li><a href="#">3 Years @ $6000 <b class="text_primary"></b></a></li>
                                <li><a href="#">2 Years @ $4000 <b class="text_primary"></b></a></li>
                                <li><a href="#">1 Year @ $2000 <b class="text_primary"></b></a></li>
                                <li><a href="#">6 Months @ $1000 <b class="text_primary"></b></a></li>
                                <li><a href="#">3 Months @ $700 <b class="text_primary"></b></a></li>
                                <li><a href="#">1 Month @ $323 <b class="text_primary"></b></a></li>
                             </ul>
                          </div>
                          <!--  End Various Pricing Dropdown Toggle -->

                          <a class="btn btn-new btn-lg" href="#">ORDER NOW</a>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-md-3 margin-top-30 most-popular">
                    <div class="panel panel-info relative">
                        <div class="ribbon ribbon-small text-white">
                            <div class="ribbon-content bg_primary text-uppercase text_white">Popular</div>
                        </div>
                        <div class="panel-heading">
                            <h3 class="text-center">Cloud VPS</h3>
                        </div>
                        <div class="panel-body text-center">
                            <div class="price-cercle">
                              <h4>$42</h4>
                                <span class="per">PER MONTH</span>
                            </div>
                      </div>
                        <ul class="text-center">
                            <li>Free DNS Management</li>
                            <li>Unlimited Server Space</li>
                            <li>24/7 support</li>
                            <li>Free DNS Management</li>
                            <li>Unlimited Server Space</li>
                            <li>24/7 support</li>
                        </ul>
                        <div class="panel-footer">

                          <!--  Various Pricing Dropdown Toggle -->
                              <div class="btn-group btn-block margin-bottom-15">
                                 <button type="button" class="btn btn-lg btn-default dropdown-toggle text-right" data-toggle="dropdown">1 Mo <b class="text_primary">@ $345 /mo</b> <span class="caret"></span>
                                 </button>
                                 <ul class="dropdown-menu btn-block" role="menu">
                                    <li><a href="#">3 Years @ $6000 <b class="text_primary"></b></a></li>
                                    <li><a href="#">2 Years @ $4000 <b class="text_primary"></b></a></li>
                                    <li><a href="#">1 Year @ $2000 <b class="text_primary"></b></a></li>
                                    <li><a href="#">6 Months @ $1000 <b class="text_primary"></b></a></li>
                                    <li><a href="#">3 Months @ $700 <b class="text_primary"></b></a></li>
                                    <li><a href="#">1 Month @ $323 <b class="text_primary"></b></a></li>
                                 </ul>
                              </div>
                          <!--  End Various Pricing Dropdown Toggle -->

                          <a class="btn btn-lg btn-pricetable" href="#">LEARN MORE</a>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-md-3 margin-top-30">
                    <div class="panel panel-info">
                        <div class="panel-heading">
                            <h3 class="text-center">Dedicated Servers</h3>
                        </div>
                        <div class="panel-body text-center">
                            <div class="price-cercle">
                              <h4>$142</h4>
                                <span class="per">PER MONTH</span>
                            </div>
                      </div>
                        <ul class="text-center">
                            <li>Free DNS Management</li>
                            <li>Unlimited Server Space</li>
                            <li>24/7 support</li>
                            <li>Free DNS Management</li>
                            <li>Unlimited Server Space</li>
                            <li>24/7 support</li>
                        </ul>
                        <div class="panel-footer">
                          <!--  Various Pricing Dropdown Toggle -->
                              <div class="btn-group btn-block margin-bottom-15">
                                 <button type="button" class="btn btn-lg btn-default dropdown-toggle text-right" data-toggle="dropdown">1 Mo <b class="text_primary">@ $345 /mo</b> <span class="caret"></span>
                                 </button>
                                 <ul class="dropdown-menu btn-block" role="menu">
                                    <li><a href="#">3 Years @ $6000 <b class="text_primary"></b></a></li>
                                    <li><a href="#">2 Years @ $4000 <b class="text_primary"></b></a></li>
                                    <li><a href="#">1 Year @ $2000 <b class="text_primary"></b></a></li>
                                    <li><a href="#">6 Months @ $1000 <b class="text_primary"></b></a></li>
                                    <li><a href="#">3 Months @ $700 <b class="text_primary"></b></a></li>
                                    <li><a href="#">1 Month @ $323 <b class="text_primary"></b></a></li>
                                 </ul>
                              </div>
                            <!--  End Various Pricing Dropdown Toggle -->
                            <a class="btn btn-new btn-lg" href="#">ORDER NOW</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End of Pricing Tables -->




    <!--  Subscribe -->
    <section class="subscribe section_sapce2 bg_dark cover-image" data-image-src="images/subbanners/2.jpg">
        <div class="row">
            <div class="container col-sm-12 col-xs-12 col-md-8 center-block text-center">
                <div class="col-sm-12 margin-bottom-15">
                    <h1>Newsletter</h1>
                    <p>Lorem Ipsum is simply dummy text of the printing  industry.</p>
                </div>
                <div class="col-sm-12">
                    <div id="mc_embed_signup">
                        <form class="form-inline validate" action="//sreethemes.us9.list-manage.com/subscribe/post?u=f86de306ae229d9cca9373ff6&id=44e7c219bf" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" target="_blank" novalidate>
                            <div class="row no-gutter">
                                <div class="col-sm-8 center-block margin-bottom-15">
                                    <input type="email" value="" name="EMAIL" class="form-control text-center" id="mce-EMAIL" placeholder="Subscribe to our newsletter" required>
                                    <div style="position: absolute; left: -5000px;">
                                        <input type="text" name="b_f86de306ae229d9cca9373ff6_44e7c219bf" tabindex="-1" value="">
                                    </div>
                                </div>
                                <div class="col-sm-3 center-block">
                                    <input type="submit" value="SUBSCRIBE" name="subscribe" id="mc-embedded-subscribe">
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--  End of Subscribe -->


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
                        <div class="item"><img src="images/clients/5.png" alt=""> </div>
                        <div class="item"><img src="images/clients/6.png" alt=""> </div>
                        <div class="item"><img src="images/clients/7.png" alt=""> </div>
                        <div class="item"><img src="images/clients/8.png" alt=""> </div>
                        <div class="item"><img src="images/clients/9.png" alt=""> </div>
                        <div class="item"><img src="images/clients/1.png" alt=""> </div>
                        <div class="item"><img src="images/clients/2.png" alt=""> </div>
                        <div class="item"><img src="images/clients/3.png" alt=""> </div>
                        <div class="item"><img src="images/clients/4.png" alt=""> </div>
                        <div class="item"><img src="images/clients/5.png" alt=""> </div>
                        <div class="item"><img src="images/clients/6.png" alt=""> </div>
                        <div class="item"><img src="images/clients/7.png" alt=""> </div>
                        <div class="item"><img src="images/clients/8.png" alt=""> </div>
                        <div class="item"><img src="images/clients/9.png" alt=""> </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End of Partners -->



    <!--  Statistics -->
    <section class="statistics section_sapce">
        <div class="row">
            <div class="container">
                <div class="section-title">
                    <h2><span>We Show</span> Stats </h2>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="container">
                <div class="col-sm-6 col-md-3 margin-top-30">
                    <div>
                        <p id="myStat1" data-dimension="175" data-animationstep="0.5" data-text="3215" data-width="25" data-fontsize="29" data-percent="64" data-fgcolor="#1a1a1a" data-bgcolor="#ebebeb"></p> <span>Hosting Servers</span>
                    </div>
                </div>

                <div class="col-sm-6 col-md-3 margin-top-30">
                    <div>
                        <p id="myStat2" data-dimension="175" data-animationstep="0.5" data-text="4576" data-width="25" data-fontsize="29" data-percent="46" data-fgcolor="#1a1a1a" data-bgcolor="#ebebeb"></p> <span>All Customers</span>
                    </div>
                </div>

                <div class="col-sm-6 col-md-3 margin-top-30">
                    <div>
                        <p id="myStat3" data-dimension="175" data-animationstep="0.5" data-text="3246" data-width="25" data-fontsize="29" data-percent="38" data-fgcolor="#1a1a1a" data-bgcolor="#ebebeb"></p> <span>Total Employees</span>
                    </div>
                </div>

                <div class="col-sm-6 col-md-3 margin-top-30">
                    <div>
                        <p id="myStat4" data-dimension="175" data-animationstep="0.5" data-text="1564" data-width="25" data-fontsize="29" data-percent="55" data-fgcolor="#1a1a1a" data-bgcolor="#ebebeb"></p> <span>Happy Clients</span>
                    </div>
                </div>

            </div>
        </div>
    </section>
    <!-- End of Statistics -->

    <!-- Testimonials -->
    <section class="testimonials section_gray section_sapce">
        <div class="row">
            <div class="container">
                <div class="col-sm-12">
                    <div class="section-title  margin-b50">
                        <h2><span>Client Thing</span>What Clients Saying</h2>
                    </div>
                    <div id="testimonials-carousel" class="owl-carousel">

                        <div class="item">
                            <div class="testimonial-content">
                                <div class="testimonialimg"><img src="images/testimonial1.jpg" alt="" /> </div>
                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged</p>
                                <div class="whoclient">
                                    <h5>Charlee Modena, Owner of <a href="">Coval Soft.</a></h5>
                                </div>
                            </div>
                        </div>

                        <div class="item">
                            <div class="testimonial-content">
                                <div class="testimonialimg"><img src="images/testimonial2.jpg" alt="" /> </div>
                                <p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source</p>
                                <div class="whoclient">
                                    <h5>Fathina, Manager of <a href="">Clikka O.F.C</a></h5>
                                </div>
                            </div>
                        </div>

                        <div class="item">
                            <div class="testimonial-content">
                                <div class="testimonialimg"><img src="images/testimonial3.jpg" alt="" /> </div>
                                <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. If you are going to use a passage of Lorem Ipsum</p>
                                <div class="whoclient">
                                    <h5>Rabin, Chairman of <a href="">NAINA C.A.</a></h5>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End of Testimonials -->


    <!--Service Icons -->
    <section class="container section_sapce">
        <div class="section-title  margin-b50">
            <h2><span>We offer</span>What's our services</h2>
        </div>
        <div class="col-md-2 col-sm-4 col-xs-6 margin-top-30">
            <div class="service-icon"> <i aria-hidden="true" class="fa fa-sitemap fa-5x text_primary square-border-icon center-block"></i> <span class="service-text">Shared Hosting</span> </div>
        </div>
        <div class="col-md-2 col-sm-4 col-xs-6 margin-top-30">
            <div class="service-icon"> <i aria-hidden="true" class="fa fa-server fa-5x text_primary square-border-icon center-block"></i> <span class="service-text">VPS Hosting</span> </div>
        </div>
        <div class="col-md-2 col-sm-4 col-xs-6 margin-top-30">
            <div class="service-icon"> <i aria-hidden="true" class="fa fa-desktop fa-5x text_primary square-border-icon center-block"></i> <span class="service-text">Dedicated Hosting</span> </div>
        </div>
        <div class="col-md-2 col-sm-4 col-xs-6 margin-top-30">
            <div class="service-icon"> <i aria-hidden="true" class="fa fa-windows fa-5x text_primary square-border-icon center-block"></i> <span class="service-text">Windows Hosting</span> </div>
        </div>
        <div class="col-md-2 col-sm-4 col-xs-6 margin-top-30">
            <div class="service-icon"> <i aria-hidden="true" class="fa fa-cloud fa-5x text_primary square-border-icon center-block"></i> <span class="service-text">Cloud Hosting</span> </div>
        </div>
        <div class="col-md-2 col-sm-4 col-xs-6 margin-top-30">
            <div class="service-icon"> <i aria-hidden="true" class="fa fa-align-justify fa-5x text_primary square-border-icon center-block"></i> <span class="service-text">Reseller Hosting</span> </div>
        </div>
    </section>
    <!--End of Service Icons -->


    <!--Extra Info -->
    <section class="section_sapce bg_gray">
        <div class="container">
            <div class="section-title  margin-b50">
                <h2><span>We offer</span>What's Free offer</h2>
            </div>

            <div class="row main-head">
                <div class="col-md-12 margin-b50">
                    <p>The scope of web hosting services varies greatly. The most basic is web page and small-scale file hosting, where files can be uploaded via File Transfer Protocol or a Web interface. The files are usually delivered to the Web "as is" or with minimal processing. Personal web site hosting is typically free, advertisement-sponsored, or inexpensive is typically free, advertisement-sponsored, or inexpensive. </p>
                </div>
            </div>

            <div class="row">
                <div class="col-sm-12 col-md-6">
                    <div class="margin-b30">
                        <div class="col-sm-12">
                            <div class="left_icons">
                                <div class="single_box_left">
                                    <i class="feature-icon">
                                        <i class="fa fa-shield fa-2x text_primary"></i>
                                    </i>
                                </div>
                                <div class="single_box_right">
                                    <h3>Domain Theft Protection</h3> Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat. </div>
                            </div>
                        </div>
                    </div>

                    <div class="margin-b30">
                        <div class="col-sm-12">
                            <div class="left_icons">
                                <div class="single_box_left">
                                    <i class="feature-icon">
                                        <i class="fa fa-paper-plane fa-2x text_primary"></i>
                                     </i>
                                </div>
                                <div class="single_box_right">
                                    <h3>Domain Forwarding</h3> Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat. </div>
                            </div>
                        </div>
                    </div>

                    <div class="margin-b30">
                        <div class="col-sm-12">
                            <div class="left_icons">
                                <div class="single_box_left">
                                    <i class="feature-icon">
                                        <i class="fa fa-gears fa-2x text_primary"></i>
                                    </i>
                                </div>
                                <div class="single_box_right">
                                    <h3>DNS Management</h3> Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat. </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-12 col-md-6">
                    <div class="margin-b30">
                        <div class="col-sm-12">
                            <div class="left_icons">
                                <div class="single_box_left">
                                    <i class="feature-icon">
                                        <i class="fa fa-globe fa-2x text_primary"></i>
                                    </i>
                                </div>
                                <div class="single_box_right">
                                    <h3>Free Domain Registration</h3> Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat. </div>
                            </div>
                        </div>
                    </div>

                    <div class="margin-b30">
                        <div class="col-sm-12">
                            <div class="left_icons">
                                <div class="single_box_left">
                                    <i class="feature-icon">
                                        <i class="fa fa-envelope-open fa-2x text_primary"></i>
                                     </i>
                                </div>
                                <div class="single_box_right">
                                    <h3>Email Accounts</h3> Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat. </div>
                            </div>
                        </div>
                    </div>

                    <div class="margin-b30">
                        <div class="col-sm-12">
                            <div class="left_icons">
                                <div class="single_box_left">
                                    <i class="feature-icon">
                                        <i class="fa fa-clock-o fa-2x text_primary"></i>
                                    </i>
                                </div>
                                <div class="single_box_right">
                                    <h3>99% Uptime</h3> Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat. </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-12 col-md-12">
                    <div class="pop-video-container margin-t30">
                        <!--Youtube Video Link-->
                        <a class="autoplay" href="https://www.youtube.com/watch?v=RSbOZUfiGqg"><i class="fa fa-play fa-3x" aria-hidden="true"></i></a>

                        <!--Vimeo Video Link-->
                        <!--<a class="autoplay" href="https://vimeo.com/35044232"><i class="fa fa-play fa-3x" aria-hidden="true"></i></a>-->
                        <img src="images/play-video.png" alt="" class="macbook">
                     </div>
                </div>
            </div>
        </div>
    </section>
    <!--End of Extra Info -->



    <!--APPS Downloads -->
    <section class="section_sapce bg_dark section-parallax parallax cover-image apps-download" data-image-src="images/parallax/04.jpg">
        <div class="container ">
            <div class="row">
                <div class="section-title  margin-b50">
                    <h2><span>Avilable Appstore</span>Download App</h2>
                </div>
                <div class="text-center relative">
                    <a href="#" class="btn btn-primary btn-lg"><i class="fa fa-apple "></i> App Store</a>
                    <a href="#" class="btn btn-primary btn-lg"><i class="fa fa-android"></i> Google play</a>
                    <a href="#" class="btn btn-primary btn-lg"><i class="fa fa-windows"></i> Windows</a>
                </div>
            </div>
        </div>
    </section>
    <!--End of APPS Downloads -->

    <!-- Domain Price -->
    <section class="domain-prices white section_sapce">
        <div class="row">
            <div class="container">
                <div class="section-title margin-b50">
                    <h2><span>Domain</span>Offer Price</h2>
                </div>
            </div>
        </div>
        <div class="domains-table">
            <div class="row">
                <div class="container">
                    <div class="col-sm-12">
                        <div class="prices row">
                            <div class="col-sm-4 col-md-3">
                                <div class="domain-p-container relative">
                                    <div class="ribbon ribbon-small text-white">
                                        <div class="ribbon-content bg_dark text-uppercase ">HURRY</div>
                                    </div>
                                    <h4 class="active">.COM</h4>
                                  <p class="text_primary">FREE<span class="through-line">$12.25</span> <small class="text_danger" id="limited"></small> </p>
                                </div>
                            </div>
                            <div class="col-sm-4 col-md-3">
                                <div class="domain-p-container">
                                    <h4>.US</h4>
                                  <p>$0.1 <span class="through-line">$12.50</span> <small>Ends 2017-07-31</small> </p>
                                </div>
                            </div>
                            <div class="col-sm-4 col-md-3">
                                <div class="domain-p-container">
                                    <h4>.BIZ</h4>
                                  <p>$3.01 <span class="through-line">$15.80</span> <small>Ends 2017-07-31</small> </p>
                                </div>
                            </div>
                            <div class="col-sm-4 col-md-3">
                                <div class="domain-p-container">
                                    <h4>.IN</h4>
                                  <p>$5.22 <span class="through-line">$10.16</span> <small>Ends 2017-07-31</small> </p>
                                </div>
                            </div>
                            <div class="col-sm-4 col-md-3">
                                <div class="domain-p-container">
                                    <h4>.ORG</h4>
                                  <p>$2.39 <span class="through-line">$13.21</span> <small>Ends 2017-07-31</small> </p>
                                </div>
                            </div>
                            <div class="col-sm-4 col-md-3">
                                <div class="domain-p-container">
                                    <h4>.CO</h4>
                                  <p>$8.22 <span class="through-line">$16.21</span> <small>Ends 2017-07-31</small> </p>
                                </div>
                            </div>
                            <div class="col-sm-4 col-md-3">
                                <div class="domain-p-container">
                                    <h4>.FASHION</h4>
                                  <p>$8.22 <span class="through-line">$16.21</span> <small>Ends 2017-07-31</small> </p>
                                </div>
                            </div>
                            <div class="col-sm-4 col-md-3">
                                <div class="domain-p-container">
                                    <h4>.WEBSITE</h4>
                                  <p>$8.22 <span class="through-line">$16.21</span> <small>Ends 2017-07-31</small> </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End of Domain Price -->


    <!-- Shared Hosting Tabs -->
    <section class="shared-features section_sapce section_gray">
        <div class="section-title margin-b50">
            <h2><span>Full Features</span>Shared Hosting Features</h2>
        </div>
        <div class="row">
            <div class="container">
                <div class="col-sm-12">
                    <div id="shared-hosting-features-tabs">
                        <ul>
                            <li><a href="#feature1"> <i class="fa fa-globe" aria-hidden="true"></i> Web Presence </a></li>
                            <li><a href="#feature2"><i class="fa fa-mouse-pointer" aria-hidden="true"></i>  just 1 click Install </a> </li>
                            <li><a href="#feature3"><i class="fa fa-cog" aria-hidden="true"></i> Under the hood  </a> </li>
                            <li><a href="#feature4"><i class="fa fa-question-circle" aria-hidden="true"></i> FAQ</a> </li>
                        </ul>

                        <!-- 1st tab  -->
                        <div id="feature1">
                            <div class="tabfeatures">
                                <h2 class="margin-b50 margin-top-45 text-center">Just what you need for a Basic Web Presence</h2>
                                <div class="row">
                                    <div class="col-sm-4 margin-b30">
                                        <div class="text-center padding30  main-feature relative">
                                            <div class="ribbon ribbon-small text-white">
                                                <div class="ribbon-content bg_yellow text-uppercase">Guarantee</div>
                                            </div>
                                            <i class="fa fa-rocket fa-3x text_primary square-border-icon"></i>
                                            <h3>Lightning Fast Website</h3>
                                            <p>The standard chunk of Lorem Ipsum used since the 1500s.</p>
                                        </div>
                                    </div>
                                    <div class="col-sm-4 margin-b30">
                                        <div class="text-center padding30  main-feature">
                                            <i class="fa fa-envelope-open fa-3x text_primary square-border-icon"></i>
                                            <h3>Email included</h3>
                                            <p>The standard chunk of Lorem Ipsum used since the 1500s.</p>
                                        </div>
                                    </div>
                                    <div class="col-sm-4 margin-b30">
                                        <div class="text-center padding30  main-feature">
                                            <i class="fa fa-gears fa-3x text_primary square-border-icon"></i>
                                            <h3>cPanel for Management</h3>
                                            <p>The standard chunk of Lorem Ipsum used since the 1500s.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- 2nd tab  -->
                        <div id="feature2">
                            <div class="tabfeatures">
                                <div class=" text-center margin-b30 margin-top-45">
                                    <h4>50+ Plugins - Powered by Softaculous</h4>
                                    <h2>Install a Shopping Cart, Photo Gallery, a Blog or any other module in just 1 click</h2></div>
                                <div class="row">
                                    <div class="col-sm-12">
                                        <div class="block-grid-sm-4 block-grid-xs-2 apps">
                                            <div class="col-sm-6 col-md-3 col-xs-12 margin-t30">
                                                <img src="images/apps/01.png" alt="" />
                                            </div>
                                            <div class="col-sm-6 col-md-3 col-xs-12 margin-t30">
                                                <img src="images/apps/02.png" alt="" />
                                            </div>
                                            <div class="col-sm-6 col-md-3 col-xs-12 margin-t30">
                                                <img src="images/apps/03.png" alt="" />
                                            </div>
                                            <div class="col-sm-6 col-md-3 col-xs-12 margin-t30">
                                                <img src="images/apps/04.png" alt="" />
                                            </div>
                                            <div class="col-sm-6 col-md-3 col-xs-12 margin-t30">
                                                <img src="images/apps/05.png" alt="" />
                                            </div>
                                            <div class="col-sm-6 col-md-3 col-xs-12 margin-t30">
                                                <img src="images/apps/06.png" alt="" />
                                            </div>
                                            <div class="col-sm-6 col-md-3 col-xs-12 margin-t30">
                                                <img src="images/apps/07.png" alt="" />
                                            </div>
                                            <div class="col-sm-6 col-md-3 col-xs-12 margin-t30">
                                                <img src="images/apps/08.png" alt="" />
                                            </div>
                                            <div class="col-sm-6 col-md-3 col-xs-12 margin-t30">
                                                <img src="images/apps/09.png" alt="" />
                                            </div>
                                            <div class="col-sm-6 col-md-3 col-xs-12 margin-t30">
                                                <img src="images/apps/10.png" alt="" />
                                            </div>
                                            <div class="col-sm-6 col-md-3 col-xs-12 margin-t30">
                                                <img src="images/apps/11.png" alt="" />
                                            </div>
                                            <div class="col-sm-6 col-md-3 col-xs-12 margin-t30">
                                                <img src="images/apps/12.png" alt="" />
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
                                    <div class="col-sm-12">
                                        <div class=" text-center margin-b50 margin-top-45">
                                            <h2>Under the hood </h2>
                                        </div>
                                        <div class="col-sm-4 margin-b30">
                                            <div class="text-center padding30  main-feature">
                                                <i class="fa fa-server fa-3x text_primary square-border-icon"></i>
                                                <div class="includes inline-block">
                                                    <h3>State-of-the-Art Servers</h3>
                                                    <ul class="list text-left">
                                                        <li><span>Dual Intel Xeon Processor E5-2630</span></li>
                                                        <li><span>64 GB RAM</span></li>
                                                        <li><span>256 GB SSD in RAID 1</span></li>
                                                        <li><span>Octa Core with 2.40 GHz</span></li>
                                                        <li><span>2 TB SATA in RAID 1</span></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-4 margin-b30">
                                            <div class="text-center padding30  main-feature">
                                                <i class="fa fa-language fa-3x text_primary square-border-icon"></i>
                                                <div class="includes inline-block">
                                                    <h3>Any Language</h3>
                                                    <ul class="list text-left">
                                                        <li><span>PHP 5.2.x to 5.6.x, Perl, Python, RoR, GD, cURL, CGI, mcrypt</span></li>
                                                        <li><span>Apache 2.2x</span></li>
                                                        <li><span>MySQL 5</span></li>
                                                        <li><span>Ruby On Rails</span></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-4 margin-b30">
                                            <div class="text-center padding30  main-feature">
                                                <i class="fa fa-shield fa-3x text_primary square-border-icon"></i>
                                                <div class="includes inline-block">
                                                    <h3>Top-Notch Security</h3>
                                                    <ul class="list text-left">
                                                        <li><span>Anti Spam &amp; Virus Protection</span></li>
                                                        <li><span>Password Protect Directories</span></li>
                                                        <li><span>Secure FTP Access</span></li>
                                                        <li><span>IP Blocking</span></li>
                                                        <li><span>phpMyAdmin Access</span></li>
                                                    </ul>
                                                </div>
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
                                    <div class="col-sm-12">
                                        <div class=" text-center margin-b50 margin-top-45">
                                            <h2>FAQ'S</h2>
                                        </div>
                                        <!-- FAQ -->
                                        <div class="faq-questions margin-t50">
                                            <div id="accordion" class="panel-group">

                                                <div class="panel panel-default">
                                                    <div class="panel-heading">
                                                        <h4 class="panel-title"><a data-toggle="collapse" data-parent="#accordion" href="#collapse1">What is  Web hosting Server ?</a></h4> </div>
                                                    <div id="collapse1" class="panel-collapse collapse in">
                                                        <div class="panel-body">
                                                            <p>Social nutrition carbon rights. Economic security inspire breakthroughs cross-cultural small-scale farmers John Lennon educate. Community health workers effectiveness Global South facilitate honor fairness invest citizenry. UNICEF medical capacity building achieve, metrics liberal rights-based approach visionary social innovation Jane Addams assistance life-expectancy. </p>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="panel panel-default">
                                                    <div class="panel-heading">
                                                        <h4 class="panel-title"><a data-toggle="collapse" data-parent="#accordion" href="#collapse2">Can I host multiple Web sites within one Hosting plan?</a></h4> </div>
                                                    <div id="collapse2" class="panel-collapse collapse">
                                                        <div class="panel-body">
                                                            <p>FRaise awareness maintain; peace social worker; tackling; Rosa Parks global citizens globalization social impact. Healthcare pride, change movements disruption; democratizing the global financial system gender equality. Network natural resources, think tank elevate civic engagement.</p>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="panel panel-default">
                                                    <div class="panel-heading">
                                                        <h4 class="panel-title"><a data-toggle="collapse" data-parent="#accordion" href="#collapse3">How to Secure Hosting Server and website ?</a></h4> </div>
                                                    <div id="collapse3" class="panel-collapse collapse">
                                                        <div class="panel-body">
                                                            <p>Grantees dedicated; inspire social change; truth support engage. Global breakthrough insights readiness democracy crisis situation honesty amplify volunteer combat poverty indicator.</p>
                                                            <p>Catalytic effect hack agriculture many voices aid challenges. Rural; social good minority humanitarian relief vulnerable citizens. Country, action 501(c)(3) collaborative cities carbon emissions reductions; affordable health care social analysis detection agenda Kony 2012 inclusive fight against malnutrition. Campaign Ford Foundation respond billionaire philanthropy, compassion economic development legal aid medical supplies advocate fighting poverty stakeholders technology Action Against Hunger. </p>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="panel panel-default">
                                                    <div class="panel-heading">
                                                        <h4 class="panel-title"><a data-toggle="collapse" data-parent="#accordion" href="#collapse4">Who do I get in touch with if I need help ?</a></h4> </div>
                                                    <div id="collapse4" class="panel-collapse collapse">
                                                        <div class="panel-body">
                                                            <p>Metrics immunize tackling courageous opportunity safeguards dignity Cesar Chavez peace recognition free-speech measures innovate. Complexity, fellows NGO, livelihoods, initiative. Criteria employment country The Elders, global leaders; care social entrepreneurship; inclusive capitalism gender.</p>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="panel panel-default">
                                                    <div class="panel-heading">
                                                        <h4 class="panel-title"><a data-toggle="collapse" data-parent="#accordion" href="#collapse5">What is web hosting and WHMCS?</a></h4> </div>
                                                    <div id="collapse5" class="panel-collapse collapse">
                                                        <div class="panel-body">
                                                            <p>Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source</p>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="panel panel-default">
                                                    <div class="panel-heading">
                                                        <h4 class="panel-title"><a data-toggle="collapse" data-parent="#accordion" href="#collapse6">What is a control panel?</a></h4> </div>
                                                    <div id="collapse6" class="panel-collapse collapse">
                                                        <div class="panel-body">
                                                            <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the middle of text. All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary </p>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="panel panel-default">
                                                    <div class="panel-heading">
                                                        <h4 class="panel-title"><a data-toggle="collapse" data-parent="#accordion" href="#collapse7">What are the charges if I exceed my bandwidth? </a></h4> </div>
                                                    <div id="collapse7" class="panel-collapse collapse">
                                                        <div class="panel-body">
                                                            <p>Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source</p>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="panel panel-default">
                                                    <div class="panel-heading">
                                                        <h4 class="panel-title"><a data-toggle="collapse" data-parent="#accordion" href="#collapse8">How can I Get Refund after 30 Days ? </a></h4> </div>
                                                    <div id="collapse8" class="panel-collapse collapse">
                                                        <div class="panel-body">
                                                            <p>Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source</p>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="panel panel-default">
                                                    <div class="panel-heading">
                                                        <h4 class="panel-title"><a data-toggle="collapse" data-parent="#accordion" href="#collapse9">How can I see my web site's Error logs and Raw Access logs?</a></h4> </div>
                                                    <div id="collapse9" class="panel-collapse collapse">
                                                        <div class="panel-body">
                                                            <p>Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source</p>
                                                        </div>
                                                    </div>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                    <!-- End of FAQ -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End of Shared Hosting Tabs -->


    
    <!-- Counter Area Start -->
    <section class="counter section_sapce cover-image" data-image-src="images/subbanners/counter-bg.jpg">
        <div class="container">
            <div class="row">
                <div class="col-sm-6 col-md-3 margin-top-30">
                    <!-- Counter Item Start -->
                    <i class="fa fa-cloud fa-3x text_white square-border-icon"></i>
                    <div class="counter-holder margin-top-15">
                        <p class="counter-text  text_white">cloud servers sold</p>
                        <div class="counter-number  text_white">587</div>
                    </div>
                    <!-- Counter Item End -->
                </div>


                <div class="col-sm-6 col-md-3 margin-top-30">
                    <!-- Counter Item Start -->
                    <i class="fa fa-sitemap fa-3x text_white square-border-icon"></i>
                    <div class="counter-holder margin-top-15">
                        <p class="counter-text text_white">Shared Hosting sold</p>
                        <div class="counter-number text_white">1.8412</div>
                    </div>
                    <!-- Counter Item End -->
                </div>

                <div class="col-sm-6 col-md-3 margin-top-30">
                    <!-- Counter Item Start -->
                    <i class="fa fa-server fa-3x text_white square-border-icon"></i>
                    <div class="counter-holder margin-top-15">
                        <p class="counter-text text_white">Dedicated Servers Sold</p>
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
    <footer class="footer">
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