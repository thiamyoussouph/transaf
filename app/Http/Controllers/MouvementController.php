<?php

namespace App\Http\Controllers;

use App\Models\Camion;
use Illuminate\Http\Request;
use App\Models\Mouvement;
use App\Models\User;
use App\Models\Categorie;
use App\Models\Mouvement_lieu;
class MouvementController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $Mouvement = Mouvement::all();
        return view('mouvement.index', compact('Mouvement'));
    
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $users = User::all();
        $categories = Categorie::all();
        $camions=Camion::all();

        return view('mouvement.forme', compact('users','categories','camions'));

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Mouvement::create($request->all());
        return redirect()->route('mouvement.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
            
            $mouvement = Mouvement::find($id);
            return view('mouvement.detail', ['mouvement' => $mouvement]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $mouvement = Mouvement::find($id);
        return view('mouvement.forme', ['mouvement' => $mouvement]);
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
        $mouvement = Mouvement::find($id);
        $mouvement->update($request->all());
        return redirect()->route('mouvement.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $mouvement = Mouvement::find($id);
        $mouvement->delete();
        return redirect()->route('mouvement.index');
    }
}
