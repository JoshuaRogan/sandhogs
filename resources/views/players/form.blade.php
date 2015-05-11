<div class="form-group {{ $errors->has('first') ? 'has-error' : '' }}"> 
	{!! Form::label('first', 'First Name*', ['class' => 'col-sm-2 control-label']) !!}
	<div class="col-sm-10">
		{!! Form::text('first', null, ['class' => 'form-control', 'placeholder' => 'e.g. John', 'required'=>'required']) !!}
		{!! $errors->first('first', '<span class="help-block">:message</span>')!!}
	</div>
	
</div>

<div class="form-group {{ $errors->has('first') ? 'has-error' : '' }}"> 
	{!! Form::label('last', 'Last Name*', ['class' => 'col-sm-2 control-label']) !!}
	<div class="col-sm-10">
		{!! Form::text('last', null, ['class' => 'form-control', 'placeholder' => 'e.g. Doe', 'required'=>'required']) !!}
		{!! $errors->first('last', '<span class="help-block">:message</span>')!!}
	</div>
</div>

<div class="form-group {{ $errors->has('first') ? 'has-error' : '' }}"> 
	{!! Form::label('email', 'Email', ['class' => 'col-sm-2 control-label']) !!}
	<div class="col-sm-10">
		{!! Form::email('email', null, ['class' => 'form-control', 'placeholder' => 'e.g. JohnDoe@gmail.com']) !!}
		{!! $errors->first('email', '<span class="help-block">:message</span>')!!}
	</div>
</div>

<div class="form-group {{ $errors->has('position') ? 'has-error' : '' }}"> 
	{!! Form::label('position', 'Position(s):', ['class' => 'col-sm-2 control-label']) !!}
	<div class="col-sm-10">
		{!! Form::text('position', null, ['class' => 'form-control', 'placeholder' => 'e.g. P, SS']) !!}
		{!! $errors->first('position', '<span class="help-block">:message</span>')!!}
	</div>
</div>


<div class="form-group"> 
	{!! Form::label('description', 'Bio:', ['class' => 'col-sm-2 control-label']) !!}
	<div class="col-sm-10">
		{!! Form::textarea('description', null, ['class' => 'form-control', 'placeholder' => 'e.g. John is a power hitting lefty.', 'rows'=>3]) !!}
	</div>
</div>

<div class="form-group"> 
	{!! Form::label('img-url', 'Profile Image', ['class' => 'col-sm-2 control-label']) !!}
	<div class="col-sm-10">
		{!! Form::file('img-url', null, ['class' => 'form-control',]) !!}
		<p class="help-block">Please upload an image for the profile picture of this player. </p>
	</div>
</div>

{{-- Show all of the teams that this player is on and all of the teams he can be added too --}}





