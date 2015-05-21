@section('header')
<nav class="navbar navbar-fixed-top navbar-default" role="navigation">
  <div class="container">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
          <span class="sr-only">Toggle navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="/home"><img src="/img/fielder-og.png" height="40" alt='logo'></a>
    </div>


    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">

          <ul class="nav navbar-nav">
            <li><a href="/home">Home</a></li>
            <li><a href="/about">About</a></li>
            <li><a href="/event">Schedule</a></li>

            <li class="dropdown">
				<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Teams<span class="caret"></span></a>
				<ul class="dropdown-menu" role="menu">
          @foreach(App\Team::all()->sortBy('name') as $team)
            <li><a href="{{route('team.show', [$team->slug])}}">{{$team->name}}</a></li>
          @endforeach
          <li class="divider"></li>
           <li><a href="{{route('team.index')}}">All Teams</a></li>
				</ul>
        </li>          
          </ul>

          <ul class="nav navbar-nav navbar-right">
            <li><a href="/coaches">Staff</a></li>  
            <li><a href="/contact">Contact</a></li>
            <li><a href="/dashboard"><i class="fa fa-cog hidden-xs"></i><span class="visible-xs">Dashboard</span></a></li>
          </ul>


        </div>
  </div>
</nav>
@stop