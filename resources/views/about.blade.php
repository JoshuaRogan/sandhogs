@extends('skeleton.base')
@extends('skeleton.default_header')
@extends('skeleton.default_footer')

@section('title', 'Home')
@section('description', 'About the East Coast Sandhogs baseball organization')
@section('pageclass', 'page-about')

@section('styles')
	<link rel="stylesheet" type="text/css" href="{{asset('/styles/slippry.css')}}">
	@parent
@stop

@section('lazyscripts')
	@parent
	<script src="{{asset('/js/slippry.min.js')}}"></script>
	<script src="{{asset('/js/home.js')}}"></script>
@stop



@section('content')

<div class="container">
	<section id="about-us"> 
		<h2> About the East Coast Sandhogs </h2>
		<p><a href="/files/press_release.pdf" target="_blank"><i class="fa fa-file-pdf-o"></i> Download Press Release</a></p>

		<!-- 16:9 aspect ratio -->
		<div class="embed-responsive embed-responsive-16by9">
		  <iframe class="embed-responsive-item" src="/files/press_release.pdf"></iframe>
		</div>

	</section>

</div>
@stop
