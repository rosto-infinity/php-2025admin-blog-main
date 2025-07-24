<?php
session_start();

require_once 'database/database.php';

// Verifiez les permissions d'accès a la page
if($_SESSION['role'] !== 'admin') {
    header('Location: index.php');
    exit();
}

function clean_input($data) {
    return htmlspecialchars(stripslashes(trim($data)));
}


if(isset($_POST['add-article'])) {

    // echo "Form submitted";
    // die();

    $title = clean_input($_POST['title']);
    $slug = $title;
    $introduction = clean_input($_POST['introduction']);
    $content = clean_input($_POST['content']);

    // Gestion de l'image

    //validation des champs
    if(empty($title) || empty($introduction) || empty($content)) {
        $error = "Tous les champs sont obligatoires.";
    }else{

        //Verification de l'unicité du slug

        //Insertion de l'article dans la base de données
        $query = $pdo->prepare("INSERT INTO articles (title, slug, introduction, content, created_at) VALUES (:title, :slug, :introduction, :content,  NOW())");

        $query->execute([
            'title' => $title,
            'slug' => $slug,
            'introduction' => $introduction,
            'content' => $content
        ]);


    }
}




$pageTitle = 'Page  Add article';

// Début du tampon de la page de sortie
ob_start();

// Inclure le layout de la page d'accueil
require_once 'resources/views/admin/articles/add-article_html.php';

// Récupération du contenu du tampon de la page d'accueil
$pageContent = ob_get_clean();

// Inclure le layout de la page de sortie
require_once 'resources/views/layouts/admin-layout/layout_html.php';

