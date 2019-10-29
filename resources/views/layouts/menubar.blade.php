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
                <div class="col-sm-9.5">
                    <nav id="desktop-menu">
                        <ul class="sf-menu" id="navigation">
                            <li class="current"> <a href="#">Home</a>
                            </li>
                            <li> <a href="#">Browse Categories<span class="down-badge-color-3 main-badge">Free</span></a>
                                <ul>
                                    <li> <a href="shared-servers.html">Web Design</a>
                                        <ul>
                                            <li> <a href="shared-servers.html">PHP</a> </li>
                                            <li> <a href="shared-period.html">Angular JS</a> </li>
                                        </ul>
                                    </li>
                                    <li> <a href="vps-slider-4-plans.html">Java</a>
                                    </li>
                                    <li> <a href="servers.html">Python</a> </li>
                                </ul>
                            </li>
                            <li> <a href="#">Full Stack<span class="down-badge-color-3 main-badge">Free</span></a>
                                <ul>
                                    <li> <a href="shared-servers.html">Web Design</a>
                                        <ul>
                                            <li> <a href="shared-servers.html">PHP</a> </li>
                                            <li> <a href="shared-period.html">Angular JS</a> </li>
                                        </ul>
                                    </li>
                                    <li> <a href="vps-slider-4-plans.html">Java</a>
                                    </li>
                                    <li> <a href="servers.html">Python</a> </li>
                                </ul>
                            </li>
                          <!--   <li> <a href="domain-pricing.html">Data Science</a>
                                <ul>
                                    <li> <a href="domain-pricing.html">R programming</a> </li>
                                    <li> <a href="domain-offers.html">Python</a> </li>
                                    <li> <a href="about.html">Apache Spark</a> </li>
                                    <li> <a href="faq.html">Hadoop</a> </li>
                                </ul>
                            </li> -->
                            <li> <a href="#">Data Science & Artificial Intelligence</a>
                                <ul>
                                    <li> <a href="domain-forsale.html">Robotic Process Automation</a> </li>
                                    <li> <a href="maintance.html">Deep Learning</a> </li>
                                    <li> <a href="popup-newsletter.html">Artificial Neural Networks</a> </li>
                                </ul>
                            </li>
                            <li> <a href="contact.html">Trending Courses<span class="down-badge-color-2 main-badge">Impressed</span></a>
                                <ul>
                                    <li> <a href="affiliates.html">Trending 1</a> </li>
                                    <li> <a href="domain-offers.html">Trending 2</a> </li>
                                </ul>
                            </li>
                            <li> <a href="contact.html">Offers</a>
                                <ul>
                                    <li> <a href="combo-plans.html">Combo Plans <span class="left-badge-color-1 ">Best</span></a></li>
                                    <li> <a href="promocode.html">Promo Codes</a></li>>
                                </ul>
                            </li>
                        </ul>
                    </nav>
                </div>
                <div class="col-sm-2.5">
                    <ul class="sf-menu pull-right" id="user-menu">
                        <!-- Authentication Links -->
                        @guest
                        <li> <a href="{{ route('login') }}"><i aria-hidden="true" class="fa fa-user"></i> Login</a>
                            <ul>
                                <li> <a href="{{ route('login') }}">Login</a> </li>
                                <li> <a href="reset.html">Forgot Password ?</a> </li>
                            </ul>
                        </li>
                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                        <li> <a href="#"><i aria-hidden="true" class="fa fa-user"></i> {{ Auth::user()->name }}  <span class="caret"></span> </a>
                            <ul>
                                <li> <a href="{{route('profile')}}">My Profile</a> </li>
                                <li> <a href="{{route('orders')}}">My Oders</a> </li>
                                <li> <a href="{{route('activitystream')}}">Activity Stream</a> </li>
                                <li> <a href="{{route('wallet')}}">My Wallet</a> </li>
                                <li> <a href="{{route('wishlist')}}">My Wishlist</a> </li>
                                <li> 
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </li>
                            </ul>
                        </li>
                            </ul>
                        </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- End of Main Menu -->
