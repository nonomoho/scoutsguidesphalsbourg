<?php

namespace App\Http\Controllers;

use App\User;
use App\Equipage;
use Illuminate\Http\Request;

use App\Http\Requests;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Redirect;
use Session;
use Validator;

class EquipageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $equipages = Equipage::all();

        return view('equipage.index', compact('equipages'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('equipage.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $rules = array(
            'nom' => 'required',
            'sexe' => 'required'
        );
        $validator = Validator::make(Input::all(), $rules);

        // process the login
        if ($validator->fails()) {
            return Redirect::to('equipages/create')
                ->withErrors($validator)
                ->withInput(Input::except('password'));
        } else {
            // store
            $equipage = new Equipage;
            $equipage->nom = Input::get('nom');
            $equipage->sexe = Input::get('sexe');
            $equipage->save();

            // redirect
            Session::flash('message', 'Un nouvel équipage a été créé');
            return Redirect::to('equipage');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show(Equipage $equipage)
    {
        $membres = User::where('equipage_id', $equipage->id)->get();
        return view('equipage.show', compact('equipage', 'membres'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {

        $equipage = Equipage::find($id);
        return view('equipage.edit', compact('equipage'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function update($id)
    {
        // validate
        // read more on validation at http://laravel.com/docs/validation
        $rules = array(
            'nom' => 'required',
            'sexe' => 'required'
        );
        $validator = Validator::make(Input::all(), $rules);
        // process the login
        if ($validator->fails()) {
            return Redirect::to('equipage/' . $id . '/edit')
                ->withErrors($validator)
                ->withInput(Input::except('password'));
        } else {
            $equipage = Equipage::find($id);

            $equipage->nom = Input::get('nom');
            $equipage->sexe = Input::get('sexe');
            $equipage->save();

            // redirect
            Session::flash('message', 'Successfully updated equipage!');
            return Redirect::to('equipage');
        }
    

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
