<?php
$nomsInput=array("NOM","Prénom","Ville");
afficherInput($nomsInput);
function afficherInput($nomsInput) {
    foreach($nomsInput as $formulaire){
        echo "<label for='$formulaire'>$formulaire</label><br>";
        echo "<input type='text' id=$formulaire><br>";
    }
}
