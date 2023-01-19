<?php

namespace App\Http\Controllers;

use App\Models\Chauffeur_camion;
use Illuminate\Http\Request;
use App\Models\chauffeur_Cammion;
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
        return view('chauffeur_Cammion.index', compact('chauffeur_Cammions'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('chauffeur_Cammion.forme',);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Chauffeur_camion::create($request->all());
        return redirect()->route('chauffeur_Cammion.index');
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
                return view('chauffeur_Cammion.detail', ['chauffeur_Cammion' => $chauffeur_Cammion]);
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
        return view('chauffeur_Cammion.forme', ['chauffeur_Cammion' => $chauffeur_Cammion]);
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
        return redirect()->route('chauffeur_Cammion.index');
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
        return redirect()->route('chauffeur_Cammion.index');
    }
}