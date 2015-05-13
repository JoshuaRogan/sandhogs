@section('styles')
	@parent
@stop

@section('lazyscripts')
	@parent
@stop

<div class="form-group {{ $errors->has('name') ? 'has-error' : '' }}"> 
	{!! Form::label('name', 'Event Name*', ['class' => 'col-sm-2 control-label']) !!}
	<div class="col-sm-10">
		{!! Form::text('name', null, ['class' => 'form-control', 'placeholder' => 'e.g. All American Tourney', 'required'=>'required']) !!}
		{!! $errors->first('name', '<span class="help-block">:message</span>')!!}
	</div>
</div>

<div class="form-group {{ $errors->has('location') ? 'has-error' : '' }}"> 
	{!! Form::label('location', 'Location*', ['class' => 'col-sm-2 control-label']) !!}
	<div class="col-sm-10">
		
		{!! Form::text('location', null, ['class' => 'form-control', 'placeholder' => 'e.g. Philadelphia, PA', 'required'=>'required']) !!}
		{!! $errors->first('location', '<span class="help-block">:message</span>')!!}

	</div>
</div>

<div class="form-group {{ $errors->has('start_date') ? 'has-error' : '' }}"> 
	{!! Form::label('start_date', 'Start Date*', ['class' => 'col-sm-2 control-label']) !!}
	<div class="col-sm-10">
		<div class="input-group"> 
			{!! Form::input('text', 'start_date', null, ['class' => 'form-control', 'required'=>'required','type'=>'text', 'placeholder'=> 'e.g. 2015-01-27']) !!}
			{!! $errors->first('start_date', '<span class="help-block">:message</span>')!!}
			<span class="input-group-addon"><i class="fa fa-calendar"></i></span>
		</div>
	</div>
</div>

<div class="form-group {{ $errors->has('end_date') ? 'has-error' : '' }}"> 
	{!! Form::label('end_date', 'End Date*', ['class' => 'col-sm-2 control-label']) !!}
	<div class="col-sm-10">
		<div class="input-group"> 
			{!! Form::input('text', 'end_date', null, ['class' => 'form-control','type'=>'text', 'placeholder'=> 'e.g. 2015-01-29']) !!}
			{!! $errors->first('end_date', '<span class="help-block">:message</span>')!!}
			<span class="input-group-addon"><i class="fa fa-calendar"></i></span>
		</div>
	</div>
</div>

<div class="form-group"> 
	{!! Form::label('description', 'Event Description:', ['class' => 'col-sm-2 control-label']) !!}
	<div class="col-sm-10">
		{!! Form::textarea('description', null, ['class' => 'form-control', 'placeholder' => 'e.g. The All American Tournament represents the best players from the East Coast.', 'rows'=>3]) !!}
	</div>
</div>

<div class="form-group"> 
	{!! Form::label('files', 'Files', ['class' => 'col-sm-2 control-label']) !!}
	<div class="col-sm-10">
		{!! Form::file('files', null, ['class' => 'form-control',]) !!}
		<p class="help-block">Please upload any associated files for this tournament.</p>
	</div>
</div>