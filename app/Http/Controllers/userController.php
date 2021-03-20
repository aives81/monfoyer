<?php

namespace App\Http\Controllers;

use App\Type_users;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class userController extends Controller
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
        $typeUser = Type_users::all();
        return view('cpanel.register', ['typeUsers' => $typeUser]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'type' => 'required',
            'nom' => 'required',
            'pnom' => 'required',
            'dateNaiss' => 'required',
            'genre' => 'required',
            'tel' => 'required|unique:users|max:14|min:10',
            'mdp' => 'required',
            'cmdp' => 'required'
        ]);

        //dd(date('Y-m-d', strtotime($request->dateNaiss)));
        $link = ($request->parrainId) ? "/Ouvrir-une-session/{" . $request->parrainId . "}" : "/Ouvrir-une-session";
        $mail = ($request->email) ? $request->email : null;
        $parrain = ($request->parrainId) ? $request->parrainId : null;

        if ($request->mdp != $request->cmdp) {
            return redirect($link)->with('error', 'Regardes bien tes mots de passe; Il ne sont pas identiques !');
        }

        $user = new User([
            'typeId' => $request->type,
            'nom' => $request->nom,
            'pnom' => $request->pnom,
            'dateNaiss' => date('Y-m-d', strtotime($request->dateNaiss)),
            'genre' => $request->genre,
            'tel' => $request->tel,
            'email' => $mail,
            'idParrain' => $parrain,
            'password' => Hash::make($request->mdp)
        ]);

        $user->save();

        $msg = "Félicitation $request->pnom $request->nom ! Akwaba dans la famille !";
        return redirect('/Ouvrir-une-session')->with('success', $msg);
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
