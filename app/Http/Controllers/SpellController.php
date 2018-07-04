<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\DB;

use Carbon\Carbon;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\spell;

class SpellController extends Controller
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
        $spells = DB::table('spells')->orderBy('created_at', 'desc')->get();

        return view('pages.spells.list')->withList($spells);
    }
    public function set_public($id)
    {
        $spell = spell::find($id);
        $spell->public = 1;
        $spell->save();


        return redirect()->route('spells.index');
    }
    public function set_not_public($id)
    {
        $spell = spell::find($id);
        $spell->public = 0;
        $spell->save();

        return redirect()->route('spells.index');
    }
    public function indexPublic()
    {
        $now = Carbon::now();
        $spells = DB::table('spells')->orderBy('created_at', 'desc')->get();

        return view('pages.spells.listPublic')->withList($spells)->withNow($now);
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
        return view('pages.spells.create')->with(array('elements'=>$element,'scope'=>$scope));
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

            ));

        $spell = new spell;

        switch ($request->submitbutton) {

            case 'another':

            $spell->name = $request->name;
            $spell->scope = $request->scope;
            $spell->element = $request->element;
            $spell->descriptionInicial = $request->desc_1;

            $spell->save();

            return redirect()->route('spells.create');

                break;

            case 'list':

            $spell->name = $request->name;
            $spell->scope = $request->scope;
            $spell->element = $request->element;
            $spell->descriptionInicial = $request->desc_1;

            $spell->save();

            return redirect()->route('spells.index');

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
        $spell = spell::find($id);

        return view('pages.spells.item')->withItem($spell);
    }
    public function showPublic($id)
    {
        $spell = spell::find($id);

        return view('pages.spells.itemPublic')->withItem($spell);
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
        $item = spell::find($id);
        $item->delete();

        return redirect()->route('spells.index');
    }
}
