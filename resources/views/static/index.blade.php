@extends('static.layout')
@extends('static.partials.header')
@extends('static.partials.footer')

@section('main')
	@include('static.partials._header-slider')
	<div class="emptySpace-xs60 emptySpace120"></div>
	@include('static.partials._catalog-carousel')
	<div class="emptySpace-xs60 emptySpace130"></div>
	@include('static.partials._specials')
	<div class="emptySpace-xs60 emptySpace120"></div>
	@include('static.partials._catalog-grid')
	<div class="emptySpace-xs60 emptySpace120"></div>
	<!-- Services -->
	<div class="bgWhite">
		<div class="container">
			<div class="row">
				<!-- Services-Title -->
				<div class="col-sm-8 col-sm-offset-2 col-md-6 col-md-offset-3">
					<div class="big titleShortcode">
						<h5 class="h5">Get a Look At</h5>
						<div class="emptySpace20"></div>
						<h2 class="h2 bottomLine">Our Services</h2>
						<div class="emptySpace30"></div>
						<p>Proin mattis rutrum magna, et pretium erat tincidunt at. Donec lectus ipsum, pulvinar id sollicitudin id, bibendum vel quam. </p>
						<div class="emptySpace80 emptySpace-xs30"></div>
					</div>
				</div>
			</div>
			<div class="row">
				<!-- Services-1 -->
				<div class="col-sm-4">
					<div class="normall servicesShortcode">
						<a class="services serviceIcon spin spin2" href="http://invisiogroup.ca/htmlcut/cake/services.html"> <img src="img/service-icon.png" alt=""></a>
						<div class="emptySpace20"></div>
						<a href="http://invisiogroup.ca/htmlcut/cake/services.html"><h4 class="h4">Birthday Cakes Baking</h4></a>
						<div class="emptySpace15"></div>
						<p>Suspendisse potenti. Etiam non euismod augue. Nam aliquam sit amet tortor sit amet consectetur.</p>
					</div>
				</div>
				<!-- Services-2 -->
				<div class="col-sm-4">
					<div class="emptySpace-xs30"></div>
					<div class="normall servicesShortcode">
						<a class="services2 spin spin2" href="http://invisiogroup.ca/htmlcut/cake/services.html"><img src="img/service-icon2.png" alt=""></a>
						<div class="emptySpace20"></div>
						<a href="http://invisiogroup.ca/htmlcut/cake/services.html"><h4 class="h4">Delivery To Any Point</h4></a>
						<div class="emptySpace15"></div>
						<p>Suspendisse potenti. Etiam non euismod augue. Nam aliquam sit amet tortor sit amet consectetur.</p>
					</div>
				</div>
				<!-- Services-3 -->
				<div class="col-sm-4">
					<div class="emptySpace-xs30"></div>
					<div class="normall servicesShortcode">
						<a class="services2 spin spin2" href="http://invisiogroup.ca/htmlcut/cake/services.html"><img src="img/service-icon3.png" alt=""></a>
						<div class="emptySpace20"></div>
						<a href="http://invisiogroup.ca/htmlcut/cake/services.html"><h4 class="h4">Individual Approach</h4></a>
						<div class="emptySpace15"></div>
						<p>Suspendisse potenti. Etiam non euismod augue. Nam aliquam sit amet tortor sit amet consectetur.</p>
					</div>
				</div>
			</div>
			<div class="emptySpace55 emptySpace-xs30"></div>
			<!-- Button -->
			<div class="btnAlign"><a href="http://invisiogroup.ca/htmlcut/cake/services.html" class="button">View All Services</a></div>
		</div>
	</div>
	<div class="emptySpace-xs60 emptySpace130"></div>
	@include('static.partials._testimonials-carousel')
	<div class="emptySpace80 emptySpace-xs40"></div>
@stop