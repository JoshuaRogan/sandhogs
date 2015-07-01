@extends('skeleton.base')
@extends('skeleton.default_header')
@extends('skeleton.default_footer')

@section('title', 'Home')
@section('description', 'About the East Coast Sandhogs baseball organization')
@section('pageclass', 'page-about')

@section('styles')
	@parent
@endsection

@section('lazyscripts')
	@parent
@endsection



@section('content')

<div class="container">
	<section id="about-us"> 
		<h2> About the East Coast Sandhogs </h2>


		<div class="col-md-5"> 
			<div id="about-slider" class='slider-default'> 
				@include('slippry.slider-default')
			</div>
		</div>

		<div class="col-md-7"> 
			<h3> About </h3>
			<p>@include('blurbs.about')</p>

			<h3> Our Mission Statement </h3>
			<p>@include('blurbs.mission-statement')</p>

			<p><a href="/files/press_release.pdf" target="_blank"><i class="fa fa-file-pdf-o"></i> Download Press Release</a></p>

		</div>

		

	</section>

</div>
@endsection