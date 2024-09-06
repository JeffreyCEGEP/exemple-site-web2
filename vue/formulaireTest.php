<?php $titreOnglet = 'Test'; ?>

<?php ob_start(); ?>

<h1 class="text-center">Test</h1>
<form class="w-50 mx-auto" method="post" action="index.php?ressource=/test&methode=POST">
    <div class="form-floating mb-3">
        <input type="text" class="form-control" id="input-test" 
        name="CeQueVousVoulez" placeholder="Test">
        <label for="input-test">Test</label>
    </div>

    <button type="submit" class="btn btn-primary">Soumettre</button>
</form>

<?php $contenu = ob_get_clean(); ?>

<?php require 'vue/gabarit.php'; ?>