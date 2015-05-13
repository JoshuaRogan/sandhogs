@extends('skeleton.base')
@extends('skeleton.default_header')
@extends('skeleton.default_footer')

@section('title', 'Dashboard - Events')
@section('description', 'Make changes to any of the East Coast Sandhogs events.')
@section('pageclass', 'page-dashboard page-db-event')

@section('styles')
	@parent
@stop

@section('lazyscripts')
	@parent
@stop


@section('content')

@include('dashboard.jumbotron', ['heading' => 'East Coast Sandhogs Events Editing', 'content' => 'Use this page to update any event in the Sandhogs Organization', 'icon'=>'fa-calendar'])

<div class="container">
	<h3><i class="fa fa-user-plus"></i> Edit Event</h3>
	<p class="lead"> Use this form to <strong>edit</strong> an <strong>existing</strong> event for the East Coast Sandhogs.</p> 

	<div class="row"> 
		<div class="col-xs-12"> 
			<div class="panel panel-primary">

				<div id="create-new-coach" class="panel-heading"><strong>Edit Event</strong></div>
				
				<div class="panel-body">
					{!! Form::model($event, ['route' => ['event.update', $event->slug], 'method' => 'PATCH', 'class' => 'form-horizontal']) !!}
						@include('events.form')
						{!! Form::submit("Update Event", ['class'=>'btn btn-primary pull-right']) !!}
					{!! Form::close() !!}

					{!! Form::open(['method' => 'DELETE', 'route' => ['event.destroy', $event->slug]])!!}
						{!! Form::submit("Delete Event", ['class'=>'btn btn-danger pull-left']) !!}
					{!! Form::close()!!}
				</div>
			</div>
		</div>
	</div>

</div>
@stop
