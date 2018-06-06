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

            <div class="row padding-ver-2">
                <div class="col-md-12">
                    <h1>About World Dawn</h1>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Tenetur ea quibusdam possimus, quasi nemo quod consectetur eveniet molestias neque corporis modi reprehenderit. Ad, veniam. Similique atque nesciunt molestiae dolores vitae?</p>
                </div>
            </div>
@endsection
