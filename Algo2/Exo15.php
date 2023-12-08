<?php
$email="contact@elan";
if(filter_var($email, FILTER_VALIDATE_EMAIL)){
    echo "$email est une adresse e-mail valide";
}
else{
    echo"$email est une adresse e-mail invalide";
}