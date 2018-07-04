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

          <div class="row">
            <div class="col-md-8">
              <h3>{{$item->name}}</h3>

              <br>

              <p>HP:  {{str_replace("i", "level", $item->HP)}}</p>
              <p>MP: {{str_replace("i", "level",$item->MP)}}</p>
              <p>ATK: {{str_replace("i", "level",$item->ATK)}}</p>
              <p>DEF: {{str_replace("i", "level",$item->DEF)}}</p>
              <p>MAT: {{str_replace("i", "level",$item->MAT)}}</p>
              <p>MDEF: {{str_replace("i", "level",$item->MDEF)}}</p>
              <p>AGI: {{str_replace("i", "level",$item->AGI)}}</p>
            </div>
          </div>

        </div>
@endsection
