<!-- Loading-->
    <!-- <div class="loading animated-middle">
        <div class="loader">Loading...</div>
    </div> -->

    <!-- Top Bar-->
    <div class="top">
        <div class="row">
            <div class="container">
                <div class="col-sm-3">
                    <div class="logo">
                        <a href="index.html"><img alt="" src="images/logo.png"></a>
                    </div>
                </div>
                <div class="col-sm-9">
                    <ul class="nav nav-pills pull-right">
                        <li><b>Call Us : +254792691409</b></li>
                        <li>
                            <div class="btn-group country_select">
                                <button aria-expanded="false" aria-haspopup="true" class="btn btn-link dropdown-toggle" data-toggle="dropdown" type="button">Kenya
                                    <b class="caret"></b>
                                </button>
                                <ul class="dropdown-menu">
                                    <li> <a href="#">Nigeria</a> </li>
                                    <li> <a href="#">Tanzania</a> </li>
                                    <li> <a href="#">Rwanda</a> </li>
                                    <li> <a href="#">Uganda</a> </li>
                                    <li> <a href="#">Burundi</a> </li>
                                </ul>
                            </div>
                        </li>

                        <!-- Authentication Links -->
                        @guest
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                            </li>
                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest

                        <li class="cart-link"> <a href="cart.html"><i aria-hidden="true" class="fa fa-shopping-basket"></i> View Cart</a> </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- End of Top Bar-->

    <!-- Main Menu -->
    <div class="main_menu">
        <div class="row">
            <div class="container">
                <div class="col-sm-9">
                    <nav id="desktop-menu">
                        <ul class="sf-menu" id="navigation">
                            <li class="current"> <a href="#">Home</a>
                                <ul>
                                    <li> <a href="index.html">HomePage Style 1</a> </li>
                                    <li> <a href="index2.html">HomePage Style 2</a> </li>
                                    <li> <a href="index3.html">HomePage Style 3</a> </li>
                                    <li> <a href="index4.html">HomePage Style 4</a> </li>
                                    <li> <a href="index5.html">HomePage Style 5</a> </li>
                                </ul>
                            </li>
                            <li> <a href="#">Full Stack<span class="down-badge-color-3 main-badge">Free</span></a>
                                <ul>
                                    <li> <a href="shared-servers.html">Shared Hosting</a>
                                        <ul>
                                            <li> <a href="shared-servers.html">Shared Servers Based</a> </li>
                                            <li> <a href="shared-period.html">Shared Period Based</a> </li>
                                        </ul>
                                    </li>
                                    <li> <a href="vps-slider-4-plans.html">VPS Servers</a>
                                        <ul>
                                            <li> <a href="vps-slider-3-plans.html">3 Plans Slider</a> </li>
                                            <li> <a href="vps-slider-4-plans.html">4 Plans Slider</a> </li>
                                            <li> <a href="vps-slider-5-plans.html">5 Plans Slider</a> </li>
                                            <li> <a href="vps-slider-6-plans.html">6 Plans Slider</a> </li>
                                        </ul>
                                    </li>
                                    <li> <a href="servers.html">Dedicated Servers</a> </li>
                                    <li> <a href="cloud.html">Cloud Servers</a> </li>
                                    <li> <a href="servers.html">Servers</a> </li>
                                </ul>
                            </li>
                            <li> <a href="domain-pricing.html">Data Science</a>
                                <ul>
                                    <li> <a href="domain-pricing.html">Domain Pricing</a> </li>
                                    <li> <a href="domain-offers.html">Domain Offers</a> </li>
                                </ul>
                            </li>
                            <li> <a href="#">Big Data</a>
                                <ul>
                                    <li> <a href="about.html">About</a> </li>
                                    <li> <a href="faq.html">FAQ</a> </li>
                                    <li> <a href="login.html">Login</a> </li>
                                    <li> <a href="login-popup.html">Login Popup </a> </li>
                                    <li> <a href="register.html">Register</a> </li>
                                    <li> <a href="resetpassword.html">Reset Password</a> </li>
                                    <li> <a href="privacy.html">Privacy</a> </li>
                                    <li> <a href="terms-of-service.html">Terms of Service</a> </li>
                                    <li> <a href="progress.html">Progress</a> </li>
                                    <li> <a href="action-boxes.html">Action Boxes</a> </li>
                                    <li> <a href="#">Blog</a>
                                        <ul>
                                            <li> <a href="blog-category.html">Category</a> </li>
                                            <li> <a href="blog-single.html">Single</a> </li>
                                        </ul>
                                    </li>
                                    <li> <a href="contact.html">Contact</a> </li>
                                    <li> <a href="elements.html">Elements <span class="left-badge-color-1 ">All</span></a> </li>
                                </ul>
                            </li>
                            <li> <a href="#">Artificial Intelligence</a>
                                <ul>
                                    <li> <a href="domain-forsale.html">Domain For Sale</a> </li>
                                    <li> <a href="maintance.html">Maintance</a> </li>
                                    <li> <a href="popup-newsletter.html">Newsletter Popup</a> </li>
                                    <li> <a href="datacenter.html">Datacenter</a> </li>
                                    <li> <a href="cookie.html">Cookie Message</a></li>
                                    <li> <a href="error2.html">Error 2</a> </li>
                                    <li> <a href="error1.html">Error 1</a> </li>
                                    <li> <a href="gallery.html">Gallery</a></li>
                                    <li> <a href="sections.html">Sections</a> </li>
                                    <li> <a href="sections-sizes.html">Section Sizes</a> </li>
                                    <li> <a href="section-colors.html">Section Colors</a> </li>
                                    <li> <a href="animations.html">Sample Animations</a> </li>
                                    <li> <a href="cart.html">Cart</a> </li>
                                </ul>
                            </li>
                            <li> <a href="contact.html">Trending Courses<span class="down-badge-color-2 main-badge">Impressed</span></a>
                                <ul>
                                    <li> <a href="affiliates.html">Affiliates</a> </li>
                                    <li> <a href="domain-offers.html">Domain Offers </a> </li>
                                    <li> <a href="gsuite.html">GSuit</a> </li>
                                    <li> <a href="ssl.html">SSL</a> </li>
                                    <li> <a href="sitelock.html">SiteLock</a> </li>
                                    <li> <a href="cloudflare.html">CloudFlare</a> </li>
                                    <li> <a href="wordpress.html">wordpress</a> </li>
                                    <li> <a href="codeguard.html">CodeGuard</a> </li>
                                    <li> <a href="website-builder.html">Website Builder</a></li>
                                    <li> <a href="domain-forsale.html">Domain For Sale</a></li>
                                    <li> <a href="maintance.html">Website Maintance</a></li>
                                    <li> <a href="comingsoon.html">Coming Soon</a></li>
                                    <li> <a href="compare-plans.html">Compare Plans</a> </li>
                                </ul>
                            </li>
                            <li> <a href="contact.html">Offers</a>
                                <ul>
                                    <li> <a href="combo-plans.html">Combo Plans <span class="left-badge-color-1 ">Best</span></a></li>
                                    <li> <a href="promocode.html">Promo Codes</a></li>
                                    <li> <a href="domain-offers.html">Domain Offers</a></li>
                                    <li> <a href="offer-header.html">Header Offer</a></li>
                                    <li> <a href="offer-request.html">Offer Request</a></li>
                                    <li> <a href="domain-forsale.html">Domain For Sale</a></li>
                                </ul>
                            </li>
                        </ul>
                    </nav>
                </div>
                <div class="col-sm-3">
                    <ul class="sf-menu pull-right" id="user-menu">
                        <li> <a href="contact.html"><i aria-hidden="true" class="fa fa-commenting"></i></a> </li>
                        <li> <a href="#"><i aria-hidden="true" class="fa fa-user"></i> </a>
                            <ul>
                                <li> <a href="login.html">Login</a> </li>
                                <li> <a href="reset.html">Forgot Password ?</a> </li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- End of Main Menu -->
