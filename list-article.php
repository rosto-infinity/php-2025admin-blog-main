<?php

require_once 'database/database.php';

$pageTitle = "Page admin list Article";

// Debut de tampon de la page de sortie
ob_start();

// Recupere la view(layout) de la page d'accueil
require_once 'resources/views/admin/articles/list-article_html.php';

// Récupérer le contenu du tampon de la page d'accueil
$pageContent = ob_get_clean();

require_once 'resources/views/layouts/admin-layout/layout_html.php';

