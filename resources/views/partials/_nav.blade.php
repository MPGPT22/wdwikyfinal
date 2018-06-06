<div id="header" class="header navbar-default">

  <div class="navbar-header">
    <button type="button" class="navbar-toggle" data-click="sidebar-toggled">
      <span class="sr-only">Toggle navigation</span>
      <span class="icon-bar"></span>
      <span class="icon-bar"></span>
      <span class="icon-bar"></span>
    </button>
    <a class="navbar-brand" href="/"><b>WDWiky</b></a>
  </div>
  <ul class="navbar-nav navbar-right float-right-now">
    <li>
      <form class="navbar-form">
        <div class="form-group">
          <input type="text" class="form-control" placeholder="Enter keyword">
          <button type="submit" class="btn btn-search"><i class="fa fa-search"></i></button>
        </div>
      </form>
    </li>
    <li>
      <button id="showSideBar" class="btn navbar-btn substitute">Click</button>
    </li>
    @guest
      <li>
        <a href="{{route('login')}}">Login</a>
      </li>
      <li>
        <a href="{{route('register')}}">Register</a>
      </li>
    @else
      <li class="dropdown navbar-user">
        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
          <span class="d-md-inline">{{Auth::user()->name}} | {{Auth::user()->adminRole}}</span> <b class="caret"></b>
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

    @endguest

  </ul>

</div>
