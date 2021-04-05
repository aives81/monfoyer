<?php

namespace App\Http\Controllers;

use App\Approvisionner;
use App\Posseder;
use http\Exception\BadConversionException;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class possederController extends Controller
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
        //
        //dd($request);
        for ($i = 0; $i < count($request->prods); $i++) {
            $inserProd = new Posseder([
                'qteStock' => $request->qte[$i],
                'puRechargement' => $request->recharge[$i],
                'puAchat' => $request->newBot[$i],
                'entId' => $request->entId,
                'prodId' => $request->prods[$i]
            ]);

            $inserProd->save();
        }

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
    public function update(Request $request)
    {
        //
        //dd($request);
        $posseder = DB::table('posseders')->where('posId', '=', $request->posseder)->get();
        if ($request->qte > 0)
        {
            $newQte = (int)$request->qte + (int)$posseder[0]->qteStock;

            //Ajout dans la table approvisionner
            $approvionnser = new Approvisionner([
                'oldQte' => (int)$posseder[0]->qteStock,
                'newQte' => $newQte,
                'dateApp' => date('Y-m-j'),
                'entId' => $posseder[0]->entId,
                'prodId' => $posseder[0]->prodId
            ]);

            $approvionnser->save();

            //Modification de la table posseders
            $dataToUpdate = ['qteStock' => $newQte, 'puRechargement' => $request->recharge, 'puAchat' => $request->newBot];
            Posseder::where('posId', $request->posseder)->update($dataToUpdate);

            return back();
        }else{
            return back();
        }

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
        $deletedRows = Posseder::where('posId', $id)->delete();
        return back();
    }
}
