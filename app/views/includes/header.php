<nav class="navbar navbar-default" role="navigation">
  <div class="container">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
          <span class="sr-only">Toggle navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="/home"><img src="img/fielder-og.png" height="40px" alt='logo'></a>
    </div>


    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">

          <ul class="nav navbar-nav">
            <li <?php if(substr($page, 0, strlen($page)-4) == "home") echo "class='active'"; ?> ><a href="/home">Home</a></li>
            <li <?php if(substr($page, 0, strlen($page)-4) == "about") echo "class='active'"; ?> ><a href="/about">About</a></li>
            <li <?php if(substr($page, 0, strlen($page)-4) == "teams") echo "class='active'"; ?> ><a href="/teams">Teams</a></li>
            <li <?php if(substr($page, 0, strlen($page)-4) == "schedule") echo "class='active'"; ?> ><a href="/schedule">Schedule</a></li>
            <li <?php if(substr($page, 0, strlen($page)-4) == "staff") echo "class='active'"; ?> ><a href="/staff">Staff</a></li>
            <li <?php if(substr($page, 0, strlen($page)-4) == "store") echo "class='active'"; ?> ><a href="/store">Store</a></li>
            <li <?php if(substr($page, 0, strlen($page)-4) == "contact") echo "class='active'"; ?> ><a href="/contact">Contact</a></li>
          </ul>


        </div>
  </div>
</nav>