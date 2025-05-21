<?php
function genererMotDePasse($longueur) {
    $chiffres = '0123456789';
    $lettres = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $symboles = '!@#$%^&*()-_=+';

    $tout = $chiffres. $lettres. $symboles;
    $password = '';

    $password.= $chiffres[random_int(0, strlen($chiffres) - 1)];
    $password.= $lettres[random_int(0, strlen($lettres) - 1)];
    $password.= $symboles[random_int(0, strlen($symboles) - 1)];

    for ($i = 3; $i < $longueur; $i++) {
        $password.= $tout[random_int(0, strlen($tout) - 1)];
}

    return str_shuffle($password);
}

echo "Mot de passe généré: <strong>". genererMotDePasse(12). "</strong>";
?>