<?php
$elements=array("choix 1"=>"","Choix 2"=>"checked","Choix 3"=>"");
genererCheckbox($elements);
function genererCheckbox($elements){
    foreach($elements as $cle => $checked){
        echo "<input type='checkbox' id='$cle' $checked>";
        echo "<label for='$cle'>$cle</label><br>";
    }
}