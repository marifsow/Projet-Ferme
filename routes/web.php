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
