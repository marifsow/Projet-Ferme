<?php
// app/Http/Controllers/EmployeController.php

namespace App\Http\Controllers;

use App\Models\Employe;
use Illuminate\Http\Request;

class EmployeController extends Controller
{
    // Afficher la liste des employés
    public function index()
    {
        $employes = Employe::all();
        return view('employes.index', compact('employes'));
    }

    // Afficher le formulaire de création d'un employé
    public function create()
    {
        return view('employes.create');
    }

    // Enregistrer un nouvel employé
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'nom' => 'required|max:255',
            'prenom' => 'required|max:255',
            'role' => 'required|max:255',
            'date_embauche' => 'required|date',
        ]);

        Employe::create($validatedData);

        return redirect()->route('employes.index')->with('success', 'L\'employé a été ajouté avec succès.');
    }

    // Afficher les détails d'un employé
    public function show($id)
    {
        $employe = Employe::findOrFail($id);
        return view('employes.show', compact('employe'));
    }

    // Formulaire d'édition d'un employé
    public function edit($id)
    {
        $employe = Employe::findOrFail($id);
        return view('employes.edit', compact('employe'));
    }

    // Mettre à jour les informations d'un employé
    public function update(Request $request, $id)
    {
        $validatedData = $request->validate([
            'nom' => 'required|max:255',
            'prenom' => 'required|max:255',
            'role' => 'required|max:255',
            'date_embauche' => 'required|date',
        ]);

        $employe = Employe::findOrFail($id);
        $employe->update($validatedData);

        return redirect()->route('employes.index')->with('success', 'L\'employé a été mis à jour avec succès.');
    }

    // Supprimer un employé
    public function destroy($id)
    {
        $employe = Employe::findOrFail($id);
        $employe->delete();

        return redirect()->route('employes.index')->with('success', 'L\'employé a été supprimé.');
    }
}
