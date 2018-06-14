<?php

namespace App\Http\Controllers;



use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

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
       $this->middleware('creator', ['except' => ['index','indexPublic','show','showPublic']]);
       $this->middleware('admin', ['except' => ['indexPublic','showPublic']]);
    }
    public function index()
    {
        //
    }

    public function indexPublic()
    {
        //
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
            'class' => ['required',Rule::in(['Knight', 'Thunder Knight','Ligtning Duelist','Astrapomancer','Fighter','Flare Fighter','Dragoon','Pyromancer','Mage','Water Mage','Aqueous healer','Hydromancer','Ranger','Wind Hunter','Cyclone Snyper','Aeromancer','Sentinel','Earth Sentinel','Quake Bruiser ','Geomancer','Reaper','Shadow Reaper','Dark Knight','Demon Lord',]),],
            'element' => ['required',Rule::in(['Physical','Fire','Thunder','Water','Earth','Wind','Light','Darkness',]),],
            'desc_1' => 'required|min:20',

            ));

            $evolClass = 0;


        }else{
            







        }

        $character = new Characters;

        switch ($request->submitbutton) {

            case 'another':

            $character->type = $request->type;
            $character->name = $request->name;
            $character->evolClass = $evolClass;
            $character->classStart = $request->class;
            $character->element = $request->element;
            $character->descriptionInicial = $request->desc_1;

            $character->save();

            return redirect()->route('characters.create');
                
                break;
            
            case 'list':
                
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
        //
    }
    public function showPublic($id)
    {
        //
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
        //
    }
}
