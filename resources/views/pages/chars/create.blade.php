@extends('Admin')

@section('title', '- Characters | Create')

@section('stylesheet')

  <link rel="stylesheet" href="{{asset('plugins/nvd3/nvd3.min.css')}}">
  <link rel="stylesheet" href="{{asset('plugins/jquery-jvectormap/jquery-jvectormap.min.css')}}">
  <link rel="stylesheet" href="{{asset('plugins/bootstrap-calendar/css/bootstrap_calendar.css')}}">
  <link rel="stylesheet" href="{{asset('plugins/gritter/css/jquery.gritter.css')}}">

  <link rel="stylesheet" type="text/css" href="{{asset('plugins/powerange/powerange.min.css')}}">
  <link rel="stylesheet" type="text/css" href="{{asset('plugins/parsleyjs/src/parsley.css')}}">
  <link rel="stylesheet" type="text/css" href="{{asset('plugins/smartwizard/dist/css/smart_wizard.css')}}">

  <link rel="stylesheet" type="text/css" href="{{asset('css/admin/style_edite.css')}}">

@endsection

@section('content')
        <div class="col-md-12">
          <h4 class="panel-title">Creating New Character</h4>
                {!! Form::open(['route' => 'characters.store', 'name' => 'form-wizard', 'class'=>'form-control-with-bg']) !!}
                {!! Form::token() !!}
                  <!-- begin wizard -->
                  <div id="wizard">
                    <!-- begin wizard-step -->
                    <ul>
                      <li class="col-md-12 col-sm-12 col-12">
                        <a href="#step-0">
                          <span class="number">0</span>
                          <span class="info text-ellipsis">
                            Simple or Complex
                          </span>
                        </a>
                      </li>
                    </ul>
                    <!-- end wizard-step -->
                    <!-- begin wizard-content -->
                    <div>
                      <!-- begin step-1 -->
                      <div id="step-0">
                        <!-- begin fieldset -->
                        <fieldset>
                          <!-- begin row -->
                          <div class="row">
                            <!-- begin col-8 -->
                            <div class="col-md-8 offset-md-2">
                              <legend class="no-border f-w-700 p-b-0 m-t-0 m-b-20 f-s-16 text-inverse title">Simple or Complex</legend>

                              <div class="row">
                                <div class="col-md-5">
                                  <a href="{{ route('char.create.simple') }}" class="btn btn-info btn-lg btn-block">Simple</a>
                                  <br>
                                  <div class="panel panel-default">
                                      <div class="panel-body">
                                        Create a basic character, with a single class.
                                      </div>
                                    </div>
                                  </div>
                                <div class="col-md-2"></div>
                                <div class="col-md-5">
                                  <a href="{{ route('char.create.complex') }}" class="btn btn-primary btn-lg btn-block">Complex</a>
                                  <br>
                                  <div class="panel panel-primary">
                                      <div class="panel-body">
                                        Create a complex character with multiple classes.
                                      </div>
                                    </div>
                                  </div>
                                </div>
                              </div>

                            </div>
                            <!-- end col-8 -->
                          </div>
                          <!-- end row -->
                        </fieldset>
                        <!-- end fieldset -->
                      </div>
                      <!-- end step-1 -->
                      <!-- begin step-2 -->
                      <!-- end step-2 -->
                      <!-- begin step-3 -->
                      <!-- end step-3 -->
                    </div>
                    <!-- end wizard-content -->
                  </div>
                  <!-- end wizard -->
                  {!! Form::close() !!}
                {{-- </form> --}}
              </div>
@endsection

@section('scripts')
  <script src="{{asset('plugins/switchery/switchery.min.js')}}"></script>
  <script src="{{asset('plugins/powerange/powerange.min.js')}}"></script>
  <script src="{{asset('js/admin/demo/form-slider-switcher.demo.js')}}"></script>
  <script>
    $(document).ready(function() {
      FormSliderSwitcher.init();
    });
  </script>
  <script src="{{asset('plugins/parsleyjs/dist/parsley.js')}}"></script>
  <script src="{{asset('plugins/smartwizard/dist/js/jquery.smartWizard.js')}}"></script>
  <script src="{{asset('js/admin/demo/form-wizards-validation.demo.js')}}"></script>
  <script>
    $(document).ready(function() {
      FormWizardValidation.init();
    });
  </script>

@endsection
