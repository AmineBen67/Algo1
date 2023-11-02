<?php
$prixArtHT=9.99;
$tva=0.2;
$prixArtTTC=$prixArtHT+($prixArtHT*$tva);
$qté=5;
$totalht=$prixArtHT*$qté;
$totalTTC=$prixArtTTC*$qté;
echo 'Prix unitaire de l\'article:'.$prixArtHT.'€';
echo '<br>';
echo 'Quantité:'.$qté.'';
echo '<br>';
echo 'Taux de TVA:'.$tva.'';
echo '<br>';
echo 'le montant de la facture à régler est de:'.$totalTTC.'€';
?>