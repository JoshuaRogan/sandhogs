<div class="form-group">
	<label for="{{$id}}" class="col-sm-2 control-label">{{$label}}@if(isset($required))<span class="font-red">*</span>@endif </label>
	<div class="col-sm-10">
	 	<textarea class="form-control" id="{{$id}}" rows="{{$rows or 3}}" placeholder="{{$placeholder or ""}}" @if(isset($required)) required @endif></textarea>
	</div>
 </div>

