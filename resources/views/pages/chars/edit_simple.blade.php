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

  <script src="https://cdn.ckeditor.com/ckeditor5/10.1.0/classic/ckeditor.js"></script>

  <link rel="stylesheet" type="text/css" href="{{asset('css/admin/style_edite.css')}}">

@endsection

@section('content')
        <div class="col-md-12">
          <div class="row" style="margin-bottom: 10px;">
            <div class="col-lg-1 col-sm-12">
              <a href="{{ route('characters.index') }}" class="btn btn-warning btn-block">Go Back</a>
            </div>
            <div class="col-lg-2 col-md-offset-9 col-sm-12">
              <a href="{{ route('char.edit.complex', $item->id) }}" class="btn btn-primary btn-block">Change to Complex</a>
            </div>
          </div>
          <br>
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
                            Character Description
                            <small class="text-ellipsis">Describe the Character in any way, shape or form</small>
                          </span>
                        </a>
                      </li>
                      <li class="col-md-4 col-sm-4 col-6">
                        <a href="#step-3">
                          <span class="number">3</span>
                          <span class="info text-ellipsis">
                            Finish
                            <small class="text-ellipsis">Creation Finish</small>
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
                                    <option value="">Choose the type of Character to Create</option>
                                    <option value="Main" @if ($item->type == "Main") selected @endif>Main</option>
                                    <option value="Secundary" @if ($item->type == "Secundary") selected @endif>Secundary</option>
                                    <option value="Extra" @if ($item->type == "Extra") selected @endif>Extra</option>
                                    <option value="Enemy" @if ($item->type == "Enemy") selected @endif>Enemy</option>
                                    <option value="Boss" @if ($item->type == "Boss") selected @endif>Boss</option>
                                    <option value="Secret" @if ($item->type == "Secret") selected @endif>Secret</option>
                                  </select>

                                </div>
                              </div>
                              <!-- end form-group -->
                              <!-- begin form-group -->
                              <div class="form-group row m-b-10">
                                <label class="col-md-3 col-form-label text-md-right">Name <span class="text-danger">*</span></label>
                                <div class="col-md-6">
                                  <input type="text" name="name" placeholder="Jeff - Lord Of Chaos" data-parsley-group="step-1" data-parsley-required="true" class="form-control" value="{{$item->name}}" />
                                </div>
                              </div>
                              <!-- end form-group -->
                              <!-- begin form-group -->
                              <!-- end form-group -->
                              <!-- begin form-group -->
                              <div id="first_class" class="form-group row m-b-10">
                                <label id="first_class_label" class="col-md-3 col-form-label text-md-right">Class <span class="text-danger">*</span></label>
                                <div id="classForm" class="col-md-6" >
                                  <select name="class" id="this" data-parsley-group="step-1" data-parsley-required="true" class="form-control" required>
                                    <option id="changable" value="">Choose the Class of the Character</option>
                                    @foreach ($classes as $class)
                                      <option value="{{$class->name}}" @if ($item->classStart == $class->name) selected @endif>{{$class->name}}</option>
                                    @endforeach
                                  </select>
                                </div>
                              </div>
                              <!-- end form-group -->
                              <!-- begin form-group -->
                              <div id="check2atleast" class="form-group row m-b-10">
                                <label class="col-md-3 col-form-label text-md-right">Element <span class="text-danger">*</span></label>
                                <div class="col-md-6">
                                  <select name="element" class="form-control" data-parsley-group="step-1" data-parsley-group="step-1" required>
                                    <option value="">Choose the Element of the Character</option>
                                    @foreach ($elements as $element)
                                      <option value="{{$element->name}}" @if ($item->element == $element->name) selected @endif>{{$element->name}}</option>
                                    @endforeach
                                  </select>
                                </div>
                              </div>
                              <div class="form-group row m-b-10">
                                <div class="col-md-6">
                                    <input name="evol_class" type="hidden" value="0">
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
                            <div class="col-md-8 col-md-offset-2">
                              <legend class="no-border f-w-700 p-b-0 m-t-0 m-b-20 f-s-16 text-inverse">Describe the Character.<br><small><b>His/Her personality, his/her physical appearance, his/her story, his/her power !</b></small></legend>
                              <!-- begin form-group -->
                              <div class="form-group m-b-10">
                                <label class="col-form-label text-md-right">Description</label>
                                <textarea name="desc_1" data-parsley-group="step-2" class="form-control" id="desc_1" >{{$item->descriptionInicial}}</textarea>
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

                              <!-- begin form-group -->
                              <div class="col-md-12 m-b-10 btn-group">
                                <button type="submit" value="another" name="submitbutton" class="btn btn-primary btn-50">
                                    Finish & Create Another
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
  <script>
    ClassicEditor
        .create( document.querySelector( '#desc_1' ), {
          toolbar: [ 'heading', '|', 'bold', 'italic', 'bulletedList', 'numberedList', 'blockQuote' ],
        } )
        .catch( error => {
            console.error( error );
        } );
</script>
@endsection
