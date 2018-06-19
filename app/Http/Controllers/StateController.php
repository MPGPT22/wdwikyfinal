<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\DB;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\state;

class StateController extends Controller
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
        $states = DB::table('states')->orderBy('created_at', 'desc')->get();

        return view('pages.states.list')->withList($states);
    }
    public function set_public($id)
    {
        $state = state::find($id);
        $state->public = 1;
        $state->save();


        return redirect()->route('states.index');
    }
    public function set_not_public($id)
    {
        $state = state::find($id);
        $state->public = 0;
        $state->save();

        return redirect()->route('states.index');
    }
    public function indexPublic()
    {
        $states = DB::table('states')->orderBy('created_at', 'desc')->get();

        return view('pages.states.listPublic')->withList($states);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pages.states.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, array(
            'name' => 'required|max:40|min:2',
            'desc_1' => 'required|min:5',

            ));

        $state = new state;

        switch ($request->submitbutton) {

            case 'another':

            $state->name = $request->name;
            $state->descriptionInicial = $request->desc_1;

            $state->save();

            return redirect()->route('states.create');

                break;

            case 'list':

            $state->name = $request->name;
            $state->descriptionInicial = $request->desc_1;

            $state->save();

            return redirect()->route('states.index');

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
        $item = state::find($id);
        $item->delete();

        return redirect()->route('states.index');
    }
}
