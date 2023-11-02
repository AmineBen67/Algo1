<h1>Exercice 10</h1>

<?php
$sexe = "F";
$age = 32;
echo " Age : $age <br>";
echo "Sexe : $sexe <br>";
if($sexe="H" and $age>20){
    echo "La personne est imposable";
}elseif ($sexe="F" && ($age>=18 && $age<=35)){
    echo "La personne est imposable";
}else{
    echo "non imposable";
}
