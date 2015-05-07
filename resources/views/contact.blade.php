@extends('skeleton.base')
@extends('skeleton.default_header')
@extends('skeleton.default_footer')

@section('title', 'Contact Us')
@section('description', 'Get in touch with the East Coast Sandhogs')
@section('pageclass', 'page-contact')

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

@include('skeleton.banner')

 <div class="container"> 
 	<section id="contact"> 
 		<h2> Contact Information</h2>
 		
 		<div class="col-md-8"> 
 			
 			<form id="form-contact" role="form">
 				<h3> Send Us a Direct Message! </h3>

				<div class="form-group">
					<label for="name">Name</label>
					<input type="text" class="form-control" id="name" placeholder="John Doe" required>
				</div>

				<div class="form-group">
					<label for="email">Email address</label>
					<input type="email" class="form-control" id="email" placeholder="Enter your email" required>
				</div>  

				<div class="form-group">
					<label for="verify_email">Verify Email address</label>
					<input type="email" class="form-control" id="verify_email" placeholder="Enter your email" required>
				</div>

				<div class="form-group">
					<label for="subject">Subject</label>
					<input type="text" class="form-control" id="subject" placeholder="Subject" value="" required>
				</div>

				<div class="form-group">
					<textarea class="form-control" id="message" placeholder="Please enter your message here" rows="8" required></textarea>
				</div>

				<button  class="btn btn-primary" id="submit">Submit</button>
			</form>



 		</div>

 		<div class="col-md-4" id="contact-list"> 
 			<h3>  Contacts </h3>

 			<div class="contact-box">
				@include('macros.address', ['name' => 'Paul McGloin', 'email' => 'mcgloin@electricitybaseball.com', 'phone'=>"(570) 878-8483" ])
				@include('macros.address', ['name' => 'Joe Curreri ', 'email' => 'nepridebaseball@gmail.com', 'phone'=>"(570) 575-1515" ])
 			</div>
 		</div>

 	</section>
 </div>
@stop
