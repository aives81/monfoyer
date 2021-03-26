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

    public function oneEntreprise($entId)
    {
        $monEntrepot = DB::table('entrepots')->where('entId', $entId)->get();
        dd($monEntrepot);
        //return view('cpanel.allEntrepots', ['allEntreprisesOfUser' => $allEntrepriseOfUser]);
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
