@extends('Admin')

@section('title', '- Backoffice')

@section('stylesheet')

  <link rel="stylesheet" href="{{asset('plugins/nvd3/nvd3.min.css')}}">
  <link rel="stylesheet" href="{{asset('plugins/jquery-jvectormap/jquery-jvectormap.min.css')}}">
  <link rel="stylesheet" href="{{asset('plugins/bootstrap-calendar/css/bootstrap_calendar.css')}}">
  <link rel="stylesheet" href="{{asset('plugins/gritter/css/jquery.gritter.css')}}">

  <link rel="stylesheet" type="text/css" href="{{asset('css/admin/style_edite.css')}}">

@endsection

@section('content')
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-body">
                  @if (Auth::user()->adminRole == "GameMaster")
                  <h4 class="title">You are the GameMaster, you have the power to do anything you like, from creating to deleting and to controll any commentary.</h4>
                  @elseif (Auth::user()->adminRole == "Creator")
                  <h4 class="title">You are the Creator, you have the power to create anything but you can't controll the commentaries of your creations</h4>
                  @elseif (Auth::user()->adminRole == "Comment Checker")
                  @endif
                    
                </div>
            </div>
        </div>
@endsection
