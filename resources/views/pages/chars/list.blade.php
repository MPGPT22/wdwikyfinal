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
              <div class="col-md-4 divide-rows">
                  <div class="row-left">
                    @if ($item->public == 1)
                      <a href="{{ route('char.set.not.public', $item->id) }}" class="title"><i class="far fa-eye fa-lg"></i></a>
                    @else
                      <a href="{{ route('char.set.public', $item->id) }}" class="title"><i class="far fa-eye fa-lg" style="color:#bbb"></i></a>
                    @endif
                  </div>
                  <div class="row-center">
                    {{$item->type}} -- {{$item->name}}
                  </div>
                  <div class=" row-right">
                    <form method="POST" class="btn100" action="{{ route('login') }}">
                        {{ csrf_field() }}

                        <div class="">
                            <div class="btn-group btn100">
                              <a href="{{route('register')}}" class="btn btn-primary btn-colormode btn-50">
                                    <i class="fas fa-cog"></i>
                                </a>
                                <button type="submit" class="btn btn-danger btn-50">
                                    X
                                </button>
                                

                                
                            </div>
                        </div>
                    </form>
                  </div>
              </div>
            @endforeach
          </div>
          @else
            <h4 class="title">Ola</h4>
          @endif
          
        </div>
@endsection
