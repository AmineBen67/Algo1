<?php
$tableauValeurs=array(true,"texte",10,25,369,array("valeur1","valeur2"));

var_dump_pre($tableauValeurs);

function var_dump_pre($tableauValeurs = null) {
  foreach($tableauValeurs as $elements){
    echo '<pre>';
    var_dump($elements);
    echo '</pre>';
  }
  }