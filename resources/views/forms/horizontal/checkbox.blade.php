@if(!isset($inline)) <div>@endif
  <label class="@if(isset($inline)) checkbox-inline @else checkbox @endif">
    <input type="checkbox" id="{{$id}}" value="{{$id}}" aria-label="{{$label or ''}}"> {{$label or ''}}
  </label>
@if(!isset($inline)) </div>@endif