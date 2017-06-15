{{-- <div class="container-fluid foot">
	<div class="row">
		
		<div class="col-md-3 col-md-offset-2">
			<ul>
				<li><a href="">Start</a></li>
				<li><a href="">Über uns</a></li>
				<li><a href="">Das Haus</a></li>
				<li><a href="">Der See</a></li>
				<li><a href="">Events</a></li>
				<li><a href="">Buchen</a></li>
				<li><a href="">Impressum</a></li>
			</ul>
		</div>
		<div class="col-md-2 text-center"><img src="storage/{{ Voyager::setting('logo_footer') }}"></div>
		<div class="col-md-3 text-right">
			Ferienhaus Holzer<br>
			Waubergweg 12b<br>
			A-9580 Drobollach<br>
			&nbsp;<br>
			+43 425 4373 9 <i class="fa fa-phone"></i><br>
			<a href="mailto:info@ferienhaus-holzer.at">info@ferienhaus-holzer.at</a> <i class="fa fa-envelope"></i>
		</div>
	</div>
</div> --}}

<footer class="footer-bs">
        <div class="row">
        	<div class="col-md-3 footer-brand animated fadeInLeft">
            	<img src="storage/{{ Voyager::setting('logo_footer') }}">
                <p>
                	Ferienhaus Holzer<br>
					Waubergweg 12b<br>
					A-9580 Drobollach<br>
					&nbsp;<br>
					<i class="fa fa-phone"></i>&nbsp; +43 425 4373 9<br>
					<i class="fa fa-envelope"></i><a href="mailto:info@ferienhaus-holzer.at">&nbsp; info@ferienhaus-holzer.at</a><br>
					&nbsp;<br>
					made with <i class="fa fa-heart"></i> by <a href="http://webdesign3r.de" target="_blank">webdesign3r</a>
				</p>
            </div>
        	<div class="col-md-4 footer-nav animated fadeInUp">
            	<h4>Menu —</h4>
            	<div class="col-md-6">
                    <ul class="pages">
                        <li><a href="#">Start</a></li>
                        <li><a href="#">Über uns</a></li>
                        <li><a href="#">Das Haus</a></li>
                        <li><a href="#">Die Umgebung</a></li>
                    </ul>
                </div>
            	<div class="col-md-6">
                    <ul class="pages">
                        <li><a href="#">Events</a></li>
                        <li><a href="#">Buchen</a></li>
                        <li><a href="#">Impressum</a></li>
                    </ul>
                </div>
            </div>
        	<div class="col-md-2 footer-social animated fadeInDown">
            	<h4>Links</h4>
            	<ul>
                	<li><a href="#">Facebook</a></li>
                	<li><a href="#">Booking.com</a></li>
                	<li><a href="#">Villach.at</a></li>
                </ul>
            </div>
        	<div class="col-md-3 footer-ns animated fadeInRight">
            	<!-- weather widget start --><a target="_blank" href="http://hotel-mix.de/weather/drobollach-am-faakersee-100337"><img src="https://w.bookcdn.com/weather/picture/32_100337_1_2_95a5a6_250_7f8c8d_ffffff_ffffff_1_2071c9_ffffff_0_6.png?scode=124&domid=591&anc_id=2840"  alt="booked.net"/></a><!-- weather widget end -->
            </div>
        </div>
    </footer>

    <!-- Plugin JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>
    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}"></script>
    
</body>
</html>
