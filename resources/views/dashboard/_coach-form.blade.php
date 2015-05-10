{!! Form::model($coach, ['route' => ['staff.update', $coach->slug], 'method' => 'PATCH', 'class' => 'form-horizontal']) !!}
		{{-- @include("forms.horizontal.input", ['id' => 'first', 'label'=> 'First Name', 'placeholder'=>'e.g. John', 'required'=> true]) --}}
		<div class="form-group"> 
			{!! Form::label('first', 'First Name', ['class' => 'col-sm-2 control-label']) !!}
			<div class="col-sm-10">
				{!! Form::text('first', null, ['class' => 'form-control', 'placeholder' => 'e.g. John', 'required'=> 'required']) !!}
			</div>
		</div>
{!! Form::close() !!}