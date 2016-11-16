@extends('static.layout')
@extends('static.partials.header')
@extends('static.partials.footer')

@section('main')
	<div class="bgImages opacityLayer" style="background-image: url(img/about-us-bg.jpg); background-position: 50% 50%; background-size: cover">
		<div class="container">
			<div class="cell-view tableCellVH2">
				<div class="emptySpace100 emptySpace-md50"></div>
				<div class="emptySpace115 emptySpace-md50"></div>
				<div class="row">
					<!-- About-Us-Title -->
					<div class="col-sm-8 col-sm-offset-2">
						<div class="big titleShortcode">
							<h3 class="h3">Read</h3>
							<h2 class="h1">About Us</h2>
							<div class="emptySpace5"></div>
							<p>Proin mattis rutrum magna, et pretium erat tincidunt at. Donec lectus ipsum, pulvinar id sollicitudin id, bibendum vel quam. Suspendisse nec ante non lacusvel sed sem</p>
						</div>
					</div>
				</div>
				<div class="emptySpace50"></div>
			</div>
		</div>
	</div>
	<div class="bgWhite">
		<div class="container">
			<div class="emptySpace-xs60 emptySpace120"></div>
			<div class="row">
				<!-- What-We-Do-Title -->
				<div class="col-sm-8 col-sm-offset-2 col-md-6 col-md-offset-3">
					<div class="big titleShortcode">
						<h5 class="h5">We Do What We Like And</h5>
						<div class="emptySpace20 emptySpace-xs5"></div>
						<h2 class="h2 bottomLine">We Like What We Do</h2>
						<div class="emptySpace30"></div>
						<p>Proin mattis rutrum magna, et pretium erat tincidunt at. Donec lectus ipsum, pulvinar id sollicitudin id, bibendum vel quam. </p>
						<div class="emptySpace85 emptySpace-xs30"></div>
					</div>
				</div>
			</div>
			<!-- Swiper -->
			<div class="swiper-container swiper-container-horizontal">
				<div class="swiper-wrapper">
					<!-- Slide-1 -->
					<div class="swiper-slide swiper-slide-active" style="width: 1140px;">
						<img class="imgShortcode" src="img/about-us-slide.jpg" alt=""></div>
					<!-- Slide-2 -->
					<div class="swiper-slide swiper-slide-next" style="width: 1140px;">
						<img class="imgShortcode" src="img/about-us-slide2.jpg" alt="">
					</div>
					<!-- Slide-3 -->
					<div class="swiper-slide" style="width: 1140px;">
						<img class="imgShortcode" src="img/about-us-slide3.jpg" alt="">
					</div>
				</div>
				<!-- Swiper-Pagination -->
				<div class="swiper-pagination swiper-pagination-white swiper-pagination-swiper-unique-id-0 swiper-pagination-clickable swiper-pagination-bullets"><span class="swiper-pagination-bullet swiper-pagination-bullet-active"></span><span class="swiper-pagination-bullet"></span><span class="swiper-pagination-bullet"></span></div>
			</div>
			<div class="emptySpace15"></div>
			<div class="normall contentShortcode2">
				<h4 class="h4">Aenean egestas placerat</h4>
				<div class="emptySpace15"></div>
				<p>Fusce id elit et tellus egestas fermentum. Suspendisse et mollis risus, ut congue nisl. Praesent sed facilisis dui. Mauris facilisis tincidunt vestibulum. Maecenas volutpat sagittis mi, ut vulputate mauris sodales in.</p>
				<div class="emptySpace25"></div>
				<p>Curabitur pulvinar mattis nunc eu hendrerit. Integer porttitor metus eu leo sodales, sed malesuada nulla ullamcorper. Vivamus nisl lorem, condimentum nec nibh facilisis, dapibus aliquam turpis. Quisque dolor tellus, porttitor vitae ipsum ac, dignissim malesuada turpis. Donec auctor lacus ut odio lobortis rhoncus. Curabitur pellentesque ac dolor et imperdiet.</p>
			</div>
			<div class="emptySpace-md20"></div>
			<div class="normall">
				<h4 class="h4">Fusce id elit et tellus egestas</h4>
				<div class="emptySpace15 emptySpace-xs15"></div>
				<p>Suspendisse potenti. Etiam non euismod augue. Nam aliquam sit amet tortor sit amet consectetur.</p>
				<div class="emptySpace25 emptySpace-xs15"></div>
				<div class="subShortcode">
					<p>- always fresh ingredients;</p>
					<p>- only professionals in this job;</p>
					<p>- every customer satisfied.</p>
				</div>
			</div>
		</div>
	</div>
	<div class="emptySpace-md60 emptySpace125"></div>
	
	<!-- Sweet-History -->
	<div class="bgImages opacityLayer" style="background-image: url(img/sweet-history-bg.jpg); background-position: 50% 50%; background-size: cover">
		<div class="container">
			<div class="row">
				<div class="emptySpace-xs60 emptySpace120"></div>
				<!-- Sweet-History-Title -->
				<div class="col-sm-8 col-sm-offset-2 col-md-6 col-md-offset-3">
					<div class="big titleShortcode">
						<h5 class="h5">Moments Of</h5>
						<div class="emptySpace15"></div>
						<h2 class="h2 bottomLine">Our Sweet History</h2>
						<div class="emptySpace35"></div>
						<p>Proin mattis rutrum magna, et pretium erat tincidunt at. Donec lectus ipsum, pulvinar id sollicitudin id, bibendum vel quam.</p>
					</div>
					<div class="emptySpace55 emptySpace-xs30"></div>
				</div>
			</div>
			<div class="row">
				<div class="yearShortcode2">
					<div class="yearWrapper">
						<h4 class="h4 historyYear">2016</h4>
					</div>
				</div>
				<!-- History-Block-1 -->
				<div class="timeLineShortcode2">
					<div class="flexWrapper2">
						<div class="imgTimeLineWrapper">
							<a class="imgLayer" href="http://invisiogroup.ca/htmlcut/cake/blog2.html"><img class="imgShortcode2" src="img/history-time-line.jpg" alt=""><span></span><span></span></a>
						</div>
						<div class="emptySpace-xs20"></div>
						<div class="normall contentTimeLineWrapper">
							<a href="http://invisiogroup.ca/htmlcut/cake/blog2.html"><h4 class="h4">Fusce id elit et tellus egestas</h4></a>
							<div class="emptySpace15"></div>
							<p>Integer ipsum ipsum, suscipit et gravida non, imperdiet eget nisl. Curabitur semper semper nunc, id suscipit diam ornare quis. Ut venenatis, diam nec blandit facilisis, mi justo porttitor risus</p>
						</div>
					</div>
					<div class="monthWrapper">
						<h4 class="h4 historyMonth">23, July</h4>
					</div>
				</div>
				<!-- History-Block-2 -->
				<div class="timeLineShortcode2">
					<div class="flexWrapper2">
						<div class="imgTimeLineWrapper rotateRight">
							<a class="imgLayer" href="http://invisiogroup.ca/htmlcut/cake/blog2.html"><img class="imgShortcode2" src="img/history-time-line2.jpg" alt=""><span></span><span></span></a>
						</div>
						<div class="emptySpace-xs20"></div>
						<div class="normall contentTimeLineWrapper rotateLeft">
							<a href="http://invisiogroup.ca/htmlcut/cake/blog2.html"><h4 class="h4">Aenean egestas placerat</h4></a>
							<div class="emptySpace15"></div>
							<p>Integer ipsum ipsum, suscipit et gravida non, imperdiet eget nisl. Curabitur semper semper nunc, id suscipit diam ornare quis. Ut venenatis, diam nec blandit facilisis, mi justo porttitor risus</p>
						</div>
					</div>
					<div class="monthWrapper">
						<h4 class="h4 historyMonth">11, May</h4>
					</div>
				</div>
				<!-- History-Block-3 -->
				<div class="timeLineShortcode2">
					<div class="flexWrapper2">
						<div class="imgTimeLineWrapper">
							<a class="imgLayer" href="http://invisiogroup.ca/htmlcut/cake/blog2.html"><img class="imgShortcode2" src="img/history-time-line3.jpg" alt=""><span></span><span></span></a>
						</div>
						<div class="emptySpace-xs20"></div>
						<div class="normall contentTimeLineWrapper">
							<a href="http://invisiogroup.ca/htmlcut/cake/blog2.html"><h4 class="h4">Maecenas volutpat sagittis mi</h4></a>
							<div class="emptySpace15"></div>
							<p>Integer ipsum ipsum, suscipit et gravida non, imperdiet eget nisl. Curabitur semper semper nunc, id suscipit diam ornare quis. Ut venenatis, diam nec blandit facilisis, mi justo porttitor risus</p>
						</div>
					</div>
					<div class="monthWrapper">
						<h4 class="h4 historyMonth">08, February</h4>
					</div>
				</div>
				<div class="yearShortcode2">
					<div class="yearWrapper">
						<h4 class="h4 historyYear">2015</h4>
					</div>
				</div>
				<!-- History-Block-4 -->
				<div class="timeLineShortcode2">
					<div class="flexWrapper2">
						<div class="imgTimeLineWrapper rotateRight">
							<a class="imgLayer" href="http://invisiogroup.ca/htmlcut/cake/blog2.html"><img class="imgShortcode2" src="img/history-time-line4.jpg" alt=""> <span></span><span></span> </a>
						</div>
						<div class="emptySpace-xs20"></div>
						<div class="normall contentTimeLineWrapper rotateLeft">
							<a href="http://invisiogroup.ca/htmlcut/cake/blog2.html"><h4 class="h4">Vivamus nisl lorem</h4></a>
							<div class="emptySpace15"></div>
							<p>Integer ipsum ipsum, suscipit et gravida non, imperdiet eget nisl. Curabitur semper semper nunc, id suscipit diam ornare quis. Ut venenatis, diam nec blandit facilisis, mi justo porttitor risus</p>
						</div>
					</div>
					<div class="monthWrapper">
						<h4 class="h4 historyMonth">12, November</h4>
					</div>
				</div>
				<!-- History-Block-5 -->
				<div class="timeLineShortcode2">
					<div class="flexWrapper2">
						<div class="imgTimeLineWrapper">
							<a class="imgLayer" href="http://invisiogroup.ca/htmlcut/cake/blog2.html"><img class="imgShortcode2" src="img/history-time-line5.jpg" alt=""> <span></span><span></span></a>
						</div>
						<div class="emptySpace-xs20"></div>
						<div class="normall contentTimeLineWrapper">
							<a href="http://invisiogroup.ca/htmlcut/cake/blog-detail.html"><h4 class="h4">Fusce id elit et tellus egestas</h4></a>
							<div class="emptySpace15"></div>
							<p>Integer ipsum ipsum, suscipit et gravida non, imperdiet eget nisl. Curabitur semper semper nunc, id suscipit diam ornare quis. Ut venenatis, diam nec blandit facilisis, mi justo porttitor risus</p>
						</div>
					</div>
					<div class="monthWrapper">
						<h4 class="h4 historyMonth">29, September</h4>
					</div>
				</div>
				<div class="yearShortcode2 loadedMore">
					<div class="historySeeMore">
						<div class="historyPlus spin spin2"><span></span><span></span></div>
					</div>
				</div>
				<div class="emptySpace95 emptySpace-xs60"></div>
			</div>
		</div>
	</div>
	<div class="emptySpace120 emptySpace-md60"></div>
	
	<!-- Our-Professionals -->
	<div class="bgWhite">
		<div class="container">
			<div class="row">
				<!-- Our-Professionals-title -->
				<div class="col-sm-8 col-sm-offset-2 col-md-6 col-md-offset-3">
					<div class="big titleShortcode">
						<h5 class="h5">Meet With</h5>
						<div class="emptySpace20 emptySpace-xs5"></div>
						<h2 class="h2 bottomLine">Our Professionals</h2>
						<div class="emptySpace30"></div>
						<p>Proin mattis rutrum magna, et pretium erat tincidunt at. Donec lectus ipsum, pulvinar id sollicitudin id, bibendum vel quam. </p>
						<div class="emptySpace85 emptySpace-xs30"></div>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="swiper-container swiper-container-horizontal" data-breakpoints="1" data-xs-slides="1" data-sm-slides="2" data-md-slides="3" data-slides-per-view="3">
					<div class="swiper-wrapper">
						<!-- Slide-1 -->
						<div class="swiper-slide swiper-slide-active" style="width: 390px;">
							<div class="normall contentShortcode3">
								<img src="img/professional1.jpg" alt="">
								<div class="emptySpace10"></div>
								<a href="http://invisiogroup.ca/htmlcut/cake/contacts.html"><h4 class="h4">Ted Cortney</h4></a>
								<div class="emptySpace15"></div>
								<p>Head Chef</p>
								<div class="emptySpace10"></div>
								<p>Suspendisse potenti. Etiam non euismod augue. Nam aliquam sit amet tortor sit amet consectetur.</p>
								<div class="socialWrapper">
									<a class="social3 shareBg spin spin2" href="https://www.facebook.com/" target="_blank">
										<i class="fa fa-facebook shareF"></i>
									</a>
									<a class="social3 shareBg spin spin2" href="https://twitter.com/" target="_blank">
										<i class="fa fa-twitter shareT"></i>
									</a>
									<a class="social3 shareBg spin spin2" href="https://www.linkedin.com/" target="_blank">
										<i class="fa fa-linkedin shareIn"></i>
									</a>
								</div>
							</div>
						</div>
						<!-- Slide-2 -->
						<div class="swiper-slide swiper-slide-next" style="width: 390px;">
							<div class="normall contentShortcode3">
								<img src="img/professional2.jpg" alt="">
								<div class="emptySpace10"></div>
								<a href="http://invisiogroup.ca/htmlcut/cake/about.html#"><h4 class="h4">Felicia Stone</h4></a>
								<div class="emptySpace15"></div>
								<p>Professional Su Chef</p>
								<div class="emptySpace10"></div>
								<p>Suspendisse potenti. Etiam non euismod augue. Nam aliquam sit amet tortor sit amet consectetur.</p>
								<div class="socialWrapper">
									<a class="social3 shareBg spin spin2" href="https://www.facebook.com/" target="_blank">
										<i class="fa fa-facebook shareF"></i>
									</a>
									<a class="social3 shareBg spin spin2" href="https://twitter.com/" target="_blank">
										<i class="fa fa-twitter shareT"></i>
									</a>
									<a class="social3 shareBg spin spin2" href="https://www.linkedin.com/" target="_blank">
										<i class="fa fa-linkedin shareIn"></i>
									</a>
								</div>
							</div>
						</div>
						<!-- Slide-3 -->
						<div class="swiper-slide" style="width: 390px;">
							<div class="normall contentShortcode3">
								<img src="img/professional3.jpg" alt="">
								<div class="emptySpace10"></div>
								<a href="http://invisiogroup.ca/htmlcut/cake/about.html#"><h4 class="h4">Tony Snow</h4></a>
								<div class="emptySpace15"></div>
								<p>Certified Confectioner</p>
								<div class="emptySpace10"></div>
								<p>Suspendisse potenti. Etiam non euismod augue. Nam aliquam sit amet tortor sit amet consectetur.</p>
								<div class="socialWrapper">
									<a class="social3 shareBg spin spin2" href="https://www.facebook.com/" target="_blank">
										<i class="fa fa-facebook shareF"></i>
									</a>
									<a class="social3 shareBg spin spin2" href="https://twitter.com/" target="_blank">
										<i class="fa fa-twitter shareT"></i>
									</a>
									<a class="social3 shareBg spin spin2" href="https://www.linkedin.com/" target="_blank">
										<i class="fa fa-linkedin shareIn"></i>
									</a>
								</div>
							</div>
						</div>
						<!-- Slide-4 -->
						<div class="swiper-slide" style="width: 390px;">
							<div class="normall contentShortcode3">
								<img src="img/professional2.jpg" alt="">
								<div class="emptySpace10"></div>
								<a href="http://invisiogroup.ca/htmlcut/cake/about.html#"><h4 class="h4">Felicia Stone</h4></a>
								<div class="emptySpace15"></div>
								<p>Professional Su Chef</p>
								<div class="emptySpace10"></div>
								<p>Suspendisse potenti. Etiam non euismod augue. Nam aliquam sit amet tortor sit amet consectetur.</p>
								<div class="socialWrapper">
									<a class="social3 shareBg spin spin2" href="https://www.facebook.com/" target="_blank">
										<i class="fa fa-facebook shareF"></i>
									</a>
									<a class="social3 shareBg spin spin2" href="https://twitter.com/" target="_blank">
										<i class="fa fa-twitter shareT"></i>
									</a>
									<a class="social3 shareBg spin spin2" href="https://www.linkedin.com/" target="_blank">
										<i class="fa fa-linkedin shareIn"></i>
									</a>
								</div>
							</div>
						</div>
						<!-- Slide-5 -->
						<div class="swiper-slide" style="width: 390px;">
							<div class="normall contentShortcode3">
								<img src="img/professional1.jpg" alt="">
								<div class="emptySpace10"></div>
								<a href="http://invisiogroup.ca/htmlcut/cake/about.html#"><h4 class="h4">Ted Cortney</h4></a>
								<div class="emptySpace15"></div>
								<p>Head Chef</p>
								<div class="emptySpace10"></div>
								<p>Suspendisse potenti. Etiam non euismod augue. Nam aliquam sit amet tortor sit amet consectetur.</p>
								<div class="socialWrapper">
									<a class="social3 shareBg spin spin2" href="https://www.facebook.com/" target="_blank">
										<i class="fa fa-facebook shareF"></i>
									</a>
									<a class="social3 shareBg spin spin2" href="https://twitter.com/" target="_blank">
										<i class="fa fa-twitter shareT"></i>
									</a>
									<a class="social3 shareBg spin spin2" href="https://www.linkedin.com/" target="_blank">
										<i class="fa fa-linkedin shareIn"></i>
									</a>
								</div>
							</div>
						</div>
						<!-- Slide-6 -->
						<div class="swiper-slide" style="width: 390px;">
							<div class="normall contentShortcode3">
								<img src="img/professional3.jpg" alt="">
								<div class="emptySpace10"></div>
								<a href="http://invisiogroup.ca/htmlcut/cake/about.html#"><h4 class="h4">Tony Snow</h4></a>
								<div class="emptySpace15"></div>
								<p>Certified Confectioner</p>
								<div class="emptySpace10"></div>
								<p>Suspendisse potenti. Etiam non euismod augue. Nam aliquam sit amet tortor sit amet consectetur.</p>
								<div class="socialWrapper">
									<a class="social3 shareBg spin spin2" href="https://www.facebook.com/" target="_blank">
										<i class="fa fa-facebook shareF"></i>
									</a>
									<a class="social3 shareBg spin spin2" href="https://twitter.com/" target="_blank">
										<i class="fa fa-twitter shareT"></i>
									</a>
									<a class="social3 shareBg spin spin2" href="https://www.linkedin.com/" target="_blank">
										<i class="fa fa-linkedin shareIn"></i>
									</a>
								</div>
							</div>
						</div>
					</div>
					<div class="swiper-pagination relative-pagination swiper-pagination-black swiper-pagination-clickable swiper-pagination-bullets"><span class="swiper-pagination-bullet swiper-pagination-bullet-active"></span><span class="swiper-pagination-bullet"></span><span class="swiper-pagination-bullet"></span><span class="swiper-pagination-bullet"></span></div>
					<div class="emptySpace35"></div>
				</div>
			</div>
		</div>
	</div>
	
	<!-- Customers-Say -->
	<div class="bgImages opacityLayer" style="background-image: url(img/customers-bg.jpg); background-position: 50% 50%; background-size: cover">
		<div class="emptySpace120 emptySpace-xs60"></div>
		<div class="container">
			<div class="row">
				<!-- Our-Customers-Title -->
				<div class="col-sm-8 col-sm-offset-2 col-md-6 col-md-offset-3">
					<div class="big titleShortcode">
						<h5 class="h5">What Does</h5>
						<div class="emptySpace20 emptySpace-xs5"></div>
						<h2 class="h2 bottomLine">Our Customers Say</h2>
						<div class="emptySpace30"></div>
						<p>Proin mattis rutrum magna, et pretium erat tincidunt at. Donec lectus ipsum, pulvinar id sollicitudin id, bibendum vel quam. </p>
						<div class="emptySpace85 emptySpace-xs30"></div>
					</div>
				</div>
			</div>
		</div>
		<div class="swiper-container swiper-container-horizontal">
			<!-- Swiper-Arrow -->
			<div class="arrowWrapper">
				<div class="swiper-button-prev hidden-xs spin spin2">
					<img class="arrowShortcode" src="img/left-hover-arrow.png" alt="">
				</div>
				<div class="swiper-button-next hidden-xs spin spin2">
					<img class="arrowShortcode" src="img/right-hover-arrow.png" alt="">
				</div>
			</div>
			<div class="swiper-wrapper">
				<!-- Slide-1 -->
				<div class="swiper-slide swiper-slide-active" style="width: 1440px;">
					<div class="container">
						<div class="row">
							<div class="col-sm-6 col-sm-offset-3">
								<div class="normall contentShortcode4">
									<img class="customer" src="img/customer-image.jpg" alt="">
									<div class="emptySpace15"></div>
									<h4 class="h4">“Outstanding quality &amp; taste. Totally recommend!”</h4>
									<div class="emptySpace15"></div>
									<p>Integer i psum ipsum, suscipit et gravida non, imperdiet eget nisl. Curabitur semper semper nunc, id suscipit diam ornare quis. Duis posuere blandit imperdiet. Mauris ac tortor elit. Mauris vel risus et dui luctus congue at in quam.Duis est orci, luctus.</p>
									<div class="emptySpace10"></div>
									<div class="big">
										<p>Carrie Gordon</p>
									</div>
									<div class="emptySpace15"></div>
									<p>Magazine Fashion Photographer</p>
								</div>
							</div>
						</div>
					</div>
				</div>
				<!-- Slide-2 -->
				<div class="swiper-slide swiper-slide-next" style="width: 1440px;">
					<div class="container">
						<div class="row">
							<div class="col-sm-6 col-sm-offset-3">
								<div class="normall contentShortcode4">
									<img class="customer" src="img/customer-image2.jpg" alt="">
									<div class="emptySpace15"></div>
									<h4 class="h4">“Outstanding quality &amp; taste. Totally recommend!”</h4>
									<div class="emptySpace15"></div>
									<p>Integer i psum ipsum, suscipit et gravida non, imperdiet eget nisl. Curabitur semper semper nunc, id suscipit diam ornare quis. Duis posuere blandit imperdiet. Mauris ac tortor elit. Mauris vel risus et dui luctus congue at in quam.Duis est orci, luctus.</p>
									<div class="emptySpace10"></div>
									<div class="big">
										<p>Carrie Gordon</p>
									</div>
									<div class="emptySpace15"></div>
									<p>Magazine Fashion Photographer</p>
								</div>
							</div>
						</div>
					</div>
				</div>
				<!-- Slide-3 -->
				<div class="swiper-slide" style="width: 1440px;">
					<div class="container">
						<div class="row">
							<div class="col-sm-6 col-sm-offset-3">
								<div class="normall contentShortcode4">
									<img class="customer" src="img/customer-image3.jpg" alt="">
									<div class="emptySpace15"></div>
									<h4 class="h4">“Outstanding quality &amp; taste. Totally recommend!”</h4>
									<div class="emptySpace15"></div>
									<p>Integer i psum ipsum, suscipit et gravida non, imperdiet eget nisl. Curabitur semper semper nunc, id suscipit diam ornare quis. Duis posuere blandit imperdiet. Mauris ac tortor elit. Mauris vel risus et dui luctus congue at in quam.Duis est orci, luctus.</p>
									<div class="emptySpace10"></div>
									<div class="big">
										<p>Carrie Gordon</p>
									</div>
									<div class="emptySpace15"></div>
									<p>Magazine Fashion Photographer</p>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="swiper-pagination relative-pagination swiper-pagination-white pagiPosition swiper-pagination-clickable swiper-pagination-bullets"><span class="swiper-pagination-bullet swiper-pagination-bullet-active"></span><span class="swiper-pagination-bullet"></span><span class="swiper-pagination-bullet"></span></div>
			<div class="emptySpace35"></div>
		</div>
	</div>
	<div class="emptySpace50"></div>
@stop