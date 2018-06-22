<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\DB;

use Carbon\Carbon;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\item;

class ItemController extends Controller
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
        $item = DB::table('items')->orderBy('created_at', 'desc')->get();

        return view('pages.items.list')->withList($item);
    }
    public function set_public($id)
    {
        $item = item::find($id);
        $item->public = 1;
        $item->save();


        return redirect()->route('items.index');
    }
    public function set_not_public($id)
    {
        $item = item::find($id);
        $item->public = 0;
        $item->save();

        return redirect()->route('items.index');
    }
    public function indexPublic()
    {
        $now = Carbon::now();
        $item = DB::table('items')->orderBy('created_at', 'desc')->get();

        return view('pages.items.listPublic')->withList($item)->withNow($now);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $types = DB::table('item_types')->get();
        return view('pages.items.create')->with(array('types'=>$types));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $types = DB::table('item_types')->get();;
        $types_name = [];
        foreach ($types as $type) {
            array_push($types_name, $type->name);
        }

        $this->validate($request, array(
            'name' => 'required|max:40|min:2',
            'type' => ['required',Rule::in($types_name)],
            'desc_1' => 'required|min:5',

            ));

        $item = new item;

        switch ($request->submitbutton) {

            case 'another':

            $item->name = $request->name;
            $item->type = $request->type;
            $item->descriptionInicial = $request->desc_1;

            $item->save();

            return redirect()->route('items.create');

                break;

            case 'list':

            $item->name = $request->name;
            $item->type = $request->type;
            $item->descriptionInicial = $request->desc_1;

            $item->save();

            return redirect()->route('items.index');

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
        $items = item::find($id);

        return view('pages.items.item')->withItem($items);
    }
    public function showPublic($id)
    {
        $items = item::find($id);

        return view('pages.items.itemPublic')->withItem($items);
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
        $item = item::find($id);
        $item->delete();

        return redirect()->route('items.index');
    }
}
