@section('styles')
	@parent
@stop

@section('lazyscripts')
	@parent
@stop

<div class="form-group {{ $errors->has('name') ? 'has-error' : '' }}"> 
	{!! Form::label('name', 'Team Name*', ['class' => 'col-sm-2 control-label']) !!}
	<div class="col-sm-10">
		{!! Form::text('name', null, ['class' => 'form-control', 'placeholder' => 'e.g. 9U', 'required'=>'required']) !!}
		{!! $errors->first('name', '<span class="help-block">:message</span>')!!}
	</div>
</div>

<div class="form-group {{ $errors->has('location') ? 'has-error' : '' }}"> 
	{!! Form::label('year', 'Year*', ['class' => 'col-sm-2 control-label']) !!}
	<div class="col-sm-10">
		{!! Form::text('year', 2015, ['class' => 'form-control', 'placeholder' => 'e.g. 2015', 'required'=>'required']) !!}
		{!! $errors->first('year', '<span class="help-block">:message</span>')!!}
	</div>
</div>

<div class="form-group {{ $errors->has('location') ? 'has-error' : '' }}"> 
	{!! Form::label('description', 'Team Description:', ['class' => 'col-sm-2 control-label']) !!}
	<div class="col-sm-10">
		{!! Form::textarea('description', null, ['class' => 'form-control', 'placeholder' => 'e.g. Team for baseball players 9 or under.', 'rows'=>3]) !!}
		{!! $errors->first('description', '<span class="help-block">:message</span>')!!}
	</div>
</div>

<div class="form-group">
	<label for="coaches" class="col-sm-2 control-label">Coach Pool</label>
	<div class="col-sm-10" id="coaches">
		
		<div>
			<div> 

		       @foreach ($team->coaches as $coach)
		        <label class="checkbox-inline">
		           <input checked name="coaches[]" type="checkbox" value="{{$coach->id}}">
		           {{$coach->full_name}}
		        </label>
		        @endforeach

		        @foreach (App\Coach::all()->diff($team->coaches)->sortBy('last') as $coach)
		        <label class="checkbox-inline">
		           <input name="coaches[]" type="checkbox" value="{{$coach->id}}">
		           {{$coach->full_name}}
		        </label>
		        @endforeach
		        
		    </div>
	    </div>
		<a href="{{route('staff.create')}}" class="checkbox-inline"><i class="fa fa-plus-circle"></i> Add Coach</a></label>
	</div>
</div>

<div class="form-group">
	<label for="players" class="col-sm-2 control-label">Player Pool</label>
	<div class="col-sm-10" id="players">
		<div>
			<div> 

				@foreach ($team->players as $player)
		        <label class="checkbox-inline">
		           <input checked name="players[]" type="checkbox" value="{{$player->id}}">
		           {{$player->full_name}}
		        </label>
		        @endforeach

		        @foreach (App\Player::all()->diff($team->players)->sortBy('last') as $player)
		        <label class="checkbox-inline">
		           <input name="players[]" type="checkbox" value="{{$player->id}}">
		           {{$player->full_name}}
		        </label>
		        @endforeach

		    </div>
	    </div>
		<a href="{{route('player.create')}}" class="checkbox-inline"><i class="fa fa-plus-circle"></i> Add Player</a></label>
	</div>
</div>

<div class="form-group">
	<label for="events" class="col-sm-2 control-label">Event Pool</label>
	<div class="col-sm-10" id="events">
		
		<div>
			<div> 
				@foreach ($team->events as $event)
		        <label class="checkbox-inline">
		           <input checked name="events[]" type="checkbox" value="{{$event->id}}">
		           {{$event->name}}
		        </label>
		        @endforeach

		        @foreach (App\Event::all()->diff($team->events)->sortBy('name') as $event)
		        <label class="checkbox-inline">
		           <input name="events[]" type="checkbox" value="{{$event->id}}">
		           {{$event->name}}
		        </label>
		        @endforeach
		    </div>
	    </div>
		<a href="{{route('event.create')}}" class="checkbox-inline"><i class="fa fa-plus-circle"></i> Add Event</a></label>
	</div>
</div>




<div class="form-group"> 
	{!! Form::label('files', 'Files', ['class' => 'col-sm-2 control-label']) !!}
	<div class="col-sm-10">
		{!! Form::file('files', null, ['class' => 'form-control',]) !!}
		<p class="help-block">Please upload any associated files for this team.</p>
	</div>
</div>