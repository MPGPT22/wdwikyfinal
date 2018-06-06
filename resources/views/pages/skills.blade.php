@extends('main')


@section('title', '- Skills')

@section('stylesheet')

  <link rel="stylesheet" href="{{asset('plugins/nvd3/nvd3.min.css')}}">
  <link rel="stylesheet" href="{{asset('plugins/jquery-jvectormap/jquery-jvectormap.min.css')}}">
  <link rel="stylesheet" href="{{asset('plugins/bootstrap-calendar/css/bootstrap_calendar.css')}}">
  <link rel="stylesheet" href="{{asset('plugins/gritter/css/jquery.gritter.css')}}">
  <link rel="stylesheet" type="text/css" href="{{asset('css/frontend/style_edite.css')}}">

@endsection

@section('content')

            <div class="row padding-ver-2">
                <div class="col-md-12">
                    <h1 class="title">Skills</h1>
                </div>
                <div class="row">
                    <div class="col-md-6 col-md-offset-3">
                        <hr>
                        <div class="btn-group btngroup-100">
                            <div class="btn-group btngroup-25">
                          <button type="button" class="btn btn-default btn75">Data</button>
                          <button type="button" class="btn btn-default dropdown-toggle btn25" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <span class="caret"></span>
                            <span class="sr-only">Toggle Dropdown</span>
                          </button>
                          <ul class="dropdown-menu">
                            <li><a href="#">Action</a></li>
                          </ul>
                        </div>
                        <div class="btn-group btngroup-25">
                          <button type="button" class="btn btn-default btn75">Element</button>
                          <button type="button" class="btn btn-default dropdown-toggle btn25" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <span class="caret"></span>
                            <span class="sr-only">Toggle Dropdown</span>
                          </button>
                          <ul class="dropdown-menu">
                            <li><a href="#">Action</a></li>
                          </ul>
                        </div>
                        <div class="btn-group btngroup-25">
                          <button type="button" class="btn btn-default btn75">Nº Targets</button>
                          <button type="button" class="btn btn-default dropdown-toggle btn25" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <span class="caret"></span>
                            <span class="sr-only">Toggle Dropdown</span>
                          </button>
                          <ul class="dropdown-menu">
                            <li><a href="#">Action</a></li>
                          </ul>
                        </div>
                        <div class="btn-group btngroup-25">
                          <button type="button" class="btn btn-default btn100">Show All</button>

                        </div>
                        </div>

                        <hr>
                    </div>
                </div>

            </div>
            <div class="row">
                <div class="col-md-2 col-xs-6">
                <div class="boxes">
                  <i class="fas fa-camera-retro"></i>
                  <hr>
                  <h4>Exemplo</h4>
                </div>
              </div>
              <div class="col-md-2 col-xs-6">
                <div class="boxes">
                  <i class="fas fa-camera-retro"></i>
                  <hr>
                  <h4>Exemplo</h4>
                </div>
              </div>
              <div class="col-md-2 col-xs-6">
                <div class="boxes">
                  <i class="fas fa-camera-retro"></i>
                  <hr>
                  <h4>Exemplo</h4>
                </div>
              </div>
              <div class="col-md-2 col-xs-6">
                <div class="boxes">
                  <i class="fas fa-camera-retro"></i>
                  <hr>
                  <h4>Exemplo</h4>
                </div>
              </div>
              <div class="col-md-2 col-xs-6">
                <div class="boxes">
                  <i class="fas fa-camera-retro"></i>
                  <hr>
                  <h4>Exemplo</h4>
                </div>
              </div>
              <div class="col-md-2 col-xs-6">
                <div class="boxes">
                  <i class="fas fa-camera-retro"></i>
                  <hr>
                  <h4>Exemplo</h4>
                </div>
              </div>
            </div>
@endsection
