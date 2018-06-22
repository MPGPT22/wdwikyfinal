@extends('main')

@section('title')

- {{$item->name}}

@endsection

@section('stylesheet')

  <link rel="stylesheet" href="{{asset('plugins/nvd3/nvd3.min.css')}}">
  <link rel="stylesheet" href="{{asset('plugins/jquery-jvectormap/jquery-jvectormap.min.css')}}">
  <link rel="stylesheet" href="{{asset('plugins/bootstrap-calendar/css/bootstrap_calendar.css')}}">
  <link rel="stylesheet" href="{{asset('plugins/gritter/css/jquery.gritter.css')}}">
  <link rel="stylesheet" type="text/css" href="{{asset('css/frontend/style_edite.css')}}">

@endsection

@section('content')
        <div class="container padding-top-3">

          <div class="row">
            <div class="col-md-9">
              <h3>{{$item->name}} - {{$item->type}} - {{$item->equipmentType}}</h3>

              <br>

              <h5>Desciption</h5>

              <p>{{$item->descriptionInicial}}</p>
            </div>
          </div>
          
        </div>
@endsection
