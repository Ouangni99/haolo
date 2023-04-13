<!-- MOBILE MENU -->
<section>
    <div class="ed-mob-menu">
        <div class="ed-mob-menu-con">
            <div class="ed-mm-left">
                <div class="wed-logo">
                    <a href="main.html"><img src="images/logo/logo-dark.png" alt="" />
                    </a>
                </div>
            </div>
            <div class="ed-mm-right">
                <div class="ed-mm-menu">
                    <a href="#!" class="ed-micon"><i class="fa fa-bars"></i></a>
                    <div class="ed-mm-inn">
                        <a href="#!" class="ed-mi-close"><i class="fa fa-times"></i></a>
                        <h4>Home</h4>
                        <ul>
                            <li><a href="booking-all.html">Accueil</a></li>
                            <li><a href="all-package.html">Hotels</a></li>
                            <li><a href="places.html">Résidence</a></li>
                            <li><a href="dashboard.html">Logement</a></li>
                            <li><a href="tour-details.html">Voiture</a></li>
                            <li><a href="about.html">Evênemnt</a></li>
                        </ul>
                        <h4>Divertissement</h4>
                        <ul>
                            <li><a href="testimonials.html">Testimonials</a></li>
                            <li><a href="events.html">Events</a></li>
                            <li><a href="blog.html">Blog</a></li>
                            <li><a href="tips.html">Tips Before Travel</a></li>
                            <li><a href="price-list.html">Price List</a></li>
                            <li><a href="discount.html">Discount</a></li>
                        </ul>
                        <h4 class="ed-dr-men-mar-top">Se Connecter</h4>
                        <ul>
                            <li><a href="register.html">Register</a></li>
                            <li><a href="login.html">Login and Sign in</a></li>
                            <li><a href="forgot-pass.html">Forgot pass</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--HEADER SECTION-->

<section>
    <!-- TOP BAR -->
    <div class="ed-top">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="ed-com-t1-left">
                        <ul>
                            <li><a href="#">Contact: Haolo Payments UK Ltd.
                                100, New Bridge Street
                                Londres
                                EC4V 6JA
                                Royaume-Uni</a>
                            </li>
                            <li><a href="#">Aide: https://www.haolo.com/help/contact_us</a>
                            </li>
                        </ul>
                    </div>
                    <div class="ed-com-t1-right">
                        <ul>
                            <li><a href="login.html">Sign In</a>
                            </li>
                            <li><a href="register.html">Sign Up</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- LOGO AND MENU SECTION -->
    <div class="top-logo" data-spy="affix" data-offset-top="250">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="wed-logo">
                        <a href="main.html"><img src="{{ asset('images/logo/logo-dark.png') }}" alt="Logo"
                                width="40" />
                        </a>
                    </div>
                    <div class="main-menu">
                        <ul>
                            <li><a class="{{ request()->routeIs('main') ? 'active':'' }}" href="{{ route('main') }}">Accueil</a>
                            </li>
                            <li><a class="{{ request()->is('*hotel*') ? 'active':'' }}" href="{{ route('hotel') }}">Hotels</a></li>
                            <li><a class="{{ request()->is('*residence*') ? 'active':'' }}" href="{{ route('residence') }}">Résidences</a></li>
                            <li><a class="{{ request()->is('*logement*') ? 'active':'' }}"  href="{{ route('housing') }}">Logements</a></li>
                            <li><a href="hotels-list.html">Voitures</a></li>
                            <li><a class="{{ request()->is('*evenement*') ? 'active':'' }}" href="{{ route('event') }}">Evêments</a>
                            </li>
                            <li class="about-menu">
                                <a href="family-package.html" class="mm-arr">Divertissement</a>
                                <!-- MEGA MENU 1 -->
                                <div class="mm-pos">
                                    <div class="about-mm m-menu">
                                        <div class="m-menu-inn">
                                            <div class="mm1-com mm1-s1">
                                                <div class="ed-course-in">
                                                    <a class="course-overlay menu-about" href="all-package.html">
                                                        <img src="assets/images/sight/5.jpg" alt="">
                                                        <span>Popular Package</span>
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="mm1-com mm1-s2">
                                                <p>Want to change the world? At Berkeley we’re doing just that. When you join the Golden Bear community, you’re part of an institution that shifts the global conversation every single day.</p>
                                                <a href="all-package.html" class="mm-r-m-btn">Read more</a>
                                            </div>
                                            <div class="mm1-com mm1-s3">
                                                <ul>
                                                    <li><a href="booking-all.html">All Booking</a></li>
                                                    <li><a href="booking-tour-package.html">Tour Package Booking</a></li>
                                                    <li><a href="booking-hotel.html">Hotel Booking</a></li>
                                                    <li><a href="booking-car-rentals.html">Car Rentals Booking</a></li>
                                                    <li><a href="booking-flight.html">Flight Booking</a></li>
                                                    <li><a href="booking-slider.html">Slider Booking</a></li>
                                                </ul>
                                            </div>
                                            <div class="mm1-com mm1-s4">
                                                <ul>
                                                    <li><a href="all-package.html">All Package</a></li><li><a href="family-package.html">Family Package</a></li>
                                                    <li><a href="honeymoon-package.html">Honeymoon Package</a></li>
                                                    <li><a href="group-package.html">Group Package</a></li>
                                                    <li><a href="weekend-package.html">WeekEnd Package</a></li>
                                                    <li><a href="regular-package.html">Regular Package</a></li>
                                                    <li><a href="custom-package.html">Custom Package</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>

</section>
<!--END HEADER SECTION-->
