<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\DB;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\weapon;

class WeaponController extends Controller
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
    public function set_public($id)
    {
        $weapon = weapon::find($id);
        $weapon->public = 1;
        $weapon->save();


        return redirect()->route('weapons.index');
    }
    public function set_not_public($id)
    {
        $weapon = weapon::find($id);
        $weapon->public = 0;
        $weapon->save();

        return redirect()->route('weapons.index');
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
        $types = DB::table('weapon_types')->get();
        return view('pages.weapons.create')->with(array('types'=>$types));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $types = DB::table('weapon_types')->get();
        $types_name = [];
        foreach ($types as $type) {
            array_push($types_name, $type->name);
        }
        
        $this->validate($request, array(
            'name' => 'required|max:40|min:2',
            'type' => ['required',Rule::in($types_name)],
            'desc_1' => 'required|min:5',

            ));

        $weapon = new weapon;

        switch ($request->submitbutton) {

            case 'another':

            $weapon->name = $request->name;
            $weapon->type = $request->type;
            $weapon->descriptionInicial = $request->desc_1;

            $weapon->save();

            return redirect()->route('weapons.create');

                break;

            case 'list':

            $weapon->name = $request->name;
            $weapon->type = $request->type;
            $weapon->descriptionInicial = $request->desc_1;

            $weapon->save();

            return redirect()->route('weapons.index');

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
