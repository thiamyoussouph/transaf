<?php

namespace App\Http\Controllers;
use Carbon\Carbon;
use App\Models\Camion;
use Illuminate\Http\Request;
use App\Models\Mouvement;
use App\Models\User;
use App\Models\Categorie;
use App\Models\Mouvement_lieu;
use Illuminate\Support\Facades\DB;


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
        $categories = Categorie::all();
        $camions = Camion::all();
        return view('mouvement.index', compact('Mouvement'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function createDecharge()
    {
        $mouvements= Mouvement::All()->sortByDesc('id');
        return view('mouvement.formDecharger', compact('mouvements'));

    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Categorie::all();
        $camions=Camion::all();
        $mouvements= Mouvement::All()->sortByDesc('id');
        return view('mouvement.forme', compact('categories','camions','mouvements'));

    }
    public function details(){

        $chargements=DB::table('mouvement_lieus')->join('mouvements','mouvements.id','=','mouvement_lieus.mouvement_id')->where('lieu_id',2)->get();
        $mouvement2=Mouvement_lieu::where('lieu_id',2)->get();
        return view('mouvement.detail', compact('chargements'));
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $mouvement=new Mouvement();
        $mvtLieu=new Mouvement_lieu();
        $date = str_replace(' ','_',Carbon::now()->toDateTimeString());
        $mvt="Mvt_";
        $camion=Camion::find($request["camion_id"]);
        //dd($mvt.$camion->matricule."_".$date);
        $mouvement->numeromouvement=$mvt.$camion->matricule."_".$date;
        $mouvement->categorie_id=$request["categorie_id"];
        $mouvement->description=$request["description"];
        $mouvement->camion_id=$request["camion_id"];
        $mouvement->user_id=$request["user_id"];
        $mouvement->save();
        $id=$mouvement->id;
        $mvtLieu->mouvement_id=$id;
        $mvtLieu->lieu_id=1;
        $mvtLieu->datecreation=$date;
        $mvtLieu->quantite=$request["quantite"];
        $mvtLieu->save();
        dd($id);
        return redirect()->route('mouvement.index');
    }
    public function decharger(Request $request)
    {
        $mvtLieu=new Mouvement_lieu();
        $date = Carbon::now()->toDateTimeString();
        $mouvement = Mouvement::find($request["mouvement"]);
        $mouvement->decharger=true;
        $mouvement->save();
        $mvtLieu->mouvement_id=$request["mouvement"];
        $mvtLieu->lieu_id=2;
        $mvtLieu->datecreation=$date;
        $mvtLieu->quantite=$request["quantite"];
        $mvtLieu->save();
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