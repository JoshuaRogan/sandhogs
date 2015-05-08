@extends('skeleton.base')
@extends('skeleton.default_header')
@extends('skeleton.default_footer')

@section('title', 'Coming Soon')
@section('description', 'East Coast Sandhogs Coming Soon!')
@section('pageclass', 'page-coming-soon')

@section('styles')
	@parent
@stop

@section('lazyscripts')
	@parent
@stop

@section('content')

<div class="container text-center center-block">
	<img src="/img/footer-logo.png"> 
	<h1><i class="fa fa-cog fa-spin"></i> Coming Soon <i class="fa fa-cog fa-spin"></i></h1>
</div>
@stop




