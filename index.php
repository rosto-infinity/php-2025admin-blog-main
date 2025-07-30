<?php
session_start();
require_once 'database/database.php';


$sql = "SELECT * FROM articles ORDER BY created_at DESC";
$articles = $pdo->query($sql)->fetchAll(PDO::FETCH_ASSOC);


$pageTitle = "Page d'accueil";

// Debut de tampon de la page de sortie
ob_start();

// Recupere la view(layout) de la page d'accueil
require_once 'resources/views/blog/index_html.php';

// Récupérer le contenu du tampon de la page d'accueil
$pageContent = ob_get_clean();

require_once 'resources/views/layouts/blog-layout/blog-layout_html.php';
