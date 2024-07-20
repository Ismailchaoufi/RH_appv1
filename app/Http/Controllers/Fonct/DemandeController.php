<?php

namespace App\Http\Controllers\Fonct;

use App\Http\Controllers\Controller;
use App\Models\Demande;
use App\Models\TypeDemande;
use App\Models\User;
use App\Notifications\DemandeCreated;
use Carbon\Carbon;
use Illuminate\Http\Request;

class DemandeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        
        $typeDemandeId = $request->input('type_demande');
        $query=Demande::where('id_user', auth()->id());
        if($typeDemandeId) $query->where('id_typeDemande', $typeDemandeId);
        $demandes= $query->get();
        $typeDemandes=TypeDemande::all();


       
        return view('Fonctionnaire.demandes.listdemandes',compact('demandes','typeDemandes','typeDemandeId'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $typedemandes = TypeDemande::all();
        return view('Fonctionnaire.demandes.create',compact('typedemandes'));

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'id_typeDemande' => 'required|exists:type_demandes,id',
        ]);
    
        $userId = auth()->id();
        $typeDemandeId = $request->input('id_typeDemande');
    
        // Vérifier s'il existe déjà une demande en cours pour ce type de demande
        $existingDemande = Demande::where('id_user', $userId)
                                    ->where('id_typeDemande', $typeDemandeId)
                                    ->whereIn('id_status', [1, 2]) // Statuts représentant une demande en cours de traitement
                                    ->first();
    
        if ($existingDemande) {
            return redirect()->back()->withErrors(['error' => 'Une demande de ce type est déjà en cours de traitement.']);
        }
    
        $demande = new Demande();
        $demande->id_typeDemande = $typeDemandeId;
        $demande->id_status = 1;
        $demande->id_user = $userId;
    
        if ($typeDemandeId == 3) {
            $request->validate([
                'date_debut' => 'required_if:id_typeDemande,3|date',
                'nbr_jours' => 'required_if:id_typeDemande,3|integer|min:1',
            ]);
    
            $demande->date_debut = Carbon::parse($request->input('date_debut'));
            $demande->nbr_jours = $request->input('nbr_jours');
            $demande->date_fin = $demande->date_debut->addDays($demande->nbr_jours - 1);
        }
    
        $demande->save();
        //envoyer une notification a l'admin
        $admin=User::where('role','1')->first();
        $admin->notify(new DemandeCreated($demande));


        return redirect()->route('demandes.index')->with('status', 'Demande ajoutée avec succès');
    }
    

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
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
        $demande = Demande::find($id);
        $status = $request->input('status');

        if ($status == 'accepted') {
            $demande->id_status = 2; // Statut accepté
        } elseif ($status == 'refused') {
            $demande->id_status = 3; // Statut refusé
        }

        $demande->update();

        return redirect()->route('profileadmin.show', $id)->with('status', 'Demande mise à jour avec succès');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
