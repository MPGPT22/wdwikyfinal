<div id="header" class="header navbar-inverse">
  
  <div class="navbar-header">
    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
      <span class="sr-only">Toggle navigation</span>
      <span class="icon-bar"></span>
      <span class="icon-bar"></span>
      <span class="icon-bar"></span>
    </button>
    <a class="navbar-brand" href="/">WDWiky</a>
  </div>
  <ul class="navbar-nav navbar-right">
    <li>
      <form class="navbar-form">
        <div class="form-group">
          <input type="text" class="form-control" placeholder="Enter keyword">
          <button type="submit" class="btn btn-search"><i class="fa fa-search"></i></button>
        </div>
      </form>
    </li>
    <li class="dropdown navbar-user">
      <a href="#" class="dropdown-toggle" data-toggle="dropdown">
        <span class="d-none d-md-inline">{{Auth::user()->name}} | {{Auth::user()->adminRole}}</span> <b class="caret"></b>
      </a>
      <div class="dropdown-menu dropdown-menu-right" x-placement="bottom-end" style="position: absolute; transform: translate3d(4px, 50px, 0px); top: 0px; left: 0px; will-change: transform;">
        <a href="{{ route('logout') }}"
                                    onclick="event.preventDefault();
                                             document.getElementById('logout-form').submit();" class="dropdown-item">
                                    Logout
                                </a>
                                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                    {{ csrf_field() }}
                                </form>
      </div>
    </li>
  </ul>

</div>
