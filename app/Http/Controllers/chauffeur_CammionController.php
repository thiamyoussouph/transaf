<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Models\Camion;
use App\Models\Chauffeur;
use Illuminate\Http\Request;
use App\Models\Chauffeur_camion;

class chauffeur_CammionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $chauffeur_Cammions = Chauffeur_camion::all();
        return view('chauffeur_Camion.index', compact('chauffeur_Cammions'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $chauffeurs = Chauffeur::all();
        $camions=Camion::all();
        $chauffeur_Cammions= Chauffeur_camion::All()->sortByDesc('id');
        return view('chauffeur_Camion.create', compact('chauffeurs','camions','chauffeur_Cammions'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $chauffeur_Cammion=new Chauffeur_camion();
    
        $chauffeur_Cammion->chauffeur_id=$request["chauffeur_id"];
         $chauffeur_Cammion->camion_id=$request["camion_id"];
         $chauffeur_Cammion->save();
        return redirect()->route('chauffeur_Camion.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
                
                $chauffeur_Cammion = Chauffeur_camion::find($id);
                return view('chauffeur_Camion.detail', ['chauffeur_Cammion' => $chauffeur_Cammion]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $chauffeur_Cammion = Chauffeur_camion::find($id);
        return view('chauffeur_Camion.create', ['chauffeur_Cammion' => $chauffeur_Cammion]);
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
        Chauffeur_camion::find($id)->update($request->all());
        return redirect()->route('chauffeur_Camion.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Chauffeur_camion::find($id)->delete();
        return redirect()->route('chauffeur_Camion.index');
    }
}