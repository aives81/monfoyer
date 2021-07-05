<?php

namespace App\Http\Controllers;

use App\Commander;
use App\Posseder;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use phpDocumentor\Reflection\Types\String_;

class commanderController extends Controller
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
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //Insertion de la nouvelle commande
        $storeOrder = new Commander([
            'cmdQte' => $request->cmdQte,
            'cmdDate' => date('d/m/Y'),
            'cmdDateLivraison' => (!empty($request->dateLivraison) ? $request->dateLivraison : null),
            'cmdType' => $request->cmdType,
            'cmdLivraison' => $request->livraison,
            'id' => $request->userId,
            'entId' => $request->entId,
            'prodId' => $request->prodId
        ]);

        $storeOrder->save();

        return redirect()->back()->with(['success' => 'Votre commande a été passée et en qttente de validation !!!']);
    }

    /**
     * Methode pour retourner toutes commandes d'un utilisateur
     * @return array
     */
    public static function getOrderFromuser()
    {
        $dataArray = [];
        if (Auth::user()->typeId == 2) {
            /*
             * prodImg, marqLib, prodCat, cmdType, cmdQte, puRechargement, puAchat, cmdDate, cmdState
             */
            $myOder = DB::select("SELECT * FROM users u, posseders p, produits pr, entrepots e, marques m, commanders c
                        WHERE p.prodId = pr.prodId AND p.entId = e.entId AND m.marqId = pr.marqId AND c.id = u.id AND e.entId = c.entId AND pr.prodId = c.prodId AND c.id = " . Auth::user()->id);
            $dataArray = [
                'orders' => $myOder
            ];
        }
        return $dataArray;
    }

    /**
     *Methode pour retourner toutes les commandes de tous les entrepots d'un proprio
     */
    public function showAllOrderOfEnts()
    {
        $allOrdersForEnts = DB::select('SELECT * FROM commanders c, produits pr, users u, entrepots e, marques m, posseders p
                            WHERE c.entId = e.entId AND p.entId=e.entId AND p.prodId=pr.prodId AND pr.prodId = c.prodId AND u.id = e.id AND m.marqId = pr.marqId AND e.id=' . Auth::user()->id);
        //dd($allOrdersForEnts);
        return view('cpanel.allOrders')->with(['wharehouseOrders' => $allOrdersForEnts]);
    }

    /**
     * @param int $comId
     * @param string $action
     * @param int $entId
     * @param int $qte
     * @param int $prodId
     */

    public function apprCmd(int $comId, string $action, int $entId, int $qte, int $prodId)
    {
        $newState = 2;

        if ($action == 'appr')
        {
            //Modification de la qte en stock du produit
            $posserderProd = DB::table('posseders')->where('entId', '=', $entId)
                ->where('prodId', '=', $prodId)->first();

            //Modification de la quantité du produit
            $newQte = (int)$posserderProd->qteStock - (int)$qte;
            Posseder::where('posId', $posserderProd->posId)->update(['qteStock' => $newQte]);

            //Modification de ll'etat d'une commande
            $newState = 1;
        }

        //Modification de l'etat de la commande
        Commander::where('cmdId', $comId)->update(['cmdState' => $newState]);

        return back();
    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
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
