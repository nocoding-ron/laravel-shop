<!DOCTYPE html>
<html lang="en">
<head>
   @include('includes.head')
</head><!--/head-->

<body>
	<header id="header"><!--header-->
		@include('includes.header')
	</header><!--/header-->
	
	<section id="slider"><!--slider-->
		@include('includes.slider')
	</section><!--/slider-->
	
	<section>
		 @yield('content')
	</section>
	
	<footer id="footer"><!--Footer-->
		@include('includes.footer')
		
	</footer><!--/Footer-->
	

  
    <script src="js/jquery.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/jquery.scrollUp.min.js"></script>
	<script src="js/price-range.js"></script>
    <script src="js/jquery.prettyPhoto.js"></script>
    <script src="js/main.js"></script>
</body>
</html>