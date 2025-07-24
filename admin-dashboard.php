<?php
session_start();
require_once 'database/database.php';

// Verifiez les permissions d'accès a la page
if($_SESSION['role'] !== 'admin') {
    header('Location: index.php');
    exit();
}


$pageTitle = 'Page  d\'accueil canada';

// Début du tampon de la page de sortie
ob_start();

// Inclure le layout de la page d'accueil
require_once 'resources/views/admin/admin-dashboard_html.php';

// Récupération du contenu du tampon de la page d'accueil
$pageContent = ob_get_clean();

// Inclure le layout de la page de sortie
require_once 'resources/views/layouts/admin-layout/layout_html.php';
