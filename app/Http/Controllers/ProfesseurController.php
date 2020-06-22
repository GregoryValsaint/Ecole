<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Professeur;

class ProfesseurController extends Controller
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
        //$listeProfesseur = Professeur::all();
        
        $professeurs = Professeur::query()->paginate(15);
        //dd($professeurs);
        return View('professeur.index', compact('professeurs'));
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return View('professeur.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $professeur = Professeur::create($request->all(),[
            'nom'=>'required',
            'prenom'=>'required',
            'telephone'=>'required',
            'email'=>'required',
            'specialite_id'=>'required']);

       
        return redirect('/professeur')->with('success', 'Professeur enregistré');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $professeur = Professeur::find($id);
        return view('professeur.show', compact('professeur'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $professeur = Professeur::find($id);
        return view('professeur.edit', compact('professeur'));
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
            'nom'=>'required',
            'prenom'=>'required',
            'telephone'=>'required',
            'email'=>'required']);

        $professeur = new Professeur([
            'nom'=>$request->get('nom'),
            'prenom'=>$request->get('prenom'),
            'telephone'=>$request->get('telephone'),
            'email'=>$request->get('email')
        ]);

        $professeur->save();
        return redirect('/professeur')->with('success', 'Professeur modifié');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $professeur = Professeur::find($id);
        $professeur->delete();

        return redirect('/professeur')->with('success', 'Professeur supprimé');
    }
}
