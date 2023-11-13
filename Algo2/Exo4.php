<?php
$capitales=array("France"=>"Paris","Allemagne"=>"Berlin","USA"=>"Washington","Italie"=>"Rome","Espagne"=>"Madrid");

affichierTableauHTML($capitales);

function affichierTableauHTML($tableauAAfficher){
    $lien="https://fr.wikipedia.org/wiki/";
    asort($tableauAAfficher) ;
    echo"<table>";
    echo "<tr>
            <th>Pays</th>
            <th>Capitales</th>
            <th>Lien Wiki</th>
        </tr>";
    foreach ($tableauAAfficher as $pays=>$ville){
        echo "<tr>";
            echo"<td>$pays</td>";
            echo"<td>$ville</td>";
            echo"<td><a target='blank' href='$lien$ville'>Lien wiki</a></td>";
        echo "</tr>";   
    }      
    echo "</table>";   
}