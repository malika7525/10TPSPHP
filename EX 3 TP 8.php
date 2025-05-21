
<?php
if (!empty( $_POST['nom']) && !empty( $_POST['email'])        !empty($_POSTT['message'])) {
  echo "Nom: " .  $_POST['nom'] . "<br>";
  echo "Email: " . $_POST['email'] . "<br>";
  echo "Message: " . $_POST['message'];
} else {
  echo "Veuillez remplir tous les champs.";
}
?>
```
