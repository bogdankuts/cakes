<!DOCTYPE html>
<html lang="ru">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	<meta name="format-detection" content="telephone=no">
	<meta name="apple-mobile-web-app-capable" content="yes">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no, minimal-ui">
	
	{{--<link href="https://fonts.googleapis.com/css?family=Noticia+Text:400,700|Philosopher:400,700|Berkshire+Swash " rel="stylesheet">--}}
	<link href="https://fonts.googleapis.com/css?family=Marck+Script|Noticia+Text:400,700|Philosopher:400,700" rel="stylesheet">
	<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet" type="text/css">
	<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
	
	<link href="css/swiper.css" rel="stylesheet" type="text/css">
	
	<link href="css/style.css" rel="stylesheet" type="text/css">
	{{--<link rel="shortcut icon" href="http://invisiogroup.ca/htmlcut/cake/img/favicon.ico">--}}
	<title>CAKES TEMPLATE</title>
</head>

<body>
	@include('static.partials._loader')

	<div id="content-block">
		@yield('header')
		@yield('main')
		@yield('footer')
	</div>
	
	@include('static.partials._pop-up')
	
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
	<script src="js/swiper.jquery.min.js"></script>
	<script src="https://npmcdn.com/isotope-layout@3.0/dist/isotope.pkgd.min.js"></script>
	<script src="js/jquery.circliful.min.js"></script>
	<script src="js/global.js"></script>
</body>
</html>