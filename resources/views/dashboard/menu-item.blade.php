<div class="{{$columnSize or 'col-sm-4'}}"> 
	

	@if(false) 
		<div class="ribbon"> 
			<h3>Players: 12</h3>
		</div>

	@endif


	<div> 
		<a href="{{$url}}">
			<h3>  {{$title}} @if(isset($admin)) <i class="fa fa-lock font-concrete pull-right"></i>@endif</h3>
			<div class="center-block grow hidden-xs"><i class="fa {{$icon}} fa-5x grow"></i></div>
		</a>
		<p class="hidden-xs"> 
			@if(isset($approval)) <strong class="font-red"> Pending Admin Approval </strong> <br/> 
			@elseif(isset($admin)) <strong class="font-red"> Admins Only </strong> <br/> @endif
			
			{!!$description or ''!!} 
		</p>
	</div>
</div>