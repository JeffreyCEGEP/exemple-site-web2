<?php

function afficherFormulaireTest()
{
    require_once "vue/formulaireTest.php";
}

function ajouterTest()
{
    if (!isset($_POST["CeQueVousVoulez"]) || //!isset = n'a pas reçu de valeur. La valeur n'est pas set!
    strlen($_POST["CeQueVousVoulez"] < 5))  //strlen. La réponse doit être plus longue que 5 caractères
    {
        header("Location: index.php?ressource=/test");
        return;
    }

    echo "Ajout avec succès!";
}

?>
