<?php
session_start();

// Définition constantes titre onglets pages
define ('TITLE', 'Accueil Bibliothèque'); // constante titre page Accueil
define ('TITLE1', 'Afficher tous les livres'); // Constante titre onglet page affichage tous les livres
define ('TITLE2', 'Afficher dix livres'); // Constante titre onglet page affichage 10 livres
define ('TITLE3', 'Afficherun livre'); // Constante titre onglet page affichage 1 livre
define ('TITLE4', 'Ajouter un livre'); // Constante titre onglet page affichage 1 livre
define ('TITLE5', 'Modifier un livre'); // Constante titre onglet page modification données livres
define ('TITLE6', 'Supprimer un livre'); // Constante titre onglet page suppression de livre
define ('TITLE7', 'Afficher tous les utilisateurs'); // Constante titre onglet page affichage tous les utilisateurs
define ('TITLE8', 'Afficher dix utilisateurs'); // Constante titre onglet page affichage 10 utilisateurs
define ('TITLE9', 'Afficher un utilisateur'); // Constante titre onglet page affichage 1 utilisateur
define ('TITLE10', 'Ajouter un utilisateur'); // Constante titre onglet page affichage 1 utilisateur
define ('TITLE11', 'Modifier un utilisateur'); // Constante titre onglet page modification données utilisateurs
define ('TITLE12', 'Supprimer un utilisateur'); // Constante titre onglet page suppression utilisateur

// Définition constantes titre headers pages
define ('HEADING', 'Bienvenue sur la page d\'accueil de ma bibliothèque'); // constante titre page Accueil
define ('HEADING1', 'Affichage de tous les livres'); // Constante titre onglet page affichage tous les livres
define ('HEADING2', 'Affichage de dix livres'); // Constante titre onglet page affichage 10 livres
define ('HEADING3', 'Affichage d\'un livre'); // Constante titre onglet page affichage 1 livre
define ('HEADING4', 'Ajouter un livre'); // Constante titre onglet page affichage 1 livre
define ('HEADING5', 'Modifier un livre'); // Constante titre onglet page modification données livres
define ('HEADING6', 'Supprimer un livre'); // Constante titre onglet page suppression de livre
define ('HEADING7', 'Affichage de tous les utilisateurs'); // Constante titre onglet page affichage tous les utilisateurs
define ('HEADING8', 'Affichage de dix utilisateurs'); // Constante titre onglet page affichage 10 utilisateurs
define ('HEADING9', 'Affichage d\'un utilisateur'); // Constante titre onglet page affichage 1 utilisateur
define ('HEADING10', 'Ajouter un utilisateur'); // Constante titre onglet page affichage 1 utilisateur
define ('HEADING11', 'Modifier un utilisateur'); // Constante titre onglet page modification données utilisateurs
define ('HEADING12', 'Supprimer un utilisateur'); // Constante titre onglet page suppression utilisateur

function test_input($data){
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    $data = strip_tags($data);
    return $data;
}