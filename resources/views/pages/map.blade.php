@extends('main')

@section('title', '- About')

@section('stylesheet')

  <link rel="stylesheet" href="{{asset('plugins/nvd3/nvd3.min.css')}}">
  <link rel="stylesheet" href="{{asset('plugins/jquery-jvectormap/jquery-jvectormap.min.css')}}">
  <link rel="stylesheet" href="{{asset('plugins/bootstrap-calendar/css/bootstrap_calendar.css')}}">
  <link rel="stylesheet" href="{{asset('plugins/gritter/css/jquery.gritter.css')}}">
  <link rel="stylesheet" type="text/css" href="{{asset('css/frontend/style_edite.css')}}">

@endsection

@section('content')

<div class="container">
  <div class="row padding-ver-2">

    <div class="col-md-12">
        <h4 class="title">We are still trying to teach a group of gremlins to create our story, we will inform you once we succeed.</h4>
    </div>

  </div>
</div>

@endsection
