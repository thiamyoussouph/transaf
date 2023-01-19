<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Chauffeur;

class chauffeurController extends Controller
{

       /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('permission:chauffeur-list|chauffeur-create|chauffeur-show|chauffeur-destroy', ['only' => ['index']]);
        $this->middleware('permission:chauffeur-create', ['only' => ['create','store']]);
        $this->middleware('permission:chauffeur-show', ['only' => ['show']]);
        $this->middleware('permission:chauffeur-destroy', ['only' => ['destroy']]);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $chauffeurs = Chauffeur::all();
        return view('chauffeur.index', compact('chauffeurs'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
  
        return view('chauffeur.forme',);
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
            'nom' => 'required',
            'prenom' => 'required',
            'telephone' => 'required|numeric',
            'adresse' => 'required',
            'CIN' => 'required|unique:chauffeurs',
                ]);
        Chauffeur::create($request->all());
        return redirect()->route('chauffeur.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

        $chauffeur = Chauffeur::find($id);
        return view('chauffeur.detail', ['chauffeur' => $chauffeur]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $chauffeur = Chauffeur::find($id);
        return view('chauffeur.forme', ['chauffeur' => $chauffeur]);
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
        Chauffeur::find($id)->update($request->all());
        return redirect()->route('chauffeur.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Chauffeur::find($id)->delete();
        return redirect()->route('chauffeur.index');
    }
}