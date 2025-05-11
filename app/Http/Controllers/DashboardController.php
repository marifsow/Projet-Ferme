<?php

namespace App\Http\Controllers;

use App\Models\Animal;
use App\Models\Employe;
use App\Models\SuiviSanitaire;

class DashboardController extends Controller
{
    public function index()
    {
        return view('dashboard', [
            'animaux' => Animal::all(),
            'employes' => Employe::all(),
            'suivis' => SuiviSanitaire::all(),
        ]);
    }
}
