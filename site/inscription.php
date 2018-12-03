<?php
$nom = $_POST["nom"];
$prenom = $_POST["prenom"];
$date = $_POST["datepicker"];
$cp = $_POST["cp"];
$ville = $_POST["ville"];
$mail = $_POST["email"];
$mdp = $_POST["mdp"];
$mdp2 = $_POST["mdp2"];

echo "<h1>Formulaire bien envoyé, voici vos données :</h1>";
echo "<p>Votre nom : ".$nom."</p>";
echo "<p>Votre prenom : ".$prenom."</p>";
echo "<p>Votre date de naissance : ".$date."</p>";
echo "<p>Votre code postal : ".$cp."</p>";
echo "<p>Votre ville : ".$ville."</p>";
echo "<p>Votre e-mail : ".$email."</p>";
echo "<p>Votre MDP : ".$mdp."</p>";
echo "<p>Votre confirmation de MDP : ".$mdp2."</p>";
?>