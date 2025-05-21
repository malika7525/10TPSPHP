<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form  method ="POST" action="reponse.php">

        nom:<input type="text" name="nom"><br>
        email:<input type="email" name="email"><br>
        message:<input type="text" name="msg"><br>
        <button type="submit"> Envoyer</button><br>
    </form>
</body>
</html>
<?php
$nom=$_POST['nom'];
$email=$_POST['email'];
$message=$_POST['msg'];
echo 
?>
<?php 
$host="localhost";
$user="root";
$dbname="test";
$pass="";


$conn=mysqli_connect($host,$user,$dbname,$pass );
$nom=$_POST['nom'];
$email=$_POST['email'];
$message=$_POST['msg'];
$sql="INSERT INTO contacts "(nom,email,message) VALUES('$nom','$email','$message')";


if(mysqli_query($conn,$sql)){
echo "merci $nom($email)!vos donnesont ete enregistrees.";
}
else
{
echo"Erreur lors de l'insertion:".mysqli_erreur($conn);
}
?>
