@extends('Admin')

@section('title', '- Backoffice')

@section('stylesheet')

  <link rel="stylesheet" href="{{asset('plugins/nvd3/nvd3.min.css')}}">
  <link rel="stylesheet" href="{{asset('plugins/jquery-jvectormap/jquery-jvectormap.min.css')}}">
  <link rel="stylesheet" href="{{asset('plugins/bootstrap-calendar/css/bootstrap_calendar.css')}}">
  <link rel="stylesheet" href="{{asset('plugins/gritter/css/jquery.gritter.css')}}">

  <link href="{{asset('plugins/nvd3/nvd3.min.css')}}" rel="stylesheet">

  <link rel="stylesheet" type="text/css" href="{{asset('css/admin/style_edite.css')}}">

@endsection

@section('content')
        <div class="container " style="margin-top: 1em; padding: 1em; background: white; border-radius: 5px">

          <div class="row">
            <div class="col-md-6">

              <div class="col-md-12">
              <h3>{{$item->name}}</h3>
              <br>
              <div class="row">
                <div class="col-md-2" style="border-right: solid 1px #dcdcdc">
                  <h5><b>Type: </b></h5>
                  <p>{{$item->type}}</p>
                </div>
                <div class="col-md-10">
                  @if ($item->evolClass == 0)
                    <h5><b>Class: </b></h5>
                    <p>{{$item->classStart}}</p>
                  @else
                    <h5><b>Classes: </b></h5>
                    <p>{{$item->classStart}} - {{$item->classSecund}} @if (!is_null($item->classThird))- {{$item->classThird}}@endif @if (!is_null($item->classThird)) - {{$item->classForth}}@endif </p>  
                  @endif
                  
                  
                </div>
              </div>
              
              <br>
              



              <h5>Desciption</h5>

              <p>{!!$item->descriptionInicial!!}</p>
            </div>
          </div>
          </div>

        </div>
@endsection
