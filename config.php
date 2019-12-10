<?php
session_start();

// Définition constantes titre pages
define ('TITLE', 'Accueil Bibliothèque'); // constante titre page Accueil
define ('TITLE1', 'Connexion'); // Constante titre onglet page Connexion
define ('TITLE2', 'Participation'); // Constante titre onglet page formulaire participation
define ('TITLE3', 'Modification Livre'); // Constante titre onglet page modification données livres
define ('TITLE4', 'Suppression Livre'); // Constante titre onglet page suppression de livres

function test_input($data){
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    $data = strip_tags($data);
    return $data;
}