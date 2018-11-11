<!DOCTYPE HTML>
<html>
	<head>
	<title>Projeto</title>
   <meta charset="utf-8">   
   <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<link href="https://fonts.googleapis.com/css?family=Montserrat:300,400,500,600,700" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Rokkitt:100,300,400,700" rel="stylesheet">
  
	<meta name="csrf-token" content="{{ csrf_token() }}" />
	<!-- Animate.css -->
	<link rel="stylesheet" href="{{ asset('/css') }}/animate.css">
	<!-- Icomoon Icon Fonts-->
	<link rel="stylesheet" href="{{ asset('/css') }}/icomoon.css">
	<!-- Ion Icon Fonts-->
	<link rel="stylesheet" href="{{ asset('/css') }}/ionicons.min.css">
	
	<!-- Bootstrap  -->
	<link rel="stylesheet" href="{{ asset('/css/') }}/bootstrap.min.css" > <!-- Custom fonts for this template-->
   
	<link href="{{ asset('/vendor/') }}/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css"> <!-- latest 5.0.13 june 2018, needs update -->

	<!-- Magnific Popup -->
	<link rel="stylesheet" href="{{ asset('/css') }}/magnific-popup.css">

	<!-- Flexslider  -->
	<link rel="stylesheet" href="{{ asset('/css') }}/flexslider.css">

	<!-- Owl Carousel -->
	<link rel="stylesheet" href="{{ asset('/css') }}/owl.carousel.min.css">
	<link rel="stylesheet" href="{{ asset('/css') }}/owl.theme.default.min.css">
	
	<!-- Date Picker -->
	<link rel="stylesheet" href="{{ asset('/css') }}/bootstrap-datepicker.css">
	<!-- Flaticons  -->
	<link rel="stylesheet" href="{{ asset('/fonts') }}/flaticon/font/flaticon.css">

	<!-- Theme style  -->
	<link rel="stylesheet" href="{{ asset('/css') }}/style.css"> 
	<link rel="stylesheet" type="text/css" href="/DataTables/datatables.min.css"/>
	
	
 
	
</head>
<body>
	<div class="colorlib-loader"></div>
	
	<div id="page">
		@yield('header')
		@yield('aside')
        @yield('produtos_destaques')
        @yield('shop')
		@yield('parceiros')
		@yield('footer')
	</div>
	
	<div class="gototop js-top">
		<a href="#" class="js-gotop"><i class="ion-ios-arrow-up"></i></a>
	</div>
	
	
	
	<!-- jQuery -->
	<script src="{{ asset('/js') }}/app.js"></script>
	<script src="{{ asset('/js') }}/jquery.min.js"></script>
    <!-- popper -->
    <script src="{{ asset('/js') }}/popper.min.js"></script>
    <!-- bootstrap 4.1 -->
    <script src="{{ asset('/js') }}/bootstrap.min.js"></script>
    <!-- jQuery easing -->
	<script src="{{ asset('/js') }}/jquery.easing.1.3.js"></script>
	
	<!-- Waypoints -->
	<script src="{{ asset('/js') }}/jquery.waypoints.min.js"></script>
	<!-- Flexslider -->
	<script src="{{ asset('/js') }}/jquery.flexslider-min.js"></script>
	<!-- Owl carousel -->
	<script src="{{ asset('/js') }}/owl.carousel.min.js"></script>
	<!-- Magnific Popup -->
	<script src="{{ asset('/js') }}/jquery.magnific-popup.min.js"></script>
	<script src="{{ asset('/js') }}/magnific-popup-options.js"></script>
	<!-- Date Picker -->
	<script src="{{ asset('/js') }}/bootstrap-datepicker.js"></script>
	<!-- Stellar Parallax -->
	<script src="{{ asset('/js') }}/jquery.stellar.min.js"></script>
	<!-- Main -->
	<script src="{{ asset('/js') }}/main.js"></script>	
	<script type="text/javascript" src="/DataTables/datatables.min.js"></script>
	<script src="{{ asset("js/Chart.js") }}"></script>
	<script>
		$(document).ready(function(){


	$.ajaxSetup({
    headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
});
			
		})
	</script>
	@yield('script')
</body>
</html>