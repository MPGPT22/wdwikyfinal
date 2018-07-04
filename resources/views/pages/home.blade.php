@extends('main')

@section('stylesheet')

  <link rel="stylesheet" href="{{asset('plugins/nvd3/nvd3.min.css')}}">
  <link rel="stylesheet" href="{{asset('plugins/jquery-jvectormap/jquery-jvectormap.min.css')}}">
  <link rel="stylesheet" href="{{asset('plugins/bootstrap-calendar/css/bootstrap_calendar.css')}}">
  <link rel="stylesheet" href="{{asset('plugins/gritter/css/jquery.gritter.css')}}">
  <link rel="stylesheet" type="text/css" href="{{asset('css/frontend/style_edite.css')}}">

@endsection


@section('content')


<div class="parallax" style="background-image: url({{asset('img/upper_paralax.png')}});height: 95vh;">
  <div class="centered-parallax-content">
  <h2 class="title">Welcome to</h2>
  <h1 class="title">World Dawn Wiki</h1>
  <p class="lead">Here you can get some information about the developement of the game and get to know what has been added/modified lately.</p>
  <p class="lead">The GameMaster hopes that you like this little gift.</p>
  </div>
</div>

<div class="container">

            <h2 class="title padding-ver-1-5 animated fadeIn">Latest News and Updates</h2>

            <div class="row padding-bot-2 animated fadeIn">

              @if (count($characters) == 0 && count($spells) == 0 && count($skills) == 0 && count($states) == 0 && count($armors) == 0 && count($items) == 0 && count($weapons) == 0)

                <div class="col-md-12">
                  <h4 class="lead">Unfortunatly we haven't added any content, please come back later.</h4>
                </div>

              @else

              @if (count($characters) > 0 )
                @foreach ($characters as $character)
                  <div class="col-md-3">
                    <div class="panel panel-inverse boxes" data-sortable-id="ui-widget-5" data-init="true">
                      <div class="panel-heading ui-sortable-handle">
                        <h4 class="panel-title">@if ($now->diffInDays($character->created_at, false) > -7 )
                            <span class="label label-success m-r-10 pull-left">NEW</span>
                          @endif {{$character->type}} - {{$character->name}}</h4>
                      </div>
                      <div class="panel-body alignThisCenter">
                        @if ($character->type == 'Main' or $character->type == 'Secundary' or $character->type == 'Extra' or $character->type == 'Secret')
                         @if ($character->type == 'Secret')
                           <i class="fas fa-question fa-3x"></i>

                         @elseif($character->type == 'Extra')
                           <i class="ra ra-player ra-5x" style="color:#bbb"></i>
                         @else
                           <i class="ra ra-player ra-5x"></i>
                         @endif

                        @else
                        <i class="ra ra-monster-skull ra-5x"></i>
                        @endif

                      </div>
                      <div class="hljs-wrapper">
                        <div class="hljs">
                          <p>{{str_limit($character->descriptionInicial, 50) }}</p>
                          <br>
                          <div class="btn-group btn100">
                            <a href="{{route('characters.show.public',$character->id)}}" class="btn btn-info btn-50 btn-colormode">Know More</a>
                            <a href="{{route('characters.public')}}" class="btn btn-primary btn-50 btn-colormode">Characters List</a>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                @endforeach
              @endif

              @if (count($skills) > 0 )
                  <div class="col-md-3">
                    <div class="panel panel-inverse boxes" data-sortable-id="ui-widget-5" data-init="true">
                      <div class="panel-heading ui-sortable-handle">
                        <h4 class="panel-title">@if ($now->diffInDays($skills->created_at, false) > -7 )
                            <span class="label label-success m-r-10 pull-left">NEW</span>
                          @endif {{$skills->name}}</h4>
                      </div>
                      <div class="panel-body alignThisCenter">
                        @if ($skills->element == 'Physical')
                          <i class="ra ra-divert"></i>
                        @elseif ($skills->element == 'Fire')
                          <i class="ra ra-dragon-breath ra-5x" style="color:#cc8484;"></i>
                        @elseif ($skills->element == 'Water')
                          <i class="ra ra-droplet ra-5x" style="color:#83b4cc;"></i>
                        @elseif ($skills->element == 'Wind')
                          <i class="ra ra-incense ra-5x" style="color:#cecece;"></i>
                        @elseif ($skills->element == 'Earth')
                          <i class="ra ra-crystal-cluster ra-5x" style="color:#cc9d80;"></i>
                        @elseif ($skills->element == 'Thunder')
                          <i class="ra ra-lightning-bolt ra-5x" style="color:#80cacc;"></i>
                        @elseif ($skills->element == 'Light')
                          <i class="ra ra-sunbeams ra-5x" style="color:#eddea3;"></i>
                        @elseif ($skills->element == 'Darkness')
                          <i class="ra ra-sunbeams ra-5x" style="color:#282828;"></i>
                        @endif

                      </div>
                      <div class="hljs-wrapper">
                        <div class="hljs">
                          <p>{{str_limit($skills->descriptionInicial, 50)}}</p>
                          <br>
                          <div class="btn-group btn100">
                            <a href="{{route('skills.show.public',$skills->id)}}" class="btn btn-info btn-50 btn-colormode">Know More</a>
                            <a href="{{route('skills.public')}}" class="btn btn-primary btn-50 btn-colormode">Skill List</a>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
              @endif

              @if (count($spells) > 0 )
                  <div class="col-md-3">
                    <div class="panel panel-inverse boxes" data-sortable-id="ui-widget-5" data-init="true">
                      <div class="panel-heading ui-sortable-handle">
                        <h4 class="panel-title">@if ($now->diffInDays($spells->created_at, false) > -7 )
                            <span class="label label-success m-r-10 pull-left">NEW</span>
                          @endif {{$spells->name}}</h4>
                      </div>
                      <div class="panel-body alignThisCenter">
                        @if ($spells->element == 'Physical')
                          <i class="ra ra-divert"></i>
                        @elseif ($spells->element == 'Fire')
                          <i class="ra ra-dragon-breath ra-5x" style="color:#cc8484;"></i>
                        @elseif ($spells->element == 'Water')
                          <i class="ra ra-droplet ra-5x" style="color:#83b4cc;"></i>
                        @elseif ($spells->element == 'Wind')
                          <i class="ra ra-incense ra-5x" style="color:#cecece;"></i>
                        @elseif ($spells->element == 'Earth')
                          <i class="ra ra-crystal-cluster ra-5x" style="color:#cc9d80;"></i>
                        @elseif ($spells->element == 'Thunder')
                          <i class="ra ra-lightning-bolt ra-5x" style="color:#80cacc;"></i>
                        @elseif ($spells->element == 'Light')
                          <i class="ra ra-sunbeams ra-5x" style="color:#eddea3;"></i>
                        @elseif ($spells->element == 'Darkness')
                          <i class="ra ra-sunbeams ra-5x" style="color:#282828;"></i>
                        @endif

                      </div>
                      <div class="hljs-wrapper">
                        <div class="hljs">
                          <p>{{str_limit($spells->descriptionInicial, 50)}}</p>
                          <br>
                          <div class="btn-group btn100">
                            <a href="{{route('spells.show.public',$spells->id)}}" class="btn btn-info btn-50 btn-colormode">Know More</a>
                            <a href="{{route('spells.public')}}" class="btn btn-primary btn-50 btn-colormode">Spell List</a>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
              @endif

              @if (count($states) > 0 )
                  <div class="col-md-3">
                    <div class="panel panel-inverse boxes" data-sortable-id="ui-widget-5" data-init="true">
                      <div class="panel-heading ui-sortable-handle">
                        <h4 class="panel-title">@if ($now->diffInDays($states->created_at, false) > -7 )
                            <span class="label label-success m-r-10 pull-left">NEW</span>
                          @endif {{$states->name}}</h4>
                      </div>
                      <div class="panel-body alignThisCenter">
                          <i class="ra ra-level-three-advanced ra-5x"></i>

                      </div>
                      <div class="hljs-wrapper">
                        <div class="hljs">
                          <p>{{str_limit($states->descriptionInicial, 50)}}</p>
                          <br>
                          <div class="btn-group btn100">
                            <a href="{{route('states.show.public')}}" class="btn btn-info btn-50 btn-colormode">Know More</a>
                            <a href="{{route('states.public')}}" class="btn btn-primary btn-50 btn-colormode">States List</a>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
              @endif

              @if (count($weapons) > 0 )
                  <div class="col-md-3">
                    <div class="panel panel-inverse boxes" data-sortable-id="ui-widget-5" data-init="true">
                      <div class="panel-heading ui-sortable-handle">
                        <h4 class="panel-title">@if ($now->diffInDays($weapons->created_at, false) > -7 )
                            <span class="label label-success m-r-10 pull-left">NEW</span>
                          @endif {{$weapons->name}}</h4>
                      </div>
                      <div class="panel-body alignThisCenter">
                        @if ($weapons->type == 'Dagger')
                          <i class="ra ra-plain-dagger"></i>
                        @elseif ($weapons->type == 'Sword')
                          <i class="ra ra-sword"></i>
                        @elseif ($weapons->type == 'Flail')
                          <i class="ra ra-spiked-mace"></i>
                        @elseif ($weapons->type == 'Axe')
                          <i class="ra ra-axe"></i>
                        @elseif ($weapons->type == 'Whip')
                          <i class="ra ra-vine-whip"></i>
                        @elseif ($weapons->type == 'Cane')
                          <i class="ra ra-crystal-wand"></i>
                        @elseif ($weapons->type == 'Bow')
                          <i class="ra ra-archer"></i>
                        @elseif ($weapons->type == 'Crossbow')
                          <i class="ra ra-crossbow"></i>
                        @elseif ($weapons->type == 'Gun')
                          <i class="ra ra-musket"></i>
                        @elseif ($weapons->type == 'Claw')
                          <i class="ra ra-flaming-claw"></i>
                        @elseif ($weapons->type == 'Glove')
                          <i class="ra ra-ra-diving-dagger"></i>
                        @elseif ($weapons->type == 'Spear')
                          <i class="ra ra-spear-head"></i>
                        @endif

                      </div>
                      <div class="hljs-wrapper">
                        <div class="hljs">
                          <p>{{str_limit($weapons->descriptionInicial, 50)}}</p>
                          <br>
                          <div class="btn-group btn100">
                            <a href="{{route('weapons.show.public',$weapons->id)}}" class="btn btn-info btn-50 btn-colormode">Know More</a>
                            <a href="{{route('weapons.public')}}" class="btn btn-primary btn-50 btn-colormode">Weapon List</a>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
              @endif

              @if (count($armors) > 0 )
                  <div class="col-md-3">
                    <div class="panel panel-inverse boxes" data-sortable-id="ui-widget-5" data-init="true">
                      <div class="panel-heading ui-sortable-handle">
                        <h4 class="panel-title">@if ($now->diffInDays($armors->created_at, false) > -7 )
                            <span class="label label-success m-r-10 pull-left">NEW</span>
                          @endif {{$armors->name}}</h4>
                      </div>
                      <div class="panel-body alignThisCenter">
                        @if ($armors->type == 'Small Shield' or $armors->type == 'Large Shield' or $armors->type == 'Accessory')
                          @if ($armors->type == 'Small Shield' or $armors->type == 'Large Shield')
                            <i class="ra ra-shield"></i>
                          @else
                            <i class="ra ra-slash-ring"></i>
                          @endif

                        @else
                          @if ($armors->equipmentType == 'Head')
                            <i class="ra ra-knight-helmet"></i>
                          @elseif ($armors->equipmentType == 'Body')
                            <i class="ra ra-vest"></i>
                          @elseif ($armors->equipmentType == 'Boots')
                            <i class="ra ra-boot-stomp"></i>
                          @endif

                        @endif

                      </div>
                      <div class="hljs-wrapper">
                        <div class="hljs">
                          <p>{{str_limit($armors->descriptionInicial, 50)}}</p>
                          <br>
                          <div class="btn-group btn100">
                            <a href="{{route('armors.show.public',$armors->id)}}" class="btn btn-info btn-50 btn-colormode">Know More</a>
                            <a href="{{route('armors.public')}}" class="btn btn-primary btn-50 btn-colormode">Weapon List</a>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
              @endif

              @if (count($items) > 0 )
                  <div class="col-md-3">
                    <div class="panel panel-inverse boxes" data-sortable-id="ui-widget-5" data-init="true">
                      <div class="panel-heading ui-sortable-handle">
                        <h4 class="panel-title">@if ($now->diffInDays($items->created_at, false) > -7 )
                            <span class="label label-success m-r-10 pull-left">NEW</span>
                          @endif {{$items->name}}</h4>
                      </div>
                      <div class="panel-body alignThisCenter">
                        @if ($items->type == 'Regular Item')
                          <i class="ra ra-potion"></i>
                        @elseif ($items->type == 'Key Item')
                          <i class="ra ra-key"></i>
                        @endif

                      </div>
                      <div class="hljs-wrapper">
                        <div class="hljs">
                          <p>{{str_limit($items->descriptionInicial, 50)}}</p>
                          <br>
                          <div class="btn-group btn100">
                            <a href="{{route('items.show.public',$items->id)}}" class="btn btn-info btn-50 btn-colormode">Know More</a>
                            <a href="{{route('items.public')}}" class="btn btn-primary btn-50 btn-colormode">Item List</a>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
              @endif



              @endif



            </div>
          </div>
          <div id="myCarousel" class="carousel slide" data-ride="carousel">
            <!-- Wrapper for slides -->
            <div class="carousel-inner ">
              <div class="item parallax active" style="background-image: url({{asset('img/lower_paralax_1.png')}});height: 40vh;">
              </div>

              <div class="item parallax" style="background-image: url({{asset('img/lower_paralax_2.png')}});height: 40vh;">
              </div>

              <div class="item parallax" style="background-image: url({{asset('img/lower_paralax_3.png')}});height: 40vh;">
              </div>
            </div>
            <div class="container-fluid centered-parallax-content-no-bg alignThisCenter">
              <div class="padding-top-5vh">
                <h2>Try out the Testing Area</h2>
                <br>
                @guest
                  <div class="btn-group download-group">
                    <a href="{{asset('WD_win.zip')}}" class="btn btn-primary btn33 btn-colormode" download><i class="fab fa-windows"></i> Windows</a>
                    <button class="btn btn-info btn34 btn-colormode" disabled><i class="fab fa-apple"></i> Mac OS</button>
                    <button class="btn btn-lime btn33 btn-colormode" disabled><i class="fab fa-android"></i> Android</button>
                  </div>
                @else
                  <div class="btn-group download-group">
                    <a style="min-width: 113px;" href="{{asset('WD_win.zip')}}" class="btn btn-primary btn25 btn-colormode" download><i class="fab fa-windows"></i> Windows</a>
                    <button style="min-width: 113px;" class="btn btn-info btn25 btn-colormode" disabled><i class="fab fa-apple"></i> Mac OS</button>
                    <button style="min-width: 113px;" class="btn btn-lime btn25 btn-colormode" disabled><i class="fab fa-android"></i> Android</button>
                    <button style="min-width: 113px;" class="btn btn-danger btn25  btn-colormode" disabled><i class="fab fa-chrome"></i> Browser</button>
                  </div>
                @endguest
              </div>

            </div>

          </div>
@endsection
