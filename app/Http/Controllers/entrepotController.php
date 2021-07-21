<?php

namespace App\Http\Controllers;

use App\Commune;
use App\Entrepot;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use phpDocumentor\Reflection\Types\String_;
use function PHPUnit\Framework\isEmpty;

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
        //Requete pour recuper les info d'un entrepot
        $monEntrepot = DB::table('entrepots')->where('entId', $entId)->first();

        //Requete pour recuperer tous les produits de la base de données
        $allProds = DB::table('produits')
            ->selectRaw('produits.prodId, produits.prodLib, produits.prodCat, produits.prodImg, produits.marqId, marques.marqCode, marques.marqLib')
            ->join('marques', 'marques.marqId', '=', 'produits.marqId')
            ->orderBy('marques.marqLib', 'asc')
            ->get();

        //Requete pour recuperer les produits d'un entrepot
        $prodsForEnt = $this->returnEntProd($entId);

        //Requete pour recuperer les lignes d'approvisionnements en prduit d'un entrepot
        $approTable = DB::select("SELECT *
        FROM entrepots e, approvisionners a, produits pr, marques m
        WHERE e.entId = a.entId AND a.prodId = pr.prodId AND pr.marqId = m.marqId AND e.entId = $entId

        ");

        //traitement sur les jours et heures d'ouverture
        $workingDayArray = $this->returnSortArrayOfWorkingDay($monEntrepot->entJourDispo, $monEntrepot->entHeureDispo);

        //Retour des infos a la vue
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
     * Methode pour retourner les produits d'un entrepot
     * @param $entId
     * @return array
     */
    private function returnEntProd($entId)
    {
        //Requete pour recuperer les produits d'un entrepot
        $prodsForEnt = DB::select("SELECT *
        FROM entrepots e, posseders p, produits pr, marques m
        WHERE e.entId = p.entId AND p.prodId = pr.prodId AND pr.marqId = m.marqId AND e.entId = $entId

        ");

        return $prodsForEnt;
    }

    /**
     * Methode pour faciliter le traitmeent des jours et heures de travail
     * @param $entJourDispo
     * @param $entHeureDispo
     * @return array
     */
    private function returnSortArrayOfWorkingDay($entJourDispo, $entHeureDispo)
    {
        $workingDayArray = [];

        $jour = explode('@', $entJourDispo);
        $intermHeure = explode('|', $entHeureDispo);
        $heure = [];
        for ($i = 0; $i < count($intermHeure); $i++) {
            $heure[] = explode("@", $intermHeure[$i]);
        }

        //S'il y a bien des heures de taff definies par cet entrepot, on poursuit
        if ($intermHeure[0] != "") {
            for ($j = 0; $j < count($jour); $j++) {
                $workingDayArray[] = [
                    'jour' => $jour[$j],
                    'heureDeb' => explode("@", $intermHeure[$j])[0],
                    'heureFin' => explode("@", $intermHeure[$j])[1]
                ];
            }
            //Pour ranger les jours dans l'ordre
            asort($workingDayArray);
        }

        return $workingDayArray;
    }


    /**
     * Methode pour faire la recherche de produit
     */
    public function showSearchResult()
    {
        $marque = request()->input('marque');
        $categorie = request()->input('categorie');
        $commune = request()->input('commune');

        $sql = "SELECT * FROM entrepots e, marques m, produits pr, communes c, posseders p
                WHERE e.entId = p.entId AND pr.prodId = p.prodId AND pr.marqId = m.marqId AND c.comId = e.comId AND p.qteStock>0";

        (!empty($marque)) ? $sql .= " AND pr.marqId = " . $marque : '';
        (!empty($categorie)) ? $sql .= " AND pr.prodCat = '" . $categorie . "'" : '';
        (!empty($commune)) ? $sql .= " AND e.comId = " . $commune : '';

        $sql .= ' GROUP BY e.entLib';

        $searchResult = DB::select($sql);
        $coordonateArray = $searchResult;
        $arrayEntDispo = [];
        foreach ($searchResult as $key => $result)
        {
            $entIsOpen = $this->checkIfEntIsOpen($result->entJourDispo, $result->entHeureDispo);
            $arrayEntDispo[$key] = $entIsOpen;
        }

        return view('listings')->with(['searchResult' => $searchResult, 'dispo' => $arrayEntDispo, 'geoLocData' => $coordonateArray]);
    }

    private function checkIfEntIsOpen($day, $hour)
    {
            $workingDay = explode('@',$day);
            $workingHour = explode('|',$hour);
            $today = $this->returnDayInFrench();

            if ($workingDay[0] != "")
            {
                $indiceDay = "";
                for ($i = 0; $i<count($workingDay); $i++)
                {
                    if ($today == $workingDay[$i])
                    {
                        $indiceDay = $i;
                    }
                }

                if (in_array($today, $workingDay))
                {
                    //Calculer le timeStamp de l'heure d'ouverture, de fermeture et actuelle
                    $actualTime = time();
                    $actualWorkingHour = explode("@", $workingHour[$indiceDay]);

                    $beginingTime = gmmktime((int)substr($actualWorkingHour[0], 0, 2), (int)substr($actualWorkingHour[0], 3, 2));
                    $endingTime = gmmktime((int)substr($actualWorkingHour[1], 0, 2), (int)substr($actualWorkingHour[0], 3, 2));

                    //dd(($actualTime, $beginingTime, <= $beginingTime));

                    if (($actualTime >= $beginingTime) && ($actualTime <= $endingTime))
                    {
                        return "ouvert";
                    }else
                    {
                        return "ferme";
                    }
                }

            }else {
                return "Aucun jour de travail défini";
            }
    }


    /**
     * Methode pour retourner le jour de la semaine en francais
     * @return mixed
     */
    public function returnDayInFrench()
    {
        $mois = array("Janvier", "Fevrier", "Mars", "Avril","Mai", "Juin", "Juillet", "Août","Septembre", "Octobre", "Novembre", "Decembre");
        $jours= array("Dimanche", "Lundi", "Mardi", "Mercredi", "Jeudi", "Vendredi", "Samedi");

        //return $jours[date("w")]." ".date("j").(date("j")==1 ? "er":" ") . $mois[date("n")-1]." ".date("Y");
        return $jours[date("w")];
    }


    public function showDetal(int $entId, string $slug)
    {
        $query = "SELECT * FROM entrepots e, marques m, produits pr, communes c, posseders p, users u
                WHERE e.entId = p.entId AND pr.prodId = p.prodId AND pr.marqId = m.marqId AND c.comId = e.comId AND e.id = u.id AND e.entId = " . $entId . " AND e.entSlug = '" . $slug . "'";

        $entInfo = DB::select($query);
        $dataArray = [
            'entInfo' => $entInfo,
            'produits' => $this->returnEntProd($entId),
            'geoLocData' => $entInfo
        ];

        //dd($entInfo);
        return view('listing-single')->with($dataArray);
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
                if (!in_array($request->jour[$i], $arrayWorkingDayEnt)) {
                    if (isset($request->jour[$i]) && !empty($request->jour[$i])) {

                        $tabJourEnre[] = trim(htmlspecialchars($request->jour[$i]));
                    }

                } else {
                    return back();
                }
            }

            $workingDays = (!empty($entreprise->entJourDispo)) ?
                $entreprise->entJourDispo . "@" . implode("@", $tabJourEnre) :
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
