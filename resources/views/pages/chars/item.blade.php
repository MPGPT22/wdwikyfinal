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
        <div class="col-md-12">

          <div class="row">
            <div class="col-md-8">
              <h3>{{$item->name}} - @if ($item->evolClass == 1)
                {{$item->classStart}} - {{$item->classSecund}} @if (!is_null($item->classThird))
                  - {{$item->classThird}}
                @endif @if (!is_null($item->classForth))
                  - {{$item->classForth}}
                @endif
              @else
              {{$item->classStart}}
              @endif</h3>

              <br>

              <h5>Desciption</h5>

              <p>{!!$item->descriptionInicial!!}</p>
            </div>
          </div>

        </div>
@endsection
