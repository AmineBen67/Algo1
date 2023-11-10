<?php
$texteOrigine="Mon texte en paramètre";
$texteOrigine2="Mon texte en paramètre";

function convertirMajRouge($texteAconvertir)
{
    $texteMaj = strtoupper($texteAconvertir);
    echo "texte maj = ".$texteMaj."<br>";
    echo "texte = ".$texteAconvertir;
    $textMajRouge =  "<span style='color:red'>".$texteMaj."</span>";
    echo $textMajRouge;
};
convertirMajRouge($texteOrigine2);
