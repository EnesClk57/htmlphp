<?php
$prenom = htmlspecialchars($_POST['txtPnom']);
$nom = htmlspecialchars($_POST['txtNom']);
$diplome = htmlspecialchars($_POST['txtDiplome ']);
echo $prenom.' '.$nom.' : '.$diplome."\n";
?>