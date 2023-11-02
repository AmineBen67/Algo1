<?php
$age=10;
if($age==6 || $age==7) {
    echo 'l\'enfant qui a '.$age.'ans appartient à la catégorie poussin';
}
elseif($age==8||$age==9){
    echo 'l\'enfant qui a '.$age.'ans appartient à la catégorie pupille';
}
elseif($age==10||$age==11){
        echo 'l\'enfant qui a '.$age.'ans appartient à la catégorie minime';
}
elseif($age>12&&$age<=18){
    echo 'l\'enfant qui a '.$age.'ans appartient à la catégorie cadet';
}
elseif($age<6||$age>18){
echo 'l\'enfant est hors catégorie';
}
else{echo 'l\'enfant est hors catégorie';
}

?>