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

@foreach($coaches as $coach)
<div class="modal fade" id="{{$coach->slug}}" >
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title">Delete Coach</h4>
      </div>
      <div class="modal-body">
        <p>Are you sure you want to delete {{$coach->first}} {{$coach->last}}? </p>
      </div>
      <div class="modal-footer">
        {!! Form::open(['method' => 'DELETE', 'route' => ['staff.destroy', $coach->slug]])!!}
			{!! Form::submit("Delete Coach", ['class'=>'btn btn-danger pull-left']) !!}
		{!! Form::close()!!}


      </div>
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->
@endforeach


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
	<div id="team"> 
		<!-- Show all of the teams -->
		<h3> East Coast Sandhogs Coaching Staff</h3>


		<h3><i class="fa fa-pencil"></i> Edit Current Staff </h3>
		<p class="lead"> Click any coach to view their profile. Click the <i class="fa fa-pencil"></i> icon to edit or click the <i class="fa fa-trash"></i> to delete the coach from the Sandhogs organization. </p>
		<div id="current-roster"> 
			<table class='roster table table-striped'>
			  <thead>
			    <tr>
			      <th>Coach</th>
			      {{-- <th>Teams</th> --}}
			      <th><span class="pull-rigt">Actions</span></th>
			    </tr>
			  </thead>
			  <tbody>
			  @foreach($coaches as $coach)
				<tr>
					<td> <a href="{{ route('staff.show', [$coach->slug] )}} ">{{$coach->first}} {{$coach->last}}</a> </td>
					{{-- <td> 9U (Head Coach), 10U (Assitant Coach), 13U (Assitant Coach) </td> --}}
					<td> 
						<div class="col-xs-6">
							<a href="{{ route('staff.edit', [$coach->slug] )}} "><i class="fa fa-pencil fa-lg"></i></a> 
						</div>

						<div class="col-xs-6">
							<a href="#" data-toggle="modal" data-target="#{{$coach->slug}}"><i class="fa fa-trash fa-lg"></i></a> 
						</div>
					</td>


					


				</tr>
				@endforeach

			  </tbody>
			</table>
		</div>



	</div>

	<h3><i class="fa fa-user-plus"></i> Create Coaches</h3>
	<p class="lead"> Use this form to create a <strong>new coach</strong> for the East Coast Sandhogs</p>

	<div class="row"> 

		<div class="col-xs-12"> 
			<div class="panel panel-primary">
				<div id="create-new-player" class="panel-heading"><strong>Add New Coach</strong></div>
				<div class="panel-body">
					
				{!! Form::open(['route' => ['staff.store'], 'class' => 'form-horizontal']) !!}
						@include('coaches.form', ['btn'=>'Coach Generator'])
					{!! Form::close() !!}
				</div>
			</div>
		</div>
	</div>


</div>
@stop
