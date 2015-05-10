@extends('skeleton.base')
@extends('skeleton.default_header')
@extends('skeleton.default_footer')

@section('title', 'Dashboard - Coaches')
@section('description', 'Make changes to the the coaching staff of the East Coast Sandhogs.')
@section('pageclass', 'page-dashboard page-db-coaches')

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
  				<div class="center-block"><i class="fa fa-briefcase fa-5x font-primary"></i></div>
  			</div>
	  		<div class="col-sm-10"> 
	    		<h2> East Coast Sandhogs Coaches Editing </h2>
				<p> Use this page to update the coaching staff of the East Coast Sandhogs</p>
			</div>
		</div> 
  </div>
</div>


<div class="container">
	<h3><i class="fa fa-user-plus"></i> Edit Coach</h3>
	<p class="lead"> Use this form to <strong>edit</strong> an <strong>existing</strong> coach for the East Coast Sandhogs.</p> 

	<div class="row"> 
		<div class="col-xs-12"> 
			<div class="panel panel-primary">

				<div id="create-new-coach" class="panel-heading"><strong>Edit Coach</strong></div>
				
				<div class="panel-body">
					{!! Form::model($coach, ['route' => ['staff.update', $coach->slug], 'method' => 'PATCH', 'class' => 'form-horizontal']) !!}
						@include('coaches.form', ['btn'=>'Update Coach'])
					{!! Form::close() !!}

					{!! Form::open(['method' => 'DELETE', 'route' => ['staff.destroy', $coach->slug]])!!}
						{!! Form::submit("Delete Coach", ['class'=>'btn btn-danger pull-left']) !!}
					{!! Form::close()!!}
				</div>
			</div>
		</div>
	</div>

</div>
@stop
