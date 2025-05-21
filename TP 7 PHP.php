<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nom = htmlspecialchars($_POST["nom"]);
    $email = htmlspecialchars($_POST["email"]);
    $message = htmlspecialchars($_POST["message"]);

    echo "<h2>Informations soumises:</h2>";
    echo "Nom: ". $nom. "<br>";
    echo "Email: ". $email. "<br>";
    echo "Message: ". $message. "<br>";
} else {
    echo "Aucune donnée reçue.";
}
?>