<?php
$MontantF=100;
$Montant€=($MontantF/6.56);
echo 'Montant en Francs : '.$MontantF.'';
echo '<br>';
echo $MontantF.' francs='.round($Montant€,2,PHP_ROUND_HALF_EVEN) ;
?>