<?php
$montantaPayer=152;
$montantVerse=200;
$monnaie=($montantVerse-$montantaPayer);
$billet10=0;
$billet5=0;
$piece2=0;
$piece1=0;
echo "Montant à payer : $montantaPayer €";
echo "<br>";
echo"Montant versé : $montantVerse €";
echo "<br>";
echo "Reste à payer : $monnaie €";
echo "<br>";
echo "<br>";
while($monnaie>=1){

    if ($monnaie>=10){
        $monnaie=$monnaie-10;
        $billet10=$billet10+1;
    }
    elseif ($monnaie>=5){
        $monnaie=$monnaie-5;
        $billet5=$billet5+1;
    }

    elseif ($monnaie>=2){
        // $monnaie = $monnaie -2;
        $monnaie -= 2;
        // $piece2 = $piece2 +1
        $piece2++;
    }

    else{
    $monnaie--;
    $piece1++;
    }
}

echo "Rendue de monnaie :";
echo "<br>";
echo "il y a ". $billet10 ." billets de 10 rendus<br>";
echo "il y a ". $billet5 ." billets de 5 rendus<br>";
echo "il y a ". $piece2 ." pièces de 2 rendus<br>";
echo "il y a ". $piece1 ." pièces de 1 rendus";