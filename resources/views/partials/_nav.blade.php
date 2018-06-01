<nav class="navbar navbar-default">
          <div class="container-fluid">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
              <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
              </button>
              <a class="navbar-brand" href="/">WDWiky</a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
              <ul class="nav navbar-nav">
                <li class="dropdown">
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Characters <span class="caret"></span></a>
                  <ul class="dropdown-menu force-list-style">
                    <li><a href="#">Main</a></li>
                    <li><a href="#">Secundary</a></li>
                    <li><a href="#">Extra</a></li>
                    <li role="separator" class="divider"></li>
                    <li><a href="#">Bosses</a></li>
                    <li><a href="#">Enemies</a></li>
                    <li role="separator" class="divider"></li>
                    <li><a href="#">Secrets</a></li>
                  </ul>
                </li>
                <li class="dropdown">
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">W.A.I <span class="caret"></span></a>
                  <ul class="dropdown-menu force-list-style">
                    <li><a href="#">Weapons</a></li>
                    <li><a href="#">Armors</a></li>
                    <li><a href="#">Items</a></li>
                  </ul>
                </li>
                <li class="dropdown">
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">S.S.S <span class="caret"></span></a>
                  <ul class="dropdown-menu force-list-style">
                    <li><a href="#">Spells</a></li>
                    <li><a href="#">Skills</a></li>
                    <li><a href="#">States</a></li>
                  </ul>
                </li>
                <li><a href="#">History/Maps</a></li>
                <li><a href="/about">About</a></li>
                <li><a href="/contact">Contacts</a></li>
              </ul>
              <ul class="nav navbar-nav navbar-right">
                @guest
                    <li><a href="{{ route('login') }}">Login</a></li>
                    <li><a href="{{ route('register') }}">Register</a></li>
                @else
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false" aria-haspopup="true" v-pre>
                            @if(Auth::user()&&Auth::user()->isAdmin == 1)
                                {{Auth::user()->name}} | {{Auth::user()->adminRole}}
                            @else
                                {{Auth::user()->name}}
                            @endif


                        </a>

                        <ul class="dropdown-menu force-list-style navbar-text-right">
                            <li>
                                <a href="{{ route('logout') }}"
                                    onclick="event.preventDefault();
                                             document.getElementById('logout-form').submit();">
                                    Logout
                                </a>

                                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                    {{ csrf_field() }}
                                </form>
                            </li>
                        </ul>
                    </li>
                @endguest
              </ul>
              <form class="navbar-form navbar-right">
                <div class="form-group">
                  <input type="text" class="form-control" placeholder="Search">
                </div>
                <button type="submit" class="btn btn-default">Submit</button>
              </form>
            </div><!-- /.navbar-collapse -->
          </div><!-- /.container-fluid -->
        </nav>
