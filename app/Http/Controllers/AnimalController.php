<?php

namespace App\Http\Controllers;

use App\Models\Animal;
use Illuminate\Http\Request;

class AnimalController extends Controller
{
    // Afficher la liste des animaux
    public function index()
    {
        $animaux = Animal::all(); // Récupère tous les animaux
        return view('animaux.index', compact('animaux'));
    }

    // Afficher le formulaire de création d'un animal
    public function create()
    {
        return view('animaux.create');
    }

    // Enregistrer un nouvel animal
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'nom' => 'required|max:255',
            'espece' => 'required|max:255',
            'date_naissance' => 'required|date',
            'etat_sante' => 'required|max:255',
        ]);

        Animal::create($validatedData);

        return redirect()->route('animaux.index')->with('success', 'L\'animal a été ajouté avec succès.');
    }

    // Afficher les détails d'un animal
    public function show($id)
    {
        $animal = Animal::findOrFail($id);
        return view('animaux.show', compact('animal'));
    }

    // Formulaire d'édition d'un animal
    public function edit($id)
    {
        $animal = Animal::findOrFail($id);
        return view('animaux.edit', compact('animal'));
    }

    // Mettre à jour les informations d'un animal
    public function update(Request $request, $id)
    {
        $validatedData = $request->validate([
            'nom' => 'required|max:255',
            'espece' => 'required|max:255',
            'date_naissance' => 'required|date',
            'etat_sante' => 'required|max:255',
        ]);

        $animal = Animal::findOrFail($id);
        $animal->update($validatedData);

        return redirect()->route('animaux.index')->with('success', 'L\'animal a été mis à jour avec succès.');
    }

    // Supprimer un animal
    public function destroy($id)
    {
        $animal = Animal::findOrFail($id);
        $animal->delete();

        return redirect()->route('animaux.index')->with('success', 'L\'animal a été supprimé.');
    }
}
