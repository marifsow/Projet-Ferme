<div class="form-group mb-3">
    <label for="nom">Nom</label>
    <input type="text" class="form-control" id="nom" name="nom"
           value="{{ old('nom', $animal->nom ?? '') }}" required>
</div>

<div class="form-group mb-3">
    <label for="espece">Espèce</label>
    <input type="text" class="form-control" id="espece" name="espece"
           value="{{ old('espece', $animal->espece ?? '') }}" required>
</div>

<div class="form-group mb-3">
    <label for="date_naissance">Date de naissance</label>
    <input type="date" class="form-control" id="date_naissance" name="date_naissance"
           value="{{ old('date_naissance', isset($animal->date_naissance) ? $animal->date_naissance->format('Y-m-d') : '') }}" required>
</div>

<div class="form-group mb-3">
    <label for="etat_sante">État de santé</label>
    <input type="text" class="form-control" id="etat_sante" name="etat_sante"
           value="{{ old('etat_sante', $animal->etat_sante ?? '') }}" required>
</div>
