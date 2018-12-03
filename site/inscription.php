<?php
$nom = $_POST["nom"];
$prenom = $_POST["prenom"];
$date = $_POST["datepicker"];
$cp = $_POST["cp"];
$ville = $_POST["ville"];
$email = $_POST["email"];
$mdp = $_POST["mdp"];
$mdp2 = $_POST["mdp2"];

echo "<h2>Formulaire bien envoyé, voici vos données :</h2>";
echo "<p>Votre nom : <b>".$nom."</b></p>";
echo "<p>Votre prenom : <b>".$prenom."</b></p>";
echo "<p>Votre date de naissance : <b>".$date."</b></p>";
echo "<p>Votre code postal : <b>".$cp."</b></p>";
echo "<p>Votre ville : <b>".$ville."</b></p>";
echo "<p>Votre e-mail : <b>".$email."</b></p>";
echo "<p>Votre MDP : <b>".$mdp."</b></p>";
echo "<p>Votre confirmation de MDP : <b>".$mdp2."</b></p>";
?>