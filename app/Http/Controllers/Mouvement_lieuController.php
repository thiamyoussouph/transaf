<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Mouvement_lieu;
class Mouvement_lieuController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $Mouvement_lieu = Mouvement_lieu::all();
        return view('mouvement.mouvementlieu', compact('Mouvement_lieu'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('mouvement_lieu.forme',);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Mouvement_lieu::create($request->all());
        return redirect()->route('mouvement_lieu.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
                
                $mouvement_lieu = Mouvement_lieu::find($id);
                return view('mouvement_lieu.detail', ['mouvement_lieu' => $mouvement_lieu]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $mouvement_lieu = Mouvement_lieu::find($id);
        return view('mouvement_lieu.forme', ['mouvement_lieu' => $mouvement_lieu]);
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
        $mouvement_lieu = Mouvement_lieu::find($id);
        $mouvement_lieu->update($request->all());
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $mouvement_lieu = Mouvement_lieu::find($id);
        $mouvement_lieu->delete();
    }
}