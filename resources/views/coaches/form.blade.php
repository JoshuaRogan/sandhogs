	

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
		{!! Form::label('email', 'Email*', ['class' => 'col-sm-2 control-label']) !!}
		<div class="col-sm-10">
			{!! Form::email('email', null, ['class' => 'form-control', 'placeholder' => 'e.g. JohnDoe@gmail.com', 'required'=>'required']) !!}
			{!! $errors->first('email', '<span class="help-block">:message</span>')!!}
		</div>
	</div>


	<div class="form-group"> 
		{!! Form::label('description', 'Description', ['class' => 'col-sm-2 control-label']) !!}
		<div class="col-sm-10">
			{!! Form::textarea('description', null, ['class' => 'form-control', 'placeholder' => 'e.g. John is an expert pitching coach.', 'rows'=>3]) !!}
		</div>
	</div>

	<div class="form-group">
		<label for="teams" class="col-sm-2 control-label">Teams</label>
		<div class="col-sm-10" id="teams">
			<div>
				<div>
			       @foreach ($coach->teams as $team)
			        <label class="checkbox-inline">
			           <input checked name="teams[]" type="checkbox" value="{{$team->id}}">
			           {{$team->name}}
			        </label>
			        @endforeach

			        @foreach (App\Team::all()->diff($coach->teams) as $team)
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
		{!! Form::label('img-url', 'Profile Image', ['class' => 'col-sm-2 control-label']) !!}
		<div class="col-sm-10">
			{!! Form::file('img-url', null, ['class' => 'form-control',]) !!}
			<p class="help-block">Please upload an image for the profile picture of this coach. </p>
		</div>
	</div>

	{!! Form::submit($btn, ['class'=>'btn btn-primary pull-right']) !!}



