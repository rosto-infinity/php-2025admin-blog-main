<?php
session_start();
require_once 'database/database.php';

// Détruire la session pour déconnecter l'utilisateur
session_unset();
session_destroy(); // Détruire toutes les données de session

header('Location: index.php'); // Rediriger vers la page de connexion