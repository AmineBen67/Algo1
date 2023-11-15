<?php
$nomsRadio=array("Monsieur","Madame","Mademoiselle");
afficherRadio($nomsRadio);
function afficherRadio($nomsRadio){
    foreach ($nomsRadio as $denomination){
        echo "<input type='radio' id='$denomination' name='civilte' value='$denomination'>";
        echo "<label for='$denomination'>$denomination</label><br>";
    }

}