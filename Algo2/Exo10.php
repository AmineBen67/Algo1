<?php

$nomsInput=array("NOM","Prénom","email","Ville","sexe");
$postes=array("Développeur Logiciel"=>"","Designer Web"=>"","Intégrateur"=>"","Chef de projet"=>"");
$sexe=array("Homme","Femme");

afficherFormulaire($nomsInput, $postes);

function afficherInput($nomsInput) {
    foreach($nomsInput as $formulaire){
        echo "<label for='$formulaire'>$formulaire</label><br>";
        echo "<input type='text' id=$formulaire><br>";
    }
}

function afficherRadio($postes){
    foreach($postes as $cle => $checked){
        echo "<input type='radio' id='$cle' name='postes'>";
        echo "<label for='$cle'>$cle</label><br>";
    }
}

function afficherFormulaire($nomsInput, $postes) {
    afficherInput($nomsInput);
    echo "<br>";
    afficherRadio($postes);
    echo "<input type='submit' value='Valider'>";
}
