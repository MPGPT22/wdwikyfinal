<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\DB;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\armor;

class ArmorController extends Controller
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
        $types = DB::table('armor_types')->get();
        $equipments = DB::table('equipment_types')->get();
        return view('pages.armors.create')->with(array('type'=>$types,'equipment' => $equipments));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $types = DB::table('armor_types')->get();
        $equipments = DB::table('equipment_types')->get();
        $types_name = [];
        foreach ($types as $type) {
            array_push($types_name, $type->name);
        }
        $equipment_name = [];
        foreach ($equipments as $equipment) {
            array_push($equipment_name, $equipment->name);
        }
        
        $this->validate($request, array(
            'name' => 'required|max:40|min:2',
            'type' => ['required',Rule::in($types_name)],
            'equipment_type' => ['required',Rule::in($equipment_name)],
            'desc_1' => 'required|min:5',

            ));

        $armor = new armor;

        switch ($request->submitbutton) {

            case 'another':

            $armor->name = $request->name;
            $armor->type = $request->type;
            $armor->equipmentType = $request->equipment_type;
            $armor->descriptionInicial = $request->desc_1;

            $armor->save();

            return redirect()->route('armors.create');

                break;

            case 'list':

            $armor->name = $request->name;
            $armor->type = $request->type;
            $armor->equipmentType = $request->equipment_type;
            $armor->descriptionInicial = $request->desc_1;

            $armor->save();

            return redirect()->route('armors.index');

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
