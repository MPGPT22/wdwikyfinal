<?php

namespace App\Http\Controllers;



use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\DB;

use Carbon\Carbon;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Characters;

class CharController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct()
    {
       $this->middleware('creator', ['except' => ['index','indexPublic','show','showPublic',]]);
       $this->middleware('admin', ['except' => ['indexPublic','showPublic']]);
    }
    public function index()
    {
        $now = Carbon::now();
        $chars = DB::table('characters')->orderBy('created_at', 'desc')->get();

        return view('pages.chars.list')->withList($chars);
    }
    public function set_public($id)
    {
        $char = Characters::find($id);
        $char->public = 1;
        $char->save();


        return redirect()->route('characters.index');
    }
    public function set_not_public($id)
    {
        $char = Characters::find($id);
        $char->public = 0;
        $char->save();

        return redirect()->route('characters.index');
    }

    public function indexPublic()
    {
        $now = Carbon::now();
        $chars = DB::table('characters')->orderBy('created_at', 'desc')->get();

        return view('pages.chars.listPublic')->withList($chars)->withNow($now);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pages.chars.create');
    }
    public function create_simple()
    {
        $element = DB::table('elements')->get();
        $class = DB::table('char_classes')->orderBy('evo_lvl', 'asc')->get();
        return view('pages.chars.create_simple')->withElements($element)->withClasses($class);
    }
    public function create_complex()
    {
        $element = DB::table('elements')->get();
        $class = DB::table('char_classes')->orderBy('evo_lvl', 'asc')->get();
        return view('pages.chars.create_complex')->withElements($element)->withClasses($class);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        if ($request->evol_class == 0) {
          $class = DB::table('char_classes')->get();
          $element = DB::table('elements')->get();

          $class_name = [];
          $element_name = [];

          foreach ($class as $classes) {
            array_push($class_name, $classes->name);
          }
          foreach ($element as $elements) {
            array_push($element_name, $elements->name);
          }

            $this->validate($request, array(
            'type' => ['required',Rule::in(['Main', 'Secundary','Extra','Enemy','Boss','Secret',]),],
            'name' => 'required|regex:/^[\pL\s\-]+$/u|max:40|min:2',
            'class' => ['required',Rule::in($class_name),],
            'element' => ['required',Rule::in($element_name),],

            ));

        }else{
          $class_1 = DB::table('char_classes')->where('evo_lvl', '=', 1)->get();
          $class_2 = DB::table('char_classes')->where('evo_lvl', '=', 2)->get();
          $class_3 = DB::table('char_classes')->where('evo_lvl', '=', 3)->get();
          $class_4 = DB::table('char_classes')->where('evo_lvl', '=', 4)->get();
          $element = DB::table('elements')->get();


          $class_name_1 = [];
          $class_name_2 = [];
          $class_name_3 = [null,];
          $class_name_4 = [null,];
          $element_name = [];

          foreach ($class_1 as $classes_1) {
            array_push($class_name_1, $classes_1->name);
          }
          foreach ($class_2 as $classes_2) {
            array_push($class_name_2, $classes_2->name);
          }
          foreach ($class_3 as $classes_3) {
            array_push($class_name_3, $classes_3->name);
          }
          foreach ($class_4 as $classes_4) {
            array_push($class_name_4, $classes_4->name);
          }
          foreach ($element as $elements) {
            array_push($element_name, $elements->name);
          }

          $this->validate($request, array(
          'type' => ['required',Rule::in(['Main', 'Secundary','Extra','Enemy','Boss','Secret',]),],
          'name' => 'required|regex:/^[\pL\s\-]+$/u|max:40|min:2',
          'class' => ['required',Rule::in($class_name_1),],
          'class_2' => ['required',Rule::in($class_name_2),],
          'class_3' => ['required_unless:class_4,null',Rule::in($class_name_3),],
          'class_4' => Rule::in($class_name_4),
          'element' => ['required',Rule::in($element_name),],

          ));

        }

        $character = new Characters;

        switch ($request->submitbutton) {

            case 'another':

            $character->type = $request->type;
            $character->name = $request->name;
            $character->evolClass = $request->evol_class;
            $character->classStart = $request->class;
            $character->classSecund = $request->class_2;
            $character->classThird = $request->class_3;
            $character->classForth = $request->class_4;
            $character->element = $request->element;
            $character->descriptionInicial = $request->desc_1;

            $character->save();

            return redirect()->route('characters.create');

                break;

            case 'list':

            $character->type = $request->type;
            $character->name = $request->name;
            $character->evolClass = $request->evol_class;
            $character->classStart = $request->class;
            $character->classSecund = $request->class_2;
            $character->classThird = $request->class_3;
            $character->classForth = $request->class_4;
            $character->element = $request->element;
            $character->descriptionInicial = $request->desc_1;

            $character->save();

            return redirect()->route('characters.index');

                break;
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $char = Characters::find($id);

        return view('pages.chars.item')->withItem($char);
    }
    public function showPublic($id)
    {
        $char = Characters::find($id);

        return view('pages.chars.itemPublic')->withItem($char);
    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {

    }

    public function editSimple($id)
    {
      $item = Characters::find($id);
      $element = DB::table('elements')->get();
      $class = DB::table('char_classes')->orderBy('evo_lvl', 'asc')->get();
      return view('pages.chars.edit_simple')->withItem($item)->withElements($element)->withClasses($class);
    }

    public function editComplex($id)
    {
      $item = Characters::find($id);
      $element = DB::table('elements')->get();
      $class = DB::table('char_classes')->orderBy('evo_lvl', 'asc')->get();
      return view('pages.chars.edit_complex')->withItem($item)->withElements($element)->withClasses($class);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
      if ($request->evol_class == 0) {
        $class = DB::table('char_classes')->get();
        $element = DB::table('elements')->get();

        $class_name = [];
        $element_name = [];

        foreach ($class as $classes) {
          array_push($class_name, $classes->name);
        }
        foreach ($element as $elements) {
          array_push($element_name, $elements->name);
        }

          $this->validate($request, array(
          'type' => ['required',Rule::in(['Main', 'Secundary','Extra','Enemy','Boss','Secret',]),],
          'name' => 'required|regex:/^[\pL\s\-]+$/u|max:40|min:2',
          'class' => ['required',Rule::in($class_name),],
          'element' => ['required',Rule::in($element_name),],

          ));

      }else{
        $class_1 = DB::table('char_classes')->where('evo_lvl', '=', 1)->get();
        $class_2 = DB::table('char_classes')->where('evo_lvl', '=', 2)->get();
        $class_3 = DB::table('char_classes')->where('evo_lvl', '=', 3)->get();
        $class_4 = DB::table('char_classes')->where('evo_lvl', '=', 4)->get();
        $element = DB::table('elements')->get();


        $class_name_1 = [];
        $class_name_2 = [];
        $class_name_3 = [null,];
        $class_name_4 = [null,];
        $element_name = [];

        foreach ($class_1 as $classes_1) {
          array_push($class_name_1, $classes_1->name);
        }
        foreach ($class_2 as $classes_2) {
          array_push($class_name_2, $classes_2->name);
        }
        foreach ($class_3 as $classes_3) {
          array_push($class_name_3, $classes_3->name);
        }
        foreach ($class_4 as $classes_4) {
          array_push($class_name_4, $classes_4->name);
        }
        foreach ($element as $elements) {
          array_push($element_name, $elements->name);
        }

        $this->validate($request, array(
        'type' => ['required',Rule::in(['Main', 'Secundary','Extra','Enemy','Boss','Secret',]),],
        'name' => 'required|regex:/^[\pL\s\-]+$/u|max:40|min:2',
        'class' => ['required',Rule::in($class_name_1),],
        'class_2' => ['required',Rule::in($class_name_2),],
        'class_3' => ['required_unless:class_4,null',Rule::in($class_name_3),],
        'class_4' => Rule::in($class_name_4),
        'element' => ['required',Rule::in($element_name),],

        ));


      }

      $char = Characters::find($id);

      $char->type = $request->type;
      $char->name = $request->name;
      $char->evolClass = $request->evol_class;
      $char->classStart = $request->class;
      $char->classSecund = $request->class_2;
      $char->classThird = $request->class_3;
      $char->classForth = $request->class_4;
      $char->element = $request->element;
      $char->descriptionInicial = $request->desc_1;

      $char->save();

      switch ($request->submitbutton) {

          case 'another':

          return redirect()->route('characters.show', $id);

              break;

          case 'list':

          return redirect()->route('characters.index');

              break;
      }




    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {

        $item = Characters::find($id);
        $item->delete();

        return redirect()->route('characters.index');
    }
}
