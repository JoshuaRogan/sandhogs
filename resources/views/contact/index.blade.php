@extends('skeleton.base')
@extends('skeleton.default_header')
@extends('skeleton.default_footer')

@section('title', 'Contact Us')
@section('description', 'Get in touch with the East Coast Sandhogs')
@section('pageclass', 'page-contact')

@section('styles')
	@parent
@stop

@section('lazyscripts')
	@parent
@stop



@section('content')
 <div class="container"> 
 	<section id="contact"> 
 		<h2> Contact Information</h2>
 		
 		<div class="col-md-8"> 
 			
 			
 				

 				{!! Form::open(['route' => ['contact.send'], 'id'=>'form-contact']) !!}
 					<h3> Send Us a Direct Message! </h3>
					<div class="form-group {{ $errors->has('name') ? 'has-error' : '' }}"> 
						{!! Form::label('name', 'Name*', ['class' => 'control-label']) !!}
						{!! Form::text('name', null, ['class' => 'form-control', 'placeholder' => 'e.g. John Doe', 'required'=>'required']) !!}
						{!! $errors->first('name', '<span class="help-block">:message</span>')!!}
					</div>

					<div class="form-group {{ $errors->has('email') ? 'has-error' : '' }}"> 
						{!! Form::label('email', 'Email*', ['class' => 'control-label']) !!}
						{!! Form::email('email', null, ['class' => 'form-control', 'placeholder' => 'e.g. john.doe@sandhogsbaseball.com', 'required'=>'required']) !!}
						{!! $errors->first('email', '<span class="help-block">:message</span>')!!}
					</div>

					<div class="form-group {{ $errors->has('email_confirmation') ? 'has-error' : '' }}"> 
						{!! Form::label('email_confirmation', 'Verify Email Address*', ['class' => 'control-label']) !!}
						{!! Form::email('email_confirmation', null, ['class' => 'form-control', 'placeholder' => 'e.g. john.doe@sandhogsbaseball.com', 'required'=>'required']) !!}
						{!! $errors->first('email_confirmation', '<span class="help-block">:message</span>')!!}
					</div>

					<div class="form-group {{ $errors->has('subject') ? 'has-error' : '' }}"> 
						{!! Form::label('subject', 'Subject*', ['class' => 'control-label']) !!}
						{!! Form::text('subject', null, ['class' => 'form-control', 'placeholder' => 'e.g. Hitting Question', 'required'=>'required']) !!}
						{!! $errors->first('subject', '<span class="help-block">:message</span>')!!}
					</div>

					<div class="form-group {{ $errors->has('message') ? 'has-error' : '' }}"> 
						{!! Form::label('message', 'Message Body*', ['class' => 'control-label']) !!}
						{!! Form::textarea('message', null, ['class' => 'form-control', 'placeholder' => 'e.g. Write your message here', 'required'=>'required']) !!}
						{!! $errors->first('message', '<span class="help-block">:message</span>')!!}
					</div>

					<div class="form-group"> 
						<button type="submit" class="btn btn-primary pull-right form-control"><i class="fa fa-paper-plane"></i> Send</button>
					</div>

					<div class='clearfix'></div>


				{!! Form::close() !!}
			</form>



 		</div>

 		<div class="col-md-4" id="contact-list"> 
 			<h3>  Contacts </h3>

 			<div class="contact-box">
		 		<address> 
					<h3><a href="{{route('mcgloin.info')}}">Paul McGloin</a></h3>
					<div>
						<div><a href="mailto:mcgloin@electricitybaseball.com"><i class="fa fa-envelope"></i> Email Me</a></div>
						<div><i class="fa fa-mobile"></i> (570) 878-8483</div>
					</div>
				</address>

				<address class='hidden'> 
					<h3>Joe Curreri</h3>
					<div>
						<div><a href="mailto:nepridebaseball@gmail.com"><i class="fa fa-envelope"></i> Email Me</a></div>
						<div><i class="fa fa-mobile"></i> {(570) 575-1515</div>
					</div>
				</address>
 			</div>
 			
 		</div>

 	</section>
 </div>
@stop
