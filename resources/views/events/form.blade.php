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

<div class="form-group {{ $errors->has('start_date_string') ? 'has-error' : '' }}"> 
	{!! Form::label('start_date_string', 'Start Date*', ['class' => 'col-sm-2 control-label']) !!}
	<div class="col-sm-10">
		<div class="input-group"> 
			{!! Form::input('text', 'start_date_string', null, ['class' => 'form-control', 'required'=>'required','type'=>'text', 'placeholder'=> 'e.g. 2015-01-27']) !!}
			{!! $errors->first('start_date_string', '<span class="help-block">:message</span>')!!}
			<span class="input-group-addon"><i class="fa fa-calendar"></i></span>
		</div>
	</div>
</div>

<div class="form-group {{ $errors->has('end_date') ? 'has-error' : '' }}"> 
	{!! Form::label('end_date_string', 'End Date*', ['class' => 'col-sm-2 control-label']) !!}
	<div class="col-sm-10">
		<div class="input-group"> 
			{!! Form::input('text', 'end_date_string', null, ['class' => 'form-control','type'=>'text', 'placeholder'=> 'e.g. 2015-01-29']) !!}
			{!! $errors->first('end_date_string', '<span class="help-block">:message</span>')!!}
			<span class="input-group-addon"><i class="fa fa-calendar"></i></span>
		</div>
	</div>
</div>

<div class="form-group {{ $errors->has('results') ? 'has-error' : '' }}"> 
	{!! Form::label('description', 'Event Description:', ['class' => 'col-sm-2 control-label']) !!}
	<div class="col-sm-10">
		{!! Form::textarea('description', null, ['class' => 'form-control', 'placeholder' => 'e.g. The All American Tournament represents the best players from the East Coast.', 'rows'=>3]) !!}
	</div>
</div>

<div class="form-group {{ $errors->has('results') ? 'has-error' : '' }}"> 
	{!! Form::label('results', 'Event Results:', ['class' => 'col-sm-2 control-label']) !!}
	<div class="col-sm-10">
		{!! Form::textarea('results', null, ['class' => 'form-control', 'placeholder' => 'e.g. Sandhogs 9U won 4 out of 6 game and finished 4th. Only set upon event completion. ', 'rows'=>3]) !!}
		{!! $errors->first('results', '<span class="help-block">:message</span>')!!}
	</div>
</div>

<div class="form-group">
	<label for="teams" class="col-sm-2 control-label">Teams</label>
	<div class="col-sm-10" id="teams">
		<div>
			<div>
		       @foreach ($event->teams as $team)
		        <label class="checkbox-inline">
		           <input checked name="teams[]" type="checkbox" value="{{$team->id}}">
		           {{$team->name}}
		        </label>
		        @endforeach

		        @foreach (App\Team::all()->diff($event->teams) as $team)
		        <label class="checkbox-inline">
		           <input name="teams[]" type="checkbox" value="{{$team->id}}">
		           {{$team->name}}
		        </label>
		        @endforeach
		    </div>
	    </div>
		<a href="{{route('team.create')}}" class="checkbox-inline"><i class="fa fa-plus-circle"></i> Add Team</a></label>
	</div>
</div>


<div class="form-group"> 
	{!! Form::label('files', 'Files', ['class' => 'col-sm-2 control-label']) !!}
	<div class="col-sm-10">
		{!! Form::file('files', null, ['class' => 'form-control',]) !!}
		<p class="help-block">Please upload any associated files for this tournament.</p>
	</div>
</div>