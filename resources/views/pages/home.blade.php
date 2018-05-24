<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>World Dawm Wiki - Home</title>

    <!-- Animations -->

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/animate.css@3.5.2/animate.min.css" integrity="sha384-OHBBOqpYHNsIqQy8hL1U+8OXf9hH6QRxi0+EODezv82DfnZoV7qoHAZDwMwEJvSw" crossorigin="anonymous">

    <!--Font Aweasome-->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous">

    <!-- Bootstrap -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

    <!-- Style -->

    <link rel="stylesheet" type="text/css" href="{{asset('css/style.css')}}">

    

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>

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
              <a class="navbar-brand" href="#">WDWiky</a>
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
                <li><a href="#">About</a></li>
                <li><a href="#">Contacts</a></li>
              </ul>
              <ul class="nav navbar-nav navbar-right">
                <li><a href="#">Link</a></li>
                <li class="dropdown">
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Dropdown <span class="caret"></span></a>
                  <ul class="dropdown-menu force-list-style">
                    <li><a href="#">Action</a></li>
                    <li><a href="#">Another action</a></li>
                    <li><a href="#">Something else here</a></li>
                    <li role="separator" class="divider"></li>
                    <li><a href="#">Separated link</a></li>
                  </ul>
                </li>
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

        <div class="container">
            <div class="row padding-ver-2">
                <div class="col-lg-5 col-md-6 padding-top-3 animated slideInLeft">
                  <div>
                    <h2 class="title">Welcome to</h2>
                    <h1 class="title">World Dawn Wiki</h1>
                    <p class="title">Here you can get any information about the developement of the game and get to know what was added/modified lately.</p>
                    <p class="title">The GameMaster hopes that you like this little present.</p>
                  </div>
                </div>
                <div class="col-md-6 col-lg-offset-1 animated slideInRight">
                    <img class="home-img-top" src="{{asset('img/sample.png')}}">
                </div>
            </div>

            <h2 class="title padding-ver-0-5 animated zoomIn">Latest Addictions</h2>

            <div class="row padding-ver-2 animated slideInLeft">
              <div class="col-md-2 col-md-offset-2 col-xs-6" >
                <div class="boxes">
                  <i class="fas fa-camera-retro"></i>
                  <hr>
                  <h4>Exemplo</h4> 
                  <a href="#" class="btn btn-default button-margin-bot">Go to Type</a>
                </div>
              </div>
              <div class="col-md-2 col-xs-6">
                <div class="boxes">
                  <i class="fas fa-camera-retro"></i>
                  <hr>
                  <h4>Exemplo</h4> 
                  <a href="#" class="btn btn-default button-margin-bot">Go to Type</a>
                </div>
              </div>
              <div class="col-md-2 col-xs-6">
                <div class="boxes">
                  <i class="fas fa-camera-retro"></i>
                  <hr>
                  <h4>Exemplo</h4> 
                  <a href="#" class="btn btn-default button-margin-bot">Go to Type</a>
                </div>
              </div>
              <div class="col-md-2 col-xs-6">
                <div class="boxes">
                  <i class="fas fa-camera-retro"></i>
                  <hr>
                  <h4>Exemplo</h4> 
                  <a href="#" class="btn btn-default button-margin-bot">Go to Type</a>
                </div>
              </div>
            </div>

            <div class="row padding-bot-2 animated slideInRight">
              <div class="col-md-2 col-md-offset-2 col-xs-6">
                <div class="boxes">
                  <i class="fas fa-camera-retro"></i>
                  <hr>
                  <h4>Exemplo</h4> 
                  <a href="#" class="btn btn-default button-margin-bot">Go to Type</a>
                </div>
              </div>
              <div class="col-md-2 col-xs-6">
                <div class="boxes">
                  <i class="fas fa-camera-retro"></i>
                  <hr>
                  <h4>Exemplo</h4> 
                  <a href="#" class="btn btn-default button-margin-bot">Go to Type</a>
                </div>
              </div>
              <div class="col-md-2 col-xs-6">
                <div class="boxes">
                  <i class="fas fa-camera-retro"></i>
                  <hr>
                  <h4>Exemplo</h4> 
                  <a href="#" class="btn btn-default button-margin-bot">Go to Type</a>
                </div>
              </div>
              <div class="col-md-2 col-xs-6">
                <a href="#">
                <div class="boxes">
                  <i class="fas fa-camera-retro"></i>
                  <hr>
                  <h4>Exemplo</h4> 
                  <a href="#" class="btn btn-default button-margin-bot">Go to Type</a>
                </div>
                </a>
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
        <footer class="footer">
          <div class="container">
            <p class="footer-text">Copirighter</p>
          </div>
          
        </footer>


    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
  </body>
</html>
