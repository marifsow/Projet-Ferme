<?php

namespace App\Http\Controllers;

use App\Models\SuiviSanitaire;
use App\Models\Animal;
use Illuminate\Http\Request;

class SuiviSanitaireController extends Controller
{
    public function index()
    {
        $suivis = SuiviSanitaire::with('animal')->get();
        return view('suivis.index', compact('suivis'));
    }

    public function create()
    {
        $animaux = Animal::all();
        return view('suivis.create', compact('animaux'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'animaux_id' => 'required|exists:animaux,id',
            'date' => 'required|date',
            'type' => 'required|string|max:255',
            'description' => 'nullable|string',
        ]);

        SuiviSanitaire::create($request->all());

        return redirect()->route('suivis.index')->with('success', 'Suivi sanitaire ajouté avec succès.');
    }

    public function show($id)
    {
        $suivi = SuiviSanitaire::with('animal')->findOrFail($id);
        return view('suivis.show', compact('suivi'));
    }

    public function edit($id)
    {
        $suivi = SuiviSanitaire::findOrFail($id);
        $animaux = Animal::all();
        return view('suivis.edit', compact('suivi', 'animaux'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'animaux_id' => 'required|exists:animaux,id',
            'date' => 'required|date',
            'type' => 'required|string|max:255',
            'description' => 'nullable|string',
        ]);

        $suivi = SuiviSanitaire::findOrFail($id);
        $suivi->update($request->all());

        return redirect()->route('suivis.index')->with('success', 'Suivi sanitaire mis à jour.');
    }

    public function destroy($id)
    {
        $suivi = SuiviSanitaire::findOrFail($id);
        $suivi->delete();

        return redirect()->route('suivis.index')->with('success', 'Suivi sanitaire supprimé.');
    }
}
