<?php

namespace App\Http\Controllers;

use App\Chef;

use Illuminate\Http\Request;

use App\Http\Requests;

class WelcomeController extends Controller
{
    function index()
    {
        $chefs = Chef::all();
        return view('welcome', compact('chefs'));
    }
}