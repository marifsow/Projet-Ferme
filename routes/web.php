<?php
use App\Http\Controllers\AnimalController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\SuiviSanitaireController;

use App\Http\Controllers\EmployeController;
Route::get('/', function () {
    return view('home');
});
    Route::get('/home', [AnimalController::class, 'home'])->name('home');
    Route::get('/contact', [AnimalController::class, 'contact'])->name('contact');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';




// Liste des routes pour les animaux

// Affiche la liste des animaux
Route::get('/animaux', [AnimalController::class, 'index'])->name('animaux.index');

// Affiche le formulaire de création d’un animal
Route::get('/animaux/create', [AnimalController::class, 'create'])->name('animaux.create');

// Enregistre un nouvel animal
Route::post('/animaux', [AnimalController::class, 'store'])->name('animaux.store');

// Affiche les détails d’un animal
Route::get('/animaux/{id}', [AnimalController::class, 'show'])->name('animaux.show');

// Affiche le formulaire d’édition d’un animal
Route::get('/animaux/{id}/edit', [AnimalController::class, 'edit'])->name('animaux.edit');

// Met à jour les informations d’un animal
Route::put('/animaux/{id}', [AnimalController::class, 'update'])->name('animaux.update');

// Supprime un animal
Route::delete('/animaux/{id}', [AnimalController::class, 'destroy'])->name('animaux.destroy');

Route::get('/contact', function () {
    return view('contact');
})->name('contact');






Route::get('/employes', [EmployeController::class, 'index'])->name('employes.index');
Route::get('/employes/create', [EmployeController::class, 'create'])->name('employes.create');
Route::post('/employes', [EmployeController::class, 'store'])->name('employes.store');
Route::get('/employes/{id}', [EmployeController::class, 'show'])->name('employes.show');
Route::get('/employes/{id}/edit', [EmployeController::class, 'edit'])->name('employes.edit');
Route::put('/employes/{id}', [EmployeController::class, 'update'])->name('employes.update');
Route::delete('/employes/{id}', [EmployeController::class, 'destroy'])->name('employes.destroy');

// // ✅ Route pour confirmation avant suppression
// Route::get('/employes/{id}/delete', [EmployeController::class, 'confirmDelete'])->name('employes.confirmDelete');





Route::get('/suivis', [SuiviSanitaireController::class, 'index'])->name('suivis.index');
Route::get('/suivis/create', [SuiviSanitaireController::class, 'create'])->name('suivis.create');
Route::post('/suivis', [SuiviSanitaireController::class, 'store'])->name('suivis.store');
Route::get('/suivis/{id}', [SuiviSanitaireController::class, 'show'])->name('suivis.show');
Route::get('/suivis/{id}/edit', [SuiviSanitaireController::class, 'edit'])->name('suivis.edit');
Route::put('/suivis/{id}', [SuiviSanitaireController::class, 'update'])->name('suivis.update');
Route::delete('/suivis/{id}', [SuiviSanitaireController::class, 'destroy'])->name('suivis.destroy');

// ✅ Route pour confirmation avant suppression
Route::get('/suivis/{id}/delete', [SuiviSanitaireController::class, 'confirmDelete'])->name('suivis.confirmDelete');



use App\Http\Controllers\SuivisSanitaireController;


// ✅ Dashboard (page principale, accessible uniquement si authentifié)
Route::middleware(['auth', 'verified'])->group(function () {

    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');

    // ✅ CRUD Animaux
    Route::resource('animaux', AnimalController::class);

    // ✅ CRUD Employés
    Route::resource('employes', EmployeController::class);

    // ✅ CRUD Suivis Sanitaires
    Route::resource('suivis', SuiviSanitaireController::class);

    // ✅ Profil utilisateur (Laravel Breeze / Jetstream)
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});







Route::get('/animaux-public', [AnimalController::class, 'publicIndex'])->name('animaux.public');


