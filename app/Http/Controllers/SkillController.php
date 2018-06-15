<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\DB;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\skill;

class SkillController extends Controller
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
        $element = DB::table('elements')->get();
        $scope = DB::table('spell_skill_targets')->get();

        return view('pages.skills.create')->with(array('elements'=>$element,'scope'=>$scope));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $element = DB::table('elements')->get();
        $scope = DB::table('spell_skill_targets')->get();
        $scope_name = [];
        foreach ($scope as $scopes) {
            array_push($scope_name, $scopes->name);
        }
        $element_name = [];
        foreach ($element as $elements) {
            array_push($element_name, $elements->name);
        }
        
        $this->validate($request, array(
            'name' => 'required|max:40|min:2',
            'scope' => ['required',Rule::in($scope_name)],
            'element' => ['required',Rule::in($element_name)],
            'desc_1' => 'required|min:5',

            ));

        $skill = new skill;

        switch ($request->submitbutton) {

            case 'another':

            $skill->name = $request->name;
            $skill->scope = $request->scope;
            $skill->element = $request->element;
            $skill->descriptionInicial = $request->desc_1;

            $skill->save();

            return redirect()->route('skills.create');

                break;

            case 'list':

            $skill->name = $request->name;
            $skill->scope = $request->scope;
            $skill->element = $request->element;
            $skill->descriptionInicial = $request->desc_1;

            $skill->save();

            return redirect()->route('skills.index');

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
