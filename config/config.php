<?php
session_start();

// Définition constantes titre onglets pages
define ('TITLE', 'Accueil Bibliothèque'); // constante titre page Accueil
define ('TITLE1', 'Afficher tous les livres'); // Constante titre onglet page affichage tous les livres
define ('TITLE2', 'Afficher dix livres'); // Constante titre onglet page affichage 10 livres
define ('TITLE3', 'Afficher un livre'); // Constante titre onglet page affichage 1 livre
define ('TITLE4', 'Ajouter un livre'); // Constante titre onglet page affichage 1 livre
define ('TITLE5', 'Modifier un livre'); // Constante titre onglet page modification données livres
define ('TITLE6', 'Supprimer un livre'); // Constante titre onglet page suppression de livre

// Définition constantes titre onglets pages
define ('HEADING', 'Bienvenue sur la page d\'accueil de ma bibliothèque'); // constante titre page Accueil
define ('HEADING1', 'Afficher tous les livres'); // Constante titre onglet page affichage tous les livres
define ('HEADING2', 'Afficher dix livres'); // Constante titre onglet page affichage 10 livres
define ('HEADING3', 'Afficher un livre'); // Constante titre onglet page affichage 1 livre
define ('HEADING4', 'Ajouter un livre'); // Constante titre onglet page affichage 1 livre
define ('HEADING5', 'Modifier un livre'); // Constante titre onglet page modification données livres
define ('HEADING6', 'Supprimer un livre'); // Constante titre onglet page suppression de livre

function test_input($data){
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    $data = strip_tags($data);
    return $data;
}