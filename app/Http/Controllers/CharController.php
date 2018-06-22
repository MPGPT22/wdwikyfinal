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

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $evolClass = [];
        if (!$request->evol_class) {

            $this->validate($request, array(
            'type' => ['required',Rule::in(['Main', 'Secundary','Extra','Enemy','Boss','Secret',]),],
            'name' => 'required|Alpha|max:40|min:2',
            'class' => ['required',Rule::in(['Knight', 'Thunder Knight','Ligtning Duelist','Astrapomancer','Fighter','Flare Fighter','Dragoon','Pyromancer','Mage','Water Mage','Aqueous healer','Hydromancer','Ranger','Wind Hunter','Cyclone Snyper','Aeromancer','Sentinel','Earth Sentinel','Quake Bruiser','Geomancer','Reaper','Shadow Reaper','Dark Knight','Demon Lord',]),],
            'element' => ['required',Rule::in(['Physical','Fire','Thunder','Water','Earth','Wind','Light','Darkness',]),],
            'desc_1' => 'required|min:5',

            ));

            $evolClass = 0;

        }else{

          $this->validate($request, array(
          'type' => ['required',Rule::in(['Main', 'Secundary','Extra','Enemy','Boss','Secret',]),],
          'name' => 'required|max:40|min:2',
          'class' => ['required',Rule::in(['Knight','Fighter','Mage','Ranger','Sentinel','Reaper',]),],
          'class_2' => ['required_if:evol_class,on',Rule::in(['Thunder Knight','Flare Fighter','Water Mage','Wind Hunter','Earth Sentinel','Shadow Reaper',]),],
          'class_3' => Rule::in([null,'Ligtning Duelist','Dragoon','Aqueous healer','Cyclone Snyper','Quake Bruiser','Dark Knight',]),
          'class_4' => Rule::in([null,'Astrapomancer','Pyromancer','Hydromancer','Aeromancer','Geomancer','Demon Lord',]),
          'element' => ['required',Rule::in(['Physical','Fire','Thunder','Water','Earth','Wind','Light','Darkness',]),],
          'desc_1' => 'required|min:5',

          ));

          $evolClass = 1;

        }

        $character = new Characters;

        switch ($request->submitbutton) {

            case 'another':

            $character->type = $request->type;
            $character->name = $request->name;
            $character->evolClass = $evolClass;
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
            $character->evolClass = $evolClass;
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
        //
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
        //
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
