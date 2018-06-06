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
      <button id="showSideBar" class="btn navbar-btn substitute noBackground"><i class="fas fa-globe"></i></button>
    </li>
    @guest

      <li class="dropdown navbar-user">
        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
          <span class="d-md-inline">Login</span> <b class="caret"></b>
        </a>
        <div class="dropdown-menu dropdown-menu-right" x-placement="bottom-end" style="width: 250px; padding:10px; position: absolute; transform: translate3d(-177px, 50px, 0px); top: 0px; left: 0px; will-change: transform;">
          
          <form method="POST" action="{{ route('login') }}">
                        {{ csrf_field() }}

                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <div class="input-group">
                                <span class="input-group-addon input-group-prepend" id="basic-addon1">@</span>
                                <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required autofocus>

                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">

                            <div class="input-group">
                                <span class="input-group-addon input-group-prepend" id="basic-addon1"><i class="fa fa-lock"></i></span>
                                <input id="password" type="password" class="form-control" name="password" required>

                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-6">
                                <div class="checkbox">
                                    <label>
                                        <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}> Remember Me
                                    </label>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <a class="btn btn-link" href="{{ route('password.request') }}">
                                    Forgot Your Password?
                                </a>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-8 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    Login
                                </button>

                                
                            </div>
                        </div>
                    </form>
        </div>
      </li>

      {{-- <li>
        <a href="{{route('login')}}">Login</a>
      </li>
      <li>
        <a href="{{route('register')}}">Register</a>
      </li> --}}
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
