<?php

namespace App\Http\Controllers;

use App\Equipage;
use App\User;
use Auth;
use Illuminate\Http\Request;
use DB;
use App\Http\Requests;

class JeuneController extends Controller
{

    public function equipage()
    {
        $user = Auth::user();
        $equipage = $user->equipage()->get();
        return view('/equipage', compact('equipage','user'));
    }


}
