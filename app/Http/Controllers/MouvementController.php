<?php

namespace App\Http\Controllers;
use Carbon\Carbon;
use App\Models\Camion;
use Illuminate\Http\Request;
use App\Models\Mouvement;
use App\Models\User;
use App\Models\Categorie;
use App\Models\chargement;
use App\Models\dechargement;
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
        $mouvements = Mouvement::all();
        return view('mouvement.mouvementlieu', compact('mouvements'));

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
       $chargements=new chargement();
       $dechargements=new dechargement();
     
        $date = str_replace(' ','_',Carbon::now()->toDateTimeString());
        $mvt="Mvt_";
        $camion=Camion::find($request["camion_id"]);
        //dd($mvt.$camion->matricule."_".$date);
        $chargements->user_id=$request["user_id"];
        $chargements->quantite=$request["quantite"];
        $chargements->save();
        $dechargements->quantite=0;
        $dechargements->save();
        $mouvement->numeromouvement=$mvt.$camion->matricule."_".$date;
        $mouvement->categorie_id=$request["categorie_id"];
        $mouvement->description=$request["description"];
        $mouvement->camion_id=$request["camion_id"];
        $mouvement->lieu_id=1;
        $mouvement->chargement_id=$chargements->id;
        $mouvement->decharger=false;
        $mouvement->save();
        
        
       
        return redirect()->route('mouvement.index');
    }
    public function decharger(Request $request)
    {
        $dechargements=new dechargement();
      $dechargements->user_id=$request["user_id"];
        $dechargements->quantite=$request["quantite"];
        $dechargements->save();
        $mouvement = Mouvement::find($request["mouvement"]);
        $mouvement->decharger=true;
        $mouvement->dechargement_id=$dechargements->id;
        $mouvement->lieu_id=2;
        $mouvement->save();
   
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
