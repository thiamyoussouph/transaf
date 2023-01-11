<?php

namespace App\Http\Controllers;

use App\Models\Camion;
use Illuminate\Http\Request;

class CamionController extends Controller
{

     /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('permission:camion-list|camion-create|camion-show|camion-destroy', ['only' => ['index']]);
        $this->middleware('permission:camion-create', ['only' => ['create','store']]);
        $this->middleware('permission:camion-show', ['only' => ['show']]);
        $this->middleware('permission:camion-destroy', ['only' => ['destroy']]);
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $Camions = Camion::all();
        return view('camion.index', compact('Camions'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('camion.create',);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        request()->validate([
            'matricule' => 'required|unique:camions|max:9',
            'marque' => 'required',
            'volume' => 'required|numeric',   
            
             ]);

        Camion::create($request->all());
        return redirect()->route('camion.index');
    }


    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

        $Camion = Camion::find($id);
        return view('camion.detail', ['Camion' => $Camion]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {

        return view('camion.forme');
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
        $Camion = Camion::findOrFail($id);
        $Camion->delete();

        return redirect()->route('camion.index');
    }
}