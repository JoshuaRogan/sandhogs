@extends('skeleton.base')
@extends('skeleton.default_header')
@extends('skeleton.default_footer')

@section('title', 'Dashboard - Events')
@section('description', 'Make changes to the events of the East Coast Sandhogs.')
@section('pageclass', 'page-dashboard page-db-events')

@section('styles')
	@parent
@stop

@section('lazyscripts')
	@parent
@stop


@section('content')

@foreach($events as $event)
<div class="modal fade" id="{{$event->slug}}" >
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title">Delete Event</h4>
      </div>
      <div class="modal-body">
        <p>Are you sure you want to delete the event <samp class="font-red font-bold">{{$event->name}}</samp>? </p>
      </div>
      <div class="modal-footer">
        {!! Form::open(['method' => 'DELETE', 'route' => ['event.destroy', $event->slug]])!!}
			{!! Form::submit("Delete Event", ['class'=>'btn btn-danger pull-left']) !!}
		{!! Form::close()!!}
      </div>
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->
@endforeach


@include('dashboard.jumbotron', ['heading' => 'East Coast Sandhogs Events Editing', 'content' => 'Use this page to update events of the East Coast Sandhogs', 'icon'=>'fa-calendar'])




<div class="container">
	<div id="team"> 
		<!-- Show all of the teams -->
		<h3> East Coast Sandhogs Events</h3>


		<h3><i class="fa fa-pencil"></i> Edit Current Events </h3>
		<p class="lead"> Click any event to view their public information. Click the <i class="fa fa-pencil"></i> icon to edit or click the <i class="fa fa-trash"></i> to delete the event from the Sandhogs schedule. </p>
		<div id="current-events" class='scroll-section'> 
			<table class='events table table-striped' >
			  <thead>
			    <tr>
			      <th>Event</th>
			      {{-- <th>Location</th> --}}
			      {{-- <th>Start Date</th> --}}
			      {{-- <th>End Date</th> --}}
			      {{-- <th>Team</th> --}}
			      <th><span class="pull-rigt">Actions</span></th>
			    </tr>
			  </thead>
			  <tbody>
			  @foreach($events->sortBy('name') as $event)

				<tr>
					<td> <a href="{{ route('event.show', [$event->slug] )}} ">{{$event->name}}</a> </td>
					<td> 
						<div class="col-xs-6">
							<a href="{{ route('event.edit', [$event->slug] )}} "><i class="fa fa-pencil fa-lg"></i></a> 
						</div>

						<div class="col-xs-6">
							<a href="#" data-toggle="modal" data-target="#{{$event->slug}}"><i class="fa fa-trash fa-lg"></i></a> 
						</div>
					</td>
				</tr>
				@endforeach

			  </tbody>
			</table>
		</div>

		
	</div>

	<h3><i class="fa fa-user-plus"></i> Create Events</h3>
	<p class="lead"> Use this form to create a <strong>new event</strong> for the East Coast Sandhogs</p>

	<div class="row"> 
		<div class="col-xs-12"> 
			<div class="panel panel-primary">
				<div id="create-new-event" class="panel-heading"><strong>Add New Event</strong></div>
				<div class="panel-body">
					
				{!! Form::model($event = new App\Event, ['route' => ['event.store'], 'class' => 'form-horizontal']) !!}
						@include('events.form')
						{!! Form::submit("Create Event", ['class'=>'btn btn-primary pull-right']) !!}
				{!! Form::close() !!}
				</div>
			</div>
		</div>
	</div>


</div>
@stop
