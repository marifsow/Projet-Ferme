<?php
use App\Http\Controllers\AnimalController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
})->name('home');

// Liste des animaux
Route::get('/animaux', [AnimalController::class, 'index'])->name('animaux.index');

// Créer un animal
Route::get('/animaux/create', [AnimalController::class, 'create'])->name('animaux.create');
Route::post('/animaux', [AnimalController::class, 'store'])->name('animaux.store');

// Afficher un animal
Route::get('/animaux/{id}', [AnimalController::class, 'show'])->name('animaux.show');

// Modifier un animal
Route::get('/animaux/{id}/edit', [AnimalController::class, 'edit'])->name('animaux.edit');
Route::put('/animaux/{id}', [AnimalController::class, 'update'])->name('animaux.update');

// Supprimer un animal
Route::delete('/animaux/{id}', [AnimalController::class, 'destroy'])->name('animaux.destroy');

// Contact et connexion
Route::get('/contact', function () {
    return view('contact');
})->name('contact');

Route::get('/connexion', function () {
    return view('connexion');
})->name('connexion');


use App\Http\Controllers\EmployeController;

Route::resource('employes', EmployeController::class);

// Liste des employés
Route::get('/employes', [EmployeController::class, 'index'])->name('employes.index');

// Formulaire de création d'un employé
Route::get('/employes/create', [EmployeController::class, 'create'])->name('employes.create');

// Enregistrer un nouvel employé
Route::post('/employes', [EmployeController::class, 'store'])->name('employes.store');

// Afficher un employé spécifique
Route::get('/employes/{id}', [EmployeController::class, 'show'])->name('employes.show');

// Formulaire d'édition d'un employé
Route::get('/employes/{id}/edit', [EmployeController::class, 'edit'])->name('employes.edit');

// Mettre à jour les informations d'un employé
Route::put('/employes/{id}', [EmployeController::class, 'update'])->name('employes.update');

// Supprimer un employé
Route::delete('/employes/{id}', [EmployeController::class, 'destroy'])->name('employes.destroy');
