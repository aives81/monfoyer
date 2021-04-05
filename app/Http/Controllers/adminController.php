<?php

namespace App\Http\Controllers;

use App\Marques;
use App\Produit;
use Illuminate\Http\Request;
use phpDocumentor\Reflection\Utils;

class adminController extends Controller
{
    //

    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function getPageOfAddProd()
    {
        $marques = Marques::all();
        return view('cpanel.adminAddProduct')->with(['marques' => $marques]);
    }

    public function addProd(Request $request)
    {
        $request->validate([
            'prodLib' => 'required',
            'prodCat' => 'required',
            'marqId' => 'required',
            'prodImg' => 'required|image|max:6000'
        ]);

        $produit = new Produit([
            'prodLib' => $request->prodLib,
            'prodCat' => $request->prodCat,
            'prodImg' => request('prodImg')->store("prodImg", "public"),
            'marqId' => $request->marqId
        ]);

        $produit->save();

        return back();
    }
}
