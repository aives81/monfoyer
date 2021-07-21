<?php

namespace App\Http\Controllers;

use App\Commune;
use App\Marques;
use App\visite;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use PhpParser\Node\Stmt\Return_;

class interfaceController extends Controller
{
    //
    public function index()
    {
        /*Request to get marque and commune data for search*/
        $marques = Marques::all();
        $communes = Commune::all();

        /*Add visitor in database*/
        $this->checkVisitor();
        return view('welcome')->with(['marques' => $marques, 'communes' => $communes]);
    }

    private function checkVisitor()
    {
        //Return the IP address for the visitor
        $ipAddr = $_SERVER['REMOTE_ADDR'];

        //Check if he already visited the website today
        $checkQuery = DB::table('visites')->where('visiteIp', $ipAddr)->value('visiteDate');

        $today = date('d/m/Y');

        if(($checkQuery == null) || ($today != $checkQuery))
        {
            $insertVisit = new visite(['visiteIp' => $ipAddr, 'visiteDate' => $today]);
            $insertVisit->save();
        }

        return $checkQuery;
    }
}
