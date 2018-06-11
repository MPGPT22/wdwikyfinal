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
                      <li class="col-md-4 col-sm-4 col-6">
                        <a href="#step-1">
                          <span class="number">1</span>
                          <span class="info text-ellipsis">
                            Basic Information
                            <small class="text-ellipsis">Type, Name, Class, Element</small>
                          </span>
                        </a>
                      </li>
                      <li class="col-md-4 col-sm-4 col-6">
                        <a href="#step-2">
                          <span class="number">2</span>
                          <span class="info text-ellipsis">
                            Chracter Description
                            <small class="text-ellipsis">Describe the Character in any way, shape or form</small>
                          </span>
                        </a>
                      </li>
                      <li class="col-md-4 col-sm-4 col-6">
                        <a href="#step-3">
                          <span class="number">3</span>
                          <span class="info text-ellipsis">
                            Finish
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
                              <legend class="no-border f-w-700 p-b-0 m-t-0 m-b-20 f-s-16 text-inverse">Basic Information</legend>
                              <!-- begin form-group -->
                              <div class="form-group row m-b-10">
                                <label class="col-md-3 col-form-label text-md-right">Character Type <span class="text-danger">*</span></label>
                                <div class="col-md-6">
                                  <select name="type" class="form-control" data-parsley-group="step-1" data-parsley-group="step-1" required>
                                    <option value="">Chose the type of Character to Create</option>
                                    <option value="Main">Main</option>
                                    <option value="Secundary">Secundary</option>
                                    <option value="Extra">Extra</option>
                                    <option value="Enemy">Enemy</option>
                                    <option value="Boss">Boss</option>
                                    <option value="Secret">Secret</option>
                                  </select>
                                 
                                </div>
                              </div>
                              <!-- end form-group -->
                              <!-- begin form-group -->
                              <div class="form-group row m-b-10">
                                <label class="col-md-3 col-form-label text-md-right">Name <span class="text-danger">*</span></label>
                                <div class="col-md-6">
                                  <input type="text" name="name" placeholder="Jeff - Lord Of Chaos" data-parsley-group="step-1" data-parsley-required="true" class="form-control" />
                                </div>
                              </div>
                              <!-- end form-group -->
                              <!-- begin form-group -->
                              <div class="form-group row m-b-10">
                                <label class="col-md-3 col-form-label text-md-right">Evolving Class <span class="text-danger">&nbsp;</span></label>
                                <div class="col-md-6">
                                    <input type="checkbox" data-render="switchery" data-theme="default" style="display: none;">
                                </div>
                              </div>
                              <!-- end form-group -->
                              <!-- begin form-group -->
                              <div class="form-group row m-b-10">
                                <label class="col-md-3 col-form-label text-md-right">Class <span class="text-danger">*</span></label>
                                <div class="col-md-6 input-group" >
                                  <select name="class" id="this" class="form-control" data-parsley-group="step-1" data-parsley-group="step-1" required>
                                    <option value="">Chose the Class of the Character</option>
                                    <option value="Main">Main</option>
                                    <option value="Secundary">Secundary</option>
                                    <option value="Extra">Extra</option>
                                    <option value="Enemy">Enemy</option>
                                    <option value="Boss">Boss</option>
                                    <option value="Secret">Secret</option>
                                  </select>
                                  <span class="input-group-btn">
                                    <button class="btn btn-default force-border" type="button">Go!</button>
                                  </span>
                                </div>
                              </div>
                              <!-- end form-group -->
                              <!-- begin form-group -->
                              <div class="form-group row m-b-10">
                                <label class="col-md-3 col-form-label text-md-right">Address</label>
                                <div class="col-md-9">
                                  <input type="text" name="address1" placeholder="Address 1" class="form-control m-b-10" />
                                  <input type="text" name="address2" placeholder="Address 2" class="form-control" />
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
                            <div class="col-md-8 md-offset-2">
                              <legend class="no-border f-w-700 p-b-0 m-t-0 m-b-20 f-s-16 text-inverse">You contact info, so that we can easily reach you</legend>
                              <!-- begin form-group -->
                              <div class="form-group row m-b-10">
                                <label class="col-md-3 col-form-label text-md-right">Phone Number <span class="text-danger">*</span></label>
                                <div class="col-md-6">
                                  <input type="number" name="phone" placeholder="123-456-7890" data-parsley-group="step-2" data-parsley-required="true" data-parsley-type="number" class="form-control" />
                                </div>
                              </div>
                              <!-- end form-group -->
                              <!-- begin form-group -->
                              <div class="form-group row m-b-10">
                                <label class="col-md-3 col-form-label text-md-right">Email Address <span class="text-danger">*</span></label>
                                <div class="col-md-6">
                                  <input type="email" name="email" placeholder="someone@example.com" class="form-control" data-parsley-group="step-2" data-parsley-required="true" data-parsley-type="email" />
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
                      <!-- end step-2 -->
                      <!-- begin step-3 -->
                      <div id="step-3">
                        <!-- begin fieldset -->
                        <fieldset>
                          <!-- begin row -->
                          <div class="row">
                            <!-- begin col-8 -->
                            <div class="col-md-8 offset-md-2">
                              <legend class="no-border f-w-700 p-b-0 m-t-0 m-b-20 f-s-16 text-inverse">Select your login username and password</legend>
                              <!-- begin form-group -->
                              <div class="form-group row m-b-10">
                                <label class="col-md-3 col-form-label text-md-right">Username <span class="text-danger">*</span></label>
                                <div class="col-md-6">
                                  <input type="text" name="username" placeholder="johnsmithy" class="form-control" data-parsley-group="step-3" data-parsley-required="true" data-parsley-type="alphanum" />
                                </div>
                              </div>
                              <!-- end form-group -->
                              <!-- begin form-group -->
                              <div class="form-group row m-b-10">
                                <label class="col-md-3 col-form-label text-md-right">Pasword <span class="text-danger">*</span></label>
                                <div class="col-md-6">
                                  <input type="password" name="password" placeholder="Your password" class="form-control" data-parsley-group="step-3" data-parsley-required="true" />
                                </div>
                              </div>
                              <!-- end form-group -->
                              <!-- begin form-group -->
                              <div class="form-group row m-b-10">
                                <label class="col-md-3 col-form-label text-md-right">Confirm Pasword <span class="text-danger">*</span></label>
                                <div class="col-md-6">
                                  <input type="password" name="password2" placeholder="Confirmed password" class="form-control" data-parsley-group="step-3" data-parsley-required="true" />
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
                      <!-- end step-3 -->
                      <!-- begin step-4 -->
                      <div id="step-4">
                        <div class="jumbotron m-b-0 text-center">
                          <h2 class="text-inverse">Register Successfully</h2>
                          <p class="m-b-30 f-s-16">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris consequat commodo porttitor. <br />Vivamus eleifend, arcu in tincidunt semper, lorem odio molestie lacus, sed malesuada est lacus ac ligula. Aliquam bibendum felis id purus ullamcorper, quis luctus leo sollicitudin. </p>
                          <p><a href="#" class="btn btn-primary btn-lg">Proceed to User Profile</a></p>
                        </div>
                      </div>
                      <!-- end step-4 -->
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
  <script>
    $(window).on('load', function() {
     $('span'+ ".switchery").attr('onClick', 'Plus()');
     $('select' + '#this').append('<option class="added" value="Secret">Secret1</option><option class="added" value="Secret">Secret2</option><option class="added" value="Secret">Secret3</option><option class="added" value="Secret">Secret4</option>');
    });
    function Plus() {
      if ($('span'+ ".switchery").css('border-color') !=  'rgb(0, 172, 172)') {
        $('.added').remove();
        $('.')
      }else{
        $('select' + '#this').append('<option class="added" value="Secret">Secret1</option><option class="added" value="Secret">Secret2</option><option class="added" value="Secret">Secret3</option><option class="added" value="Secret">Secret4</option>');
      }

    function Class1(){

    }
    function Class2(){

    }
    function Class3(){

    }
    }
  </script>
@endsection
