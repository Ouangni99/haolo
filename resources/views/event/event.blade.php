<x-app-layout>

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
    <!--====== BANNER ==========-->
	<section>
		<div class="rows inner_banner inner_banner_3">
			<div class="container">
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
	</section>
	<!--====== PLACES ==========-->
	<section>
		<div class="rows inn-page-bg com-colo">
			<div class="container inn-page-con-bg tb-space pad-bot-redu-5" id="inner-page-title">
				<div class="rows p2_2">
					<div class="col-md-6 col-sm-6 col-xs-12 p2_1">
						<div class="band"><img src="assets/images/band.png" alt="" /> </div> <img src="assets/images/iplace-2.jpg" alt="" /> </div>
					<div class="col-md-6 col-sm-6 col-xs-12 p2">
						<h3>Honeymoon Package 12 Night/13 Days <span><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star-half-o" aria-hidden="true"></i></span></h3>
						<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer.</p>
						<div class="ticket">
							<ul>
								<li>Available Tickets : 48</li>
								<li>Start Date : 12.01.2015</li>
								<li>End Date : 12.01.2015</li>
							</ul>
						</div>
						<div class="featur">
							<h4>Package Locations</h4>
							<ul>
								<li>Rio, Brazil(3 days)</li>
								<li>8 Breakfast, 3 Dinners</li>
								<li>First class Sightseeing</li>
								<li>Lorem ipsum</li>
							</ul>
						</div>
						<div class="p2_book">
							<ul>
								<li><a href="booking.html" class="link-btn">Book Now</a> </li>
								<li><a href="tour-details.html" class="link-btn">View Package</a> </li>
							</ul>
						</div>
					</div>
				</div>
				<!--===== PLACES END ======-->
				<!--===== PLACES ======-->
				<div class="rows p2_2">
					<div class="col-md-6 col-sm-6 col-xs-12 p2_1"> <img src="assets/images/iplace-1.jpg" alt="" /> </div>
					<div class="col-md-6 col-sm-6 col-xs-12 p2">
						<h3>Honeymoon Package 6 Night/7 Days <span><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star-half-o" aria-hidden="true"></i></span></h3>
						<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer.</p>
						<div class="ticket">
							<ul>
								<li>Available Tickets : 48</li>
								<li>Start Date : 12.01.2015</li>
								<li>End Date : 12.01.2015</li>
							</ul>
						</div>
						<div class="featur">
							<h4>Tour Inclusions</h4>
							<ul>
								<li>Accommodation</li>
								<li>8 Breakfast, 3 Dinners</li>
								<li>First class Sightseeing</li>
								<li>Lorem ipsum</li>
							</ul>
						</div>
						<div class="p2_book">
							<ul>
								<li><a href="booking.html" class="link-btn">Book Now</a> </li>
								<li><a href="tour-details.html" class="link-btn">View Package</a> </li>
							</ul>
						</div>
					</div>
				</div>
				<!--===== PLACES END ======-->
			</div>
		</div>
	</section>

</x-app-layout>
