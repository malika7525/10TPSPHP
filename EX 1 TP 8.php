<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nb1 = $_POST['nb1'];
    $nb2 = $_POST['nb2'];
    $operation = $_POST['operation'];

    switch ($operation) {
        case "addition":
            $resultat = $nb1 + $nb2;
            break;
        case "soustraction":
            $resultat = $nb1 - $nb2;
            break;
        case "multiplication":
            $resultat = $nb1 * $nb2;
            break;
        case "division":
            $resultat = ($nb2!= 0)? $nb1 / $nb2: "Erreur: Division par zéro!";
            break;
        default:
            $resultat = "Opération invalide!";
}

    echo "Résultat: $resultat";
}
?>