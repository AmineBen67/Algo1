<?php
$tableauValeurs=array(true,"texte",10,25,369,array("valeur1","valeur2"));
function var_dump_pre($tableauValeurs = null) {
    echo '<pre>';
    var_dump($tableauValeurs);
    echo '</pre>';
    return null;
  }