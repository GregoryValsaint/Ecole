<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Specialite;

class SpecialiteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        //1. Sélectionner les clients
        //$listeSpecialite = Specialite::all();
        $specialites = Specialite::query()->paginate(15);
        return View('specialite.index', compact('specialites'));
        //dd($listeSpecialite);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return View('specialite.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
        $specialite = Specialite::create($request->all(), 
            ['code'=>'required',
            'libelle'=>'required'
        ]);

        return redirect('/specialite')->with('success', 'Spécialité enregistré');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $specialite = Specialite::find($id);
        return View('specialite.show', compact('specialites'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $specialite = Specialite::find($id);
        return View('specialite.edit', compact('specialites'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'code'=>'required',
            'libelle'=>'required']);

        $specialite = new Specialite([
            'code'=>$request->get('code'),
            'libelle'=>$request->get('libelle')
        ]);

        $professeur->save();
        return redirect('/specialite')->with('success', 'Spécialité enregistré');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $specialite = Specialite::find($id);
        $specialite->delete();

        return redirect('/specialite')->with('success', 'Spécialité supprimé');
    }
}
