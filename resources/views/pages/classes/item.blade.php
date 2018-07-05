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
            <div class="col-md-9">
              <h3>{{$item->name}}</h3>
              <br>
              <h3><small><b>Calculations:</b></small></h3>
              <div class="row">
                <div class="col-md-6" style="border-right: solid 1px #dcdcdc">
                  <h5><b>HP: </b></h5>
                  <p>{{str_replace("i", "level", $item->HP)}}</p>
                </div>
                <div class="col-md-6">
                  <h5><b>MP: </b></h5>
                  <p>{{str_replace("i", "level",$item->MP)}}</p>
                </div>
              </div>
              <div class="row">
                <div class="col-md-6" style="border-right: solid 1px #dcdcdc">
                  <h5><b>ATK: </b></h5>
                  <p>{{str_replace("i", "level", $item->ATK)}}</p>
                </div>
                <div class="col-md-6">
                  <h5><b>DEF: </b></h5>
                  <p>{{str_replace("i", "level",$item->DEF)}}</p>
                </div>
              </div>
              <div class="row">
                <div class="col-md-6" style="border-right: solid 1px #dcdcdc">
                  <h5><b>MAT: </b></h5>
                  <p>{{str_replace("i", "level", $item->MAT)}}</p>
                </div>
                <div class="col-md-6">
                  <h5><b>MDEF: </b></h5>
                  <p>{{str_replace("i", "level",$item->MDEF)}}</p>
                </div>
              </div>
              <div class="row">
                <div class="col-md-6" style="border-right: solid 1px #dcdcdc">
                  <h5><b>AGI: </b></h5>
                  <p>{{str_replace("i", "level", $item->AGI)}}</p>
                </div>
              </div>
              
            </div>
          </div>

        </div>
@endsection
