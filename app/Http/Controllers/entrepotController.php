<?php

namespace App\Http\Controllers;

use App\Commune;
use App\Entrepot;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class entrepotController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $communes = Commune::all();
        return view('cpanel.addEntrepot', ['communes' => $communes]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $request->validate([
            'entLib' => 'required',
            'entLat' => 'required',
            'entLong' => 'required',
            'comId' => 'required',
            'entDescrip' => 'required',
            'entImg' => 'required|image|max:6000'
        ]);

        $user = new Entrepot([
            'entLib' => $request->entLib,
            'entImg' => request('entImg')->store("imgEntrepot", "public"),
            'entLat' => $request->entLat,
            'entLong' => $request->entLong,
            'comId' => $request->comId,
            'entDescripPlace' => $request->entDescrip,
            'entSlug' => Str::slug($request->entLib, '-'),
            'id' => Auth::user()->id
        ]);

        $user->save();

        $msg = "Félicitation ! Ton entrepot \"$request->entLib\" a été ajouté. <br> MonFoyer vous contactera dans les prochains jours pour plus de détails.";
        $msg .= "Tous vos entrepots se trouve <a href='/Mes-entrepots'>ici</a>";
        return redirect('/Ajouter-entrepot')->with('success', $msg);
    }

    /**
     * Display all entreprises belonging to an user
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function entrepriseUser()
    {
        $allEntrepriseOfUser = DB::table('entrepots')->where('id', Auth::user()->id)->get();
        return view('cpanel.allEntrepots', ['allEntreprisesOfUser' => $allEntrepriseOfUser]);
    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function show($entId)
    {
        $monEntrepot = DB::table('entrepots')->where('entId', $entId)->first();

        $allProds = DB::table('produits')
            ->selectRaw('produits.prodId, produits.prodLib, produits.prodCat, produits.prodImg, produits.marqId, marques.marqCode, marques.marqLib')
            ->join('marques', 'marques.marqId', '=', 'produits.marqId')
            ->orderBy('marques.marqLib', 'asc')
            ->get();

        $prodsForEnt = DB::select("SELECT *
        FROM entrepots e, posseders p, produits pr, marques m
        WHERE e.entId = p.entId AND p.prodId = pr.prodId AND pr.marqId = m.marqId AND e.entId = $entId
        
        ");

        $approTable = DB::select("SELECT *
        FROM entrepots e, approvisionners a, produits pr, marques m
        WHERE e.entId = a.entId AND a.prodId = pr.prodId AND pr.marqId = m.marqId AND e.entId = $entId
        
        ");

        $jour = explode('@', $monEntrepot->entJourDispo);
        $intermHeure = explode('|', $monEntrepot->entHeureDispo);
        $heure = [];
        for ($i = 0; $i < count($intermHeure); $i++) {
            $heure[] = explode("@", $intermHeure[$i]);
        }

        for ($j=0; $j<count($jour); $j++)
        {
            $workingDayArray[] = [
                'jour' => $jour[$j],
                'heureDeb' => explode("@", $intermHeure[$j])[0],
                'heureFin' => explode("@", $intermHeure[$j])[1]
            ];
        }

        //Pour ranger les jours dans l'ordre
        asort($workingDayArray);

        $dataArray = [
            'monEntrepot' => $monEntrepot,
            'jour' => $workingDayArray,
            'allprods' => $allProds,
            'prodsForEnt' => $prodsForEnt,
            'approvisionnement' => $approTable
        ];

        return view('cpanel.detailEntrepot', $dataArray);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        //
        $entreprise = DB::table('entrepots')->where('entId', $request->idEnt)->first();
        $dataToUpdate = [];

        if ($request->updateType == "jourHeure") {
            //Recuperation des jours de travail pour verification
            $arrayWorkingDayEnt = explode('@', $entreprise->entJourDispo);

            $tabJourEnre = [];

            for ($i = 0; $i < count($request->jour); $i++) {

                //On verifie que le jour choisi n'est pas déjà défini pour cet entrepot
                if (!in_array($request->jour[$i], $arrayWorkingDayEnt))
                {
                    if (isset($request->jour[$i]) && !empty($request->jour[$i])) {

                        $tabJourEnre[] = trim(htmlspecialchars($request->jour[$i]));
                    }

                }else{
                    return back();
                }
            }

            $workingDays = (!empty($entreprise->entJourDispo)) ?
                $entreprise->entJourDispo . "@" .  implode("@", $tabJourEnre) :
                implode("@", $tabJourEnre);

            $tabHeurOuvFerm = [];

            for ($i = 0; $i < count($tabJourEnre); $i++) {

                if (!empty($request->heureOuv[$i]) && !empty($request->heureFerm[$i])) {

                    $tabHeurOuvFerm[] = implode("@", array($request->heureOuv[$i], $request->heureFerm[$i]));
                }
            }

            $workingHours = (!empty($entreprise->entHeureDispo)) ?
                $entreprise->entHeureDispo . "|" . implode("|", $tabHeurOuvFerm) :
                implode("|", $tabHeurOuvFerm);

            $dataToUpdate = ['entJourDispo' => $workingDays, 'entHeureDispo' => $workingHours];

        }

        Entrepot::where('entId', $request->idEnt)->update($dataToUpdate);

        return redirect()->back()->with(['success' => 'Les jours et heures d\'ouvertures ont été modifée']);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
