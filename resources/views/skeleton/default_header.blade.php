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
                        <li><a href="/team/9u-2015">9U</a></li>
                        <li><a href="/team/10u-2015">10U</a></li>
                        <li><a href="/team/11u-2015">11U</a></li>
                        <li><a href="/team/12u-2015">12U</a></li>
                        <li><a href="/team/13u-2015">13U</a></li>
                        <li><a href="/team/14u-2015">14U</a></li>
                        <li><a href="/team/1516u-2015">15/16U</a></li>
                        <li><a href="/team/17up-2015">17UP</a></li>
                        <li><a href="/team/17ue-2015">17UE</a></li>
                        {{-- <li><a href="/team/scout-team-2015">Scout Team</a></li> --}}
                        <li class="divider"></li>
                        <li><a href="{{route('team.index')}}">All Teams</a> </li>
                    </ul>
                </li>
            </ul>
            <ul class="nav navbar-nav navbar-right">
                <li><a href="/store">Store</a></li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Staff<span class="caret"></span></a>
                    <ul class="dropdown-menu" role="menu"> 
                        <li><a href="/coaches">Front Office</a></li>
                        <li><a href="/team">Coaches</a></li>
                        <li><a href="/advisory-board">Advisory Board</a></li>
                        <li><a href="/off-season-trainers">Off-Season Trainers</a></li>
                    </ul>
                </li>
                <li><a href="/contact">Contact</a></li>
                <li><a href="/dashboard"><i class="fa fa-cog hidden-xs"></i><span class="visible-xs">Dashboard</span></a></li>
            </ul>
        </div>
    </div>
</nav>
@stop