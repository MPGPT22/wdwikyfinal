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
<div class="container " style="margin-top: 1em;padding: 1em; background: white; border-radius: 5px">

          <div class="row">
            <div class="col-md-5">
              <h3>{{$item->name}}</h3>
              <br>
              <div class="row">
                <div class="col-md-3" style="border-right: solid 1px #dcdcdc">
                  <h5><b>Type: </b></h5>
                  <p>{{$item->type}}</p>
                </div>
                <div class="col-md-9">
                  <h5><b>Equipment Type: </b></h5>
                  <p>{{$item->equipmentType}}</p>
                </div>
              </div>
              
              <br>
              



              <h5>Desciption</h5>

              <p>{!!$item->descriptionInicial!!}</p>
            </div>
          </div>

        </div>
@endsection
