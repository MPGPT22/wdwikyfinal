<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

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
        if (!$request->evol_class) {
            
            $this->validade($request, array(
            'type' => ['required',Rule::in(['Main', 'Secundary','Extra','Enemy','Boss','Secret',]),],
            'name' => 'required|Alpha|max:40|min:20',
            'class' => ['required',Rule::in(['Main', 'Secundary','Extra','Enemy','Boss','Secret',]),],

            ));






        }else{
            







        }

        

        switch ($request->submitbutton) {

            case 'another':
                return "another";
                break;
            
            case 'list':
                return "list";
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
