<?php
$prenoms=array("Mickaël"=>"FRA","Virgile"=>"ESP","Marie-Claire"=>"ENG");
foreach($prenoms as $prenom =>$langue){
    echo"<ul>";
    echo"<li>$langue </li>";
    echo"</ul>";
    switch($langue){
        case "FRA":
            echo "Bonjour";
            echo "<br>";
            break;
        case "ESP":
            echo "Hola";
            echo "<br>";
            break;
        case "ENG":
            echo "Hello";
            echo "<br>";
            break;
    }
}

