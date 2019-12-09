<?php
session_start();

// Définition constantes titre pages
define ('TITLE', 'Accueil Bibliothèque'); // constante titre page Accueil
define ('TITLE1', 'Connexion'); // Constante titre page Connexion
define ('TITLE2', 'Participation'); // Constante titre page formulaire participation
define ('TITLE3', 'Connexion'); // Constante titre page formulaire connexion
define ('TITLE4', 'Compte'); // Constante titre page formulaire compte

function test_input($data){
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    $data = strip_tags($data);
    return $data;
}