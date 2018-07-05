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

          @if (count($list)>0)
          <div class="row">
            @foreach ($list as $item)
              <div class="col-lg-6 col-md-12 divide-rows">
                  <div class="row-left">
                    @if ($item->public == 1)
                      <a href="{{ route('weapons.set.not.public', $item->id) }}" class="title"><i class="far fa-eye fa-lg"></i></a>
                    @else
                      <a href="{{ route('weapons.set.public', $item->id) }}" class="title"><i class="far fa-eye fa-lg" style="color:#bbb"></i></a>
                    @endif
                  </div>
                  <a class="a_no_style" href="{{route('weapons.show', $item->id)}}">
                  <div class="row-center">
                    {{$item->type}} -- {{$item->name}}
                  </div>
                  </a>
                  <div class=" row-right">
                    {!! Form::open(['route'=>['weapons.destroy', $item->id], 'method' => 'DELETE', 'class' => 'btn100']) !!}
                    <div class="btn-group btn100">
                      <a href="{{ route('weapons.edit', $item->id) }}" class='btn btn-info btn-colormode btn-50'><i style="font-size: 20px;" class="fa fa-cog"></i></a>
                      <button type="submit" style="margin-left: auto;margin-right: auto;" class='btn btn-danger btn-colormode btn-50'><i style="font-size: 20px;" class="fa fa-trash-alt"></i></button>

                    </div>
                    {!! Form::close() !!}
                  </div>
              </div>
            @endforeach
          </div>
          @else
            @if (Auth::user()->adminRole == "Creator" or Auth::user()->adminRole == "GameMaster")
            <div class="col-md-12 title">
              <h3>We don't have any weapons created.</h3>
              <br>
              <a class="btn btn-primary" href="{{ route('weapons.create') }}">Go To Create</a>
            </div>

            @else
            <div class="col-md-12 title">
              <h3>We don't have any weapons created. Wait until someone creates one.</h3>

            </div>
            @endif
          @endif

        </div>
@endsection
