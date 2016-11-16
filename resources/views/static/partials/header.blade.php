@section('header')
	<header>
		<div class="container">
			<div class="row">
				<a class="logo" href="index.html">
					{{--<img src="img/logo.png" alt="">--}}
				</a>
				<div class="mobileWrapper">
					@include('static.partials._header_social')
					<div class="headerScearch open-popup" data-rel="2">
						<i class="fa fa-search headerSearchIcon"></i>
					</div>
					<nav>
						<ul class="leftMenu">
							<li><a class="@if(\Request::route()->getName() === 'index')headerActive @endif" href="{{route('index')}}">Home</a></li>
							<li><a class="@if(\Request::route()->getName() === 'about')headerActive @endif" href="{{route('about')}}">About</a></li>
							<li>
								<a class="@if(\Request::route()->getName() === 'products' || \Request::route()->getName() === 'product')headerActive @endif" href="{{route('products')}}">Products</a>
								<span class="drowDownIcon"></span>
								<ul class="dropDownMenu">
									<li><a href="{{route('product')}}">Product Detail</a></li>
								</ul>
							</li>
						</ul>
						<ul class="RightMenu">
							<li><a class="@if(\Request::route()->getName() === 'services')headerActive @endif" href="{{route('services')}}">Services</a></li>
							<li>
								<a class="@if(\Request::route()->getName() === 'blog' || \Request::route()->getName() === 'blog_post')headerActive @endif" href="{{route('blog')}}">Blog</a>
								<span class="drowDownIcon"></span>
								<ul class="dropDownMenu">
									<li><a href="{{route('blog_post')}}">Blog Detail</a></li>
								</ul>
							</li>
							<li><a class="@if(\Request::route()->getName() === 'contacts')headerActive @endif" href="{{route('contacts')}}">Contacts</a></li>
						</ul>
					</nav>
				</div>
				<div class="menuIcon">
					<span></span>
					<span></span>
					<span></span>
					<span></span>
				</div>
			</div>
		</div>
	</header>
@stop