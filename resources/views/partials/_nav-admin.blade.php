<div id="header" class="header navbar-inverse">

  <div class="navbar-header">
    <button type="button" class="navbar-toggle" data-click="sidebar-toggled">
      <span class="sr-only">Toggle navigation</span>
      <span class="icon-bar"></span>
      <span class="icon-bar"></span>
      <span class="icon-bar"></span>
    </button>
    <a class="navbar-brand" href="/"><b>WDWiky</b> Backend</a>
  </div>
  <ul class="navbar-nav navbar-right float-right-now">
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
  </ul>

</div>
