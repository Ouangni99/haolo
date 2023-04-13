<x-app-layout>

    <div class="session_bg">
        <!--HEADER SECTION-->
        <section>
            <!-- TOP SEARCH BOX -->
            <div class="search-top">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="search-form">
                                <form class="tourz-search-form">
                                    <div class="input-field">
                                        <input type="text" id="select-city" class="autocomplete">
                                        <label for="select-city">Enter city</label>
                                    </div>
                                    <div class="input-field">
                                        <input type="text" id="select-search" class="autocomplete"
                                            placeholder="Recherche...">
                                    </div>
                                    <div class="input-field">
                                        <input type="submit" value="search"
                                            class="waves-effect waves-light tourz-sear-btn">
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- END TOP SEARCH BOX -->
        </section>
        <!--END HEADER SECTION-->
        <!--====== HOTELS LIST ==========-->
        <section class="hot-page2-alp hot-page2-pa-sp-top">
            <div class="container">
                <div class="row inner_banner inner_banner_3 bg-none" style="padding-top: 30px;">
                    <div class="hot-page2-alp-tit">
                        <h1>{{ $title[0] }}</h1>
                        <ul>
                            @foreach ($bread_acti as $bread)
                            @php $route = $bread['link'];  @endphp
                            <li><a href="{{ ($route !== "javascrit:;") ? route($route) : "javascrit:;" }}">{{ $bread['value'] }}</a> </li>
                            <li><i class="fa fa-angle-right" aria-hidden="true"></i> </li>
                            @endforeach
                        </ul>
                    </div>
                </div>
                <div class="row">
                    <div class="hot-page2-alp-con">
                        <!--LEFT LISTINGS-->
                        <div class="col-md-3 hot-page2-alp-con-left">
                            <!--PART 1 : LEFT LISTINGS-->
                            <div class="hot-page2-alp-con-left-1">
                                <h3>Hotels du moments</h3>
                            </div>
                            <!--PART 2 : LEFT LISTINGS-->
                            <div class="hot-page2-hom-pre hot-page2-alp-left-ner-notb">
                                <ul>
                                    <!--LISTINGS-->
                                    <li>
                                        <a href="#">
                                            <div class="hot-page2-hom-pre-1 hot-page2-alp-cl-1-1"> <img
                                                    src="assets/images/package/1.jpg" alt=""> </div>
                                            <div class="hot-page2-hom-pre-2 hot-page2-alp-cl-1-2">
                                                <h5>Bali, Indonesia</h5> <span>Bali is a living postcard</span>
                                            </div>
                                            <div class="hot-page2-hom-pre-3 hot-page2-alp-cl-1-3"> <span>4.2</span>
                                            </div>
                                        </a>
                                    </li>
                                    <!--LISTINGS-->
                                    <li>
                                        <a href="#">
                                            <div class="hot-page2-hom-pre-1 hot-page2-alp-cl-1-1"> <img
                                                    src="assets/images/package/2.jpg" alt=""> </div>
                                            <div class="hot-page2-hom-pre-2 hot-page2-alp-cl-1-2">
                                                <h5>London, United Kingdom</h5> <span>There's so much to see and do in
                                                    London</span>
                                            </div>
                                            <div class="hot-page2-hom-pre-3 hot-page2-alp-cl-1-3"> <span>4.4</span>
                                            </div>
                                        </a>
                                    </li>
                                    <!--LISTINGS-->
                                    <li>
                                        <a href="#">
                                            <div class="hot-page2-hom-pre-1 hot-page2-alp-cl-1-1"> <img
                                                    src="assets/images/package/3.jpg" alt=""> </div>
                                            <div class="hot-page2-hom-pre-2 hot-page2-alp-cl-1-2">
                                                <h5>Paris, France</h5> <span>Everyone who visits Paris for the first
                                                    time probably </span>
                                            </div>
                                            <div class="hot-page2-hom-pre-3 hot-page2-alp-cl-1-3"> <span>5.0</span>
                                            </div>
                                        </a>
                                    </li>
                                    <!--LISTINGS-->
                                    <li>
                                        <a href="#">
                                            <div class="hot-page2-hom-pre-1 hot-page2-alp-cl-1-1"> <img
                                                    src="assets/images/package/4.jpg" alt=""> </div>
                                            <div class="hot-page2-hom-pre-2 hot-page2-alp-cl-1-2">
                                                <h5>Rome, Italy</h5> <span>It’s nicknamed the Eternal City for a
                                                    reason.</span>
                                            </div>
                                            <div class="hot-page2-hom-pre-3 hot-page2-alp-cl-1-3"> <span>4.4</span>
                                            </div>
                                        </a>
                                    </li>
                                    <!--LISTINGS-->
                                    <li>
                                        <a href="#">
                                            <div class="hot-page2-hom-pre-1 hot-page2-alp-cl-1-1"> <img
                                                    src="assets/images/package/5.jpg" alt=""> </div>
                                            <div class="hot-page2-hom-pre-2 hot-page2-alp-cl-1-2">
                                                <h5>New York City, New York</h5> <span>The first time you go to New
                                                    York</span>
                                            </div>
                                            <div class="hot-page2-hom-pre-3 hot-page2-alp-cl-1-3"> <span>3.4</span>
                                            </div>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                            <!--PART 4 : LEFT LISTINGS-->
                            <div class="hot-page2-alp-l3 hot-page2-alp-l-com">
                                <h4><i class="fa fa-map-marker" aria-hidden="true"></i> Select City & Country</h4>
                                <div class="hot-page2-alp-l-com1 hot-page2-alp-p4">
                                    <form>
                                        <ul>
                                            <li>
                                                <div class="checkbox checkbox-info checkbox-circle">
                                                    <input id="chp41" class="styled" type="checkbox" checked="">
                                                    <label for="chp41"> Nashville, USA </label>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="checkbox checkbox-info checkbox-circle">
                                                    <input id="chp42" class="styled" type="checkbox">
                                                    <label for="chp42"> Hull, England </label>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="checkbox checkbox-info checkbox-circle">
                                                    <input id="chp43" class="styled" type="checkbox">
                                                    <label for="chp43"> Seoul, South Korea </label>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="checkbox checkbox-info checkbox-circle">
                                                    <input id="chp44" class="styled" type="checkbox">
                                                    <label for="chp44"> Ljubljana, Slovenia </label>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="checkbox checkbox-info checkbox-circle">
                                                    <input id="chp45" class="styled" type="checkbox">
                                                    <label for="chp45"> Wroclaw, Poland </label>
                                                </div>
                                            </li>
                                        </ul>
                                    </form> <a href="javascript:void(0);" class="hot-page2-alp-p4-btn-s">view more</a>
                                </div>
                            </div>
                            <!--END PART 4 : LEFT LISTINGS-->
                            <!--PART 5 : LEFT LISTINGS-->
                            <div class="hot-page2-alp-l3 hot-page2-alp-l-com">
                                <h4><i class="fa fa-dollar" aria-hidden="true"></i> Select Price Range</h4>
                                <div class="hot-page2-alp-l-com1 hot-page2-alp-p5">
                                    <form>
                                        <ul>
                                            <li>
                                                <div class="checkbox checkbox-info checkbox-circle">
                                                    <input id="chp51" class="styled" type="checkbox"
                                                        checked="">
                                                    <label for="chp51"> $5000 - Above </label>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="checkbox checkbox-info checkbox-circle">
                                                    <input id="chp52" class="styled" type="checkbox">
                                                    <label for="chp52"> $4000 - $5000 </label>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="checkbox checkbox-info checkbox-circle">
                                                    <input id="chp53" class="styled" type="checkbox">
                                                    <label for="chp53"> $3000 - $4000 </label>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="checkbox checkbox-info checkbox-circle">
                                                    <input id="chp54" class="styled" type="checkbox">
                                                    <label for="chp54"> $2000 - $3000 </label>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="checkbox checkbox-info checkbox-circle">
                                                    <input id="chp55" class="styled" type="checkbox">
                                                    <label for="chp55"> $2000 - Below </label>
                                                </div>
                                            </li>
                                        </ul>
                                    </form> <a href="javascript:void(0);" class="hot-page2-alp-p5-btn-s">view more</a>
                                </div>
                            </div>
                            <!--END PART 5 : LEFT LISTINGS-->
                            <!--PART 6 : LEFT LISTINGS-->
                            <div class="hot-page2-alp-l3 hot-page2-alp-l-com">
                                <h4><i class="fa fa-star-o" aria-hidden="true"></i> Select Ratings</h4>
                                <div class="hot-page2-alp-l-com1 hot-page2-alp-p5">
                                    <form>
                                        <ul>
                                            <li>
                                                <div class="checkbox checkbox-info checkbox-circle">
                                                    <input id="chp61" class="styled" type="checkbox"
                                                        checked="">
                                                    <label for="chp61"> <span class="ho-hot-rat-star-list">
                                                            <span class="hot-list-left-part-rat">5.0</span> <i
                                                                class="fa fa-star" aria-hidden="true"></i><i
                                                                class="fa fa-star" aria-hidden="true"></i><i
                                                                class="fa fa-star" aria-hidden="true"></i><i
                                                                class="fa fa-star" aria-hidden="true"></i><i
                                                                class="fa fa-star" aria-hidden="true"></i> </span>
                                                    </label>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="checkbox checkbox-info checkbox-circle">
                                                    <input id="chp62" class="styled" type="checkbox">
                                                    <label for="chp62"> <span class="ho-hot-rat-star-list">
                                                            <span class="hot-list-left-part-rat">4.0</span> <i
                                                                class="fa fa-star" aria-hidden="true"></i><i
                                                                class="fa fa-star" aria-hidden="true"></i><i
                                                                class="fa fa-star" aria-hidden="true"></i><i
                                                                class="fa fa-star" aria-hidden="true"></i><i
                                                                class="fa fa-star-o" aria-hidden="true"></i> </span>
                                                    </label>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="checkbox checkbox-info checkbox-circle">
                                                    <input id="chp63" class="styled" type="checkbox">
                                                    <label for="chp63"> <span class="ho-hot-rat-star-list">
                                                            <span class="hot-list-left-part-rat">3.0</span> <i
                                                                class="fa fa-star" aria-hidden="true"></i><i
                                                                class="fa fa-star" aria-hidden="true"></i><i
                                                                class="fa fa-star" aria-hidden="true"></i><i
                                                                class="fa fa-star-o" aria-hidden="true"></i><i
                                                                class="fa fa-star-o" aria-hidden="true"></i> </span>
                                                    </label>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="checkbox checkbox-info checkbox-circle">
                                                    <input id="chp64" class="styled" type="checkbox">
                                                    <label for="chp64"> <span class="ho-hot-rat-star-list">
                                                            <span class="hot-list-left-part-rat">2.0</span> <i
                                                                class="fa fa-star" aria-hidden="true"></i><i
                                                                class="fa fa-star" aria-hidden="true"></i><i
                                                                class="fa fa-star-o" aria-hidden="true"></i><i
                                                                class="fa fa-star-o" aria-hidden="true"></i><i
                                                                class="fa fa-star-o" aria-hidden="true"></i> </span>
                                                    </label>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="checkbox checkbox-info checkbox-circle">
                                                    <input id="chp65" class="styled" type="checkbox">
                                                    <label for="chp65"> <span class="ho-hot-rat-star-list">
                                                            <span class="hot-list-left-part-rat">1.0</span> <i
                                                                class="fa fa-star" aria-hidden="true"></i><i
                                                                class="fa fa-star-o" aria-hidden="true"></i><i
                                                                class="fa fa-star-o" aria-hidden="true"></i><i
                                                                class="fa fa-star-o" aria-hidden="true"></i><i
                                                                class="fa fa-star-o" aria-hidden="true"></i> </span>
                                                    </label>
                                                </div>
                                            </li>
                                        </ul>
                                    </form> <a href="javascript:void(0);" class="hot-page2-alp-p5-btn-s">view more</a>
                                </div>
                            </div>
                            <!--END PART 5 : LEFT LISTINGS-->
                            <!--PART 6 : LEFT LISTINGS-->
                            <div class="hot-page2-alp-l3 hot-page2-alp-l-com">
                                <h4><i class="fa fa-heart-o" aria-hidden="true"></i> Travel Amenities</h4>
                                <div class="hot-page2-alp-l-com1 hot-page2-alp-p5">
                                    <form>
                                        <ul>
                                            <li>
                                                <div class="checkbox checkbox-info checkbox-circle">
                                                    <input id="chp71" class="styled" type="checkbox"
                                                        checked="">
                                                    <label for="chp71"> Swimming pools </label>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="checkbox checkbox-info checkbox-circle">
                                                    <input id="chp72" class="styled" type="checkbox">
                                                    <label for="chp72"> Wi-Fi & Computer </label>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="checkbox checkbox-info checkbox-circle">
                                                    <input id="chp73" class="styled" type="checkbox">
                                                    <label for="chp73"> Kitchen facilities </label>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="checkbox checkbox-info checkbox-circle">
                                                    <input id="chp74" class="styled" type="checkbox">
                                                    <label for="chp74"> Music & GYM </label>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="checkbox checkbox-info checkbox-circle">
                                                    <input id="chp75" class="styled" type="checkbox">
                                                    <label for="chp75"> Dining </label>
                                                </div>
                                            </li>
                                        </ul>
                                    </form> <a href="javascript:void(0);" class="hot-page2-alp-p5-btn-s">view more</a>
                                </div>
                            </div>
                            <!--END PART 7 : LEFT LISTINGS-->
                        </div>
                        <!--END LEFT LISTINGS-->
                        <!--RIGHT LISTINGS-->
                        <div class="col-md-9 hot-page2-alp-con-right">
                            <div class="hot-page2-alp-con-right-1">
                                <!--LISTINGS-->
                                <div class="row">
                                    <!--LISTINGS START-->
                                    <div class="hot-page2-alp-r-list">
                                        <div class="col-md-3 hot-page2-alp-r-list-re-sp">
                                            <a href="javascript:void(0);">
                                                <div class="hot-page2-hli-1"> <img src="assets/images/hotels/l1.jpeg"> </div>
                                            </a>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="trav-list-bod">
                                                <a href="{{ route('hotel_details') }}">
                                                    <h3>Swiss, Paris & Italy</h3>
                                                </a>
                                                <p>Home to numerous lakes, villages and high peaks of the Alps,
                                                    Switzerland is a dreamy mountainous Central European country that
                                                    lures tourists from all over the world.</p>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="hot-page2-alp-ri-p3 tour-alp-ri-p3">
                                                <span class="hot-list-p3-1">Prices Starting</span> <span
                                                    class="hot-list-p3-2">$650</span><span class="hot-list-p3-4">
                                                    <a href="tour-details.html" class="hot-page2-alp-quot-btn">Book
                                                        Now</a>
                                                </span>
                                            </div>
                                        </div>
                                        <div>
                                            <div class="trav-ami">
                                                <h4>Detail and Includes</h4>
                                                <ul>
                                                    <li><img src="assets/images/icon/a14.png" alt="">
                                                        <span>Sightseeing</span></li>
                                                    <li><img src="assets/images/icon/a15.png" alt="">
                                                        <span>Hotel</span></li>
                                                    <li><img src="assets/images/icon/a16.png" alt="">
                                                        <span>Transfer</span></li>
                                                    <li><img src="assets/images/icon/a17.png" alt="">
                                                        <span>Luggage</span></li>
                                                    <li><img src="assets/images/icon/a18.png" alt="">
                                                        <span>Duration 8N/9D</span></li>
                                                    <li><img src="assets/images/icon/a19.png" alt="">
                                                        <span>Location : Rio,Brazil</span></li>
                                                    <li><img src="assets/images/icon/dbl4.png" alt="">
                                                        <span>Stay Plan</span></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <!--END LISTINGS-->
                                    <!--LISTINGS START-->
                                    <div class="hot-page2-alp-r-list">
                                        <div class="col-md-3 hot-page2-alp-r-list-re-sp">
                                            <a href="javascript:void(0);">
                                                <div class="hot-page2-hli-1"> <img src="assets/images/hotels/l3.jpeg"
                                                        alt=""> </div>
                                            </a>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="trav-list-bod">
                                                <a href="tour-details.html">
                                                    <h3>Incredible India</h3>
                                                </a>
                                                <p>India may not be the most ancient city in the world, but is surely
                                                    one of those that take their history quite seriously.</p>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="hot-page2-alp-ri-p3 tour-alp-ri-p3">
                                                <span class="hot-list-p3-1">Prices Starting</span> <span
                                                    class="hot-list-p3-2">$420</span><span class="hot-list-p3-4">
                                                    <a href="tour-details.html" class="hot-page2-alp-quot-btn">Book
                                                        Now</a>
                                                </span>
                                            </div>
                                        </div>
                                        <div>
                                            <div class="trav-ami">
                                                <h4>Detail and Includes</h4>
                                                <ul>
                                                    <li><img src="assets/images/icon/a14.png" alt="">
                                                        <span>Sightseeing</span></li>
                                                    <li><img src="assets/images/icon/a15.png" alt="">
                                                        <span>Hotel</span></li>
                                                    <li><img src="assets/images/icon/a16.png" alt="">
                                                        <span>Transfer</span></li>
                                                    <li><img src="assets/images/icon/a17.png" alt="">
                                                        <span>Luggage</span></li>
                                                    <li><img src="assets/images/icon/a18.png" alt="">
                                                        <span>Duration 8N/9D</span></li>
                                                    <li><img src="assets/images/icon/a19.png" alt="">
                                                        <span>Location : Rio,Brazil</span></li>
                                                    <li><img src="assets/images/icon/dbl4.png" alt="">
                                                        <span>Stay Plan</span></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <!--END LISTINGS-->
                                    <!--LISTINGS START-->
                                    <div class="hot-page2-alp-r-list">
                                        <div class="col-md-3 hot-page2-alp-r-list-re-sp">
                                            <a href="javascript:void(0);">
                                                <div class="hot-page2-hli-1"> <img
                                                        src="{{ asset('assets/images/hotels/l5.jpeg') }}"
                                                        alt=""> </div>
                                            </a>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="trav-list-bod">
                                                <a href="tour-details.html">
                                                    <h3>Awesome Dubai: Action Packed</h3>
                                                </a>
                                                <p>Explore Dubai in all its glory with Yatra's 'Go Dubai.' From the
                                                    air-conditioned interior of a 4X4, see the sands of the Arabian
                                                    Desert.</p>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="hot-page2-alp-ri-p3 tour-alp-ri-p3">
                                                <span class="hot-list-p3-1">Prices Starting</span> <span
                                                    class="hot-list-p3-2">$720</span><span class="hot-list-p3-4">
                                                    <a href="tour-details.html" class="hot-page2-alp-quot-btn">Book
                                                        Now</a>
                                                </span>
                                            </div>
                                        </div>
                                        <div>
                                            <div class="trav-ami">
                                                <h4>Detail and Includes</h4>
                                                <ul>
                                                    <li><img src="assets/images/icon/a14.png" alt="">
                                                        <span>Sightseeing</span></li>
                                                    <li><img src="assets/images/icon/a15.png" alt="">
                                                        <span>Hotel</span></li>
                                                    <li><img src="assets/images/icon/a16.png" alt="">
                                                        <span>Transfer</span></li>
                                                    <li><img src="assets/images/icon/a17.png" alt="">
                                                        <span>Luggage</span></li>
                                                    <li><img src="assets/images/icon/a18.png" alt="">
                                                        <span>Duration 8N/9D</span></li>
                                                    <li><img src="assets/images/icon/a19.png" alt="">
                                                        <span>Location : Rio,Brazil</span></li>
                                                    <li><img src="assets/images/icon/dbl4.png" alt="">
                                                        <span>Stay Plan</span></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <!--END LISTINGS-->
                                </div>
                            </div>
                        </div>
                        <!--END RIGHT LISTINGS-->
                    </div>
                </div>
            </div>
        </section>
    </div>

</x-app-layout>
