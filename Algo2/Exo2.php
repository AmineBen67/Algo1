<?php
$capitales=["France"=>"Paris","Allemagne"=>"Berlin","USA"=>"Washington","Italie"=>"Rome"];
function afficherTableHTML($tableauAAfficher){
    ksort($tableauAAfficher);
    echo"<table>";
    echo"<tr>
            <th>Pays</th>
            <th>Capitale</th>
        </tr>";
    foreach($tableauAAfficher as $pays=>$villes){
        echo"<tr>";
            echo"<td>$pays</td>";
            echo"<td>$villes</td>";
        echo"</tr>";    


        // echo"<table>
        //         <tr>
        //             <td>$pays</td>
        //             <td>$villes</td>
        //         </tr>
        //     </table>"; autre forme d'écriture
    }    
    echo"</table>";
}
afficherTableHTML($capitales);