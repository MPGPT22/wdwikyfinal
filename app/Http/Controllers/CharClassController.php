<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

use Illuminate\Support\Facades\DB;

use Carbon\Carbon;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\CharClasse;

class CharClassController extends Controller
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
        $classes = DB::table('char_classes')->orderBy('created_at', 'desc')->get();

        return view('pages.classes.list')->withList($classes);
    }
    public function set_public($id)
    {
        $class = CharClasse::find($id);
        $class->public = 1;
        $class->save();


        return redirect()->route('classes.index');
    }
    public function set_not_public($id)
    {
        $class = CharClasse::find($id);
        $class->public = 0;
        $class->save();

        return redirect()->route('classes.index');
    }
    public function indexPublic()
    {
        $now = Carbon::now();
        $classes = DB::table('char_classes')->orderBy('created_at', 'desc')->get();

        return view('pages.classes.listPublic')->withList($classes)->withNow($now);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pages.classes.create');
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
            'level' => ['required',Rule::in(['1','2','3','4',]),],
            'HP' => 'required',
            'MP' => 'required',
            'ATK' => 'required',
            'DEF' => 'required',
            'MAT' => 'required',
            'MDEF' => 'required',
            'AGI' => 'required',

            ));


        $HP = preg_replace("/([A-Za-z])+/", 'i' , $request->HP);
        $MP = preg_replace("/([A-Za-z])+/", 'i' , $request->MP);
        $ATK = preg_replace("/([A-Za-z])+/", 'i' , $request->ATK);
        $DEF = preg_replace("/([A-Za-z])+/", 'i' , $request->DEF);
        $MAT = preg_replace("/([A-Za-z])+/", 'i' , $request->MAT);
        $MDEF = preg_replace("/([A-Za-z])+/", 'i' , $request->MDEF);
        $AGI = preg_replace("/([A-Za-z])+/", 'i' , $request->AGI);


        $class = new CharClasse;



        switch ($request->submitbutton) {

            case 'another':

            $class->name = $request->name;
            $class->evo_lvl = $request->level;
            $class->HP = $HP;
            $class->MP = $MP;
            $class->ATK = $ATK;
            $class->DEF = $DEF;
            $class->MAT = $MAT;
            $class->MDEF = $MDEF;
            $class->AGI = $AGI;


            $class->save();

            return redirect()->route('classes.create');

                break;

            case 'list':

            $class->name = $request->name;
            $class->evo_lvl = $request->level;
            $class->HP = $HP;
            $class->MP = $MP;
            $class->ATK = $ATK;
            $class->DEF = $DEF;
            $class->MAT = $MAT;
            $class->MDEF = $MDEF;
            $class->AGI = $AGI;

            $class->save();

            return redirect()->route('classes.index');

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
        $class = CharClasse::find($id);

        return view('pages.classes.item')->withItem($class);
    }
    public function showPublic($id)
    {
        $class = CharClasse::find($id);

        return view('pages.classes.itemPublic')->withItem($class);
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
        $item = CharClasse::find($id);
        $item->delete();

        return redirect()->route('classes.index');
    }
}
