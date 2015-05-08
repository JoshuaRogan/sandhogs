<div class="form-group">
	<label for="{{$id}}" class="col-sm-2 control-label">{{$label}}@if(isset($required))<span class="font-red">*</span>@endif </label>
	<div class="col-sm-10">
	 	<input type="{{$type or 'text'}}" class="form-control" id="{{$id}}" placeholder="{{$placeholder or ""}}" 
	 	@if(isset($value)) value="{{$value}}" @endif

	 	@if(isset($required)) required @endif 
	 	
	 	@if(isset($disabled)) disabled @endif

	 	>
	</div>
 </div>