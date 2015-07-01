<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
	<meta name="author" content="Josh Rogan">
	<meta name="description" content="@yield('description', 'The East Coast Sandhogs are a National Travel Baseball Organization based in Pennsylvania. We have teams from the ages of 8u through 18u. We provide players with the opportunity to develop within our system, improve their abilities and become responsible, educated student-athletes. We pride ourselves on teaching transferable life skills through the game of baseball and expose our players to coaches and scouts at the next level.')" >
	
	<title> East Coast Sandhogs | @yield('title')</title>


	<link rel='shortcut icon' type='image/x-icon' href='/favicon.ico' />

	<!-- iOS Options -->

	<!-- STYLESHEETS  -->
	@section('styles')
		<link rel="stylesheet" type="text/css" href="{{asset('/styles/styles.css')}}">
		<link rel="stylesheet" type="text/css" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
		<link href='http://fonts.googleapis.com/css?family=Ubuntu:300,400,500,700' rel='stylesheet' type='text/css'>
    @show

	

</head> 

<body> 

	<!--HEADER --> 
	@yield('header')
	<!--HEADER --> 

	<!--CONTENT-->
	<div id="main" class="@yield('pageclass') container-fluid"> 
		<!--Flash Messages -->
		@if(Session::has('flash_success'))
			<div class='container flash-messages'>
				<div class="alert alert-success">
					{!!Session::pull('flash_success')!!}
				</div>
			</div>
		@endif
		<!--Flash Messages -->

		@yield('content')

	</div>
	<!--CONTENT-->

	<!--FOOTER--> 
	@yield('footer')
	<!--FOOTER-->

	<!--LAZY SCRIPTS --> 
	@section('lazyscripts')
		<script src="{{asset('/js/sandhogs.js')}}"></script>
    @show
	<!--LAZY SCRIPTS --> 
</body>
</html>

