<?php

namespace App\Http\Controllers;

use App\Equipage;
use App\User;
use App\Chef;
use Illuminate\Http\Request;
use DB;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class ChefController extends Controller
{

    public function index()
    {
        $chefs = Chef::all();
        $jeunes = User::all();
        $equipages = Equipage::all();

        return view('/chef.home', compact('jeunes', 'equipages', 'chefs'));
    }

    public function liste()
    {
        $chefs = DB::table('chef')->get();

        return view('/chef/listeChef', compact('chefs'));
    }

    public function infoUnite()
    {
        $chefs = Chef::orderBy('nom')->get();
        $jeunes = User::orderBy('nom')->get();
        $garcons = User::where('sexe', 'M')->orderBy('nom')->get();
        $filles = User::where('sexe', 'f')->orderBy('nom')->get();
        $equipages = Equipage::all();

        return view('/chef/info_unite',compact('chefs', 'jeunes', 'garcons', 'filles', 'equipages'));
    }

    public function ajouterEquipage()
    {
        return view('/chef/ajouterEquipage');
    }
}
