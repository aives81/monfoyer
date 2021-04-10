<?php

namespace App\Http\Controllers;

use App\Commune;
use App\Marques;
use Illuminate\Http\Request;

class interfaceController extends Controller
{
    //
    public function index()
    {
        $marques = Marques::all();
        $communes = Commune::all();
        return view('welcome')->with(['marques' => $marques, 'communes' => $communes]);
    }
}
