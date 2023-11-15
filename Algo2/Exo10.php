<?php

$nomsInput=array("NOM","Prénom","email","Ville");
$postes=array("Développeur Logiciel","Designer Web","Intégrateur","Chef de projet");
$sexe=array("Homme","Femme");

afficherFormulaire($nomsInput, $sexe, $postes);

function afficherInput($nomsInput) {
    foreach($nomsInput as $formulaire){
        echo "<label for='$formulaire'>$formulaire</label><br>";
        echo "<input type='text' id=$formulaire><br>";
    }
}

function afficherMetiers($postes){
    echo "<select>";
    foreach($postes as $cle){
        echo"<option> $cle </option>";     
    }
        echo "</select>";
}

function afficherGenre($sexe){
    foreach($sexe as $genre){
        echo "<input type='radio' id='$genre' name='civilte' value='$genre'>";
        echo "<label for='$genre'>$genre</label><br>";
    }
}

function afficherFormulaire($nomsInput, $sexe, $postes) {
    afficherInput($nomsInput);
    echo "<br>";
    afficherGenre($sexe);
    echo "<br>";
    afficherMetiers($postes);
    echo "<input type='submit' value='Valider'>";
}
