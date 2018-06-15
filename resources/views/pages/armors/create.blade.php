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
    <h4 class="panel-title">Creating New Armor</h4>
          {!! Form::open(['route' => 'armors.store', 'name' => 'form-wizard', 'class'=>'form-control-with-bg']) !!}
          {!! Form::token() !!}
            <!-- begin wizard -->
            <div id="wizard">
              <!-- begin wizard-step -->
              <ul>
                <li class="col-md-6 col-sm-6 col-6">
                  <a href="#step-1">
                    <span class="number">1</span>
                    <span class="info text-ellipsis">
                      Basic Information
                      <small class="text-ellipsis">Name, Type, Equipement Type and Description</small>
                    </span>
                  </a>
                </li>
                <li class="col-md-6 col-sm-6 col-6">
                  <a href="#step-2">
                    <span class="number">2</span>
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
                          <label class="col-md-3 col-form-label text-md-right">Name <span class="text-danger">*</span></label>
                          <div class="col-md-6">
                            <input type="text" name="name" placeholder="Helmet of wisdom" data-parsley-group="step-1" data-parsley-required="true" class="form-control" />
                          </div>
                        </div>
                        <!-- end form-group -->
                        <!-- begin form-group -->
                        <div class="form-group row m-b-10">
                          <label class="col-md-3 col-form-label text-md-right">Type <span class="text-danger">*</span></label>
                          <div class="col-md-6">
                            <select name="type" class="form-control" data-parsley-group="step-1" data-parsley-group="step-1" required>
                              <option value="">Choose the Armor Type</option>
                              @foreach ($type as $types)
                                <option value="{{$types->name}}">{{$types->name}}</option>
                              @endforeach
                            </select>
                          </div>
                        </div>
                        <!-- end form-group -->
                        <!-- begin form-group -->
                        <div class="form-group row m-b-10">
                          <label class="col-md-3 col-form-label text-md-right">Equipment Type <span class="text-danger">*</span></label>
                          <div class="col-md-6">
                            <select name="equipment_type" class="form-control" data-parsley-group="step-1" data-parsley-group="step-1" required>
                              <option value="">Choose the Equipment Type</option>
                              @foreach ($equipment as $equipments)
                                <option value="{{$equipments->name}}">{{$equipments->name}}</option>
                              @endforeach
                            </select>
                          </div>
                        </div>
                        <!-- end form-group -->
                        <!-- begin form-group -->
                        <div class="form-group row m-b-10">
                          <label class="col-md-3 col-form-label text-md-right">Description  <span class="text-danger">*</span></label>
                          <div class="col-md-6">
                            <textarea name="desc_1" data-parsley-group="step-1" data-parsley-required="true" class="form-control" required ></textarea>
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
                <!-- begin step-3 -->
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
    var id;
    $id = 2;
    $(window).on('load', function() {
     $('span'+ ".switchery").attr('onClick', 'Plus()');
     $('select' + '#this').append('<option class="added" value="Thunder Knight">Thunder Knight</option><option class="added" value="Flare Fighter">Flare Fighter</option><option class="added" value="Water Mage">Water Mage</option><option class="added" value="Wind Hunter">Wind Hunter</option><option class="added" value="Earth Sentinel">Earth Sentinel</option><option class="added" value="Shadow Reaper">Shadow Reaper</option><option class="added" value="Ligtning Duelist">Ligtning Duelist</option><option class="added" value="Dragoon">Dragoon</option><option class="added" value="Aqueous healer">Aqueous healer</option><option class="added" value="Cyclone Snyper">Cyclone Snyper</option><option class="added" value="Quake Bruiser">Quake Bruiser</option><option class="added" value="Dark Knight">Dark Knight</option><option class="added" value="Astrapomancer">Astrapomancer</option><option class="added" value="Geomancer">Geomancer</option><option class="added" value="Hydromancer">Hydromancer</option><option class="added" value="Aeromancer">Aeromancer</option><option class="added" value="Geomancer">Geomancer</option><option class="added" value="Demon Lord">Demon Lord</option>');
    });
    function Plus() {
      if ($('span'+ ".switchery").css('border-color') !=  'rgb(0, 172, 172)') {
        $('.added').remove();
        $('select'+'#added_select').remove();
        $('div'+'#classForm').addClass('input-group');
        $('select'+'#this').after('<span id="classFormAdd" class="input-group-btn"><button  class="btn btn-default force-border"  type="button" onclick="adDclass1()">+</button></span>');
        $('option'+ '#changable').text('Choose the First Class of the Character');
        $('label'+ '#first_class_label').text('First Class ');
        $('label'+ '#first_class_label').append('<span class="text-danger">*</span>');


      }else{
        $('select' + '#this').append('<option class="added" value="Thunder Knight">Thunder Knight</option><option class="added" value="Flare Fighter">Flare Fighter</option><option class="added" value="Water Mage">Water Mage</option><option class="added" value="Wind Hunter">Wind Hunter</option><option class="added" value="Earth Sentinel">Earth Sentinel</option><option class="added" value="Shadow Reaper">Shadow Reaper</option><option class="added" value="Ligtning Duelist">Ligtning Duelist</option><option class="added" value="Dragoon">Dragoon</option><option class="added" value="Aqueous healer">Aqueous healer</option><option class="added" value="Cyclone Snyper">Cyclone Snyper</option><option class="added" value="Quake Bruiser">Quake Bruiser</option><option class="added" value="Dark Knight">Dark Knight</option><option class="added" value="Astrapomancer">Astrapomancer</option><option class="added" value="Geomancer">Geomancer</option><option class="added" value="Hydromancer">Hydromancer</option><option class="added" value="Aeromancer">Aeromancer</option><option class="added" value="Geomancer">Geomancer</option><option class="added" value="Demon Lord">Demon Lord</option>');
        $('div'+'#classForm').removeClass('input-group');
        $('span'+'#classFormAdd').remove();
        $('option'+ '#changable').text('Choose the Class of the Character');
        $('label'+ '#first_class_label').text('Class ');
        $('label'+ '#first_class_label').append('<span class="text-danger">*</span>');
        $('div'+ '#second_class').remove();
        $('div'+ '#third_class').remove();
        $('div'+ '#fourth_class').remove();
      }
    }

    function adDclass1(){

      if ($id == 2) {
        $('div'+'#first_class').after('<div id="second_class" class="form-group row m-b-10"><label class="col-md-3 col-form-label text-md-right">Second Class <span class="text-danger">*</span></label><div class="col-md-5 input-group" ><select data-parsley-group="step-1" data-parsley-required="true" name="class_2" class="form-control" required><option value="">Choose the Second Class of the Character</option><option class="added" value="Thunder Knight">Thunder Knight</option><option class="added" value="Flare Fighter">Flare Fighter</option><option class="added" value="Water Mage">Water Mage</option><option class="added" value="Wind Hunter">Wind Hunter</option><option class="added" value="Earth Sentinel">Earth Sentinel</option><option class="added" value="Shadow Reaper">Shadow Reaper</option></select><span class="input-group-btn"><button class="btn btn-default force-border"  type="button" onclick="adDclass2Minus()">X</button><button id="classFormAdd2" class="btn btn-default force-border"  type="button" onclick="adDclass1()">+</button></span></div></div>');
      $('span#classFormAdd > button').attr('onClick', '');
      $('span#classFormAdd > button').addClass('disabled');
      $id = $id + 1;
      }else if($id == 3){
        $('div'+'#second_class').after('<div id="third_class" class="form-group row m-b-10"><label class="col-md-3 col-form-label text-md-right">Third Class <span class="text-danger">*</span></label><div class="col-md-5 input-group" ><select data-parsley-group="step-1" data-parsley-required="true" name="class_3" class="form-control" required><option value="">Choose the Third Class of the Character</option><option class="added" value="Ligtning Duelist">Ligtning Duelist</option><option class="added" value="Dragoon">Dragoon</option><option class="added" value="Aqueous healer">Aqueous healer</option><option class="added" value="Cyclone Snyper">Cyclone Snyper</option><option class="added" value="Quake Bruiser">Quake Bruiser</option><option class="added" value="Dark Knight">Dark Knight</option></select><span class="input-group-btn"><button class="btn btn-default force-border"  type="button" onclick="adDclass2Minus()">X</button><button id="classFormAdd3" class="btn btn-default force-border"  type="button" onclick="adDclass1()">+</button></span></div></div>');
      $('button#classFormAdd2').attr('onClick', '');
      $('button#classFormAdd2').addClass('disabled');
      $id = $id + 1;
      }else if($id == 4){
        $('div'+'#third_class').after('<div id="fourth_class" class="form-group row m-b-10"><label class="col-md-3 col-form-label text-md-right">Fourth Class <span class="text-danger">*</span></label><div class="col-md-5 input-group" ><select data-parsley-group="step-1" data-parsley-required="true" name="class_4" class="form-control" required><option value="">Choose the Fourth Class of the Character</option><option class="added" value="Astrapomancer">Astrapomancer</option><option class="added" value="Geomancer">Geomancer</option><option class="added" value="Hydromancer">Hydromancer</option><option class="added" value="Aeromancer">Aeromancer</option><option class="added" value="Geomancer">Geomancer</option><option class="added" value="Demon Lord">Demon Lord</option></select><span  class="input-group-btn"><button class="btn btn-default force-border"  type="button" onclick="adDclass2Minus()">X</button></span></div></div>');
      $('button#classFormAdd3').attr('onClick', '');
      $('button#classFormAdd3').addClass('disabled');
      $id = $id + 1;
      }else{

      }
    }
    function adDclass2Minus(){
      if ($id === 3) {
      $('div'+ '#second_class').remove();
      $('span#classFormAdd > button').attr('onClick', 'adDclass1()');
      $('span#classFormAdd > button').removeClass('disabled');
      $id = $id - 1;
      }else if($id === 4){
      $('div'+ '#third_class').remove();
      $('button#classFormAdd2').attr('onClick', 'adDclass1()');
      $('button#classFormAdd2').removeClass('disabled');
      $id = $id - 1;
      }else if($id === 5){
      $('div'+ '#fourth_class').remove();
      $('button#classFormAdd3').attr('onClick', 'adDclass1()');
      $('button#classFormAdd3').removeClass('disabled');
      $id = $id - 1;
      }
    }
  </script>
@endsection
