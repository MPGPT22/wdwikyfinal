@extends('main')

@section('stylesheet')

  <link rel="stylesheet" href="{{asset('plugins/nvd3/nvd3.min.css')}}">
  <link rel="stylesheet" href="{{asset('plugins/jquery-jvectormap/jquery-jvectormap.min.css')}}">
  <link rel="stylesheet" href="{{asset('plugins/bootstrap-calendar/css/bootstrap_calendar.css')}}">
  <link rel="stylesheet" href="{{asset('plugins/gritter/css/jquery.gritter.css')}}">
  <link rel="stylesheet" type="text/css" href="{{asset('css/frontend/style_edite.css')}}">

@endsection


@section('content')

<div class="parallax" style="background-image: url({{asset('img/sample.png')}});">
  <div>
  <h2 class="title">Welcome to</h2>
  <h1 class="title">World Dawn Wiki</h1>
  <p class="lead">Here you can get any information about the developement of the game and get to know what was added/modified lately.</p>
  <p class="lead">The GameMaster hopes that you like this little present.</p>
  </div>
</div>
  
<div class="container">

            <h2 class="title padding-ver-1-5 animated fadeIn">Latest Addictions</h2>

            <div class="row padding-ver-2 animated fadeIn">
              <div class="col-md-2 col-md-offset-2">

            <div class="panel panel-inverse" data-sortable-id="ui-widget-5" data-init="true">
              <div class="panel-heading ui-sortable-handle">
                <h4 class="panel-title"><span class="label label-success m-r-10 pull-left">NEW</span> Nome</h4>
              </div>
              <div class="panel-body">
                <i class="ra ra-crossed-swords ra-5x"></i>
              </div>
              <div class="hljs-wrapper">
                <pre>
                  <code class="html hljs xml">
                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                  <br>
                  <button class="btn btn-info">Click</button>
                  </code>
                </pre>
              </div>
            </div>
            </div>
              
            </div>


            <h2 class="title padding-ver-0-5 animated zoomIn">Play in the test area now!</h2>

            <div class="row padding-ver-2">
                <div class="col-md-6">
                    <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">

                    <!-- Wrapper for slides -->
                    <div class="carousel-inner" role="listbox">
                      <div class="item active">
                        <img src="{{asset('img/sample.png')}}" alt="...">
                        <div class="carousel-caption">
                          ...
                        </div>
                      </div>
                      <div class="item">
                        <img src="{{asset('img/sample.png')}}" alt="...">
                        <div class="carousel-caption">
                          ...
                        </div>
                      </div>
                      <div class="item">
                        <img src="{{asset('img/sample.png')}}" alt="...">
                        <div class="carousel-caption">
                          ...
                        </div>
                      </div>
                    </div>

                    <!-- Controls -->
                    <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
                      <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                      <span class="sr-only">Previous</span>
                    </a>
                    <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
                      <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                      <span class="sr-only">Next</span>
                    </a>
                  </div>
                </div>
                <div class="col-lg-5 col-lg-offset-1 col-md-6 padding-top-3">
                  <div class="title"><a class="btn btn-default" href="#">Windows</a></div>
                  <br>
                  <div class="title"><a class="btn btn-default" href="#">Mac</a></div>
                  <br>
                  <div class="title"><a class="btn btn-default" href="#">Android</a></div>
                  <br>
                  <div class="title"><a class="btn btn-default" href="#">Browser</a></div>
                </div>
            </div>
          </div>
@endsection
