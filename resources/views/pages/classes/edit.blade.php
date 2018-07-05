@extends('Admin')

@section('title', '- Classes | Edit')

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
          <h4 class="panel-title">Editing Class</h4>
                {!! Form::open(['route' => ['classes.update', $item->id],'method' => 'PUT' ,  'name' => 'form-wizard', 'class'=>'form-control-with-bg']) !!}
                {!! Form::token() !!}
                  <!-- begin wizard -->
                  <div id="wizard">
                    <!-- begin wizard-step -->
                    <ul>
                      <li class="col-md-6 col-sm-6 col-6">
                        <a href="#step-1">
                          <span class="number">1</span>
                          <span class="info text-ellipsis">
                            Information
                            <small class="text-ellipsis">Name, Level and Calculations</small>
                          </span>
                        </a>
                      </li>
                      <li class="col-md-6 col-sm-6 col-6">
                        <a href="#step-2">
                          <span class="number">2</span>
                          <span class="info text-ellipsis">
                            Finish
                            <small class="text-ellipsis">Editing Finish</small>
                          </span>

                        </a>
                      </li>
                    </ul>
                    <!-- end wizard-step -->
                    <!-- begin wizard-content -->
                    <div>
                      <!-- begin step-1 -->
                      <div id="step-1">
                        <!-- begin fieldset -->
                        <fieldset>
                          <!-- begin row -->
                          <div class="row">
                            <!-- begin col-8 -->
                            <div class="col-md-8 offset-md-2">
                              <legend class="no-border f-w-700 p-b-0 m-t-0 m-b-20 f-s-16 text-inverse">Information</legend>
                              <!-- begin form-group -->
                              <div class="form-group row m-b-10">
                                <label class="col-md-3 col-form-label text-md-right">Name <span class="text-danger">*</span></label>
                                <div class="col-md-6">
                                  <input type="text" name="name" placeholder="Sun God" data-parsley-group="step-1" data-parsley-required="true" class="form-control" value="{{$item->name}}" />
                                </div>
                              </div>
                              <!-- end form-group -->
                              <!-- begin form-group -->
                              <div class="form-group row m-b-10">
                                <label class="col-md-3 col-form-label text-md-right">Level <span class="text-danger">*</span></label>
                                <div id="classForm" class="col-md-6" >
                                  <select name="level" data-parsley-group="step-1" data-parsley-required="true" class="form-control" required>
                                    <option value="">Choose the Class level</option>
                                    <option value="1" @if ($item->evo_lvl == 1) selected @endif>1</option>
                                    <option value="2" @if ($item->evo_lvl == 2) selected @endif>2</option>
                                    <option value="3" @if ($item->evo_lvl == 3) selected @endif>3</option>
                                    <option value="4" @if ($item->evo_lvl == 4) selected @endif>4</option>
                                  </select>
                                </div>
                              </div>
                              <!-- end form-group -->
                              <!-- begin form-group -->
                              <div class="form-group row m-b-10">
                                <label class="col-md-3 col-form-label text-md-right">HP Calc. <span class="text-danger">*</span></label>
                                <div class="col-md-6">
                                  <input type="text" name="HP" placeholder="4x + 150" data-parsley-group="step-1" data-parsley-required="true" class="form-control" value="{{$item->HP}}" />
                                </div>
                              </div>
                              <!-- end form-group -->
                              <!-- begin form-group -->
                              <div class="form-group row m-b-10">
                                <label class="col-md-3 col-form-label text-md-right">MP Calc. <span class="text-danger">*</span></label>
                                <div class="col-md-6">
                                  <input type="text" name="MP" placeholder="4*x+150^2" data-parsley-group="step-1" data-parsley-required="true" class="form-control" value="{{$item->MP}}"/>
                                </div>
                              </div>
                              <!-- end form-group -->
                              <!-- begin form-group -->
                              <div class="form-group row m-b-10">
                                <label class="col-md-3 col-form-label text-md-right">ATK Calc. <span class="text-danger">*</span></label>
                                <div class="col-md-6">
                                  <input type="text" name="ATK" placeholder="4*x+150^2" data-parsley-group="step-1" data-parsley-required="true" class="form-control" value="{{$item->ATK}}"/>
                                </div>
                              </div>
                              <!-- end form-group -->
                              <!-- begin form-group -->
                              <div class="form-group row m-b-10">
                                <label class="col-md-3 col-form-label text-md-right">DEF Calc. <span class="text-danger">*</span></label>
                                <div class="col-md-6">
                                  <input type="text" name="DEF" placeholder="4*x+150^2" data-parsley-group="step-1" data-parsley-required="true" class="form-control" value="{{$item->DEF}}"/>
                                </div>
                              </div>
                              <!-- end form-group -->
                              <!-- begin form-group -->
                              <div class="form-group row m-b-10">
                                <label class="col-md-3 col-form-label text-md-right">MAT Calc. <span class="text-danger">*</span></label>
                                <div class="col-md-6">
                                  <input type="text" name="MAT" placeholder="4*x+150^2" data-parsley-group="step-1" data-parsley-required="true" class="form-control" value="{{$item->MAT}}"/>
                                </div>
                              </div>
                              <!-- end form-group -->
                              <!-- begin form-group -->
                              <div class="form-group row m-b-10">
                                <label class="col-md-3 col-form-label text-md-right">MDEF Calc. <span class="text-danger">*</span></label>
                                <div class="col-md-6">
                                  <input type="text" name="MDEF" placeholder="4*x+150^2" data-parsley-group="step-1" data-parsley-required="true" class="form-control" value="{{$item->MDEF}}"/>
                                </div>
                              </div>
                              <!-- end form-group -->
                              <!-- begin form-group -->
                              <div class="form-group row m-b-10">
                                <label class="col-md-3 col-form-label text-md-right">AGI Calc. <span class="text-danger">*</span></label>
                                <div class="col-md-6">
                                  <input type="text" name="AGI" placeholder="4*x+150^2" data-parsley-group="step-1" data-parsley-required="true" class="form-control" value="{{$item->AGI}}"/>
                                </div>
                              </div>
                              <!-- end form-group -->
                            </div>
                            <!-- end col-8 -->
                          </div>
                          <!-- end row -->
                        </fieldset>
                        <!-- end fieldset -->
                      </div>
                      <!-- end step-1 -->
                      <!-- begin step-2 -->
                      <div id="step-2">
                        <!-- begin fieldset -->
                        <fieldset>
                          <!-- begin row -->
                          <div class="row">
                            <!-- begin col-8 -->
                            <div class="col-md-8 offset-md-2">

                              <!-- begin form-group -->
                              <div class="col-md-12 m-b-10 btn-group">
                                <button type="submit" value="another" name="submitbutton" class="btn btn-primary btn-50">
                                    Finish & Go to Class
                                </button>
                                <button type="submit" value="list" name="submitbutton" class="btn btn-info btn-50">
                                    Finish & Go to List
                                </button>

                            </div>
                              <!-- end form-group -->
                            </div>
                            <!-- end col-8 -->
                          </div>
                          <!-- end row -->
                        </fieldset>
                        <!-- end fieldset -->
                      </div>
                      <!-- end step-2 -->
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
