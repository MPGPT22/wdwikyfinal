@extends('main')


@section('title', '- Characters')

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
                    <h1 class="title">Items</h1>
                </div>
                <div class="col-md-12">
                <div class="row">
                    <div class="col-md-6 col-md-offset-3" style="padding-top: 25px;padding-bottom: 25px;">
                        <div class="btn-group btngroup-100">
                              <button type="button" class="btn btn-default btn25">Data</button>
                              <button type="button" class="btn btn-default btn25">Type</button>
                              <button type="button" class="btn btn-default btn25">Name</button>
                              <button type="button" class="btn btn-default btn25">Show All</button>
                        </div>
                    </div>
                </div>
              </div>

            </div>
            @php
              $newer_id = count($list) - 1;
            @endphp

            <div class="row">

                @if (count($list) > 0 )
                @foreach ($list as $item)
                  @if ($item->public == 1)
                    <div class="col-md-3">
                      <a style="color:#707478 !important;" href="{{ route('items.show.public', $item->id) }}">
                        <div class="panel panel-inverse boxes" data-sortable-id="ui-widget-5" data-init="true">
                          <div class="panel-heading ui-sortable-handle">
                            <h4 class="panel-title">
                              @if ($item->id > $newer_id)
                                <span class="label label-success m-r-10 pull-left">NEW</span>
                            @endif
                            {{$item->name}}</h4>
                          </div>
                          <div class="panel-body alignThisCenter">
                            @if ($item->type == 'Regular Item')
                              <i class="ra ra-potion"></i>
                            @elseif ($item->type == 'Key Item')
                              <i class="ra ra-key"></i>
                            @endif

                          </div>
                          <div class="hljs-wrapper">
                            <div class="hljs">
                              <p>{{str_limit($item->descriptionInicial, 50)}}</p>
                            </div>
                          </div>
                        </div>
                    </a>
                    </div>

                  @endif
                @endforeach
              @else
                <div class="col-md-12">
                  <h4 class="lead">Unfortunatly we haven't added any content, please come back later.</h4>
                </div>
              @endif
          </div>
        </div>
@endsection
