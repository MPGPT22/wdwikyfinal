@extends('main')

@section('stylesheet')

  <link rel="stylesheet" href="{{asset('plugins/nvd3/nvd3.min.css')}}">
  <link rel="stylesheet" href="{{asset('plugins/jquery-jvectormap/jquery-jvectormap.min.css')}}">
  <link rel="stylesheet" href="{{asset('plugins/bootstrap-calendar/css/bootstrap_calendar.css')}}">
  <link rel="stylesheet" href="{{asset('plugins/gritter/css/jquery.gritter.css')}}">
  <link rel="stylesheet" type="text/css" href="{{asset('css/frontend/style_edite.css')}}">

@endsection


@section('content')


<div class="parallax" style="background-image: url({{asset('img/sample.png')}});height: 95vh;">
  <div class="centered-parallax-content">
  <h2 class="title">Welcome to</h2>
  <h1 class="title">World Dawn Wiki</h1>
  <p class="lead">Here you can get any information about the developement of the game and get to know what was added/modified lately.</p>
  <p class="lead">The GameMaster hopes that you like this little present.</p>
  </div>
</div>

<div class="container">

            <h2 class="title padding-ver-1-5 animated fadeIn">Latest News and Updates</h2>

            <div class="row padding-bot-2 animated fadeIn">

              <div class="col-md-3">
                <div class="panel panel-inverse boxes" data-sortable-id="ui-widget-5" data-init="true">
                  <div class="panel-heading ui-sortable-handle">
                    <h4 class="panel-title"><span class="label label-success m-r-10 pull-left">NEW</span> Weapon</h4>
                  </div>
                  <div class="panel-body alignThisCenter">
                    <i class="ra ra-crossed-swords ra-5x"></i>
                  </div>
                  <div class="hljs-wrapper">
                    <div class="hljs">
                      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                      <br>
                      <div class="btn-group btn100">
                        <a href="#" class="btn btn-info btn-50 btn-colormode">Know More</a>
                        <a href="#" class="btn btn-success btn-50 btn-colormode ">See all "Class"</a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>

              <div class="col-md-3">
                <div class="panel panel-inverse boxes" data-sortable-id="ui-widget-5" data-init="true">
                  <div class="panel-heading ui-sortable-handle">
                    <h4 class="panel-title"><span class="label label-success m-r-10 pull-left">NEW</span> Fire Magic</h4>
                  </div>
                  <div class="panel-body alignThisCenter">
                    <i class="ra ra-dragon-breath ra-5x" style="color:#cc8484;"></i>
                  </div>
                  <div class="hljs-wrapper">
                    <div class="hljs">
                      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                      <br>
                      <div class="btn-group btn100">
                        <a class="btn btn-info btn-50 btn-colormode btn-colormode">Know More</a>
                        <a class="btn btn-success btn-50 btn-colormode">See all "Class"</a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>

              <div class="col-md-3">
                <div class="panel panel-inverse boxes" data-sortable-id="ui-widget-5" data-init="true">
                  <div class="panel-heading ui-sortable-handle">
                    <h4 class="panel-title"><span class="label label-success m-r-10 pull-left">NEW</span> Water Spell</h4>
                  </div>
                  <div class="panel-body alignThisCenter">
                    <i class="ra ra-droplet ra-5x" style="color:#83b4cc;"></i>
                  </div>
                  <div class="hljs-wrapper">
                    <div class="hljs">
                      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                      <br>
                      <div class="btn-group btn100">
                        <a class="btn btn-info btn-50 btn-colormode">Know More</a>
                        <a class="btn btn-success btn-50 btn-colormode btn-colormode">See all "Class"</a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>

              <div class="col-md-3">
                <div class="panel panel-inverse boxes" data-sortable-id="ui-widget-5" data-init="true">
                  <div class="panel-heading ui-sortable-handle">
                    <h4 class="panel-title"><span class="label label-success m-r-10 pull-left">NEW</span> Air Spell</h4>
                  </div>
                  <div class="panel-body alignThisCenter">
                    <i class="ra ra-incense ra-5x" style="color:#cecece;"></i>
                  </div>
                  <div class="hljs-wrapper">
                    <div class="hljs">
                      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                      <br>
                      <div class="btn-group btn100">
                        <a class="btn btn-info btn-50 btn-colormode">Know More</a>
                        <a class="btn btn-success btn-50 btn-colormode">See all "Class"</a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>

              <div class="col-md-3">
                <div class="panel panel-inverse boxes" data-sortable-id="ui-widget-5" data-init="true">
                  <div class="panel-heading ui-sortable-handle">
                    <h4 class="panel-title"><span class="label label-success m-r-10 pull-left">NEW</span> Earth Spell</h4>
                  </div>
                  <div class="panel-body alignThisCenter">
                    <i class="ra ra-crystal-cluster ra-5x" style="color:#cc9d80;"></i>
                  </div>
                  <div class="hljs-wrapper">
                    <div class="hljs">
                      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                      <br>
                      <div class="btn-group btn100">
                        <a class="btn btn-info btn-50 btn-colormode">Know More</a>
                        <a class="btn btn-success btn-50 btn-colormode">See all "Class"</a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>

              <div class="col-md-3">
                <div class="panel panel-inverse boxes" data-sortable-id="ui-widget-5" data-init="true">
                  <div class="panel-heading ui-sortable-handle">
                    <h4 class="panel-title"><span class="label label-success m-r-10 pull-left">NEW</span> Thunder Spell</h4>
                  </div>
                  <div class="panel-body alignThisCenter">
                    <i class="ra ra-lightning-bolt ra-5x" style="color:#80cacc;"></i>
                  </div>
                  <div class="hljs-wrapper">
                    <div class="hljs">
                      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                      <br>
                      <div class="btn-group btn100">
                        <a class="btn btn-info btn-50 btn-colormode">Know More</a>
                        <a class="btn btn-success btn-50 btn-colormode">See all "Class"</a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>

              <div class="col-md-3">
                <div class="panel panel-inverse boxes" data-sortable-id="ui-widget-5" data-init="true">
                  <div class="panel-heading ui-sortable-handle">
                    <h4 class="panel-title"><span class="label label-success m-r-10 pull-left">NEW</span> Armor</h4>
                  </div>
                  <div class="panel-body alignThisCenter">
                    <i class="ra ra-vest ra-5x"></i>
                  </div>
                  <div class="hljs-wrapper">
                    <div class="hljs">
                      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                      <br>
                      <div class="btn-group btn100">
                        <a class="btn btn-info btn-50 btn-colormode">Know More</a>
                        <a class="btn btn-success btn-50 btn-colormode">See all "Class"</a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>

              <div class="col-md-3">
                <div class="panel panel-inverse boxes" data-sortable-id="ui-widget-5" data-init="true">
                  <div class="panel-heading ui-sortable-handle">
                    <h4 class="panel-title"><span class="label label-success m-r-10 pull-left">NEW</span> Boss</h4>
                  </div>
                  <div class="panel-body alignThisCenter">
                    <i class="ra ra-monster-skull ra-5x"></i>
                  </div>
                  <div class="hljs-wrapper">
                    <div class="hljs">
                      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                      <br>
                      <div class="btn-group btn100">
                        <a class="btn btn-info btn-50 btn-colormode">Know More</a>
                        <a class="btn btn-success btn-50 btn-colormode">See all "Class"</a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>


            </div>
          </div>
          <div id="myCarousel" class="carousel slide" data-ride="carousel">
            <!-- Wrapper for slides -->
            <div class="carousel-inner ">
              <div class="item parallax active" style="background-image: url({{asset('img/sample.png')}});height: 40vh;">
              </div>

              <div class="item parallax" style="background-image: url({{asset('img/sample.png')}});height: 40vh;">
              </div>

              <div class="item parallax" style="background-image: url({{asset('img/sample.png')}});height: 40vh;">
              </div>
            </div>
            <div class="centered-parallax-content">
            <h2 class="title">Try out the Testing Area</h2>
            <br>
            @guest
              <div class="btn-group btn100">
                <a class="btn btn-primary btn33 btn-colormode"><i class="fab fa-windows"></i> Windows</a>
                <a class="btn btn-info btn34 btn-colormode"><i class="fab fa-apple"></i> Mac</a>
                <a class="btn btn-lime btn33 btn-colormode"><i class="fab fa-android"></i> Android</a>
              </div>
            @else
              <div class="btn-group btn100">
                <a class="btn btn-primary btn25 btn-colormode"><i class="fab fa-windows"></i> Windows</a>
                <a class="btn btn-info btn25 btn-colormode"><i class="fab fa-apple"></i> Mac</a>
                <a class="btn btn-lime btn25 btn-colormode"><i class="fab fa-android"></i> Android</a>
                <a class="btn btn-danger btn25 btn-colormode"><i class="fab fa-chrome"></i> Browser</a>
              </div>
            @endguest

            </div>

          </div>
@endsection
