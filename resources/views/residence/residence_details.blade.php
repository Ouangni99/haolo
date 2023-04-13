<x-app-layout>

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
                                <input type="text" id="select-search" class="autocomplete" placeholder="Recherche...">
                            </div>
                            <div class="input-field">
                                <input type="submit" value="search" class="waves-effect waves-light tourz-sear-btn"> </div>
                        </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- END TOP SEARCH BOX -->
    </section>

<!--====== BANNER ==========-->
<section>
    <div class="rows inner_banner inner_banner_2">
        <div class="container">
            <h2><span>{{ $title[0] }}</span></h2>
            <ul>
                @foreach ($bread_acti as $bread)
                @php $route = $bread['link'];  @endphp
                <li><a href="{{ ($route !== "javascrit:;") ? route($route) : "javascrit:;" }}">{{ $bread['value'] }}</a> </li>
                <li><i class="fa fa-angle-right" aria-hidden="true"></i> </li>
                @endforeach
            </ul>
        </div>
    </div>
</section>
<!--====== TOUR DETAILS - BOOKING ==========-->
<section>
    <div class="rows banner_book" id="inner-page-title">
        <div class="container">
            <div class="banner_book_1">
                <ul>
                    <li class="dl1">Location : Illunois,USA</li>
                    <li class="dl2">Price : $500</li>
                    <li class="dl3">Duration : One Night</li>
                    <li class="dl4"><a href="booking.html">Book Now</a> </li>
                </ul>
            </div>
        </div>
    </div>
</section>
<!--====== TOUR DETAILS ==========-->
<section>
    <div class="rows inn-page-bg com-colo">
        <div class="container inn-page-con-bg tb-space">
            <div class="col-md-9">
                <!--====== TOUR TITLE ==========-->
                <div class="tour_head">
                    <h2>Universal luxury Grand Hotel <span class="tour_star"><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star-half-o" aria-hidden="true"></i></span><span class="tour_rat">4.5</span></h2> </div>
                <!--====== TOUR DESCRIPTION ==========-->
                <div class="tour_head1 hotel-com-color">
                    <h3>About GRAND HOTEL</h3>
                    <p>Discover two of South America’s greatest cities, Rio de Janeiro and Buenos Aires, at a leisurely pace. A major highlight on this journey is a visit to Iguassu Falls in between your two city stays. It truly is one of the most spectacular sights on Earth. See the impressive falls from both the Brazilian and Argentine sides.</p>
                    <p>Brazil’s view takes you through clouds of mist and the opportunity to see these 275 falls, spanning nearly two miles! Argentina’s side allows you to walk along the boardwalk network and embark on a jungle train through the forest for unforgettable views. Hear the deafening roar and admire the brilliant rainbows created by the clouds of spray, and take in the majesty of this wonder of the world. From vibrant cities to scenic beauty, this vacation to Rio de Janeiro, Iguassu Falls, and Buenos Aires will leave you with vacation memories you’ll cherish for life.</p>
                </div>
                <!--====== ROOMS: HOTEL BOOKING ==========-->
                <div class="tour_head1 hotel-book-room">
                    <h3>Photo Gallery</h3>
                    <div id="myCarousel1" class="carousel slide" data-ride="carousel">
                        <!-- Indicators -->
                        <ol class="carousel-indicators carousel-indicators-1">
                            <li data-target="#myCarousel1" data-slide-to="0"><img src="{{ asset('assets/images/gallery/s1.jpg') }}" alt="Chania">
                            </li>
                            <li data-target="#myCarousel1" data-slide-to="1"><img src="{{ asset('assets/images/gallery/s2.jpeg') }}" alt="Chania">
                            </li>
                            <li data-target="#myCarousel1" data-slide-to="2"><img src="{{ asset('assets/images/gallery/s3.jpeg') }}" alt="Chania">
                            </li>
                            <li data-target="#myCarousel1" data-slide-to="3"><img src="{{ asset('assets/images/gallery/s4.jpeg') }}" alt="Chania">
                            </li>
                            <li data-target="#myCarousel1" data-slide-to="4"><img src="{{ asset('assets/images/gallery/s5.jpeg') }}" alt="Chania">
                            </li>
                            <li data-target="#myCarousel1" data-slide-to="5"><img src="{{ asset('assets/images/gallery/s6.jpeg') }}" alt="Chania">
                            </li>
                            <li data-target="#myCarousel1" data-slide-to="6"><img src="{{ asset('assets/images/gallery/s7.jpeg') }}" alt="Chania">
                            </li>
                            <li data-target="#myCarousel1" data-slide-to="7"><img src="{{ asset('assets/images/gallery/s8.jpg') }}" alt="Chania">
                            </li>
                            <li data-target="#myCarousel1" data-slide-to="8"><img src="{{ asset('assets/images/gallery/s9.jpg') }}" alt="Chania">
                            </li>
                        </ol>
                        <!-- Wrapper for slides -->
                        <div class="carousel-inner carousel-inner1" role="listbox">
                            <div class="item active"> <img src="{{ asset('assets/images/gallery/s1.jpg') }}" alt="Chania" width="460" height="345"> </div>
                            <div class="item"> <img src="{{ asset('assets/images/gallery/s2.jpeg') }}" alt="Chania" width="460" height="345"> </div>
                            <div class="item"> <img src="{{ asset('assets/images/gallery/s3.jpeg') }}" alt="Chania" width="460" height="345"> </div>
                            <div class="item"> <img src="{{ asset('assets/images/gallery/s4.jpeg') }}" alt="Chania" width="460" height="345"> </div>
                            <div class="item"> <img src="{{ asset('assets/images/gallery/s5.jpeg') }}" alt="Chania" width="460" height="345"> </div>
                            <div class="item"> <img src="{{ asset('assets/images/gallery/s6.jpeg') }}" alt="Chania" width="460" height="345"> </div>
                            <div class="item"> <img src="{{ asset('assets/images/gallery/s7.jpeg') }}" alt="Chania" width="460" height="345"> </div>
                            <div class="item"> <img src="{{ asset('assets/images/gallery/s8.jpg') }}" alt="Chania" width="460" height="345"> </div>
                            <div class="item"> <img src="{{ asset('assets/images/gallery/s9.jpg') }}" alt="Chania" width="460" height="345"> </div>
                        </div>
                        <!-- Left and right controls -->
                        <a class="left carousel-control" href="#myCarousel1" role="button" data-slide="prev"> <span><i class="fa fa-angle-left hotel-gal-arr" aria-hidden="true"></i></span> </a>
                        <a class="right carousel-control" href="#myCarousel1" role="button" data-slide="next"> <span><i class="fa fa-angle-right hotel-gal-arr hotel-gal-arr1" aria-hidden="true"></i></span> </a>
                    </div>
                </div>
                <!--====== HOTEL ROOM TYPES ==========-->
                <div class="tour_head1">
                    <h3>ROOMS & AVAILABILITIES</h3>
                    <div class="tr-room-type">
                        <ul>
                            <li>
                                <div class="tr-room-type-list">
                                    <div class="col-md-3 tr-room-type-list-1"><img src="{{ asset('assets/images/rooms/01.jpg') }}" alt="" />
                                    </div>
                                    <div class="col-md-6 tr-room-type-list-2">
                                        <h4>Ultra Deluxe</h4>
                                        <p><b>Amenities: </b>Television, Wi-Fi, Hair dryer, Towels, Dining, Music, GYM and more.. </p> <span><b>Includes</b> : Free Parking, Breakfast, VAT</span> <span><b>Maxinum </b> : 4 Persons</span> </div>
                                    <div class="col-md-3 tr-room-type-list-3"> <span class="hot-list-p3-1">Price Per Night</span> <span class="hot-list-p3-2">$940</span> <a href="booking.html" class="hot-page2-alp-quot-btn spec-btn-text">Book Now</a> </div>
                                </div>
                            </li>
                            <li>
                                <div class="tr-room-type-list">
                                    <div class="col-md-3 tr-room-type-list-1"><img src="{{ asset('assets/images/rooms/02.jpeg') }}" alt="" />
                                    </div>
                                    <div class="col-md-6 tr-room-type-list-2">
                                        <h4>Premium Rooms(EXECUTIVE)</h4>
                                        <p><b>Amenities: </b>Television, Wi-Fi, Hair dryer, Towels, Dining, Music, GYM and more.. </p> <span><b>Includes</b> : Free Parking, Breakfast, VAT</span> <span><b>Maxinum </b> : 4 Persons</span> </div>
                                    <div class="col-md-3 tr-room-type-list-3"> <span class="hot-list-p3-1">Price Per Night</span> <span class="hot-list-p3-2">$720</span> <a href="booking.html" class="hot-page2-alp-quot-btn spec-btn-text">Book Now</a> </div>
                                </div>
                            </li>
                            <li>
                                <div class="tr-room-type-list">
                                    <div class="col-md-3 tr-room-type-list-1"><img src="{{ asset('assets/images/rooms/03.jpeg') }}" alt="" />
                                    </div>
                                    <div class="col-md-6 tr-room-type-list-2">
                                        <h4>EXECUTIVE DELUXE MARINA BAY VIEW</h4>
                                        <p><b>Amenities: </b>Television, Wi-Fi, Hair dryer, Towels, Dining, Music, GYM and more.. </p> <span><b>Includes</b> : Free Parking, Breakfast, VAT</span> <span><b>Maxinum </b> : 4 Persons</span> </div>
                                    <div class="col-md-3 tr-room-type-list-3"> <span class="hot-list-p3-1">Price Per Night</span> <span class="hot-list-p3-2">$560</span> <a href="booking.html" class="hot-page2-alp-quot-btn spec-btn-text">Book Now</a> </div>
                                </div>
                            </li>
                            <li>
                                <div class="tr-room-type-list">
                                    <div class="col-md-3 tr-room-type-list-1"><img src="{{ asset('assets/images/rooms/04.jpeg') }}" alt="" />
                                    </div>
                                    <div class="col-md-6 tr-room-type-list-2">
                                        <h4>Normal Rooms</h4>
                                        <p><b>Amenities: </b>Television, Wi-Fi, Hair dryer, Towels, Dining, Music, GYM and more.. </p> <span><b>Includes</b> : Free Parking, Breakfast, VAT</span> <span><b>Maxinum </b> : 4 Persons</span> </div>
                                    <div class="col-md-3 tr-room-type-list-3"> <span class="hot-list-p3-1">Price Per Night</span> <span class="hot-list-p3-2">$420</span> <a href="booking.html" class="hot-page2-alp-quot-btn spec-btn-text">Book Now</a> </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
                <!--====== AMENITIES ==========-->
                <div class="tour_head1 hot-ameni">
                    <h3>Commodités de l'hôtel</h3>
                    <ul>
                        <li><i class="fa fa-check" aria-hidden="true"></i> Transport aéroportuaire (supplément)</li>
                        <li><i class="fa fa-check" aria-hidden="true"></i> Nombre d'étages - 9 </li>
                        <li><i class="fa fa-check" aria-hidden="true"></i> Café ou café-restaurant </li>
                        <li><i class="fa fa-check" aria-hidden="true"></i> Service de nettoyage à sec et de blanchisserie</li>
                        <li><i class="fa fa-check" aria-hidden="true"></i> Club de santé </li>
                        <li><i class="fa fa-check" aria-hidden="true"></i> Billard ou table de billard</li>
                        <li><i class="fa fa-check" aria-hidden="true"></i> Nombre total de chambres - 108</li>
                        <li><i class="fa fa-check" aria-hidden="true"></i> Bar/salon </li>
                        <li><i class="fa fa-check" aria-hidden="true"></i> Climatiseur </li>
                        <li><i class="fa fa-check" aria-hidden="true"></i> Mini bar (avec boissons alcoolisées) </li>
                        <li><i class="fa fa-check" aria-hidden="true"></i> Chambre séparée </li>
                        <li><i class="fa fa-check" aria-hidden="true"></i> Espace salon </li>
                        <li><i class="fa fa-check" aria-hidden="true"></i> Chambres fumeurs disponibles </li>
                        <li><i class="fa fa-check" aria-hidden="true"></i> Internet </li>
                        <li><i class="fa fa-check" aria-hidden="true"></i> Transport vers / depuis l'hôtel </li>
                        <li><i class="fa fa-check" aria-hidden="true"></i> Concierge </li>
                        <li><i class="fa fa-check" aria-hidden="true"></i> Service de location de voitures sur place </li>
                        <li><i class="fa fa-check" aria-hidden="true"></i> Service en chambre </li>
                        <li><i class="fa fa-check" aria-hidden="true"></i> Salon de beauté </li>
                        <li><i class="fa fa-check" aria-hidden="true"></i> Centre d'affaires </li>
                        <li><i class="fa fa-check" aria-hidden="true"></i> Centre de remise en forme </li>
                        <li><i class="fa fa-check" aria-hidden="true"></i> Spa et piscine </li>
                    </ul>
                </div>
                <!--====== TOUR LOCATION ==========-->
                <div class="tour_head1 tout-map map-container">
                    <h3>Location</h3>
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d6290415.157581651!2d-93.99661009218904!3d39.661150926343694!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x880b2d386f6e2619%3A0x7f15825064115956!2sIllinois%2C+USA!5e0!3m2!1sen!2sin!4v1467884030780" allowfullscreen></iframe>
                </div>
            </div>
            <div class="col-md-3 tour_r">
                <!--====== SPECIAL OFFERS ==========-->
                <div class="tour_right tour_offer">
                    <div class="band1"><img src="{{ asset('assets/images/offer.png') }}" alt="" /> </div>
                    <p>Special Offer</p>
                    <h4>$500<span class="n-td">
                            <span class="n-td-1">$800</span>
                            </span>
                        </h4> <a href="booking.html" class="link-btn">Book Now</a> </div>
                <!--====== TRIP INFORMATION ==========-->
                <div class="tour_right tour_incl tour-ri-com">
                    <h3>Trip Information</h3>
                    <ul>
                        <li>Location : Rio,Brazil</li>
                        <li>Arrival Date: Nov 12, 2017</li>
                        <li>Departure Date: Nov 21, 2017</li>
                        <li>Free Sightseeing & Hotel</li>
                    </ul>
                </div>
                <!--====== PACKAGE SHARE ==========-->
                <div class="tour_right head_right tour_social tour-ri-com">
                    <h3>Share This Package</h3>
                    <ul>
                        <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a> </li>
                        <li><a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a> </li>
                        <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a> </li>
                        <li><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a> </li>
                        <li><a href="#"><i class="fa fa-whatsapp" aria-hidden="true"></i></a> </li>
                    </ul>
                </div>
                <!--====== HELP PACKAGE ==========-->
                <div class="tour_right head_right tour_help tour-ri-com">
                    <h3>Help & Support</h3>
                    <div class="tour_help_1">
                        <h4 class="tour_help_1_call">Call Us Now</h4>
                        <h4><i class="fa fa-phone" aria-hidden="true"></i> 10-800-123-000</h4> </div>
                </div>
            </div>
        </div>
    </div>
</section>

</x-app-layout>
