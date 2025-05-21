<?php
session_start();

// Identifiants prédéfinis
$utilisateur = "admin";
$motDePasse = "1234";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if ($_POST["username"] == $utilisateur && $_POST["password"] == $motDePasse) {
        $_SESSION["loggedin"] = true;
        $_SESSION["username"] = $utilisateur;
        header("Location: bienvenue.php");
        exit();
} else {
        $messageErreur = "Identifiants incorrects";
}
}
?>
   <?php
     if (isset($messageErreur)) 
     echo "<p>$messageErreur</p>";
     ?>
     <?php
session_start();
if (!isset($_SESSION["loggedin"])) {
    header("Location: index.php");
    exit();
}
?>