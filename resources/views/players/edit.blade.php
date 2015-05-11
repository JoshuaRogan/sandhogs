@extends('skeleton.base')
@extends('skeleton.default_header')
@extends('skeleton.default_footer')

@section('title', 'Dashboard - Coaches')
@section('description', 'Make changes to the the coaching staff of the East Coast Sandhogs.')
@section('pageclass', 'page-dashboard page-db-players')

@section('styles')
	@parent
@stop

@section('lazyscripts')
	@parent
@stop


@section('content')
<div class="jumbotron">
  <div class="container">
    	
  		<div class="row"> 
  			<div class="col-sm-2 hidden-xs">
  				<div class="center-block"><i class="fa fa-user fa-5x font-primary"></i></div>
  			</div>
	  		<div class="col-sm-10"> 
	    		<h2> East Coast Sandhogs Players Editing </h2>
				<p> Use this page to update any player in the Sandhogs Organization</p>
			</div>
		</div> 
  </div>
</div>


<div class="container">
	<h3><i class="fa fa-user-plus"></i> Edit Player</h3>
	<p class="lead"> Use this form to <strong>edit</strong> an <strong>existing</strong> player for the East Coast Sandhogs.</p> 

	<div class="row"> 
		<div class="col-xs-12"> 
			<div class="panel panel-primary">

				<div id="create-new-coach" class="panel-heading"><strong>Edit Coach</strong></div>
				
				<div class="panel-body">
					{!! Form::model($player, ['route' => ['player.update', $player->slug], 'method' => 'PATCH', 'class' => 'form-horizontal']) !!}
						@include('players.form')
						{!! Form::submit("Update Player", ['class'=>'btn btn-primary pull-right']) !!}
					{!! Form::close() !!}

					{!! Form::open(['method' => 'DELETE', 'route' => ['staff.destroy', $player->slug]])!!}
						{!! Form::submit("Delete Player", ['class'=>'btn btn-danger pull-left']) !!}
					{!! Form::close()!!}
				</div>
			</div>
		</div>
	</div>

</div>
@stop
